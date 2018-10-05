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
 * @CAversion		Id: article.php 571 2016-01-04 15:03:02Z BrianWade $
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
				
// Add Javascript behaviors

/*
 *	Initialise values for the layout 
 */	
 		
// Create shortcuts to some parameters.
$params		= &$this->item->params;
$user		= JFactory::getUser();
$info		= $this->item->params->get('srsps_bacuerdo_info_block_position', 0);
$can_edit	= $params->get('access-edit');
$can_delete	= $params->get('access-delete');
// Get from global settings the text to use for an empty field
$component = JComponentHelper::getComponent( 'com_boletin' );
$empty = $component->params->get('default_empty_field', '');
$dummy = false;
$use_def_list = (
			$dummy
			);

/*
 *	Layout HTML
 */
?>
<noscript>
<p style="color: red;"><?php echo JText::_('COM_BOLETIN_WARNING_NOSCRIPT'); ?><p>
</noscript>
<div class="boletin srsps_bacuerdo-article<?php echo $params->get('pageclass_sfx')?>">
	<?php if ($this->params->get('show_page_heading')) : ?>
		<div class="page-header">	
			<h1><?php echo $this->escape($this->params->get('page_heading')); ?></h1>
		</div>
	<?php endif; ?>
	<?php if (!$use_def_list AND $this->print) : ?>
		<div id="pop-print" class="btn">
			<?php echo JHtml::_('srsps_bacuerdoicon.print_screen', $this->item, $params); ?>
		</div>
		<div class="clearfix"> </div>
	<?php endif; ?>	
	<?php if ($params->get('show_srsps_bacuerdo_icons',-1) >= 0) : ?>
		<?php
			if ($params->get('show_srsps_bacuerdo_print_icon') 
					OR $params->get('show_srsps_bacuerdo_email_icon') 
					OR $can_edit 
					OR $can_delete 
					):
		?>
			<?php if (!$this->print) : ?>
					<div class="btn-group pull-right">
						<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <span class="icon-cog"></span> <span class="caret"></span> </a>
						<ul class="dropdown-menu">			
							<?php if ($params->get('show_srsps_bacuerdo_print_icon')) : ?>
							<li class="print-icon">
									<?php echo JHtml::_('srsps_bacuerdoicon.print_popup',  $this->item, $params); ?>
							</li>
							<?php endif; ?>

							<?php if ($params->get('show_srsps_bacuerdo_email_icon')) : ?>
							<li class="email-icon">
									<?php echo JHtml::_('srsps_bacuerdoicon.email',  $this->item, $params); ?>
							</li>
							<?php endif; ?>
							<?php if ($can_edit) : ?>
								<li class="edit-icon">
									<?php echo JHtml::_('srsps_bacuerdoicon.edit', $this->item, $params); ?>
								</li>
							<?php endif; ?>
							<?php if ($can_delete) : ?>
								<li class="delete-icon">
									<?php echo JHtml::_('srsps_bacuerdoicon.delete',$this->item, $params); ?>
								</li>
							<?php endif; ?>
						</ul>
					</div>
			<?php else : ?>
				<?php if ($use_def_list) : ?>
					<div id="pop-print" class="btn">
						<?php echo JHtml::_('icon.print_screen', $this->item, $params); ?>
					</div>
				<?php endif; ?>
			<?php endif; ?>
		<?php endif; ?>
	<?php endif; ?>


	<?php echo $this->item->event->beforeDisplaySrsps_bacuerdo; ?>
		<?php
			if ($use_def_list AND $info == 0) : 
				echo $this->loadTemplate('info');
			endif;
		?>	
		
		
		
		<?php
			$dummy = false;
			$use_fields_list = (
						($params->get('show_srsps_bacuerdo_rfc')) OR 
						($params->get('show_srsps_bacuerdo_nombre')) OR 
						($params->get('show_srsps_bacuerdo_oficio')) OR 
						($params->get('show_srsps_bacuerdo_fecha_oficio')) OR 
						($params->get('show_srsps_bacuerdo_emisor')) OR 
						($params->get('show_srsps_bacuerdo_id_medio_notificacion')) OR 
						($params->get('show_srsps_bacuerdo_fecha_notificacion')) OR 
						($params->get('show_srsps_bacuerdo_fecha_surte')) OR 
						$dummy
						);
		?>
		<?php if ($use_fields_list) : ?>		
		<dl class="info">
			<dt class="info-title"><?php  echo JText::_('COM_BOLETIN_SRSPS_BACUERDOS_INFO'); ?></dt>
		<?php endif; ?>		
		
			<?php if ($params->get('show_srsps_bacuerdo_rfc')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_SRSPS_BACUERDOS_FIELD_RFC_LABEL'); ?></strong>
					<?php
						echo $this->item->rfc != '' ? $this->item->rfc : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_srsps_bacuerdo_nombre')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_SRSPS_BACUERDOS_FIELD_NOMBRE_LABEL'); ?></strong>
					<?php
						echo $this->item->nombre != '' ? $this->item->nombre : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_srsps_bacuerdo_oficio')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_SRSPS_BACUERDOS_FIELD_OFICIO_LABEL'); ?></strong>
					<?php
						echo $this->item->oficio != '' ? $this->item->oficio : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_srsps_bacuerdo_fecha_oficio')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_SRSPS_BACUERDOS_FIELD_FECHA_OFICIO_LABEL'); ?></strong>
					<?php
						echo ($this->item->fecha_oficio != '' AND $this->item->fecha_oficio != '0000-00-00 00:00:00') ? JHtml::date($this->item->fecha_oficio, '%Y-%m-%d', true) : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_srsps_bacuerdo_emisor')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_SRSPS_BACUERDOS_FIELD_EMISOR_LABEL'); ?></strong>
					<?php
						echo $this->item->emisor != '' ? $this->item->emisor : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_srsps_bacuerdo_id_medio_notificacion')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_SRSPS_BACUERDOS_FIELD_ID_MEDIO_NOTIFICACION_LABEL'); ?></strong>
					<?php
						switch ($this->item->id_medio_notificacion) :
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
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_srsps_bacuerdo_fecha_notificacion')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_SRSPS_BACUERDOS_FIELD_FECHA_NOTIFICACION_LABEL'); ?></strong>
					<?php
						echo ($this->item->fecha_notificacion != '' AND $this->item->fecha_notificacion != '0000-00-00 00:00:00') ? JHtml::date($this->item->fecha_notificacion, '%Y-%m-%d', true) : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_srsps_bacuerdo_fecha_surte')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_SRSPS_BACUERDOS_FIELD_FECHA_SURTE_LABEL'); ?></strong>
					<?php
						echo ($this->item->fecha_surte != '' AND $this->item->fecha_surte != '0000-00-00 00:00:00') ? JHtml::date($this->item->fecha_surte, '%Y-%m-%d', true) : $empty;
					?>
				</dd>
			<?php endif; ?>
		<?php if ($use_fields_list) : ?>		
		</dl>	
		<?php endif; ?>
		<?php
			if ($use_def_list AND $info == 1) :
				echo $this->loadTemplate('info');
			endif;
		?>			
	<?php echo $this->item->event->afterDisplaySrsps_bacuerdo; ?>
</div>