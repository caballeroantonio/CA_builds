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
$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_sldep_joc03s.css');

if ($lang->isRTL())
{
	$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_jtca-rtl.css');
	$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_sldep_joc03s-rtl.css');
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

$layout		= $this->params->get('sldepjoc03_layout', 'default');

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
<div class="jtca sldep_joc03s-list<?php echo $this->params->get('pageclass_sfx');?>">
	<?php if ($this->params->get('show_page_heading')): ?>
		<div class="page-header">
			<h1><?php echo $this->escape($this->params->get('page_heading')); ?></h1>
		</div>
	<?php endif; ?>

	<?php
		$can_edit = 0;$can_delete = 0;
		$show_actions = false;
		if ($this->params->get('show_sldepjoc03_icons',1) >= 0) :
			foreach ($this->items as $i => $item) :
				if ($item->params->get('access-edit',1) OR $item->params->get('access-delete',1)) :
					$show_actions = true;
					continue;
				endif;
			endforeach;
		endif;
	?>
	<form action="<?php echo htmlspecialchars(JUri::getInstance()->toString()); ?>" method="post" name="adminForm" id="adminForm">
		<?php if (($this->params->get('show_sldepjoc03_filter_field') != '' AND $this->params->get('show_sldepjoc03_filter_field') != 'hide')) :?>
			<div class="filter-search">
				<?php if ($this->params->get('show_sldepjoc03_filter_field') != '' AND $this->params->get('show_sldepjoc03_filter_field') != 'hide') :?>
					<input type="text" name="filter_search" id="filter_search" value="<?php echo $this->escape($this->state->get('filter.search')); ?>" onchange="document.adminForm.submit();" title="<?php echo JText::_('COM_JTCA_FILTER_SEARCH_DESC'); ?>" placeholder="<?php echo JText::_('COM_JTCA_'.$this->params->get('show_sldepjoc03_filter_field').'_FILTER_LABEL'); ?>" />
				<?php endif; ?>	
				<?php if ($this->params->get('list_show_sldepjoc03_id_record',1)) : ?>
					<select name="filter_id_record" onchange="this.form.submit()">
					<option value=""><?php echo JText::_('COM_JTCA_SLDEP_JOC03S_SELECT_ID_RECORD');?></option>
					<?php echo JHtml::_('select.options', $this->id_record_values, 'value', 'text', $this->state->get('filter.id_record'));?>
					</select>
				<?php endif; ?>	
				<?php if ($this->params->get('list_show_sldepjoc03_id_field',1)) : ?>
					<select name="filter_id_field" onchange="this.form.submit()">
					<option value=""><?php echo JText::_('COM_JTCA_SLDEP_JOC03S_SELECT_ID_FIELD');?></option>
					<?php echo JHtml::_('select.options', $this->id_field_values, 'value', 'text', $this->state->get('filter.id_field'));?>
					</select>
				<?php endif; ?>	
			</div>
		<?php endif; ?>

		<?php if ($this->params->get('show_sldepjoc03_pagination_limit')) : ?>
			<div class="display-limit">
				<?php echo JText::_('JGLOBAL_DISPLAY_NUM'); ?>&#160;
				<?php echo $this->pagination->getLimitBox(); ?>
			</div>
		<?php endif; ?>	
		<div style="clear:both;"></div>				
		<?php if (empty($this->items)) : ?>

			<?php if ($this->params->get('show_no_sldep_joc03s',1)) : ?>
			<p><?php echo JText::_('COM_JTCA_SLDEP_JOC03S_NO_ITEMS'); ?></p>
			<?php endif; ?>

		<?php else : ?>
		<div style="overflow-x:auto;">
			<table class="table table-striped" id="sldep_joc03s" style="margin-bottom: 200px;">
			<?php if ($this->params->get('show_sldepjoc03_headings',1)) :?>
			<thead>
				<tr>
					<th width="1%" style="display:none;">
					</th>				
					<?php if ($date = $this->params->get('list_show_sldepjoc03_date')) : ?>
						<th class="list-date" id="tableOrderingdate">
							<?php echo JHtml::_('grid.sort', 'COM_JTCA_FIELD_'.JString::strtoupper($date).'_LABEL', 'a.'.$date, $list_dirn, $list_order); ?>
						</th>
					<?php endif; ?>

					<?php if ($this->params->get('list_show_sldepjoc03_created_by',0)) : ?>
						<th class="list-created_by" id="tableOrderingcreated_by">
							<?php echo JHtml::_('grid.sort', 'COM_JTCA_HEADING_CREATED_BY', 'created_by_name', $list_dirn, $list_order); ?>
						</th>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_sldepjoc03_sfield5',1)) : ?>
						<th class="list-sfield5" id="tableOrderingsfield5">
							<?php echo JTEXT::_('COM_JTCA_SLDEP_JOC03S_HEADING_SFIELD5'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_sldepjoc03_sfield6',1)) : ?>
						<th class="list-sfield6" id="tableOrderingsfield6">
							<?php echo JTEXT::_('COM_JTCA_SLDEP_JOC03S_HEADING_SFIELD6'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_sldepjoc03_sfield7',1)) : ?>
						<th class="list-sfield7" id="tableOrderingsfield7">
							<?php echo JTEXT::_('COM_JTCA_SLDEP_JOC03S_HEADING_SFIELD7'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_sldepjoc03_sfield8',1)) : ?>
						<th class="list-sfield8" id="tableOrderingsfield8">
							<?php echo JTEXT::_('COM_JTCA_SLDEP_JOC03S_HEADING_SFIELD8'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_sldepjoc03_sfield9',1)) : ?>
						<th class="list-sfield9" id="tableOrderingsfield9">
							<?php echo JTEXT::_('COM_JTCA_SLDEP_JOC03S_HEADING_SFIELD9'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_sldepjoc03_sfield10_isMoral',1)) : ?>
						<th class="list-sfield10_isMoral" id="tableOrderingsfield10_isMoral">
							<?php echo JTEXT::_('COM_JTCA_SLDEP_JOC03S_HEADING_SFIELD10_ISMORAL'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_sldepjoc03_sfield10_paterno',1)) : ?>
						<th class="list-sfield10_paterno" id="tableOrderingsfield10_paterno">
							<?php echo JTEXT::_('COM_JTCA_SLDEP_JOC03S_HEADING_SFIELD10_PATERNO'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_sldepjoc03_sfield10_materno',1)) : ?>
						<th class="list-sfield10_materno" id="tableOrderingsfield10_materno">
							<?php echo JTEXT::_('COM_JTCA_SLDEP_JOC03S_HEADING_SFIELD10_MATERNO'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_sldepjoc03_sfield10_nombre',1)) : ?>
						<th class="list-sfield10_nombre" id="tableOrderingsfield10_nombre">
							<?php echo JTEXT::_('COM_JTCA_SLDEP_JOC03S_HEADING_SFIELD10_NOMBRE'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_sldepjoc03_sfield11',1)) : ?>
						<th class="list-sfield11" id="tableOrderingsfield11">
							<?php echo JTEXT::_('COM_JTCA_SLDEP_JOC03S_HEADING_SFIELD11'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_sldepjoc03_sfield12',1)) : ?>
						<th class="list-sfield12" id="tableOrderingsfield12">
							<?php echo JTEXT::_('COM_JTCA_SLDEP_JOC03S_HEADING_SFIELD12'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_sldepjoc03_sfield13',1)) : ?>
						<th class="list-sfield13" id="tableOrderingsfield13">
							<?php echo JTEXT::_('COM_JTCA_SLDEP_JOC03S_HEADING_SFIELD13'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_sldepjoc03_sfield14',1)) : ?>
						<th class="list-sfield14" id="tableOrderingsfield14">
							<?php echo JTEXT::_('COM_JTCA_SLDEP_JOC03S_HEADING_SFIELD14'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_sldepjoc03_sfield15',1)) : ?>
						<th class="list-sfield15" id="tableOrderingsfield15">
							<?php echo JTEXT::_('COM_JTCA_SLDEP_JOC03S_HEADING_SFIELD15'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_sldepjoc03_sfield16',1)) : ?>
						<th class="list-sfield16" id="tableOrderingsfield16">
							<?php echo JTEXT::_('COM_JTCA_SLDEP_JOC03S_HEADING_SFIELD16'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_sldepjoc03_sfield17',1)) : ?>
						<th class="list-sfield17" id="tableOrderingsfield17">
							<?php echo JTEXT::_('COM_JTCA_SLDEP_JOC03S_HEADING_SFIELD17'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_sldepjoc03_sfield18',1)) : ?>
						<th class="list-sfield18" id="tableOrderingsfield18">
							<?php echo JTEXT::_('COM_JTCA_SLDEP_JOC03S_HEADING_SFIELD18'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_sldepjoc03_sfield19',1)) : ?>
						<th class="list-sfield19" id="tableOrderingsfield19">
							<?php echo JTEXT::_('COM_JTCA_SLDEP_JOC03S_HEADING_SFIELD19'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_sldepjoc03_ordering',0)) : ?>
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

					<?php if ($this->params->get('list_show_sldepjoc03_date')) : ?>
						<td class="list-date">
							<time datetime="<?php echo JHtml::_('date', $item->display_date, 'c'); ?>">
								<?php echo JHtml::_('date',$item->display_date, $this->escape($this->params->get('sldepjoc03_date_format', JText::_('DATE_FORMAT_LC3')))); ?>
							</time>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_sldepjoc03_created_by',0)) : ?>
						<td class="createdby">
							<?php 
								$created_by =  $item->created_by;
								$created_by = ($item->created_by_name ? $item->created_by_name : $created_by);
								if (!empty($item->created_by )) :
									if ($this->params->get('link_sldepjoc03_created_by') == 1) :
										$created_by = JHtml::_('link', JRoute::_('index.php?option=com_users&view=profile&id='.$item->created_by), $created_by); 
									endif;
									if ($this->params->get('show_sldepjoc03_headings',1)) :
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
					<?php if ($this->params->get('list_show_sldepjoc03_sfield5',1)) : ?>
						<td class="list-sfield5">
							<?php 
								echo ($item->sfield5 != '' AND $item->sfield5 != '0000-00-00 00:00:00') ? JHtml::date($item->sfield5, '%Y-%m-%d', null) : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_sldepjoc03_sfield6',1)) : ?>
						<td class="list-sfield6">
							<?php 
								echo ($item->sfield6 != '' AND $item->sfield6 != '0000-00-00 00:00:00') ? JHtml::date($item->sfield6, '%Y-%m-%d', null) : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_sldepjoc03_sfield7',1)) : ?>
						<td class="list-sfield7">
							<?php 
								echo $item->sfield7 != '' ? $item->sfield7 : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_sldepjoc03_sfield8',1)) : ?>
						<td class="list-sfield8">
							<?php 
								echo $item->sfield8 != '' ? $item->sfield8 : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_sldepjoc03_sfield9',1)) : ?>
						<td class="list-sfield9">
							<?php 
								echo $item->sfield9 != '' ? $item->sfield9 : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_sldepjoc03_sfield10_isMoral',1)) : ?>
						<td class="list-sfield10_isMoral">
							<?php 
								echo $item->sfield10_isMoral != '' ? $item->sfield10_isMoral : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_sldepjoc03_sfield10_paterno',1)) : ?>
						<td class="list-sfield10_paterno">
							<?php 
								echo $item->sfield10_paterno != '' ? $item->sfield10_paterno : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_sldepjoc03_sfield10_materno',1)) : ?>
						<td class="list-sfield10_materno">
							<?php 
								echo $item->sfield10_materno != '' ? $item->sfield10_materno : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_sldepjoc03_sfield10_nombre',1)) : ?>
						<td class="list-sfield10_nombre">
							<?php 
								echo $item->sfield10_nombre != '' ? $item->sfield10_nombre : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_sldepjoc03_sfield11',1)) : ?>
						<td class="list-sfield11">
							<?php 
								echo $item->sfield11 != '' ? $item->sfield11 : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_sldepjoc03_sfield12',1)) : ?>
						<td class="list-sfield12">
							<?php 
								echo ($item->sfield12 != '' AND $item->sfield12 != '0000-00-00 00:00:00') ? JHtml::date($item->sfield12, '%Y-%m-%d', null) : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_sldepjoc03_sfield13',1)) : ?>
						<td class="list-sfield13">
							<?php 
								echo $item->sfield13 != '' ? $item->sfield13 : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_sldepjoc03_sfield14',1)) : ?>
						<td class="list-sfield14">
							<?php 
								echo $item->sfield14 != '' ? $item->sfield14 : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_sldepjoc03_sfield15',1)) : ?>
						<td class="list-sfield15">
							<?php 
								echo $item->sfield15 != '' ? $item->sfield15 : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_sldepjoc03_sfield16',1)) : ?>
						<td class="list-sfield16">
							<?php 
								echo $item->sfield16 != '' ? $item->sfield16 : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_sldepjoc03_sfield17',1)) : ?>
						<td class="list-sfield17">
							<?php 
								echo $item->sfield17 != '' ? $item->sfield17 : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_sldepjoc03_sfield18',1)) : ?>
						<td class="list-sfield18">
							<?php 
								echo $item->sfield18 != '' ? $item->sfield18 : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_sldepjoc03_sfield19',1)) : ?>
						<td class="list-sfield19">
							<?php 
								echo $item->sfield19 != '' ? $item->sfield19 : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_sldepjoc03_ordering',0)) : ?>
						<td class="list-order">
							<?php echo $item->ordering; ?>
						</td>
					<?php endif; ?>
					
					<?php if ($show_actions) : ?>
						<td class="list-actions">
                        	<div class="btn-group pull-right">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <span class="icon-cog"></span> <span class="caret"></span> </a>
                                <ul class="dropdown-menu">
							<?php if ($params->get('show_sldepjoc03_print_icon')) : ?>
								<li class="print-icon">
										<?php echo JHtml::_('sldepjoc03icon.print_popup',  $item, $params); ?>
								</li>
							<?php endif; ?>

							<?php if ($params->get('show_sldepjoc03_email_icon')) : ?>
								<li class="email-icon">
										<?php echo JHtml::_('sldepjoc03icon.email',  $item, $params); ?>
								</li>
							<?php endif; ?>
								<?php if ($can_edit ) : ?>
                                    <li class="edit-icon">
                                        <?php echo JHtml::_('sldepjoc03icon.edit',$item, $params); ?>
                                    </li>
                                <?php endif; ?>					
                                <?php if ($can_delete) : ?>
                                    <li class="delete-icon">
                                        <?php echo JHtml::_('sldepjoc03icon.delete',$item, $params); ?>
                                    </li>
                                <?php endif; ?>
							<?php if ($can_edit AND $params->get('save_history') AND $params->get('sldepjoc03_save_history')) : ?>
								<li class="version-icon">
									<?php echo JHtml::_('sldepjoc03icon.versions',$item, $params); ?>
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
			<?php if (($this->params->def('show_sldepjoc03_pagination', 2) == 1  OR ($this->params->get('show_sldepjoc03_pagination') == 2)) AND ($this->pagination->get('pages.total') > 1)) : ?>
			<div class="pagination">

				<?php if ($this->params->def('show_sldepjoc03_pagination_results', 0)) : ?>
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
		<?php // Code to add a link to submit an sldepjoc03. ?>
		<?php if ($this->params->get('show_sldepjoc03_add_link', 1)) : ?>
			<?php if ($can_create) : ?>
				<?php echo JHtml::_('sldepjoc03icon.create', $this->params); ?>
			<?php  endif; ?>
		<?php endif; ?>		
                <?php echo '<button>export</button>'//JHtml::_('sldepjoc03icon.create', $this->params); ?>
	</form>
</div>

<?php if ($can_edit AND $params->get('save_history') AND $params->get('sldepjoc03_save_history')) : ?>
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
	modalBody.prepend('<iframe class="iframe" src="index.php?option=com_jtca&task=sldepjoc03.showHistory&item_id='+item_id+'" name="titulo" height="450"></iframe>');
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