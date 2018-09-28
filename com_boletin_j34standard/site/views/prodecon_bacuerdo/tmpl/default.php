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
$this->document->addStyleSheet(JUri::root().'media/com_boletin/css/site_prodecon_bacuerdos.css');

if ($lang->isRTL())
{
	$this->document->addStyleSheet(JUri::root().'media/com_boletin/css/site_boletin-rtl.css');
	$this->document->addStyleSheet(JUri::root().'media/com_boletin/css/site_prodecon_bacuerdos-rtl.css');
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
<div class="boletin prodecon_bacuerdo-view<?php echo $params->get('pageclass_sfx')?>">
	<?php if ($this->params->get('show_page_heading')) : ?>
	<h1>
		<?php echo $this->escape($this->params->get('page_heading')); ?>
	</h1>
	<?php endif; ?>
	<?php if ($params->get('show_prodecon_bacuerdo_icons',-1) >= 0) : ?>
		<?php if ($params->get('show_prodecon_bacuerdo_print_icon') 
			OR $params->get('show_prodecon_bacuerdo_email_icon') 
			OR $can_edit 
			OR $can_delete 
			): ?>
			<div class="btn-group pull-right">
				<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <span class="icon-cog"></span> <span class="caret"></span> </a>
				<ul class="dropdown-menu">
					<?php if (!$this->print) : ?>
							<?php if ($params->get('show_prodecon_bacuerdo_print_icon')) : ?>
								<li class="print-icon">
										<?php echo JHtml::_('prodecon_bacuerdoicon.print_popup',  $this->item, $params); ?>
								</li>
							<?php endif; ?>

							<?php if ($params->get('show_prodecon_bacuerdo_email_icon')) : ?>
								<li class="email-icon">
										<?php echo JHtml::_('prodecon_bacuerdoicon.email',  $this->item, $params); ?>
								</li>
							<?php endif; ?>
							<?php if ($can_edit) : ?>
								<li class="edit-icon">
									<?php echo JHtml::_('prodecon_bacuerdoicon.edit', $this->item, $params); ?>
								</li>
							<?php endif; ?>
							<?php if ($can_delete) : ?>
								<li class="delete-icon">
									<?php echo JHtml::_('prodecon_bacuerdoicon.delete',$this->item, $params); ?>
								</li>					
							<?php endif; ?>
					<?php else : ?>
						<li>
							<?php echo JHtml::_('prodecon_bacuerdoicon.print_screen',  $this->item, $params); ?>
						</li>
					<?php endif; ?>
				</ul>
			</div>
		<?php endif; ?>
	<?php endif; ?>

	
	<?php echo $this->item->event->beforeDisplayProdecon_bacuerdo; ?>
	<div style="clear:both; padding-top: 10px;">

				<div>
				<?php echo $this->item->description; ?>
				</div>
	</div>
	<div style="padding-top: 10px;">

			<form action="" name="prodecon_bacuerdoForm" id="prodecon_bacuerdoForm">
			<?php $dummy = false;
					$display_fieldset = (
								($params->get('show_prodecon_bacuerdo_id_delegacion')) OR 
								($params->get('show_prodecon_bacuerdo_expediente')) OR 
								($params->get('show_prodecon_bacuerdo_promovente')) OR 
								($params->get('show_prodecon_bacuerdo_destinatario')) OR 
								($params->get('show_prodecon_bacuerdo_autoridades')) OR 
								($params->get('show_prodecon_bacuerdo_fecha')) OR 
								$dummy
								);
			?>
			<?php if ($display_fieldset) : ?>				
				<fieldset>	
					<legend><?php echo JText::_('COM_BOLETIN_PRODECON_BACUERDOS_FIELDSET_PRODECON_BACUERDO_FS_LABEL'); ?></legend>
			<?php endif; ?>
					<div style="padding-top: 10px;">			
						<?php if ($params->get('show_prodecon_bacuerdo_id_delegacion')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_BOLETIN_PRODECON_BACUERDOS_FIELD_ID_DELEGACION_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->id_delegacion != '' ? $this->item->id_delegacion : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_prodecon_bacuerdo_expediente')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_BOLETIN_PRODECON_BACUERDOS_FIELD_EXPEDIENTE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->expediente != '' ? $this->item->expediente : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_prodecon_bacuerdo_promovente')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_BOLETIN_PRODECON_BACUERDOS_FIELD_PROMOVENTE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->promovente != '' ? $this->item->promovente : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_prodecon_bacuerdo_destinatario')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_BOLETIN_PRODECON_BACUERDOS_FIELD_DESTINATARIO_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->destinatario != '' ? $this->item->destinatario : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_prodecon_bacuerdo_autoridades')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_BOLETIN_PRODECON_BACUERDOS_FIELD_AUTORIDADES_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->autoridades != '' ? $this->item->autoridades : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_prodecon_bacuerdo_fecha')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_BOLETIN_PRODECON_BACUERDOS_FIELD_FECHA_LABEL'); ?>
							</label>
							<span>
								<?php
									echo ($this->item->fecha != '' AND $this->item->fecha != '0000-00-00 00:00:00') ? JHtml::date($this->item->fecha, 'Y-m-d', true) : $empty;
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
							($params->get('show_prodecon_bacuerdo_admin') AND $this->item->params->get('access-change')) OR							
							$dummy
							);
			?>
			<?php if ($display_fieldset) : ?>				
					<fieldset>
						<legend><?php echo JText::_('COM_BOLETIN_FIELDSET_PUBLISHING_LABEL'); ?></legend>
			<?php endif; ?>
	
			<?php if ($params->get('access-change')): ?>
				<?php if ($params->get('show_prodecon_bacuerdo_admin')) : ?>
				
				<?php endif; ?>
				
			<?php endif; ?>
			
			<?php if ($display_fieldset) : ?>				
					</fieldset>	
			<?php endif;?>	
			</form>
		<?php echo $this->item->event->afterDisplayProdecon_bacuerdo; ?>
	</div>		
</div>