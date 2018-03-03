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
$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_lsps04s.css');

if ($lang->isRTL())
{
	$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_jtca-rtl.css');
	$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_lsps04s-rtl.css');
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

$layout		= $this->params->get('lsps04_layout', 'default');

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
<div class="jtca lsps04s-list<?php echo $this->params->get('pageclass_sfx');?>">
	<?php if ($this->params->get('show_page_heading')): ?>
		<div class="page-header">
			<h1><?php echo $this->escape($this->params->get('page_heading')); ?></h1>
		</div>
	<?php endif; ?>

	<?php
		$show_actions = false;
		if ($this->params->get('show_lsps04_icons',1) >= 0) :
			foreach ($this->items as $i => $item) :
				if ($item->params->get('access-edit',1) OR $item->params->get('access-delete',1)) :
					$show_actions = true;
					continue;
				endif;
			endforeach;
		endif;
	?>
	<form action="<?php echo htmlspecialchars(JUri::getInstance()->toString()); ?>" method="post" name="adminForm" id="adminForm">
		<?php if (($this->params->get('show_lsps04_filter_field') != '' AND $this->params->get('show_lsps04_filter_field') != 'hide')) :?>
			<div class="filter-search">
				<?php if ($this->params->get('show_lsps04_filter_field') != '' AND $this->params->get('show_lsps04_filter_field') != 'hide') :?>
					<input type="text" name="filter_search" id="filter_search" value="<?php echo $this->escape($this->state->get('filter.search')); ?>" onchange="document.adminForm.submit();" title="<?php echo JText::_('COM_JTCA_FILTER_SEARCH_DESC'); ?>" placeholder="<?php echo JText::_('COM_JTCA_'.$this->params->get('show_lsps04_filter_field').'_FILTER_LABEL'); ?>" />
				<?php endif; ?>	
			</div>
		<?php endif; ?>

		<?php if ($this->params->get('show_lsps04_pagination_limit')) : ?>
			<div class="display-limit">
				<?php echo JText::_('JGLOBAL_DISPLAY_NUM'); ?>&#160;
				<?php echo $this->pagination->getLimitBox(); ?>
			</div>
		<?php endif; ?>	
		<div style="clear:both;"></div>				
		<?php if (empty($this->items)) : ?>

			<?php if ($this->params->get('show_no_lsps04s',1)) : ?>
			<p><?php echo JText::_('COM_JTCA_LSPS04S_NO_ITEMS'); ?></p>
			<?php endif; ?>

		<?php else : ?>
		<div style="overflow-x:auto;">
			<table class="table table-striped" id="lsps04s">
			<?php if ($this->params->get('show_lsps04_headings',1)) :?>
			<thead>
				<tr>
					<th width="1%" style="display:none;">
					</th>				
					<?php if ($date = $this->params->get('list_show_lsps04_date')) : ?>
						<th class="list-date" id="tableOrderingdate">
							<?php echo JHtml::_('grid.sort', 'COM_JTCA_FIELD_'.JString::strtoupper($date).'_LABEL', 'a.'.$date, $list_dirn, $list_order); ?>
						</th>
					<?php endif; ?>

					<?php if ($this->params->get('list_show_lsps04_created_by',0)) : ?>
						<th class="list-created_by" id="tableOrderingcreated_by">
							<?php echo JHtml::_('grid.sort', 'COM_JTCA_HEADING_CREATED_BY', 'created_by_name', $list_dirn, $list_order); ?>
						</th>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lsps04_id_expediente',1)) : ?>
						<th class="list-id_expediente" id="tableOrderingid_expediente">
							<?php echo JTEXT::_('COM_JTCA_LSPS04S_HEADING_ID_EXPEDIENTE'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_lsps04_id_organo',1)) : ?>
						<th class="list-id_organo" id="tableOrderingid_organo">
							<?php echo JTEXT::_('COM_JTCA_LSPS04S_HEADING_ID_ORGANO'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_lsps04_id_secretaria',1)) : ?>
						<th class="list-id_secretaria" id="tableOrderingid_secretaria">
							<?php echo JTEXT::_('COM_JTCA_LSPS04S_HEADING_ID_SECRETARIA'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_lsps04_anoj',1)) : ?>
						<th class="list-anoj" id="tableOrderinganoj">
							<?php echo JTEXT::_('COM_JTCA_LSPS04S_HEADING_ANOJ'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_lsps04_field2381',1)) : ?>
						<th class="list-field2381" id="tableOrderingfield2381">
							<?php echo JTEXT::_('COM_JTCA_LSPS04S_HEADING_FIELD2381'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_lsps04_field2382',1)) : ?>
						<th class="list-field2382" id="tableOrderingfield2382">
							<?php echo JTEXT::_('COM_JTCA_LSPS04S_HEADING_FIELD2382'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_lsps04_field2383_isMoral',1)) : ?>
						<th class="list-field2383_isMoral" id="tableOrderingfield2383_isMoral">
							<?php echo JTEXT::_('COM_JTCA_LSPS04S_HEADING_FIELD2383_ISMORAL'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_lsps04_field2383_paterno',1)) : ?>
						<th class="list-field2383_paterno" id="tableOrderingfield2383_paterno">
							<?php echo JTEXT::_('COM_JTCA_LSPS04S_HEADING_FIELD2383_PATERNO'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_lsps04_field2383_materno',1)) : ?>
						<th class="list-field2383_materno" id="tableOrderingfield2383_materno">
							<?php echo JTEXT::_('COM_JTCA_LSPS04S_HEADING_FIELD2383_MATERNO'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_lsps04_field2383_nombre',1)) : ?>
						<th class="list-field2383_nombre" id="tableOrderingfield2383_nombre">
							<?php echo JTEXT::_('COM_JTCA_LSPS04S_HEADING_FIELD2383_NOMBRE'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_lsps04_field2384',1)) : ?>
						<th class="list-field2384" id="tableOrderingfield2384">
							<?php echo JTEXT::_('COM_JTCA_LSPS04S_HEADING_FIELD2384'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_lsps04_field2385',1)) : ?>
						<th class="list-field2385" id="tableOrderingfield2385">
							<?php echo JTEXT::_('COM_JTCA_LSPS04S_HEADING_FIELD2385'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_lsps04_field2386',1)) : ?>
						<th class="list-field2386" id="tableOrderingfield2386">
							<?php echo JTEXT::_('COM_JTCA_LSPS04S_HEADING_FIELD2386'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_lsps04_field2387_isMoral',1)) : ?>
						<th class="list-field2387_isMoral" id="tableOrderingfield2387_isMoral">
							<?php echo JTEXT::_('COM_JTCA_LSPS04S_HEADING_FIELD2387_ISMORAL'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_lsps04_field2387_paterno',1)) : ?>
						<th class="list-field2387_paterno" id="tableOrderingfield2387_paterno">
							<?php echo JTEXT::_('COM_JTCA_LSPS04S_HEADING_FIELD2387_PATERNO'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_lsps04_field2387_materno',1)) : ?>
						<th class="list-field2387_materno" id="tableOrderingfield2387_materno">
							<?php echo JTEXT::_('COM_JTCA_LSPS04S_HEADING_FIELD2387_MATERNO'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_lsps04_field2387_nombre',1)) : ?>
						<th class="list-field2387_nombre" id="tableOrderingfield2387_nombre">
							<?php echo JTEXT::_('COM_JTCA_LSPS04S_HEADING_FIELD2387_NOMBRE'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_lsps04_field2388',1)) : ?>
						<th class="list-field2388" id="tableOrderingfield2388">
							<?php echo JTEXT::_('COM_JTCA_LSPS04S_HEADING_FIELD2388'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_lsps04_ordering',0)) : ?>
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

					<?php if ($this->params->get('list_show_lsps04_date')) : ?>
						<td class="list-date">
							<time datetime="<?php echo JHtml::_('date', $item->display_date, 'c'); ?>">
								<?php echo JHtml::_('date',$item->display_date, $this->escape($this->params->get('lsps04_date_format', JText::_('DATE_FORMAT_LC3')))); ?>
							</time>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lsps04_created_by',0)) : ?>
						<td class="createdby">
							<?php 
								$created_by =  $item->created_by;
								$created_by = ($item->created_by_name ? $item->created_by_name : $created_by);
								if (!empty($item->created_by )) :
									if ($this->params->get('link_lsps04_created_by') == 1) :
										$created_by = JHtml::_('link', JRoute::_('index.php?option=com_users&view=profile&id='.$item->created_by), $created_by); 
									endif;
									if ($this->params->get('show_lsps04_headings',1)) :
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
					<?php if ($this->params->get('list_show_lsps04_id_expediente',1)) : ?>
						<td class="list-id_expediente">
							<?php 
								echo $item->id_expediente != '' ? $item->id_expediente : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lsps04_id_organo',1)) : ?>
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
					<?php if ($this->params->get('list_show_lsps04_id_secretaria',1)) : ?>
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
					<?php if ($this->params->get('list_show_lsps04_anoj',1)) : ?>
						<td class="list-anoj">
							<?php 
								echo $item->anoj != '' ? $item->anoj : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lsps04_field2381',1)) : ?>
						<td class="list-field2381">
							<?php 
								echo $item->field2381 != '' ? $item->field2381 : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lsps04_field2382',1)) : ?>
						<td class="list-field2382">
							<?php 
								echo ($item->field2382 != '' AND $item->field2382 != '0000-00-00 00:00:00') ? JHtml::date($item->field2382, '%Y-%m-%d', null) : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lsps04_field2383_isMoral',1)) : ?>
						<td class="list-field2383_isMoral">
							<?php 
								echo $item->field2383_isMoral != '' ? $item->field2383_isMoral : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lsps04_field2383_paterno',1)) : ?>
						<td class="list-field2383_paterno">
							<?php 
								echo $item->field2383_paterno != '' ? $item->field2383_paterno : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lsps04_field2383_materno',1)) : ?>
						<td class="list-field2383_materno">
							<?php 
								echo $item->field2383_materno != '' ? $item->field2383_materno : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lsps04_field2383_nombre',1)) : ?>
						<td class="list-field2383_nombre">
							<?php 
								echo $item->field2383_nombre != '' ? $item->field2383_nombre : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lsps04_field2384',1)) : ?>
						<td class="list-field2384">
							<?php 
								echo ($item->field2384 != '' AND $item->field2384 != '0000-00-00 00:00:00') ? JHtml::date($item->field2384, '%Y-%m-%d', null) : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lsps04_field2385',1)) : ?>
						<td class="list-field2385">
							<?php 
								echo ($item->field2385 != '' AND $item->field2385 != '0000-00-00 00:00:00') ? JHtml::date($item->field2385, '%Y-%m-%d', null) : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lsps04_field2386',1)) : ?>
						<td class="list-field2386">
							<?php 
								echo ($item->field2386 != '' AND $item->field2386 != '0000-00-00 00:00:00') ? JHtml::date($item->field2386, '%Y-%m-%d', null) : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lsps04_field2387_isMoral',1)) : ?>
						<td class="list-field2387_isMoral">
							<?php 
								echo $item->field2387_isMoral != '' ? $item->field2387_isMoral : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lsps04_field2387_paterno',1)) : ?>
						<td class="list-field2387_paterno">
							<?php 
								echo $item->field2387_paterno != '' ? $item->field2387_paterno : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lsps04_field2387_materno',1)) : ?>
						<td class="list-field2387_materno">
							<?php 
								echo $item->field2387_materno != '' ? $item->field2387_materno : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lsps04_field2387_nombre',1)) : ?>
						<td class="list-field2387_nombre">
							<?php 
								echo $item->field2387_nombre != '' ? $item->field2387_nombre : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lsps04_field2388',1)) : ?>
						<td class="list-field2388">
							<?php 
								echo $item->field2388 != '' ? $item->field2388 : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_lsps04_ordering',0)) : ?>
						<td class="list-order">
							<?php echo $item->ordering; ?>
						</td>
					<?php endif; ?>
					
					<?php if ($show_actions) : ?>
						<td class="list-actions">
                        	<div class="btn-group pull-right">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <span class="icon-cog"></span> <span class="caret"></span> </a>
                                <ul class="dropdown-menu">
							<?php if ($params->get('show_lsps04_print_icon')) : ?>
								<li class="print-icon">
										<?php echo JHtml::_('lsps04icon.print_popup',  $item, $params); ?>
								</li>
							<?php endif; ?>

							<?php if ($params->get('show_lsps04_email_icon')) : ?>
								<li class="email-icon">
										<?php echo JHtml::_('lsps04icon.email',  $item, $params); ?>
								</li>
							<?php endif; ?>
								<?php if ($can_edit ) : ?>
                                    <li class="edit-icon">
                                        <?php echo JHtml::_('lsps04icon.edit',$item, $params); ?>
                                    </li>
                                <?php endif; ?>					
                                <?php if ($can_delete) : ?>
                                    <li class="delete-icon">
                                        <?php echo JHtml::_('lsps04icon.delete',$item, $params); ?>
                                    </li>
                                <?php endif; ?>
							<?php if ($can_edit AND $params->get('save_history') AND $params->get('lsps04_save_history')) : ?>
								<li class="version-icon">
									<?php echo JHtml::_('lsps04icon.versions',$item, $params); ?>
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
			<?php if (($this->params->def('show_lsps04_pagination', 2) == 1  OR ($this->params->get('show_lsps04_pagination') == 2)) AND ($this->pagination->get('pages.total') > 1)) : ?>
			<div class="pagination">

				<?php if ($this->params->def('show_lsps04_pagination_results', 0)) : ?>
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
		<?php // Code to add a link to submit an lsps04. ?>
		<?php if ($this->params->get('show_lsps04_add_link', 1)) : ?>
			<?php if ($can_create) : ?>
				<?php echo JHtml::_('lsps04icon.create', $this->params); ?>
			<?php  endif; ?>
		<?php endif; ?>		
                <?php echo '<button>export</button>'//JHtml::_('lsps04icon.create', $this->params); ?>
	</form>
</div>

<?php if ($can_edit AND $params->get('save_history') AND $params->get('lsps04_save_history')) : ?>
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
	modalBody.prepend('<iframe class="iframe" src="index.php?option=com_jtca&task=lsps04.showHistory&item_id='+item_id+'" name="titulo" height="450"></iframe>');
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