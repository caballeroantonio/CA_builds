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
$this->document->addStyleSheet(JUri::root().'media/com_boletin/css/site_rsps_bacuerdos.css');

if ($lang->isRTL())
{
	$this->document->addStyleSheet(JUri::root().'media/com_boletin/css/site_boletin-rtl.css');
	$this->document->addStyleSheet(JUri::root().'media/com_boletin/css/site_rsps_bacuerdos-rtl.css');
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
<div class="boletin rsps_bacuerdo-view<?php echo $params->get('pageclass_sfx')?>">
	<?php if ($this->params->get('show_page_heading')) : ?>
	<h1>
		<?php echo $this->escape($this->params->get('page_heading')); ?>
	</h1>
	<?php endif; ?>
	<?php if ($params->get('show_rsps_bacuerdo_icons',-1) >= 0) : ?>
		<?php if ($params->get('show_rsps_bacuerdo_print_icon') 
			OR $params->get('show_rsps_bacuerdo_email_icon') 
			OR $can_edit 
			OR $can_delete 
			): ?>
			<div class="btn-group pull-right">
				<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <span class="icon-cog"></span> <span class="caret"></span> </a>
				<ul class="dropdown-menu">
					<?php if (!$this->print) : ?>
							<?php if ($params->get('show_rsps_bacuerdo_print_icon')) : ?>
								<li class="print-icon">
										<?php echo JHtml::_('rsps_bacuerdoicon.print_popup',  $this->item, $params); ?>
								</li>
							<?php endif; ?>

							<?php if ($params->get('show_rsps_bacuerdo_email_icon')) : ?>
								<li class="email-icon">
										<?php echo JHtml::_('rsps_bacuerdoicon.email',  $this->item, $params); ?>
								</li>
							<?php endif; ?>
							<?php if ($can_edit) : ?>
								<li class="edit-icon">
									<?php echo JHtml::_('rsps_bacuerdoicon.edit', $this->item, $params); ?>
								</li>
							<?php endif; ?>
							<?php if ($can_delete) : ?>
								<li class="delete-icon">
									<?php echo JHtml::_('rsps_bacuerdoicon.delete',$this->item, $params); ?>
								</li>					
							<?php endif; ?>
					<?php else : ?>
						<li>
							<?php echo JHtml::_('rsps_bacuerdoicon.print_screen',  $this->item, $params); ?>
						</li>
					<?php endif; ?>
				</ul>
			</div>
		<?php endif; ?>
	<?php endif; ?>

	
	<?php echo $this->item->event->beforeDisplayRsps_bacuerdo; ?>
	<div style="clear:both; padding-top: 10px;">

	</div>
	<div style="padding-top: 10px;">

			<form action="" name="rsps_bacuerdoForm" id="rsps_bacuerdoForm">
			<?php $dummy = false;
					$display_fieldset = (
								($params->get('show_rsps_bacuerdo_expediente')) OR 
								($params->get('show_rsps_bacuerdo_sancionadora')) OR 
								($params->get('show_rsps_bacuerdo_f_resolucion')) OR 
								($params->get('show_rsps_bacuerdo_sancion')) OR 
								($params->get('show_rsps_bacuerdo_duracion')) OR 
								($params->get('show_rsps_bacuerdo_f_inicio')) OR 
								($params->get('show_rsps_bacuerdo_f_fin')) OR 
								($params->get('show_rsps_bacuerdo_dependencia')) OR 
								($params->get('show_rsps_bacuerdo_causa')) OR 
								($params->get('show_rsps_bacuerdo_origen')) OR 
								($params->get('show_rsps_bacuerdo_paterno')) OR 
								($params->get('show_rsps_bacuerdo_materno')) OR 
								($params->get('show_rsps_bacuerdo_nombre')) OR 
								$dummy
								);
			?>
			<?php if ($display_fieldset) : ?>				
				<fieldset>	
					<legend><?php echo JText::_('COM_BOLETIN_RSPS_BACUERDOS_FIELDSET_RSPS_BACUERDO_FS_LABEL'); ?></legend>
			<?php endif; ?>
					<div style="padding-top: 10px;">			
						<?php if ($params->get('show_rsps_bacuerdo_expediente')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_BOLETIN_RSPS_BACUERDOS_FIELD_EXPEDIENTE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->expediente != '' ? $this->item->expediente : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_rsps_bacuerdo_sancionadora')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_BOLETIN_RSPS_BACUERDOS_FIELD_SANCIONADORA_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->sancionadora != '' ? $this->item->sancionadora : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_rsps_bacuerdo_f_resolucion')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_BOLETIN_RSPS_BACUERDOS_FIELD_F_RESOLUCION_LABEL'); ?>
							</label>
							<span>
								<?php
									echo ($this->item->f_resolucion != '' AND $this->item->f_resolucion != '0000-00-00 00:00:00') ? JHtml::date($this->item->f_resolucion, '%Y-%m-%d', true) : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_rsps_bacuerdo_sancion')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_BOLETIN_RSPS_BACUERDOS_FIELD_SANCION_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->sancion != '' ? $this->item->sancion : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_rsps_bacuerdo_duracion')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_BOLETIN_RSPS_BACUERDOS_FIELD_DURACION_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->duracion != '' ? $this->item->duracion : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_rsps_bacuerdo_f_inicio')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_BOLETIN_RSPS_BACUERDOS_FIELD_F_INICIO_LABEL'); ?>
							</label>
							<span>
								<?php
									echo ($this->item->f_inicio != '' AND $this->item->f_inicio != '0000-00-00 00:00:00') ? JHtml::date($this->item->f_inicio, '%Y-%m-%d', true) : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_rsps_bacuerdo_f_fin')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_BOLETIN_RSPS_BACUERDOS_FIELD_F_FIN_LABEL'); ?>
							</label>
							<span>
								<?php
									echo ($this->item->f_fin != '' AND $this->item->f_fin != '0000-00-00 00:00:00') ? JHtml::date($this->item->f_fin, '%Y-%m-%d', true) : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_rsps_bacuerdo_dependencia')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_BOLETIN_RSPS_BACUERDOS_FIELD_DEPENDENCIA_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->dependencia != '' ? $this->item->dependencia : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_rsps_bacuerdo_causa')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_BOLETIN_RSPS_BACUERDOS_FIELD_CAUSA_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->causa != '' ? $this->item->causa : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_rsps_bacuerdo_origen')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_BOLETIN_RSPS_BACUERDOS_FIELD_ORIGEN_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->origen != '' ? $this->item->origen : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_rsps_bacuerdo_paterno')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_BOLETIN_RSPS_BACUERDOS_FIELD_PATERNO_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->paterno != '' ? $this->item->paterno : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_rsps_bacuerdo_materno')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_BOLETIN_RSPS_BACUERDOS_FIELD_MATERNO_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->materno != '' ? $this->item->materno : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_rsps_bacuerdo_nombre')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_BOLETIN_RSPS_BACUERDOS_FIELD_NOMBRE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->nombre != '' ? $this->item->nombre : $empty;
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
							($params->get('show_rsps_bacuerdo_admin') AND $this->item->params->get('access-change')) OR							
							$dummy
							);
			?>
			<?php if ($display_fieldset) : ?>				
					<fieldset>
						<legend><?php echo JText::_('COM_BOLETIN_FIELDSET_PUBLISHING_LABEL'); ?></legend>
			<?php endif; ?>
	
			<?php if ($params->get('access-change')): ?>
				<?php if ($params->get('show_rsps_bacuerdo_admin')) : ?>
				
				<?php endif; ?>
				
			<?php endif; ?>
			
			<?php if ($display_fieldset) : ?>				
					</fieldset>	
			<?php endif;?>	
			</form>
		<?php echo $this->item->event->afterDisplayRsps_bacuerdo; ?>
	</div>		
</div>