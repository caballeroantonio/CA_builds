<?php
/**
 * @version 		$Id:$
 * @name			TSJ CDMX Libros TxCA
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_jtca
 * @subpackage		com_jtca.site
 * @copyright		Copyright (c) 2017 - 2020. All Rights Reserved
 * @license			GNU General Public License version 3 or later; See http://www.gnu.org/copyleft/gpl.html 
 * 
 * The following Component Architect header section must remain in any distribution of this file
 *
 * @CAversion		Id: default.php 604 2016-01-14 13:05:26Z BrianWade $
 * @CAauthor		Component Architect (www.componentarchitect.com)
 * @CApackage		architectcomp
 * @CAsubpackage	architectcomp.site
 * @CAtemplate		joomla_3_4_standard (Release 1.0.1)
 * @CAcopyright		Copyright (c)2013 - 2016  Simply Open Source Ltd. (trading as Component Architect). All Rights Reserved
 * @Joomlacopyright Copyright (c)2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @CAlicense		GNU General Public License version 3 or later; See http://www.gnu.org/copyleft/gpl.html
 * 
 * This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
 */

defined('_JEXEC') or die;

/*
 *	Add style sheets, javascript and behaviours here in the layout so they can be overridden, if required, in a template override 
 */

// Add css files for the jtca component and categories if they exist
$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_jtca.css');
$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_lejemplos.css');

if ($lang->isRTL())
{
	$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_jtca-rtl.css');
	$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_lejemplos-rtl.css');
}

// Add Javscript functions for field display
JHtml::_('bootstrap.tooltip');
JHtml::_('behavior.multiselect');
JHtml::_('dropdown.init');
JHtml::_('formbehavior.chosen', 'select');	

/*
 *	Initialise values for the layout 
 */	
 
// Create some shortcuts.
$user		= JFactory::getUser();
$n			= count($this->items);
$list_order	= $this->state->get('list.ordering');
$list_dirn	= $this->state->get('list.direction');

$layout		= $this->params->get('lejemplo_layout', 'default');

$can_create	= $user->authorise('core.create', 'com_jtca');
// Get from global settings the text to use for an empty field
$component = JComponentHelper::getComponent( 'com_jtca' );
$empty = $component->params->get('default_empty_field', '');

/*
 *	Layout HTML
 */
?>
<noscript>
<p style="color: red;"><?php echo JText::_('COM_JTCA_WARNING_NOSCRIPT'); ?><p>
</noscript>
<div class="jtca lejemplos-list<?php echo $this->params->get('pageclass_sfx');?>">
	<?php if ($this->params->get('show_page_heading')): ?>
		<div class="page-header">
			<h1><?php echo $this->escape($this->params->get('page_heading')); ?></h1>
		</div>
	<?php endif; ?>

	<?php
		$show_actions = false;
		if ($this->params->get('show_lejemplo_icons',1) >= 0) :
			foreach ($this->items as $i => $item) :
				if ($item->params->get('access-edit',1) OR $item->params->get('access-delete',1)) :
					$show_actions = true;
					continue;
				endif;
			endforeach;
		endif;
	?>
	<form action="<?php echo htmlspecialchars(JUri::getInstance()->toString()); ?>" method="post" name="adminForm" id="adminForm">
		<?php if (($this->params->get('show_lejemplo_filter_field') != '' AND $this->params->get('show_lejemplo_filter_field') != 'hide')) :?>
			<div class="filter-search">
				<?php if ($this->params->get('show_lejemplo_filter_field') != '' AND $this->params->get('show_lejemplo_filter_field') != 'hide') :?>
					<input type="text" name="filter_search" id="filter_search" value="<?php echo $this->escape($this->state->get('filter.search')); ?>" onchange="document.adminForm.submit();" title="<?php echo JText::_('COM_JTCA_FILTER_SEARCH_DESC'); ?>" placeholder="<?php echo JText::_('COM_JTCA_'.$this->params->get('show_lejemplo_filter_field').'_FILTER_LABEL'); ?>" />
				<?php endif; ?>	
			</div>
		<?php endif; ?>

		<?php if ($this->params->get('show_lejemplo_pagination_limit')) : ?>
			<div class="display-limit">
				<?php echo JText::_('JGLOBAL_DISPLAY_NUM'); ?>&#160;
				<?php echo $this->pagination->getLimitBox(); ?>
			</div>
		<?php endif; ?>	
		<div style="clear:both;"></div>				
		<?php if (empty($this->items)) : ?>

			<?php if ($this->params->get('show_no_lejemplos',1)) : ?>
			<p><?php echo JText::_('COM_JTCA_LEJEMPLOS_NO_ITEMS'); ?></p>
			<?php endif; ?>

		<?php else : ?>
		<div style="overflow-x:auto;">
			<table class="table table-striped" id="lejemplos">
			<?php if ($this->params->get('show_lejemplo_headings',1)) :?>
			<thead>
				<tr>
					<th width="1%" style="display:none;">
					</th>				
					<?php if ($date = $this->params->get('list_show_lejemplo_date')) : ?>
						<th class="list-date" id="tableOrderingdate">
							<?php echo JHtml::_('grid.sort', 'COM_JTCA_FIELD_'.JString::strtoupper($date).'_LABEL', 'a.'.$date, $list_dirn, $list_order); ?>
						</th>
					<?php endif; ?>

					<?php if ($this->params->get('list_show_lejemplo_created_by',0)) : ?>
						<th class="list-created_by" id="tableOrderingcreated_by">
							<?php echo JHtml::_('grid.sort', 'COM_JTCA_HEADING_CREATED_BY', 'created_by_name', $list_dirn, $list_order); ?>
						</th>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lejemplo_id_expediente',1)) : ?>
						<th class="list-id_expediente" id="tableOrderingid_expediente">
							<?php echo JTEXT::_('COM_JTCA_LEJEMPLOS_HEADING_ID_EXPEDIENTE'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_lejemplo_id_organo',1)) : ?>
						<th class="list-id_organo" id="tableOrderingid_organo">
							<?php echo JTEXT::_('COM_JTCA_LEJEMPLOS_HEADING_ID_ORGANO'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_lejemplo_id_secretaria',1)) : ?>
						<th class="list-id_secretaria" id="tableOrderingid_secretaria">
							<?php echo JTEXT::_('COM_JTCA_LEJEMPLOS_HEADING_ID_SECRETARIA'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_lejemplo_anoj',1)) : ?>
						<th class="list-anoj" id="tableOrderinganoj">
							<?php echo JTEXT::_('COM_JTCA_LEJEMPLOS_HEADING_ANOJ'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_lejemplo_my_boolean',1)) : ?>
						<th class="list-my_boolean" id="tableOrderingmy_boolean">
							<?php echo JTEXT::_('COM_JTCA_LEJEMPLOS_HEADING_MY_BOOLEAN'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_lejemplo_my_int',1)) : ?>
						<th class="list-my_int" id="tableOrderingmy_int">
							<?php echo JTEXT::_('COM_JTCA_LEJEMPLOS_HEADING_MY_INT'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_lejemplo_my_currency',1)) : ?>
						<th class="list-my_currency" id="tableOrderingmy_currency">
							<?php echo JTEXT::_('COM_JTCA_LEJEMPLOS_HEADING_MY_CURRENCY'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_lejemplo_my_date',1)) : ?>
						<th class="list-my_date" id="tableOrderingmy_date">
							<?php echo JTEXT::_('COM_JTCA_LEJEMPLOS_HEADING_MY_DATE'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_lejemplo_my_datetime',1)) : ?>
						<th class="list-my_datetime" id="tableOrderingmy_datetime">
							<?php echo JTEXT::_('COM_JTCA_LEJEMPLOS_HEADING_MY_DATETIME'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_lejemplo_my_var45',1)) : ?>
						<th class="list-my_var45" id="tableOrderingmy_var45">
							<?php echo JTEXT::_('COM_JTCA_LEJEMPLOS_HEADING_MY_VAR45'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_lejemplo_txt_expediente',1)) : ?>
						<th class="list-txt_expediente" id="tableOrderingtxt_expediente">
							<?php echo JTEXT::_('COM_JTCA_LEJEMPLOS_HEADING_TXT_EXPEDIENTE'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_lejemplo_my_var255',1)) : ?>
						<th class="list-my_var255" id="tableOrderingmy_var255">
							<?php echo JTEXT::_('COM_JTCA_LEJEMPLOS_HEADING_MY_VAR255'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_lejemplo_txt_my_suggest',1)) : ?>
						<th class="list-txt_my_suggest" id="tableOrderingtxt_my_suggest">
							<?php echo JTEXT::_('COM_JTCA_LEJEMPLOS_HEADING_TXT_MY_SUGGEST'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_lejemplo_my_multiline',1)) : ?>
						<th class="list-my_multiline" id="tableOrderingmy_multiline">
							<?php echo JTEXT::_('COM_JTCA_LEJEMPLOS_HEADING_MY_MULTILINE'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_lejemplo_my_ref2',1)) : ?>
						<th class="list-my_ref2" id="tableOrderingmy_ref2">
							<?php echo JTEXT::_('COM_JTCA_LEJEMPLOS_HEADING_MY_REF2'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_lejemplo_my_ref',1)) : ?>
						<th class="list-my_ref" id="tableOrderingmy_ref">
							<?php echo JTEXT::_('COM_JTCA_LEJEMPLOS_HEADING_MY_REF'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_lejemplo_id_my_suggest',1)) : ?>
						<th class="list-id_my_suggest" id="tableOrderingid_my_suggest">
							<?php echo JTEXT::_('COM_JTCA_LEJEMPLOS_HEADING_ID_MY_SUGGEST'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_lejemplo_my_NFempleado',1)) : ?>
						<th class="list-my_NFempleado" id="tableOrderingmy_NFempleado">
							<?php echo JTEXT::_('COM_JTCA_LEJEMPLOS_HEADING_MY_NFEMPLEADO'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_lejemplo_my_fexterna',1)) : ?>
						<th class="list-my_fexterna" id="tableOrderingmy_fexterna">
							<?php echo JTEXT::_('COM_JTCA_LEJEMPLOS_HEADING_MY_FEXTERNA'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_lejemplo_my_hexterna',1)) : ?>
						<th class="list-my_hexterna" id="tableOrderingmy_hexterna">
							<?php echo JTEXT::_('COM_JTCA_LEJEMPLOS_HEADING_MY_HEXTERNA'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_lejemplo_my_parent',1)) : ?>
						<th class="list-my_parent" id="tableOrderingmy_parent">
							<?php echo JTEXT::_('COM_JTCA_LEJEMPLOS_HEADING_MY_PARENT'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_lejemplo_my_person_isMoral',1)) : ?>
						<th class="list-my_person_isMoral" id="tableOrderingmy_person_isMoral">
							<?php echo JTEXT::_('COM_JTCA_LEJEMPLOS_HEADING_MY_PERSON_ISMORAL'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_lejemplo_my_person_paterno',1)) : ?>
						<th class="list-my_person_paterno" id="tableOrderingmy_person_paterno">
							<?php echo JTEXT::_('COM_JTCA_LEJEMPLOS_HEADING_MY_PERSON_PATERNO'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_lejemplo_my_person_materno',1)) : ?>
						<th class="list-my_person_materno" id="tableOrderingmy_person_materno">
							<?php echo JTEXT::_('COM_JTCA_LEJEMPLOS_HEADING_MY_PERSON_MATERNO'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_lejemplo_my_person_nombre',1)) : ?>
						<th class="list-my_person_nombre" id="tableOrderingmy_person_nombre">
							<?php echo JTEXT::_('COM_JTCA_LEJEMPLOS_HEADING_MY_PERSON_NOMBRE'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_lejemplo_ordering',0)) : ?>
						<th width="10%">
							<?php echo JHtml::_('grid.sort',  'COM_JTCA_HEADING_ORDERING', 'a.ordering', $list_dirn, $list_order); ?>
						</th>
					<?php endif; ?>	
					<?php if ($show_actions) : ?>
						<th width="12%" class="list-actions">
							<?php echo JText::_('COM_JTCA_HEADING_ACTIONS'); ?>						
						</th> 					
					<?php endif; ?>
				</tr>
			</thead>
			<?php endif; ?>

			<tbody>

				<?php foreach ($this->items as $i => $item) :
				
					$can_edit	= $item->params->get('access-edit');
			
					$can_delete	= $item->params->get('access-delete');

							
				?>			
					<?php $params = $item->params; ?>		

					<?php if ($item->state == 0) : ?>
						<tr class="system-unpublished cat-list-row<?php echo $i % 2; ?>">
					<?php else: ?>
						<tr class="cat-list-row<?php echo $i % 2; ?>">
					<?php endif; ?>
					<td class="center" style="display:none;">
						<?php echo JHtml::_('grid.id', $i, $item->id); ?>
					</td>				

					<?php if ($this->params->get('list_show_lejemplo_date')) : ?>
						<td class="list-date">
							<time datetime="<?php echo JHtml::_('date', $item->display_date, 'c'); ?>">
								<?php echo JHtml::_('date',$item->display_date, $this->escape($this->params->get('lejemplo_date_format', JText::_('DATE_FORMAT_LC3')))); ?>
							</time>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lejemplo_created_by',0)) : ?>
						<td class="createdby">
							<?php 
								$created_by =  $item->created_by;
								$created_by = ($item->created_by_name ? $item->created_by_name : $created_by);
								if (!empty($item->created_by )) :
									if ($this->params->get('link_lejemplo_created_by') == 1) :
										$created_by = JHtml::_('link', JRoute::_('index.php?option=com_users&view=profile&id='.$item->created_by), $created_by); 
									endif;
									if ($this->params->get('show_lejemplo_headings',1)) :
										echo $created_by;
									else :
										echo JText::sprintf('COM_JTCA_CREATED_BY', $created_by);
									endif;
								else:
									echo $empty;
								endif;								
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lejemplo_id_expediente',1)) : ?>
						<td class="list-id_expediente">
							<?php 
								echo $item->id_expediente != '' ? $item->id_expediente : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lejemplo_id_organo',1)) : ?>
						<td class="list-id_organo">
							<?php 
								if (is_array($item->id_organo)) :
									if (count($item->id_organo) > 0) : 
										echo '<div class="sql">';
										foreach ($item->id_organo as $id_organo) :
											echo '<p>'.$id_organo['value'].'</p>';
										endforeach;
										echo '</div>';
									else :
										echo $empty;
									endif;
								else :;
									echo $item->id_organo != '' ? $item->id_organo : $empty;
								endif;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lejemplo_id_secretaria',1)) : ?>
						<td class="list-id_secretaria">
							<?php 
								if (is_array($item->id_secretaria)) :
									if (count($item->id_secretaria) > 0) : 
										echo '<div class="sql">';
										foreach ($item->id_secretaria as $id_secretaria) :
											echo '<p>'.$id_secretaria['value'].'</p>';
										endforeach;
										echo '</div>';
									else :
										echo $empty;
									endif;
								else :;
									echo $item->id_secretaria != '' ? $item->id_secretaria : $empty;
								endif;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lejemplo_anoj',1)) : ?>
						<td class="list-anoj">
							<?php 
								echo $item->anoj != '' ? $item->anoj : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lejemplo_my_boolean',1)) : ?>
						<td class="list-my_boolean">
							<?php 
								switch ($item->my_boolean) :
									case '0':
										echo JText::_('JNO');
										break;
									case '1':
										echo JText::_('JYES');
										break;
									default:
										echo JText::_('JNONE');
										break;
								endswitch;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lejemplo_my_int',1)) : ?>
						<td class="list-my_int">
							<?php 
								echo $item->my_int != '' ? $item->my_int : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lejemplo_my_currency',1)) : ?>
						<td class="list-my_currency">
							<?php 
								echo $item->my_currency != '' ? $item->my_currency : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lejemplo_my_date',1)) : ?>
						<td class="list-my_date">
							<?php 
								echo ($item->my_date != '' AND $item->my_date != '0000-00-00 00:00:00') ? JHtml::date($item->my_date, '%Y-%m-%d', null) : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lejemplo_my_datetime',1)) : ?>
						<td class="list-my_datetime">
							<?php 
								echo ($item->my_datetime != '' AND $item->my_datetime != '0000-00-00 00:00:00') ? JHtml::date($item->my_datetime, '%Y-%m-%d %H:%M', null) : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lejemplo_my_var45',1)) : ?>
						<td class="list-my_var45">
							<?php 
								echo $item->my_var45 != '' ? $item->my_var45 : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lejemplo_txt_expediente',1)) : ?>
						<td class="list-txt_expediente">
							<?php 
								echo $item->txt_expediente != '' ? $item->txt_expediente : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lejemplo_my_var255',1)) : ?>
						<td class="list-my_var255">
							<?php 
								echo $item->my_var255 != '' ? $item->my_var255 : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lejemplo_txt_my_suggest',1)) : ?>
						<td class="list-txt_my_suggest">
							<?php 
								echo $item->txt_my_suggest != '' ? $item->txt_my_suggest : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lejemplo_my_multiline',1)) : ?>
						<td class="list-my_multiline">
							<?php 
								echo $item->my_multiline != '' ? $item->my_multiline : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lejemplo_my_ref2',1)) : ?>
						<td class="list-my_ref2">
							<?php 
								echo $item->my_ref2 != '' ? $item->my_ref2 : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lejemplo_my_ref',1)) : ?>
						<td class="list-my_ref">
							<?php 
								echo $item->my_ref != '' ? $item->my_ref : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lejemplo_id_my_suggest',1)) : ?>
						<td class="list-id_my_suggest">
							<?php 
								echo $item->id_my_suggest != '' ? $item->id_my_suggest : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lejemplo_my_NFempleado',1)) : ?>
						<td class="list-my_NFempleado">
							<?php 
								echo $item->my_NFempleado != '' ? $item->my_NFempleado : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lejemplo_my_fexterna',1)) : ?>
						<td class="list-my_fexterna">
							<?php 
								echo $item->my_fexterna != '' ? $item->my_fexterna : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lejemplo_my_hexterna',1)) : ?>
						<td class="list-my_hexterna">
							<?php 
								echo $item->my_hexterna != '' ? $item->my_hexterna : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lejemplo_my_parent',1)) : ?>
						<td class="list-my_parent">
							<?php 
								if ($params->get('list_link_lejemplo_my_parent')) :
									echo '<a href="'.JRoute::_(JtCaHelperRoute::getLejemploRoute($item->my_parent, 0)).'">'.JString::trim($item->lde_lejemplo_id).'</a>';
								else :
									echo JString::trim($item->lde_lejemplo_id);
								endif; 
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lejemplo_my_person_isMoral',1)) : ?>
						<td class="list-my_person_isMoral">
							<?php 
								echo $item->my_person_isMoral != '' ? $item->my_person_isMoral : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lejemplo_my_person_paterno',1)) : ?>
						<td class="list-my_person_paterno">
							<?php 
								echo $item->my_person_paterno != '' ? $item->my_person_paterno : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lejemplo_my_person_materno',1)) : ?>
						<td class="list-my_person_materno">
							<?php 
								echo $item->my_person_materno != '' ? $item->my_person_materno : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lejemplo_my_person_nombre',1)) : ?>
						<td class="list-my_person_nombre">
							<?php 
								echo $item->my_person_nombre != '' ? $item->my_person_nombre : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lejemplo_ordering',0)) : ?>
						<td class="list-order">
							<?php echo $item->ordering; ?>
						</td>
					<?php endif; ?>
					
					<?php if ($show_actions) : ?>
						<td class="list-actions">
                        	<div class="btn-group pull-right">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <span class="icon-cog"></span> <span class="caret"></span> </a>
                                <ul class="dropdown-menu">
							<?php if ($params->get('show_lejemplo_print_icon')) : ?>
								<li class="print-icon">
										<?php echo JHtml::_('lejemploicon.print_popup',  $item, $params); ?>
								</li>
							<?php endif; ?>

							<?php if ($params->get('show_lejemplo_email_icon')) : ?>
								<li class="email-icon">
										<?php echo JHtml::_('lejemploicon.email',  $item, $params); ?>
								</li>
							<?php endif; ?>
								<?php if ($can_edit ) : ?>
                                    <li class="edit-icon">
                                        <?php echo JHtml::_('lejemploicon.edit',$item, $params); ?>
                                    </li>
                                <?php endif; ?>					
                                <?php if ($can_delete) : ?>
                                    <li class="delete-icon">
                                        <?php echo JHtml::_('lejemploicon.delete',$item, $params); ?>
                                    </li>
                                <?php endif; ?>
							<?php if ($can_edit AND $params->get('save_history') AND $params->get('lejemplo_save_history')) : ?>
								<li class="version-icon">
									<?php echo JHtml::_('lejemploicon.versions',$item, $params); ?>
								</li>	
							<?php endif; ?>	
                                </ul>
                            </div>
						</td>															
					<?php endif; ?>
				</tr>
			<?php endforeach; ?>
			</tbody>
			</table>
		</div>
			<?php if (($this->params->def('show_lejemplo_pagination', 2) == 1  OR ($this->params->get('show_lejemplo_pagination') == 2)) AND ($this->pagination->get('pages.total') > 1)) : ?>
			<div class="pagination">

				<?php if ($this->params->def('show_lejemplo_pagination_results', 0)) : ?>
				<p class="counter">
						<?php echo $this->pagination->getPagesCounter(); ?>
				</p>
				<?php endif; ?>

				<?php echo $this->pagination->getPagesLinks(); ?>
			</div>
			<?php endif; ?>

			<div>
				<!-- @TODO add hidden inputs -->
				<input type="hidden" name="task" value="" />
				<input type="hidden" name="boxchecked" value="0" />			
				<input type="hidden" name="filter_order" value="" />
				<input type="hidden" name="filter_order_Dir" value="" />
				<input type="hidden" name="limitstart" value="" />
				<?php echo JHtml::_('form.token'); ?>
			</div>
		<?php endif; ?>
		<?php // Code to add a link to submit an lejemplo. ?>
		<?php if ($this->params->get('show_lejemplo_add_link', 1)) : ?>
			<?php if ($can_create) : ?>
				<?php echo JHtml::_('lejemploicon.create', $this->params); ?>
			<?php  endif; ?>
		<?php endif; ?>		
                <?php echo '<button>export</button>'//JHtml::_('lejemploicon.create', $this->params); ?>
	</form>
</div>

<?php if ($can_edit AND $params->get('save_history') AND $params->get('lejemplo_save_history')) : ?>
<script>
jQuery(document).ready(function($) {
   $('#collapsibleModal')
   .on('hide.bs.modal', function () {
        $(this).removeData('modal');
   });
});

function show_collapsibleModal(item_id){
	jQuery('#collapsibleModal').modal('show');
	var modalBody = jQuery(document).find('.modal-body');
	modalBody.find('iframe').remove();
	modalBody.prepend('<iframe class="iframe" src="index.php?option=com_jtca&task=lejemplo.showHistory&item_id='+item_id+'" name="titulo" height="450"></iframe>');
	return;
}
</script>
<div id="collapsibleModal" tabindex="-1" class="modal hide fade">
	<div class="modal-header">
			<button type="button" class="close novalidate" data-dismiss="modal">×</button>
				<h3><?= JText::_('JTOOLBAR_VERSIONS'); ?></h3>
	</div>
	<div class="modal-body"></div>
</div>
<?php endif; ?>	