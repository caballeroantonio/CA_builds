<?php
/**
 * @version 		$Id:$
 * @name			Boletines
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_boletin
 * @subpackage		com_boletin.site
 * @copyright		
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

// Add css files for the boletin component and categories if they exist
$this->document->addStyleSheet(JUri::root().'media/com_boletin/css/site_boletin.css');
$this->document->addStyleSheet(JUri::root().'media/com_boletin/css/site_tfjfa_bacuerdos.css');

if ($lang->isRTL())
{
	$this->document->addStyleSheet(JUri::root().'media/com_boletin/css/site_boletin-rtl.css');
	$this->document->addStyleSheet(JUri::root().'media/com_boletin/css/site_tfjfa_bacuerdos-rtl.css');
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

$layout		= $this->params->get('tfjfa_bacuerdo_layout', 'default');

// Get from global settings the text to use for an empty field
$component = JComponentHelper::getComponent( 'com_boletin' );
$empty = $component->params->get('default_empty_field', '');

/*
 *	Layout HTML
 */
?>
<noscript>
<p style="color: red;"><?php echo JText::_('COM_BOLETIN_WARNING_NOSCRIPT'); ?><p>
</noscript>
<div class="boletin tfjfa_bacuerdos-list<?php echo $this->params->get('pageclass_sfx');?>">
	<?php if ($this->params->get('show_page_heading')): ?>
		<div class="page-header">
			<h1><?php echo $this->escape($this->params->get('page_heading')); ?></h1>
		</div>
	<?php endif; ?>

	<?php
		$can_edit = 0;$can_delete = 0;
		$show_actions = false;
		if ($this->params->get('show_tfjfa_bacuerdo_icons',1) >= 0) :
			foreach ($this->items as $i => $item) :
				if ($item->params->get('access-edit',1) OR $item->params->get('access-delete',1)) :
					$show_actions = true;
					continue;
				endif;
			endforeach;
		endif;
	?>
	<form action="<?php echo htmlspecialchars(JUri::getInstance()->toString()); ?>" method="post" name="adminForm" id="adminForm">
		<?php if (($this->params->get('show_tfjfa_bacuerdo_filter_field') != '' AND $this->params->get('show_tfjfa_bacuerdo_filter_field') != 'hide')) :?>
			<div class="filter-search">
				<?php if ($this->params->get('show_tfjfa_bacuerdo_filter_field') != '' AND $this->params->get('show_tfjfa_bacuerdo_filter_field') != 'hide') :?>
                <div class="input-append">
					<input type="text" name="filter_search" id="filter_search" value="<?php echo $this->escape($this->state->get('filter.search')); ?>" onchange="document.adminForm.submit();" title="<?php echo JText::_('COM_BOLETIN_FILTER_SEARCH_DESC'); ?>" placeholder="<?php echo JText::_('COM_BOLETIN_'.$this->params->get('show_tfjfa_bacuerdo_filter_field').'_FILTER_LABEL'); ?>" />
                    <button type="submit" class="btn hasTooltip" title="" data-original-title="<?= JText::_('JSEARCH_FILTER_SUBMIT') ?>"> <i class="icon-search"></i> </button>
				</div>
                <!--<button type="button" class="btn hasTooltip js-stools-btn-clear" title="" data-original-title="<?= JText::_('JSEARCH_FILTER_CLEAR') ?>"><?= JText::_('JSEARCH_FILTER_CLEAR') ?></button>-->
				<?php endif; ?>	
				<?php if ($this->params->get('show_tfjfa_bacuerdo_category',1)) : ?>
				<select name="filter_category_id" onchange="this.form.submit()">
					<option value=""><?php echo JText::_('JOPTION_SELECT_CATEGORY');?></option>
					<?php echo JHtml::_('select.options', JHtml::_('category.options', 'com_boletin'), 'value', 'text', $this->state->get('filter.category_id'));?>
				</select>
				<?php endif; ?>	
			</div>
		<?php endif; ?>

		<?php if ($this->params->get('show_tfjfa_bacuerdo_pagination_limit')) : ?>
			<div class="display-limit">
				<?php echo JText::_('JGLOBAL_DISPLAY_NUM'); ?>&#160;
				<?php echo $this->pagination->getLimitBox(); ?>
			</div>
		<?php endif; ?>	
		<div style="clear:both;"></div>				
		<?php if (empty($this->items)) : ?>

			<?php if ($this->params->get('show_no_tfjfa_bacuerdos',1)) : ?>
			<p><?php echo JText::_('COM_BOLETIN_TFJFA_BACUERDOS_NO_ITEMS'); ?></p>
			<?php endif; ?>

		<?php else : ?>
		<div style="overflow-x:auto;">
			<table class="table table-striped" id="tfjfa_bacuerdos" style="margin-bottom: 200px;">
			<?php if ($this->params->get('show_tfjfa_bacuerdo_headings',1)) :?>
			<thead>
				<tr>
					<th width="1%" style="display:none;">
					</th>				
					<?php if ($date = $this->params->get('list_show_tfjfa_bacuerdo_date')) : ?>
						<th class="list-date" id="tableOrderingdate">
							<?php echo JHtml::_('grid.sort', 'COM_BOLETIN_FIELD_'.JString::strtoupper($date).'_LABEL', 'a.'.$date, $list_dirn, $list_order); ?>
						</th>
					<?php endif; ?>

					<?php if ($this->params->get('list_show_tfjfa_bacuerdo_fecha_boletin',1)) : ?>
						<th class="list-fecha_boletin" id="tableOrderingfecha_boletin">
							<?php echo JTEXT::_('COM_BOLETIN_TFJFA_BACUERDOS_HEADING_FECHA_BOLETIN'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_tfjfa_bacuerdo_region',1)) : ?>
						<th class="list-region" id="tableOrderingregion">
							<?php echo JTEXT::_('COM_BOLETIN_TFJFA_BACUERDOS_HEADING_REGION'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_tfjfa_bacuerdo_instancia',1)) : ?>
						<th class="list-instancia" id="tableOrderinginstancia">
							<?php echo JTEXT::_('COM_BOLETIN_TFJFA_BACUERDOS_HEADING_INSTANCIA'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_tfjfa_bacuerdo_expediente',1)) : ?>
						<th class="list-expediente" id="tableOrderingexpediente">
							<?php echo JTEXT::_('COM_BOLETIN_TFJFA_BACUERDOS_HEADING_EXPEDIENTE'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_tfjfa_bacuerdo_actor',1)) : ?>
						<th class="list-actor" id="tableOrderingactor">
							<?php echo JTEXT::_('COM_BOLETIN_TFJFA_BACUERDOS_HEADING_ACTOR'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_tfjfa_bacuerdo_parte_a_notificar',1)) : ?>
						<th class="list-parte_a_notificar" id="tableOrderingparte_a_notificar">
							<?php echo JTEXT::_('COM_BOLETIN_TFJFA_BACUERDOS_HEADING_PARTE_A_NOTIFICAR'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_tfjfa_bacuerdo_auto_o_resolucion',1)) : ?>
						<th class="list-auto_o_resolucion" id="tableOrderingauto_o_resolucion">
							<?php echo JTEXT::_('COM_BOLETIN_TFJFA_BACUERDOS_HEADING_AUTO_O_RESOLUCION'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_tfjfa_bacuerdo_ordering',0)) : ?>
						<th width="10%">
							<?php echo JHtml::_('grid.sort',  'COM_BOLETIN_HEADING_ORDERING', 'a.ordering', $list_dirn, $list_order); ?>
						</th>
					<?php endif; ?>	
					<?php if ($show_actions) : ?>
						<th width="12%" class="list-actions">
							<?php echo JText::_('COM_BOLETIN_HEADING_ACTIONS'); ?>						
						</th> 					
					<?php endif; ?>
				</tr>
			</thead>
			<?php endif; ?>

			<tbody>

				<?php foreach ($this->items as $i => $item) :
				
							
				?>			
					<?php $params = $item->params; ?>		

						<tr class="cat-list-row<?php echo $i % 2; ?>">
					<td class="center" style="display:none;">
						<?php echo JHtml::_('grid.id', $i, $item->id); ?>
					</td>				

					<?php if ($this->params->get('list_show_tfjfa_bacuerdo_date')) : ?>
						<td class="list-date">
							<time datetime="<?php echo JHtml::_('date', $item->display_date, 'c'); ?>">
								<?php echo JHtml::_('date',$item->display_date, $this->escape($this->params->get('tfjfa_bacuerdo_date_format', JText::_('DATE_FORMAT_LC3')))); ?>
							</time>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_tfjfa_bacuerdo_category',0)) : ?>
						<td class="list-category">
							<?php 
								if (!empty($item->category_title )) :								
									echo $this->escape($item->category_title);
								else:
									echo $empty;
								endif;								
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_tfjfa_bacuerdo_fecha_boletin',1)) : ?>
						<td class="list-fecha_boletin">
							<?php 
								echo ($item->fecha_boletin != '' AND $item->fecha_boletin != '0000-00-00 00:00:00') ? JHtml::date($item->fecha_boletin, 'Y-m-d', true) : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_tfjfa_bacuerdo_region',1)) : ?>
						<td class="list-region">
							<?php 
								echo $item->region != '' ? $item->region : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_tfjfa_bacuerdo_instancia',1)) : ?>
						<td class="list-instancia">
							<?php 
								echo $item->instancia != '' ? $item->instancia : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_tfjfa_bacuerdo_expediente',1)) : ?>
						<td class="list-expediente">
							<?php 
								echo $item->expediente != '' ? $item->expediente : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_tfjfa_bacuerdo_actor',1)) : ?>
						<td class="list-actor">
							<?php 
								echo $item->actor != '' ? $item->actor : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_tfjfa_bacuerdo_parte_a_notificar',1)) : ?>
						<td class="list-parte_a_notificar">
							<?php 
								echo $item->parte_a_notificar != '' ? $item->parte_a_notificar : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_tfjfa_bacuerdo_auto_o_resolucion',1)) : ?>
						<td class="list-auto_o_resolucion">
							<?php 
								echo $item->auto_o_resolucion != '' ? $item->auto_o_resolucion : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_tfjfa_bacuerdo_ordering',0)) : ?>
						<td class="list-order">
							<?php echo $item->ordering; ?>
						</td>
					<?php endif; ?>
					
					<?php if ($show_actions) : ?>
						<td class="list-actions">
                        	<div class="btn-group pull-right">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <span class="icon-cog"></span> <span class="caret"></span> </a>
                                <ul class="dropdown-menu">
							<?php if ($params->get('show_tfjfa_bacuerdo_print_icon')) : ?>
								<li class="print-icon">
										<?php echo JHtml::_('tfjfa_bacuerdoicon.print_popup',  $item, $params); ?>
								</li>
							<?php endif; ?>

							<?php if ($params->get('show_tfjfa_bacuerdo_email_icon')) : ?>
								<li class="email-icon">
										<?php echo JHtml::_('tfjfa_bacuerdoicon.email',  $item, $params); ?>
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
			<?php if (($this->params->def('show_tfjfa_bacuerdo_pagination', 2) == 1  OR ($this->params->get('show_tfjfa_bacuerdo_pagination') == 2)) AND ($this->pagination->get('pages.total') > 1)) : ?>
			<div class="pagination">

				<?php if ($this->params->def('show_tfjfa_bacuerdo_pagination_results', 0)) : ?>
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
		<?php // Code to add a link to submit an tfjfa_bacuerdo. ?>
		<?php if ($this->params->get('show_tfjfa_bacuerdo_add_link', 1)) : ?>
			<?php echo JHtml::_('tfjfa_bacuerdoicon.create', $this->params); ?>
		<?php endif; ?>		
		<?php 
			if($user->id == 1){
				//JHtml::_('tfjfa_bacuerdoicon.create', $this->params); 
	            echo '<span class="hasTooltip tip" title="Export"><a href="index.php?task=tfjfa_bacuerdos.export" class="btn btn-primary"><span class="icon-download"></span>Export</a></span>';
			}
        ?>
	</form>
</div>

<?php if ($can_edit AND $params->get('save_history') AND $params->get('tfjfa_bacuerdo_save_history')) : ?>
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
	modalBody.prepend('<iframe class="iframe" src="index.php?option=com_boletin&task=tfjfa_bacuerdo.showHistory&item_id='+item_id+'" name="titulo" height="450"></iframe>');
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