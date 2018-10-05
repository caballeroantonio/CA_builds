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
$info		= $this->item->params->get('rsps_bacuerdo_info_block_position', 0);
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
<div class="boletin rsps_bacuerdo-article<?php echo $params->get('pageclass_sfx')?>">
	<?php if ($this->params->get('show_page_heading')) : ?>
		<div class="page-header">	
			<h1><?php echo $this->escape($this->params->get('page_heading')); ?></h1>
		</div>
	<?php endif; ?>
	<?php if (!$use_def_list AND $this->print) : ?>
		<div id="pop-print" class="btn">
			<?php echo JHtml::_('rsps_bacuerdoicon.print_screen', $this->item, $params); ?>
		</div>
		<div class="clearfix"> </div>
	<?php endif; ?>	
	<?php if ($params->get('show_rsps_bacuerdo_icons',-1) >= 0) : ?>
		<?php
			if ($params->get('show_rsps_bacuerdo_print_icon') 
					OR $params->get('show_rsps_bacuerdo_email_icon') 
					OR $can_edit 
					OR $can_delete 
					):
		?>
			<?php if (!$this->print) : ?>
					<div class="btn-group pull-right">
						<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <span class="icon-cog"></span> <span class="caret"></span> </a>
						<ul class="dropdown-menu">			
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


	<?php echo $this->item->event->beforeDisplayRsps_bacuerdo; ?>
		<?php
			if ($use_def_list AND $info == 0) : 
				echo $this->loadTemplate('info');
			endif;
		?>	
		
		
		
		<?php
			$dummy = false;
			$use_fields_list = (
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
		<?php if ($use_fields_list) : ?>		
		<dl class="info">
			<dt class="info-title"><?php  echo JText::_('COM_BOLETIN_RSPS_BACUERDOS_INFO'); ?></dt>
		<?php endif; ?>		
		
			<?php if ($params->get('show_rsps_bacuerdo_expediente')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_RSPS_BACUERDOS_FIELD_EXPEDIENTE_LABEL'); ?></strong>
					<?php
						echo $this->item->expediente != '' ? $this->item->expediente : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_rsps_bacuerdo_sancionadora')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_RSPS_BACUERDOS_FIELD_SANCIONADORA_LABEL'); ?></strong>
					<?php
						echo $this->item->sancionadora != '' ? $this->item->sancionadora : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_rsps_bacuerdo_f_resolucion')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_RSPS_BACUERDOS_FIELD_F_RESOLUCION_LABEL'); ?></strong>
					<?php
						echo ($this->item->f_resolucion != '' AND $this->item->f_resolucion != '0000-00-00 00:00:00') ? JHtml::date($this->item->f_resolucion, '%Y-%m-%d', true) : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_rsps_bacuerdo_sancion')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_RSPS_BACUERDOS_FIELD_SANCION_LABEL'); ?></strong>
					<?php
						echo $this->item->sancion != '' ? $this->item->sancion : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_rsps_bacuerdo_duracion')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_RSPS_BACUERDOS_FIELD_DURACION_LABEL'); ?></strong>
					<?php
						echo $this->item->duracion != '' ? $this->item->duracion : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_rsps_bacuerdo_f_inicio')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_RSPS_BACUERDOS_FIELD_F_INICIO_LABEL'); ?></strong>
					<?php
						echo ($this->item->f_inicio != '' AND $this->item->f_inicio != '0000-00-00 00:00:00') ? JHtml::date($this->item->f_inicio, '%Y-%m-%d', true) : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_rsps_bacuerdo_f_fin')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_RSPS_BACUERDOS_FIELD_F_FIN_LABEL'); ?></strong>
					<?php
						echo ($this->item->f_fin != '' AND $this->item->f_fin != '0000-00-00 00:00:00') ? JHtml::date($this->item->f_fin, '%Y-%m-%d', true) : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_rsps_bacuerdo_dependencia')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_RSPS_BACUERDOS_FIELD_DEPENDENCIA_LABEL'); ?></strong>
					<?php
						echo $this->item->dependencia != '' ? $this->item->dependencia : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_rsps_bacuerdo_causa')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_RSPS_BACUERDOS_FIELD_CAUSA_LABEL'); ?></strong>
					<?php
						echo $this->item->causa != '' ? $this->item->causa : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_rsps_bacuerdo_origen')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_RSPS_BACUERDOS_FIELD_ORIGEN_LABEL'); ?></strong>
					<?php
						echo $this->item->origen != '' ? $this->item->origen : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_rsps_bacuerdo_paterno')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_RSPS_BACUERDOS_FIELD_PATERNO_LABEL'); ?></strong>
					<?php
						echo $this->item->paterno != '' ? $this->item->paterno : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_rsps_bacuerdo_materno')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_RSPS_BACUERDOS_FIELD_MATERNO_LABEL'); ?></strong>
					<?php
						echo $this->item->materno != '' ? $this->item->materno : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_rsps_bacuerdo_nombre')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_RSPS_BACUERDOS_FIELD_NOMBRE_LABEL'); ?></strong>
					<?php
						echo $this->item->nombre != '' ? $this->item->nombre : $empty;
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
	<?php echo $this->item->event->afterDisplayRsps_bacuerdo; ?>
</div>