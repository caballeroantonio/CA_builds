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
$this->document->addStyleSheet(JUri::root().'media/com_boletin/css/site_srsps_bacuerdos.css');

if ($lang->isRTL())
{
	$this->document->addStyleSheet(JUri::root().'media/com_boletin/css/site_boletin-rtl.css');
	$this->document->addStyleSheet(JUri::root().'media/com_boletin/css/site_srsps_bacuerdos-rtl.css');
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

$layout		= $this->params->get('srsps_bacuerdo_layout', 'default');

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
<div class="boletin srsps_bacuerdos-list<?php echo $this->params->get('pageclass_sfx');?>">
	<?php if ($this->params->get('show_page_heading')): ?>
		<div class="page-header">
			<h1><?php echo $this->escape($this->params->get('page_heading')); ?></h1>
		</div>
	<?php endif; ?>

	<?php
		$can_edit = 0;$can_delete = 0;
		$show_actions = false;
		if ($this->params->get('show_srsps_bacuerdo_icons',1) >= 0) :
			foreach ($this->items as $i => $item) :
				if ($item->params->get('access-edit',1) OR $item->params->get('access-delete',1)) :
					$show_actions = true;
					continue;
				endif;
			endforeach;
		endif;
	?>
	<form action="<?php echo htmlspecialchars(JUri::getInstance()->toString()); ?>" method="post" name="adminForm" id="adminForm">
		<?php if (($this->params->get('show_srsps_bacuerdo_filter_field') != '' AND $this->params->get('show_srsps_bacuerdo_filter_field') != 'hide')) :?>
			<div class="filter-search">
				<?php if ($this->params->get('show_srsps_bacuerdo_filter_field') != '' AND $this->params->get('show_srsps_bacuerdo_filter_field') != 'hide') :?>
                <div class="input-append">
					<input type="text" name="filter_search" id="filter_search" value="<?php echo $this->escape($this->state->get('filter.search')); ?>" onchange="document.adminForm.submit();" title="<?php echo JText::_('COM_BOLETIN_FILTER_SEARCH_DESC'); ?>" placeholder="<?php echo JText::_('COM_BOLETIN_'.$this->params->get('show_srsps_bacuerdo_filter_field').'_FILTER_LABEL'); ?>" />
                    <button type="submit" class="btn hasTooltip" title="" data-original-title="<?= JText::_('JSEARCH_FILTER_SUBMIT') ?>"> <i class="icon-search"></i> </button>
				</div>
                <!--<button type="button" class="btn hasTooltip js-stools-btn-clear" title="" data-original-title="<?= JText::_('JSEARCH_FILTER_CLEAR') ?>"><?= JText::_('JSEARCH_FILTER_CLEAR') ?></button>-->
				<?php endif; ?>	
			</div>
		<?php endif; ?>

		<?php if ($this->params->get('show_srsps_bacuerdo_pagination_limit')) : ?>
			<div class="display-limit">
				<?php echo JText::_('JGLOBAL_DISPLAY_NUM'); ?>&#160;
				<?php echo $this->pagination->getLimitBox(); ?>
			</div>
		<?php endif; ?>	
		<div style="clear:both;"></div>				
		<?php if (empty($this->items)) : ?>

			<?php if ($this->params->get('show_no_srsps_bacuerdos',1)) : ?>
			<p><?php echo JText::_('COM_BOLETIN_SRSPS_BACUERDOS_NO_ITEMS'); ?></p>
			<?php endif; ?>

		<?php else : ?>
		<div style="overflow-x:auto;">
			<table class="table table-striped" id="srsps_bacuerdos" style="margin-bottom: 200px;">
			<?php if ($this->params->get('show_srsps_bacuerdo_headings',1)) :?>
			<thead>
				<tr>
					<th width="1%" style="display:none;">
					</th>				
					<?php if ($date = $this->params->get('list_show_srsps_bacuerdo_date')) : ?>
						<th class="list-date" id="tableOrderingdate">
							<?php echo JHtml::_('grid.sort', 'COM_BOLETIN_FIELD_'.JString::strtoupper($date).'_LABEL', 'a.'.$date, $list_dirn, $list_order); ?>
						</th>
					<?php endif; ?>

					<?php if ($this->params->get('list_show_srsps_bacuerdo_rfc',1)) : ?>
						<th class="list-rfc" id="tableOrderingrfc">
							<?php echo JTEXT::_('COM_BOLETIN_SRSPS_BACUERDOS_HEADING_RFC'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_srsps_bacuerdo_nombre',1)) : ?>
						<th class="list-nombre" id="tableOrderingnombre">
							<?php echo JTEXT::_('COM_BOLETIN_SRSPS_BACUERDOS_HEADING_NOMBRE'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_srsps_bacuerdo_oficio',1)) : ?>
						<th class="list-oficio" id="tableOrderingoficio">
							<?php echo JTEXT::_('COM_BOLETIN_SRSPS_BACUERDOS_HEADING_OFICIO'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_srsps_bacuerdo_fecha_oficio',1)) : ?>
						<th class="list-fecha_oficio" id="tableOrderingfecha_oficio">
							<?php echo JTEXT::_('COM_BOLETIN_SRSPS_BACUERDOS_HEADING_FECHA_OFICIO'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_srsps_bacuerdo_emisor',1)) : ?>
						<th class="list-emisor" id="tableOrderingemisor">
							<?php echo JTEXT::_('COM_BOLETIN_SRSPS_BACUERDOS_HEADING_EMISOR'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_srsps_bacuerdo_id_medio_notificacion',1)) : ?>
						<th class="list-id_medio_notificacion" id="tableOrderingid_medio_notificacion">
							<?php echo JTEXT::_('COM_BOLETIN_SRSPS_BACUERDOS_HEADING_ID_MEDIO_NOTIFICACION'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_srsps_bacuerdo_fecha_notificacion',1)) : ?>
						<th class="list-fecha_notificacion" id="tableOrderingfecha_notificacion">
							<?php echo JTEXT::_('COM_BOLETIN_SRSPS_BACUERDOS_HEADING_FECHA_NOTIFICACION'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_srsps_bacuerdo_fecha_surte',1)) : ?>
						<th class="list-fecha_surte" id="tableOrderingfecha_surte">
							<?php echo JTEXT::_('COM_BOLETIN_SRSPS_BACUERDOS_HEADING_FECHA_SURTE'); ?>
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

					<?php if ($this->params->get('list_show_srsps_bacuerdo_date')) : ?>
						<td class="list-date">
							<time datetime="<?php echo JHtml::_('date', $item->display_date, 'c'); ?>">
								<?php echo JHtml::_('date',$item->display_date, $this->escape($this->params->get('srsps_bacuerdo_date_format', JText::_('DATE_FORMAT_LC3')))); ?>
							</time>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_srsps_bacuerdo_rfc',1)) : ?>
						<td class="list-rfc">
							<?php 
								echo $item->rfc != '' ? $item->rfc : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_srsps_bacuerdo_nombre',1)) : ?>
						<td class="list-nombre">
							<?php 
								echo $item->nombre != '' ? $item->nombre : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_srsps_bacuerdo_oficio',1)) : ?>
						<td class="list-oficio">
							<?php 
								echo $item->oficio != '' ? $item->oficio : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_srsps_bacuerdo_fecha_oficio',1)) : ?>
						<td class="list-fecha_oficio">
							<?php 
								echo ($item->fecha_oficio != '' AND $item->fecha_oficio != '0000-00-00 00:00:00') ? JHtml::date($item->fecha_oficio, 'Y-m-d', true) : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_srsps_bacuerdo_emisor',1)) : ?>
						<td class="list-emisor">
							<?php 
								echo $item->emisor != '' ? $item->emisor : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_srsps_bacuerdo_id_medio_notificacion',1)) : ?>
						<td class="list-id_medio_notificacion">
							<?php 
								switch ($item->id_medio_notificacion) :
									case 'Estrados de la autoridad':
										echo JText::_('COM_BOLETIN_SRSPS_BACUERDOS_ID_MEDIO_NOTIFICACION_VALUE_ESTRADOS_DE_LA_AUTORIDAD');
										break;
									case 'Notificación personal':
										echo JText::_('COM_BOLETIN_SRSPS_BACUERDOS_ID_MEDIO_NOTIFICACION_VALUE_NOTIFICACION_PERSONAL');
										break;
									case 'Notificación por Buzón Tributario':
										echo JText::_('COM_BOLETIN_SRSPS_BACUERDOS_ID_MEDIO_NOTIFICACION_VALUE_NOTIFICACION_POR_BUZON_TRIBUTARIO');
										break;
									default :
										echo $empty;
										break;
								endswitch;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_srsps_bacuerdo_fecha_notificacion',1)) : ?>
						<td class="list-fecha_notificacion">
							<?php 
								echo ($item->fecha_notificacion != '' AND $item->fecha_notificacion != '0000-00-00 00:00:00') ? JHtml::date($item->fecha_notificacion, 'Y-m-d', true) : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_srsps_bacuerdo_fecha_surte',1)) : ?>
						<td class="list-fecha_surte">
							<?php 
								echo ($item->fecha_surte != '' AND $item->fecha_surte != '0000-00-00 00:00:00') ? JHtml::date($item->fecha_surte, 'Y-m-d', true) : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($show_actions) : ?>
						<td class="list-actions">
                        	<div class="btn-group pull-right">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <span class="icon-cog"></span> <span class="caret"></span> </a>
                                <ul class="dropdown-menu">
							<?php if ($params->get('show_srsps_bacuerdo_print_icon')) : ?>
								<li class="print-icon">
										<?php echo JHtml::_('srsps_bacuerdoicon.print_popup',  $item, $params); ?>
								</li>
							<?php endif; ?>

							<?php if ($params->get('show_srsps_bacuerdo_email_icon')) : ?>
								<li class="email-icon">
										<?php echo JHtml::_('srsps_bacuerdoicon.email',  $item, $params); ?>
								</li>
							<?php endif; ?>
								<?php if ($can_edit ) : ?>
                                    <li class="edit-icon">
                                        <?php echo JHtml::_('srsps_bacuerdoicon.edit',$item, $params); ?>
                                    </li>
                                <?php endif; ?>					
                                <?php if ($can_delete) : ?>
                                    <li class="delete-icon">
                                        <?php echo JHtml::_('srsps_bacuerdoicon.delete',$item, $params); ?>
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
			<?php if (($this->params->def('show_srsps_bacuerdo_pagination', 2) == 1  OR ($this->params->get('show_srsps_bacuerdo_pagination') == 2)) AND ($this->pagination->get('pages.total') > 1)) : ?>
			<div class="pagination">

				<?php if ($this->params->def('show_srsps_bacuerdo_pagination_results', 0)) : ?>
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
		<?php // Code to add a link to submit an srsps_bacuerdo. ?>
		<?php if ($this->params->get('show_srsps_bacuerdo_add_link', 1)) : ?>
			<?php if ($can_create) : ?>
				<?php echo JHtml::_('srsps_bacuerdoicon.create', $this->params); ?>
			<?php  endif; ?>
		<?php endif; ?>		
		<?php 
			if($user->id == 1){
				//JHtml::_('srsps_bacuerdoicon.create', $this->params); 
	            echo '<span class="hasTooltip tip" title="Export"><a href="index.php?task=srsps_bacuerdos.export" class="btn btn-primary"><span class="icon-download"></span>Export</a></span>';
			}
        ?>
	</form>
</div>

<?php if ($can_edit AND $params->get('save_history') AND $params->get('srsps_bacuerdo_save_history')) : ?>
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
	modalBody.prepend('<iframe class="iframe" src="index.php?option=com_boletin&task=srsps_bacuerdo.showHistory&item_id='+item_id+'" name="titulo" height="450"></iframe>');
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