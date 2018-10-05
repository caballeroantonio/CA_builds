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
$this->document->addStyleSheet(JUri::root().'media/com_boletin/css/site_tsjcdmx_juzgado_acuerdos.css');

if ($lang->isRTL())
{
	$this->document->addStyleSheet(JUri::root().'media/com_boletin/css/site_boletin-rtl.css');
	$this->document->addStyleSheet(JUri::root().'media/com_boletin/css/site_tsjcdmx_juzgado_acuerdos-rtl.css');
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

$layout		= $this->params->get('tsjcdmx_juzgado_acuerdo_layout', 'default');

$can_create	= $user->authorise('core.create', 'com_boletin');
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
<div class="boletin tsjcdmx_juzgado_acuerdos-list<?php echo $this->params->get('pageclass_sfx');?>">
	<?php if ($this->params->get('show_page_heading')): ?>
		<div class="page-header">
			<h1><?php echo $this->escape($this->params->get('page_heading')); ?></h1>
		</div>
	<?php endif; ?>

	<?php
		$can_edit = 0;$can_delete = 0;
		$show_actions = false;
		if ($this->params->get('show_tsjcdmx_juzgado_acuerdo_icons',1) >= 0) :
			foreach ($this->items as $i => $item) :
				if ($item->params->get('access-edit',1) OR $item->params->get('access-delete',1)) :
					$show_actions = true;
					continue;
				endif;
			endforeach;
		endif;
	?>
	<form action="<?php echo htmlspecialchars(JUri::getInstance()->toString()); ?>" method="post" name="adminForm" id="adminForm">
		<?php if (($this->params->get('show_tsjcdmx_juzgado_acuerdo_filter_field') != '' AND $this->params->get('show_tsjcdmx_juzgado_acuerdo_filter_field') != 'hide')) :?>
			<div class="filter-search">
				<?php if ($this->params->get('show_tsjcdmx_juzgado_acuerdo_filter_field') != '' AND $this->params->get('show_tsjcdmx_juzgado_acuerdo_filter_field') != 'hide') :?>
                <div class="input-append">
					<input type="text" name="filter_search" id="filter_search" value="<?php echo $this->escape($this->state->get('filter.search')); ?>" onchange="document.adminForm.submit();" title="<?php echo JText::_('COM_BOLETIN_FILTER_SEARCH_DESC'); ?>" placeholder="<?php echo JText::_('COM_BOLETIN_'.$this->params->get('show_tsjcdmx_juzgado_acuerdo_filter_field').'_FILTER_LABEL'); ?>" />
                    <button type="submit" class="btn hasTooltip" title="" data-original-title="<?= JText::_('JSEARCH_FILTER_SUBMIT') ?>"> <i class="icon-search"></i> </button>
				</div>
                <!--<button type="button" class="btn hasTooltip js-stools-btn-clear" title="" data-original-title="<?= JText::_('JSEARCH_FILTER_CLEAR') ?>"><?= JText::_('JSEARCH_FILTER_CLEAR') ?></button>-->
				<?php endif; ?>	
			</div>
		<?php endif; ?>

		<?php if ($this->params->get('show_tsjcdmx_juzgado_acuerdo_pagination_limit')) : ?>
			<div class="display-limit">
				<?php echo JText::_('JGLOBAL_DISPLAY_NUM'); ?>&#160;
				<?php echo $this->pagination->getLimitBox(); ?>
			</div>
		<?php endif; ?>	
		<div style="clear:both;"></div>				
		<?php if (empty($this->items)) : ?>

			<?php if ($this->params->get('show_no_tsjcdmx_juzgado_acuerdos',1)) : ?>
			<p><?php echo JText::_('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_NO_ITEMS'); ?></p>
			<?php endif; ?>

		<?php else : ?>
		<div style="overflow-x:auto;">
			<table class="table table-striped" id="tsjcdmx_juzgado_acuerdos" style="margin-bottom: 200px;">
			<?php if ($this->params->get('show_tsjcdmx_juzgado_acuerdo_headings',1)) :?>
			<thead>
				<tr>
					<th width="1%" style="display:none;">
					</th>				
					<?php if ($date = $this->params->get('list_show_tsjcdmx_juzgado_acuerdo_date')) : ?>
						<th class="list-date" id="tableOrderingdate">
							<?php echo JHtml::_('grid.sort', 'COM_BOLETIN_FIELD_'.JString::strtoupper($date).'_LABEL', 'a.'.$date, $list_dirn, $list_order); ?>
						</th>
					<?php endif; ?>

					<?php if ($this->params->get('list_show_tsjcdmx_juzgado_acuerdo_fecha_acuerdo',1)) : ?>
						<th class="list-fecha_acuerdo" id="tableOrderingfecha_acuerdo">
							<?php echo JTEXT::_('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_HEADING_FECHA_ACUERDO'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_tsjcdmx_juzgado_acuerdo_fecha_boletin',1)) : ?>
						<th class="list-fecha_boletin" id="tableOrderingfecha_boletin">
							<?php echo JTEXT::_('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_HEADING_FECHA_BOLETIN'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_tsjcdmx_juzgado_acuerdo_juzgado',1)) : ?>
						<th class="list-juzgado" id="tableOrderingjuzgado">
							<?php echo JTEXT::_('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_HEADING_JUZGADO'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_tsjcdmx_juzgado_acuerdo_actor',1)) : ?>
						<th class="list-actor" id="tableOrderingactor">
							<?php echo JTEXT::_('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_HEADING_ACTOR'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_tsjcdmx_juzgado_acuerdo_demandado',1)) : ?>
						<th class="list-demandado" id="tableOrderingdemandado">
							<?php echo JTEXT::_('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_HEADING_DEMANDADO'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_tsjcdmx_juzgado_acuerdo_terceria',1)) : ?>
						<th class="list-terceria" id="tableOrderingterceria">
							<?php echo JTEXT::_('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_HEADING_TERCERIA'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_tsjcdmx_juzgado_acuerdo_tipo_juicio',1)) : ?>
						<th class="list-tipo_juicio" id="tableOrderingtipo_juicio">
							<?php echo JTEXT::_('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_HEADING_TIPO_JUICIO'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_tsjcdmx_juzgado_acuerdo_toca',1)) : ?>
						<th class="list-toca" id="tableOrderingtoca">
							<?php echo JTEXT::_('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_HEADING_TOCA'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_tsjcdmx_juzgado_acuerdo_anio',1)) : ?>
						<th class="list-anio" id="tableOrderinganio">
							<?php echo JTEXT::_('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_HEADING_ANIO'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_tsjcdmx_juzgado_acuerdo_tipo_resolucion',1)) : ?>
						<th class="list-tipo_resolucion" id="tableOrderingtipo_resolucion">
							<?php echo JTEXT::_('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_HEADING_TIPO_RESOLUCION'); ?>
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
				
					$can_edit	= $item->params->get('access-edit');
			
					$can_delete	= $item->params->get('access-delete');

							
				?>			
					<?php $params = $item->params; ?>		

						<tr class="cat-list-row<?php echo $i % 2; ?>">
					<td class="center" style="display:none;">
						<?php echo JHtml::_('grid.id', $i, $item->id); ?>
					</td>				

					<?php if ($this->params->get('list_show_tsjcdmx_juzgado_acuerdo_date')) : ?>
						<td class="list-date">
							<time datetime="<?php echo JHtml::_('date', $item->display_date, 'c'); ?>">
								<?php echo JHtml::_('date',$item->display_date, $this->escape($this->params->get('tsjcdmx_juzgado_acuerdo_date_format', JText::_('DATE_FORMAT_LC3')))); ?>
							</time>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_tsjcdmx_juzgado_acuerdo_fecha_acuerdo',1)) : ?>
						<td class="list-fecha_acuerdo">
							<?php 
								echo ($item->fecha_acuerdo != '' AND $item->fecha_acuerdo != '0000-00-00 00:00:00') ? JHtml::date($item->fecha_acuerdo, '%Y-%m-%d', true) : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_tsjcdmx_juzgado_acuerdo_fecha_boletin',1)) : ?>
						<td class="list-fecha_boletin">
							<?php 
								echo ($item->fecha_boletin != '' AND $item->fecha_boletin != '0000-00-00 00:00:00') ? JHtml::date($item->fecha_boletin, '%Y-%m-%d', true) : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_tsjcdmx_juzgado_acuerdo_juzgado',1)) : ?>
						<td class="list-juzgado">
							<?php 
								echo $item->juzgado != '' ? $item->juzgado : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_tsjcdmx_juzgado_acuerdo_actor',1)) : ?>
						<td class="list-actor">
							<?php 
								echo $item->actor != '' ? $item->actor : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_tsjcdmx_juzgado_acuerdo_demandado',1)) : ?>
						<td class="list-demandado">
							<?php 
								echo $item->demandado != '' ? $item->demandado : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_tsjcdmx_juzgado_acuerdo_terceria',1)) : ?>
						<td class="list-terceria">
							<?php 
								echo $item->terceria != '' ? $item->terceria : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_tsjcdmx_juzgado_acuerdo_tipo_juicio',1)) : ?>
						<td class="list-tipo_juicio">
							<?php 
								echo $item->tipo_juicio != '' ? $item->tipo_juicio : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_tsjcdmx_juzgado_acuerdo_toca',1)) : ?>
						<td class="list-toca">
							<?php 
								echo $item->toca != '' ? $item->toca : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_tsjcdmx_juzgado_acuerdo_anio',1)) : ?>
						<td class="list-anio">
							<?php 
								echo $item->anio != '' ? $item->anio : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_tsjcdmx_juzgado_acuerdo_tipo_resolucion',1)) : ?>
						<td class="list-tipo_resolucion">
							<?php 
								echo $item->tipo_resolucion != '' ? $item->tipo_resolucion : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($show_actions) : ?>
						<td class="list-actions">
                        	<div class="btn-group pull-right">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <span class="icon-cog"></span> <span class="caret"></span> </a>
                                <ul class="dropdown-menu">
							<?php if ($params->get('show_tsjcdmx_juzgado_acuerdo_print_icon')) : ?>
								<li class="print-icon">
										<?php echo JHtml::_('tsjcdmx_juzgado_acuerdoicon.print_popup',  $item, $params); ?>
								</li>
							<?php endif; ?>

							<?php if ($params->get('show_tsjcdmx_juzgado_acuerdo_email_icon')) : ?>
								<li class="email-icon">
										<?php echo JHtml::_('tsjcdmx_juzgado_acuerdoicon.email',  $item, $params); ?>
								</li>
							<?php endif; ?>
								<?php if ($can_edit ) : ?>
                                    <li class="edit-icon">
                                        <?php echo JHtml::_('tsjcdmx_juzgado_acuerdoicon.edit',$item, $params); ?>
                                    </li>
                                <?php endif; ?>					
                                <?php if ($can_delete) : ?>
                                    <li class="delete-icon">
                                        <?php echo JHtml::_('tsjcdmx_juzgado_acuerdoicon.delete',$item, $params); ?>
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
			<?php if (($this->params->def('show_tsjcdmx_juzgado_acuerdo_pagination', 2) == 1  OR ($this->params->get('show_tsjcdmx_juzgado_acuerdo_pagination') == 2)) AND ($this->pagination->get('pages.total') > 1)) : ?>
			<div class="pagination">

				<?php if ($this->params->def('show_tsjcdmx_juzgado_acuerdo_pagination_results', 0)) : ?>
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
		<?php // Code to add a link to submit an tsjcdmx_juzgado_acuerdo. ?>
		<?php if ($this->params->get('show_tsjcdmx_juzgado_acuerdo_add_link', 1)) : ?>
			<?php if ($can_create) : ?>
				<?php echo JHtml::_('tsjcdmx_juzgado_acuerdoicon.create', $this->params); ?>
			<?php  endif; ?>
		<?php endif; ?>		
		<?php 
			if($user->id == 1){
				//JHtml::_('tsjcdmx_juzgado_acuerdoicon.create', $this->params); 
	            echo '<span class="hasTooltip tip" title="Export"><a href="index.php?task=tsjcdmx_juzgado_acuerdos.export" class="btn btn-primary"><span class="icon-download"></span>Export</a></span>';
			}
        ?>
	</form>
</div>

<?php if ($can_edit AND $params->get('save_history') AND $params->get('tsjcdmx_juzgado_acuerdo_save_history')) : ?>
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
	modalBody.prepend('<iframe class="iframe" src="index.php?option=com_boletin&task=tsjcdmx_juzgado_acuerdo.showHistory&item_id='+item_id+'" name="titulo" height="450"></iframe>');
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