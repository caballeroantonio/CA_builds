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
$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_expedientes.css');

if ($lang->isRTL())
{
	$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_jtca-rtl.css');
	$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_expedientes-rtl.css');
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

$layout		= $this->params->get('expediente_layout', 'default');

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
<div class="jtca expedientes-list<?php echo $this->params->get('pageclass_sfx');?>">
	<?php if ($this->params->get('show_page_heading')): ?>
		<div class="page-header">
			<h1><?php echo $this->escape($this->params->get('page_heading')); ?></h1>
		</div>
	<?php endif; ?>

	<?php
		$can_edit = 0;$can_delete = 0;
		$show_actions = false;
		if ($this->params->get('show_expediente_icons',1) >= 0) :
			foreach ($this->items as $i => $item) :
				if ($item->params->get('access-edit',1) OR $item->params->get('access-delete',1)) :
					$show_actions = true;
					continue;
				endif;
			endforeach;
		endif;
	?>
	<form action="<?php echo htmlspecialchars(JUri::getInstance()->toString()); ?>" method="post" name="adminForm" id="adminForm">
		<?php if (($this->params->get('show_expediente_filter_field') != '' AND $this->params->get('show_expediente_filter_field') != 'hide')) :?>
			<div class="filter-search">
				<?php if ($this->params->get('show_expediente_filter_field') != '' AND $this->params->get('show_expediente_filter_field') != 'hide') :?>
					<input type="text" name="filter_search" id="filter_search" value="<?php echo $this->escape($this->state->get('filter.search')); ?>" onchange="document.adminForm.submit();" title="<?php echo JText::_('COM_JTCA_FILTER_SEARCH_DESC'); ?>" placeholder="<?php echo JText::_('COM_JTCA_'.$this->params->get('show_expediente_filter_field').'_FILTER_LABEL'); ?>" />
				<?php endif; ?>	
			</div>
		<?php endif; ?>

		<?php if ($this->params->get('show_expediente_pagination_limit')) : ?>
			<div class="display-limit">
				<?php echo JText::_('JGLOBAL_DISPLAY_NUM'); ?>&#160;
				<?php echo $this->pagination->getLimitBox(); ?>
			</div>
		<?php endif; ?>	
		<div style="clear:both;"></div>				
		<?php if (empty($this->items)) : ?>

			<?php if ($this->params->get('show_no_expedientes',1)) : ?>
			<p><?php echo JText::_('COM_JTCA_EXPEDIENTES_NO_ITEMS'); ?></p>
			<?php endif; ?>

		<?php else : ?>
		<div style="overflow-x:auto;">
			<table class="table table-striped" id="expedientes" style="margin-bottom: 200px;">
			<?php if ($this->params->get('show_expediente_headings',1)) :?>
			<thead>
				<tr>
					<th width="1%" style="display:none;">
					</th>				
					<th class="list-name" id="tableOrderingname">
					<?php  echo JHtml::_('grid.sort', 'COM_JTCA_HEADING_NAME', 'a.name', $list_dirn, $list_order) ; ?>
					</th>
					<?php if ($date = $this->params->get('list_show_expediente_date')) : ?>
						<th class="list-date" id="tableOrderingdate">
							<?php echo JHtml::_('grid.sort', 'COM_JTCA_FIELD_'.JString::strtoupper($date).'_LABEL', 'a.'.$date, $list_dirn, $list_order); ?>
						</th>
					<?php endif; ?>

					<?php if ($this->params->get('list_show_expediente_created_by',0)) : ?>
						<th class="list-created_by" id="tableOrderingcreated_by">
							<?php echo JHtml::_('grid.sort', 'COM_JTCA_HEADING_CREATED_BY', 'created_by_name', $list_dirn, $list_order); ?>
						</th>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_expediente_id_organo',1)) : ?>
						<th class="list-id_organo" id="tableOrderingid_organo">
							<?php echo JTEXT::_('COM_JTCA_EXPEDIENTES_HEADING_ID_ORGANO'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_expediente_numero',1)) : ?>
						<th class="list-numero" id="tableOrderingnumero">
							<?php echo JTEXT::_('COM_JTCA_EXPEDIENTES_HEADING_NUMERO'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_expediente_ano',1)) : ?>
						<th class="list-ano" id="tableOrderingano">
							<?php echo JTEXT::_('COM_JTCA_EXPEDIENTES_HEADING_ANO'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_expediente_bis',1)) : ?>
						<th class="list-bis" id="tableOrderingbis">
							<?php echo JTEXT::_('COM_JTCA_EXPEDIENTES_HEADING_BIS'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_expediente_nrecurso',1)) : ?>
						<th class="list-nrecurso" id="tableOrderingnrecurso">
							<?php echo JTEXT::_('COM_JTCA_EXPEDIENTES_HEADING_NRECURSO'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_expediente_id_tipoarchivo',1)) : ?>
						<th class="list-id_tipoarchivo" id="tableOrderingid_tipoarchivo">
							<?php echo JTEXT::_('COM_JTCA_EXPEDIENTES_HEADING_ID_TIPOARCHIVO'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_expediente_txt_tipojuicio',1)) : ?>
						<th class="list-txt_tipojuicio" id="tableOrderingtxt_tipojuicio">
							<?php echo JTEXT::_('COM_JTCA_EXPEDIENTES_HEADING_TXT_TIPOJUICIO'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_expediente_id_tipojuicio',1)) : ?>
						<th class="list-id_tipojuicio" id="tableOrderingid_tipojuicio">
							<?php echo JTEXT::_('COM_JTCA_EXPEDIENTES_HEADING_ID_TIPOJUICIO'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_expediente_id_opc',1)) : ?>
						<th class="list-id_opc" id="tableOrderingid_opc">
							<?php echo JTEXT::_('COM_JTCA_EXPEDIENTES_HEADING_ID_OPC'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_expediente_txt_opc',1)) : ?>
						<th class="list-txt_opc" id="tableOrderingtxt_opc">
							<?php echo JTEXT::_('COM_JTCA_EXPEDIENTES_HEADING_TXT_OPC'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_expediente_delito',1)) : ?>
						<th class="list-delito" id="tableOrderingdelito">
							<?php echo JTEXT::_('COM_JTCA_EXPEDIENTES_HEADING_DELITO'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_expediente_pena',1)) : ?>
						<th class="list-pena" id="tableOrderingpena">
							<?php echo JTEXT::_('COM_JTCA_EXPEDIENTES_HEADING_PENA'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_expediente_id_exp_orig',1)) : ?>
						<th class="list-id_exp_orig" id="tableOrderingid_exp_orig">
							<?php echo JTEXT::_('COM_JTCA_EXPEDIENTES_HEADING_ID_EXP_ORIG'); ?>
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
					<td class="list-name">
						<a href="<?php echo JRoute::_(JtcaHelperRoute::getExpedienteRoute($item->slug, 
																									$layout,									
																									$params->get('keep_expediente_itemid'))); ?>" 
																									>
								<?php echo $this->escape($item->name); ?>
						</a>
					</td>

					<?php if ($this->params->get('list_show_expediente_date')) : ?>
						<td class="list-date">
							<time datetime="<?php echo JHtml::_('date', $item->display_date, 'c'); ?>">
								<?php echo JHtml::_('date',$item->display_date, $this->escape($this->params->get('expediente_date_format', JText::_('DATE_FORMAT_LC3')))); ?>
							</time>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_expediente_created_by',0)) : ?>
						<td class="createdby">
							<?php 
								$created_by =  $item->created_by;
								$created_by = ($item->created_by_name ? $item->created_by_name : $created_by);
								if (!empty($item->created_by )) :
									if ($this->params->get('link_expediente_created_by') == 1) :
										$created_by = JHtml::_('link', JRoute::_('index.php?option=com_users&view=profile&id='.$item->created_by), $created_by); 
									endif;
									if ($this->params->get('show_expediente_headings',1)) :
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
					<?php if ($this->params->get('list_show_expediente_id_organo',1)) : ?>
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
					<?php if ($this->params->get('list_show_expediente_numero',1)) : ?>
						<td class="list-numero">
							<?php 
								echo $item->numero != '' ? $item->numero : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_expediente_ano',1)) : ?>
						<td class="list-ano">
							<?php 
								echo $item->ano != '' ? $item->ano : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_expediente_bis',1)) : ?>
						<td class="list-bis">
							<?php 
								echo $item->bis != '' ? $item->bis : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_expediente_nrecurso',1)) : ?>
						<td class="list-nrecurso">
							<?php 
								echo $item->nrecurso != '' ? $item->nrecurso : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_expediente_id_tipoarchivo',1)) : ?>
						<td class="list-id_tipoarchivo">
							<?php 
								echo $item->id_tipoarchivo != '' ? $item->id_tipoarchivo : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_expediente_txt_tipojuicio',1)) : ?>
						<td class="list-txt_tipojuicio">
							<?php 
								echo $item->txt_tipojuicio != '' ? $item->txt_tipojuicio : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_expediente_id_tipojuicio',1)) : ?>
						<td class="list-id_tipojuicio">
							<?php 
								echo $item->id_tipojuicio != '' ? $item->id_tipojuicio : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_expediente_id_opc',1)) : ?>
						<td class="list-id_opc">
							<?php 
								echo $item->id_opc != '' ? $item->id_opc : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_expediente_txt_opc',1)) : ?>
						<td class="list-txt_opc">
							<?php 
								echo $item->txt_opc != '' ? $item->txt_opc : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_expediente_delito',1)) : ?>
						<td class="list-delito">
							<?php 
								echo $item->delito != '' ? $item->delito : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_expediente_pena',1)) : ?>
						<td class="list-pena">
							<?php 
								echo $item->pena != '' ? $item->pena : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_expediente_id_exp_orig',1)) : ?>
						<td class="list-id_exp_orig">
							<?php 
								if ($params->get('list_link_expediente_id_exp_orig')) :
									echo '<a href="'.JRoute::_(JtcaHelperRoute::getExpedienteRoute($item->id_exp_orig, 0)).'">'.JString::trim($item->e_expediente_name).'</a>';
								else :
									echo JString::trim($item->e_expediente_name);
								endif; 
							?>
						</td>
					<?php endif; ?>
					<?php if ($show_actions) : ?>
						<td class="list-actions">
                        	<div class="btn-group pull-right">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <span class="icon-cog"></span> <span class="caret"></span> </a>
                                <ul class="dropdown-menu">
							<?php if ($params->get('show_expediente_print_icon')) : ?>
								<li class="print-icon">
										<?php echo JHtml::_('expedienteicon.print_popup',  $item, $params); ?>
								</li>
							<?php endif; ?>

							<?php if ($params->get('show_expediente_email_icon')) : ?>
								<li class="email-icon">
										<?php echo JHtml::_('expedienteicon.email',  $item, $params); ?>
								</li>
							<?php endif; ?>
								<?php if ($can_edit ) : ?>
                                    <li class="edit-icon">
                                        <?php echo JHtml::_('expedienteicon.edit',$item, $params); ?>
                                    </li>
                                <?php endif; ?>					
                                <?php if ($can_delete) : ?>
                                    <li class="delete-icon">
                                        <?php echo JHtml::_('expedienteicon.delete',$item, $params); ?>
                                    </li>
                                <?php endif; ?>
							<?php if ($can_edit AND $params->get('save_history') AND $params->get('expediente_save_history')) : ?>
								<li class="version-icon">
									<?php echo JHtml::_('expedienteicon.versions',$item, $params); ?>
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
			<?php if (($this->params->def('show_expediente_pagination', 2) == 1  OR ($this->params->get('show_expediente_pagination') == 2)) AND ($this->pagination->get('pages.total') > 1)) : ?>
			<div class="pagination">

				<?php if ($this->params->def('show_expediente_pagination_results', 0)) : ?>
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
		<?php // Code to add a link to submit an expediente. ?>
		<?php if ($this->params->get('show_expediente_add_link', 1)) : ?>
			<?php if ($can_create) : ?>
				<?php echo JHtml::_('expedienteicon.create', $this->params); ?>
			<?php  endif; ?>
		<?php endif; ?>		
                <?php echo '<button>export</button>'//JHtml::_('expedienteicon.create', $this->params); ?>
	</form>
</div>

<?php if ($can_edit AND $params->get('save_history') AND $params->get('expediente_save_history')) : ?>
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
	modalBody.prepend('<iframe class="iframe" src="index.php?option=com_jtca&task=expediente.showHistory&item_id='+item_id+'" name="titulo" height="450"></iframe>');
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