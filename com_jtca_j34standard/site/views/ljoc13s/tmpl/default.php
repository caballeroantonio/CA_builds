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
$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_ljoc13s.css');

if ($lang->isRTL())
{
	$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_jtca-rtl.css');
	$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_ljoc13s-rtl.css');
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

$layout		= $this->params->get('ljoc13_layout', 'default');

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
<div class="jtca ljoc13s-list<?php echo $this->params->get('pageclass_sfx');?>">
	<?php if ($this->params->get('show_page_heading')): ?>
		<div class="page-header">
			<h1><?php echo $this->escape($this->params->get('page_heading')); ?></h1>
		</div>
	<?php endif; ?>

	<?php
		$show_actions = false;
		if ($this->params->get('show_ljoc13_icons',1) >= 0) :
			foreach ($this->items as $i => $item) :
				if ($item->params->get('access-edit',1) OR $item->params->get('access-delete',1)) :
					$show_actions = true;
					continue;
				endif;
			endforeach;
		endif;
	?>
	<form action="<?php echo htmlspecialchars(JUri::getInstance()->toString()); ?>" method="post" name="adminForm" id="adminForm">
		<?php if (($this->params->get('show_ljoc13_filter_field') != '' AND $this->params->get('show_ljoc13_filter_field') != 'hide')) :?>
			<div class="filter-search">
				<?php if ($this->params->get('show_ljoc13_filter_field') != '' AND $this->params->get('show_ljoc13_filter_field') != 'hide') :?>
					<input type="text" name="filter_search" id="filter_search" value="<?php echo $this->escape($this->state->get('filter.search')); ?>" onchange="document.adminForm.submit();" title="<?php echo JText::_('COM_JTCA_FILTER_SEARCH_DESC'); ?>" placeholder="<?php echo JText::_('COM_JTCA_'.$this->params->get('show_ljoc13_filter_field').'_FILTER_LABEL'); ?>" />
				<?php endif; ?>	
			</div>
		<?php endif; ?>

		<?php if ($this->params->get('show_ljoc13_pagination_limit')) : ?>
			<div class="display-limit">
				<?php echo JText::_('JGLOBAL_DISPLAY_NUM'); ?>&#160;
				<?php echo $this->pagination->getLimitBox(); ?>
			</div>
		<?php endif; ?>	
		<div style="clear:both;"></div>				
		<?php if (empty($this->items)) : ?>

			<?php if ($this->params->get('show_no_ljoc13s',1)) : ?>
			<p><?php echo JText::_('COM_JTCA_LJOC13S_NO_ITEMS'); ?></p>
			<?php endif; ?>

		<?php else : ?>
			<table class="table table-striped" id="ljoc13s">
			<?php if ($this->params->get('show_ljoc13_headings')) :?>
			<thead>
				<tr>
					<th width="1%" style="display:none;">
					</th>				
					<?php if ($date = $this->params->get('list_show_ljoc13_date')) : ?>
						<th class="list-date" id="tableOrderingdate">
							<?php echo JHtml::_('grid.sort', 'COM_JTCA_FIELD_'.JString::strtoupper($date).'_LABEL', 'a.'.$date, $list_dirn, $list_order); ?>
						</th>
					<?php endif; ?>

					<?php if ($this->params->get('list_show_ljoc13_created_by',0)) : ?>
						<th class="list-created_by" id="tableOrderingcreated_by">
							<?php echo JHtml::_('grid.sort', 'COM_JTCA_HEADING_CREATED_BY', 'created_by_name', $list_dirn, $list_order); ?>
						</th>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_ljoc13_ordering',0)) : ?>
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

					<?php if ($this->params->get('list_show_ljoc13_date')) : ?>
						<td class="list-date">
							<time datetime="<?php echo JHtml::_('date', $item->display_date, 'c'); ?>">
								<?php echo JHtml::_('date',$item->display_date, $this->escape($this->params->get('ljoc13_date_format', JText::_('DATE_FORMAT_LC3')))); ?>
							</time>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_ljoc13_created_by',0)) : ?>
						<td class="createdby">
							<?php 
								$created_by =  $item->created_by;
								$created_by = ($item->created_by_name ? $item->created_by_name : $created_by);
								if (!empty($item->created_by )) :
									if ($this->params->get('link_ljoc13_created_by') == 1) :
										$created_by = JHtml::_('link', JRoute::_('index.php?option=com_users&view=profile&id='.$item->created_by), $created_by); 
									endif;
									if ($this->params->get('show_ljoc13_headings')) :
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
					<?php if ($this->params->get('list_show_ljoc13_id_organo',0)) : ?>
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
					<?php if ($this->params->get('list_show_ljoc13_anoj',0)) : ?>
						<td class="list-anoj">
							<?php 
								echo $item->anoj != '' ? $item->anoj : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_ljoc13_id_expediente',0)) : ?>
						<td class="list-id_expediente">
							<?php 
								echo $item->id_expediente != '' ? $item->id_expediente : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_ljoc13_id_secretaria',0)) : ?>
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
					<?php if ($this->params->get('list_show_ljoc13_field5',0)) : ?>
						<td class="list-field5">
							<?php 
								echo ($item->field5 != '' AND $item->field5 != '0000-00-00 00:00:00') ? JHtml::date($item->field5, '%Y-%m-%d', null) : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_ljoc13_field6',0)) : ?>
						<td class="list-field6">
							<?php 
								echo $item->field6 != '' ? $item->field6 : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_ljoc13_field7_isMoral',0)) : ?>
						<td class="list-field7_isMoral">
							<?php 
								echo $item->field7_isMoral != '' ? $item->field7_isMoral : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_ljoc13_field7_paterno',0)) : ?>
						<td class="list-field7_paterno">
							<?php 
								echo $item->field7_paterno != '' ? $item->field7_paterno : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_ljoc13_field7_materno',0)) : ?>
						<td class="list-field7_materno">
							<?php 
								echo $item->field7_materno != '' ? $item->field7_materno : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_ljoc13_field7_nombre',0)) : ?>
						<td class="list-field7_nombre">
							<?php 
								echo $item->field7_nombre != '' ? $item->field7_nombre : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_ljoc13_field8',0)) : ?>
						<td class="list-field8">
							<?php 
								echo $item->field8 != '' ? $item->field8 : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_ljoc13_field9',0)) : ?>
						<td class="list-field9">
							<?php 
								echo $item->field9 != '' ? $item->field9 : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_ljoc13_field10',0)) : ?>
						<td class="list-field10">
							<?php 
								echo $item->field10 != '' ? $item->field10 : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_ljoc13_field11',0)) : ?>
						<td class="list-field11">
							<?php 
								echo $item->field11 != '' ? $item->field11 : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_ljoc13_field12',0)) : ?>
						<td class="list-field12">
							<?php 
								echo ($item->field12 != '' AND $item->field12 != '0000-00-00 00:00:00') ? JHtml::date($item->field12, '%Y-%m-%d', null) : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_ljoc13_field20',0)) : ?>
						<td class="list-field20">
							<?php 
								echo ($item->field20 != '' AND $item->field20 != '0000-00-00 00:00:00') ? JHtml::date($item->field20, '%Y-%m-%d', null) : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_ljoc13_field13_isMoral',0)) : ?>
						<td class="list-field13_isMoral">
							<?php 
								echo $item->field13_isMoral != '' ? $item->field13_isMoral : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_ljoc13_field13_paterno',0)) : ?>
						<td class="list-field13_paterno">
							<?php 
								echo $item->field13_paterno != '' ? $item->field13_paterno : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_ljoc13_field13_materno',0)) : ?>
						<td class="list-field13_materno">
							<?php 
								echo $item->field13_materno != '' ? $item->field13_materno : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_ljoc13_field13_nombre',0)) : ?>
						<td class="list-field13_nombre">
							<?php 
								echo $item->field13_nombre != '' ? $item->field13_nombre : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_ljoc13_field14',0)) : ?>
						<td class="list-field14">
							<?php 
								echo $item->field14 != '' ? $item->field14 : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_ljoc13_field15',0)) : ?>
						<td class="list-field15">
							<?php 
								echo $item->field15 != '' ? $item->field15 : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_ljoc13_field16',0)) : ?>
						<td class="list-field16">
							<?php 
								echo $item->field16 != '' ? $item->field16 : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_ljoc13_field16h',0)) : ?>
						<td class="list-field16h">
							<?php 
								echo $item->field16h != '' ? $item->field16h : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_ljoc13_field17',0)) : ?>
						<td class="list-field17">
							<?php 
								echo $item->field17 != '' ? $item->field17 : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_ljoc13_field18',0)) : ?>
						<td class="list-field18">
							<?php 
								echo ($item->field18 != '' AND $item->field18 != '0000-00-00 00:00:00') ? JHtml::date($item->field18, '%Y-%m-%d', null) : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_ljoc13_field19',0)) : ?>
						<td class="list-field19">
							<?php 
								echo $item->field19 != '' ? $item->field19 : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_ljoc13_ordering',0)) : ?>
						<td class="list-order">
							<?php echo $item->ordering; ?>
						</td>
					<?php endif; ?>
					
					<?php if ($show_actions) : ?>
						<td class="list-actions">
							<?php if ($can_edit OR $can_delete ) : ?>
								<ul class="actions">
									<?php if ($can_edit ) : ?>
										<li class="edit-icon">
											<?php echo JHtml::_('ljoc13icon.edit',$item, $params); ?>
										</li>
									<?php endif; ?>					
									<?php if ($can_delete) : ?>
										<li class="delete-icon">
											<?php echo JHtml::_('ljoc13icon.delete',$item, $params); ?>
										</li>
									<?php endif; ?>					
								</ul>
							<?php endif; ?>
						</td>															
					<?php endif; ?>
				</tr>
			<?php endforeach; ?>
			</tbody>
			</table>
			<?php if (($this->params->def('show_ljoc13_pagination', 2) == 1  OR ($this->params->get('show_ljoc13_pagination') == 2)) AND ($this->pagination->get('pages.total') > 1)) : ?>
			<div class="pagination">

				<?php if ($this->params->def('show_ljoc13_pagination_results', 0)) : ?>
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
		<?php // Code to add a link to submit an ljoc13. ?>
		<?php if ($this->params->get('show_ljoc13_add_link', 1)) : ?>
			<?php if ($can_create) : ?>
				<?php echo JHtml::_('ljoc13icon.create', $this->params); ?>
			<?php  endif; ?>
		<?php endif; ?>		
                <?php echo '<button>export</button>'//JHtml::_('ljoc13icon.create', $this->params); ?>
	</form>
</div>
