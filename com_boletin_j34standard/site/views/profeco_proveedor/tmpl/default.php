<?php
/**
 * @version 		$Id:$
 * @name			Boletines
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_boletin
 * @subpackage		com_boletin.admin
 * @copyright		
 * @license			GNU General Public License version 3 or later; See http://www.gnu.org/copyleft/gpl.html 
 * 
 * The following Component Architect header section must remain in any distribution of this file
 *
 * @CAversion		Id: default.php 571 2016-01-04 15:03:02Z BrianWade $
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
$this->document->addStyleSheet(JUri::root().'media/com_boletin/css/site_profeco_proveedores.css');

if ($lang->isRTL())
{
	$this->document->addStyleSheet(JUri::root().'media/com_boletin/css/site_boletin-rtl.css');
	$this->document->addStyleSheet(JUri::root().'media/com_boletin/css/site_profeco_proveedores-rtl.css');
}
				
// Add Javascript behaviors

/*
 *	Initialise values for the layout 
 */	
 
// Create shortcuts to some parameters.
$params		= &$this->item->params;
$user		= JFactory::getUser();

$can_edit	= $params->get('access-edit');
$can_delete	= $params->get('access-delete');
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
<div class="boletin profeco_proveedor-view<?php echo $params->get('pageclass_sfx')?>">
	<?php if ($this->params->get('show_page_heading')) : ?>
	<h1>
		<?php echo $this->escape($this->params->get('page_heading')); ?>
	</h1>
	<?php endif; ?>
	<?php if ($params->get('show_profeco_proveedor_icons',-1) >= 0) : ?>
		<?php if ($params->get('show_profeco_proveedor_print_icon') 
			OR $params->get('show_profeco_proveedor_email_icon') 
			OR $can_edit 
			OR $can_delete 
			): ?>
			<div class="btn-group pull-right">
				<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <span class="icon-cog"></span> <span class="caret"></span> </a>
				<ul class="dropdown-menu">
					<?php if (!$this->print) : ?>
							<?php if ($params->get('show_profeco_proveedor_print_icon')) : ?>
								<li class="print-icon">
										<?php echo JHtml::_('profeco_proveedoricon.print_popup',  $this->item, $params); ?>
								</li>
							<?php endif; ?>

							<?php if ($params->get('show_profeco_proveedor_email_icon')) : ?>
								<li class="email-icon">
										<?php echo JHtml::_('profeco_proveedoricon.email',  $this->item, $params); ?>
								</li>
							<?php endif; ?>
							<?php if ($can_edit) : ?>
								<li class="edit-icon">
									<?php echo JHtml::_('profeco_proveedoricon.edit', $this->item, $params); ?>
								</li>
							<?php endif; ?>
							<?php if ($can_delete) : ?>
								<li class="delete-icon">
									<?php echo JHtml::_('profeco_proveedoricon.delete',$this->item, $params); ?>
								</li>					
							<?php endif; ?>
					<?php else : ?>
						<li>
							<?php echo JHtml::_('profeco_proveedoricon.print_screen',  $this->item, $params); ?>
						</li>
					<?php endif; ?>
				</ul>
			</div>
		<?php endif; ?>
	<?php endif; ?>

	
	<?php echo $this->item->event->beforeDisplayProfeco_proveedor; ?>
	<div style="clear:both; padding-top: 10px;">

	</div>
	<div style="padding-top: 10px;">

			<form action="" name="profeco_proveedorForm" id="profeco_proveedorForm">
			<?php $dummy = false;
					$display_fieldset = (
								($params->get('show_profeco_proveedor_nombre')) OR 
								($params->get('show_profeco_proveedor_marca')) OR 
								($params->get('show_profeco_proveedor_porcentaje')) OR 
								($params->get('show_profeco_proveedor_is_concilianet')) OR 
								($params->get('show_profeco_proveedor_is_conciliaexpres')) OR 
								($params->get('show_profeco_proveedor_id_giro')) OR 
								$dummy
								);
			?>
			<?php if ($display_fieldset) : ?>				
				<fieldset>	
					<legend><?php echo JText::_('COM_BOLETIN_PROFECO_PROVEEDORES_FIELDSET_PROFECO_PROVEEDOR_FS_LABEL'); ?></legend>
			<?php endif; ?>
					<div style="padding-top: 10px;">			
						<?php if ($params->get('show_profeco_proveedor_nombre')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_BOLETIN_PROFECO_PROVEEDORES_FIELD_NOMBRE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->nombre != '' ? $this->item->nombre : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_profeco_proveedor_marca')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_BOLETIN_PROFECO_PROVEEDORES_FIELD_MARCA_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->marca != '' ? $this->item->marca : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_profeco_proveedor_porcentaje')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_BOLETIN_PROFECO_PROVEEDORES_FIELD_PORCENTAJE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->porcentaje != '' ? $this->item->porcentaje : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_profeco_proveedor_is_concilianet')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_BOLETIN_PROFECO_PROVEEDORES_FIELD_IS_CONCILIANET_LABEL'); ?>
							</label>
							<span>
								<?php
									switch ($this->item->is_concilianet) :
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
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_profeco_proveedor_is_conciliaexpres')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_BOLETIN_PROFECO_PROVEEDORES_FIELD_IS_CONCILIAEXPRES_LABEL'); ?>
							</label>
							<span>
								<?php
									switch ($this->item->is_conciliaexpres) :
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
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_profeco_proveedor_id_giro')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_BOLETIN_PROFECO_PROVEEDORES_FIELD_ID_GIRO_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->id_giro != '' ? $this->item->id_giro : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
					</div>
			<?php if ($display_fieldset) : ?>				
				</fieldset>	
			<?php endif;?>	
			<?php
				$dummy = false;
		$display_fieldset = (
							($params->get('show_profeco_proveedor_admin') AND $this->item->params->get('access-change')) OR							
							$dummy
							);
			?>
			<?php if ($display_fieldset) : ?>				
					<fieldset>
						<legend><?php echo JText::_('COM_BOLETIN_FIELDSET_PUBLISHING_LABEL'); ?></legend>
			<?php endif; ?>
	
			<?php if ($params->get('access-change')): ?>
				<?php if ($params->get('show_profeco_proveedor_admin')) : ?>
				
				<?php endif; ?>
				
			<?php endif; ?>
			
			<?php if ($display_fieldset) : ?>				
					</fieldset>	
			<?php endif;?>	
			</form>
		<?php echo $this->item->event->afterDisplayProfeco_proveedor; ?>
	</div>		
</div>