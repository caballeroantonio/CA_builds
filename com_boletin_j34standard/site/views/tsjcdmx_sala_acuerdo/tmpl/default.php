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
$this->document->addStyleSheet(JUri::root().'media/com_boletin/css/site_tsjcdmx_sala_acuerdos.css');

if ($lang->isRTL())
{
	$this->document->addStyleSheet(JUri::root().'media/com_boletin/css/site_boletin-rtl.css');
	$this->document->addStyleSheet(JUri::root().'media/com_boletin/css/site_tsjcdmx_sala_acuerdos-rtl.css');
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
<div class="boletin tsjcdmx_sala_acuerdo-view<?php echo $params->get('pageclass_sfx')?>">
	<?php if ($this->params->get('show_page_heading')) : ?>
	<h1>
		<?php echo $this->escape($this->params->get('page_heading')); ?>
	</h1>
	<?php endif; ?>
	<?php if ($params->get('show_tsjcdmx_sala_acuerdo_icons',-1) >= 0) : ?>
		<?php if ($params->get('show_tsjcdmx_sala_acuerdo_print_icon') 
			OR $params->get('show_tsjcdmx_sala_acuerdo_email_icon') 
			OR $can_edit 
			OR $can_delete 
			): ?>
			<div class="btn-group pull-right">
				<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <span class="icon-cog"></span> <span class="caret"></span> </a>
				<ul class="dropdown-menu">
					<?php if (!$this->print) : ?>
							<?php if ($params->get('show_tsjcdmx_sala_acuerdo_print_icon')) : ?>
								<li class="print-icon">
										<?php echo JHtml::_('tsjcdmx_sala_acuerdoicon.print_popup',  $this->item, $params); ?>
								</li>
							<?php endif; ?>

							<?php if ($params->get('show_tsjcdmx_sala_acuerdo_email_icon')) : ?>
								<li class="email-icon">
										<?php echo JHtml::_('tsjcdmx_sala_acuerdoicon.email',  $this->item, $params); ?>
								</li>
							<?php endif; ?>
							<?php if ($can_edit) : ?>
								<li class="edit-icon">
									<?php echo JHtml::_('tsjcdmx_sala_acuerdoicon.edit', $this->item, $params); ?>
								</li>
							<?php endif; ?>
							<?php if ($can_delete) : ?>
								<li class="delete-icon">
									<?php echo JHtml::_('tsjcdmx_sala_acuerdoicon.delete',$this->item, $params); ?>
								</li>					
							<?php endif; ?>
					<?php else : ?>
						<li>
							<?php echo JHtml::_('tsjcdmx_sala_acuerdoicon.print_screen',  $this->item, $params); ?>
						</li>
					<?php endif; ?>
				</ul>
			</div>
		<?php endif; ?>
	<?php endif; ?>

	
	<?php echo $this->item->event->beforeDisplayTsjcdmx_sala_acuerdo; ?>
	<div style="clear:both; padding-top: 10px;">

				<div>
				<?php echo $this->item->description; ?>
				</div>
	</div>
	<div style="padding-top: 10px;">

			<form action="" name="tsjcdmx_sala_acuerdoForm" id="tsjcdmx_sala_acuerdoForm">
			<?php $dummy = false;
					$display_fieldset = (
								($params->get('show_tsjcdmx_sala_acuerdo_fecha_acuerdo')) OR 
								($params->get('show_tsjcdmx_sala_acuerdo_fecha_boletin')) OR 
								($params->get('show_tsjcdmx_sala_acuerdo_sala')) OR 
								($params->get('show_tsjcdmx_sala_acuerdo_actor')) OR 
								($params->get('show_tsjcdmx_sala_acuerdo_demandado')) OR 
								($params->get('show_tsjcdmx_sala_acuerdo_terceria')) OR 
								($params->get('show_tsjcdmx_sala_acuerdo_tipo_juicio')) OR 
								($params->get('show_tsjcdmx_sala_acuerdo_toca')) OR 
								($params->get('show_tsjcdmx_sala_acuerdo_anio')) OR 
								($params->get('show_tsjcdmx_sala_acuerdo_asunto')) OR 
								($params->get('show_tsjcdmx_sala_acuerdo_tipo_resolucion')) OR 
								$dummy
								);
			?>
			<?php if ($display_fieldset) : ?>				
				<fieldset>	
					<legend><?php echo JText::_('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_FIELDSET_TSJCDMX_SALA_ACUERDO_FS_LABEL'); ?></legend>
			<?php endif; ?>
					<div style="padding-top: 10px;">			
						<?php if ($params->get('show_tsjcdmx_sala_acuerdo_fecha_acuerdo')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_FIELD_FECHA_ACUERDO_LABEL'); ?>
							</label>
							<span>
								<?php
									echo ($this->item->fecha_acuerdo != '' AND $this->item->fecha_acuerdo != '0000-00-00 00:00:00') ? JHtml::date($this->item->fecha_acuerdo, 'Y-m-d', true) : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_tsjcdmx_sala_acuerdo_fecha_boletin')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_FIELD_FECHA_BOLETIN_LABEL'); ?>
							</label>
							<span>
								<?php
									echo ($this->item->fecha_boletin != '' AND $this->item->fecha_boletin != '0000-00-00 00:00:00') ? JHtml::date($this->item->fecha_boletin, 'Y-m-d', true) : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_tsjcdmx_sala_acuerdo_sala')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_FIELD_SALA_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->sala != '' ? $this->item->sala : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_tsjcdmx_sala_acuerdo_actor')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_FIELD_ACTOR_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->actor != '' ? $this->item->actor : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_tsjcdmx_sala_acuerdo_demandado')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_FIELD_DEMANDADO_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->demandado != '' ? $this->item->demandado : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_tsjcdmx_sala_acuerdo_terceria')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_FIELD_TERCERIA_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->terceria != '' ? $this->item->terceria : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_tsjcdmx_sala_acuerdo_tipo_juicio')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_FIELD_TIPO_JUICIO_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->tipo_juicio != '' ? $this->item->tipo_juicio : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_tsjcdmx_sala_acuerdo_toca')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_FIELD_TOCA_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->toca != '' ? $this->item->toca : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_tsjcdmx_sala_acuerdo_anio')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_FIELD_ANIO_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->anio != '' ? $this->item->anio : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_tsjcdmx_sala_acuerdo_asunto')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_FIELD_ASUNTO_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->asunto != '' ? $this->item->asunto : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_tsjcdmx_sala_acuerdo_tipo_resolucion')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_FIELD_TIPO_RESOLUCION_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->tipo_resolucion != '' ? $this->item->tipo_resolucion : $empty;
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
							($params->get('show_tsjcdmx_sala_acuerdo_admin') AND $this->item->params->get('access-change')) OR							
							$dummy
							);
			?>
			<?php if ($display_fieldset) : ?>				
					<fieldset>
						<legend><?php echo JText::_('COM_BOLETIN_FIELDSET_PUBLISHING_LABEL'); ?></legend>
			<?php endif; ?>
	
			<?php if ($params->get('access-change')): ?>
				<?php if ($params->get('show_tsjcdmx_sala_acuerdo_admin')) : ?>
				
				<?php endif; ?>
				
			<?php endif; ?>
			
			<?php if ($display_fieldset) : ?>				
					</fieldset>	
			<?php endif;?>	
			</form>
		<?php echo $this->item->event->afterDisplayTsjcdmx_sala_acuerdo; ?>
	</div>		
</div>