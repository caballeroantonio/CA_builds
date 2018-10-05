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
$this->document->addStyleSheet(JUri::root().'media/com_boletin/css/site_tfjfa_bacuerdos.css');

if ($lang->isRTL())
{
	$this->document->addStyleSheet(JUri::root().'media/com_boletin/css/site_boletin-rtl.css');
	$this->document->addStyleSheet(JUri::root().'media/com_boletin/css/site_tfjfa_bacuerdos-rtl.css');
}
				
// Add Javascript behaviors

/*
 *	Initialise values for the layout 
 */	
 		
// Create shortcuts to some parameters.
$params		= &$this->item->params;
$user		= JFactory::getUser();
$info		= $this->item->params->get('tfjfa_bacuerdo_info_block_position', 0);
// Get from global settings the text to use for an empty field
$component = JComponentHelper::getComponent( 'com_boletin' );
$empty = $component->params->get('default_empty_field', '');
$dummy = false;
$use_def_list = (
			($params->get('show_tfjfa_bacuerdo_category')) OR 
			($params->get('show_tfjfa_bacuerdo_parent_category') AND $this->item->parent_slug != '1:root') OR
			$dummy
			);

/*
 *	Layout HTML
 */
?>
<noscript>
<p style="color: red;"><?php echo JText::_('COM_BOLETIN_WARNING_NOSCRIPT'); ?><p>
</noscript>
<div class="boletin tfjfa_bacuerdo-article<?php echo $params->get('pageclass_sfx')?>">
	<?php if ($this->params->get('show_page_heading')) : ?>
		<div class="page-header">	
			<h1><?php echo $this->escape($this->params->get('page_heading')); ?></h1>
		</div>
	<?php endif; ?>
	<?php if (!$use_def_list AND $this->print) : ?>
		<div id="pop-print" class="btn">
			<?php echo JHtml::_('tfjfa_bacuerdoicon.print_screen', $this->item, $params); ?>
		</div>
		<div class="clearfix"> </div>
	<?php endif; ?>	
	<?php if ($params->get('show_tfjfa_bacuerdo_icons',-1) >= 0) : ?>
		<?php
			if ($params->get('show_tfjfa_bacuerdo_print_icon') 
					OR $params->get('show_tfjfa_bacuerdo_email_icon') 
					):
		?>
			<?php if (!$this->print) : ?>
					<div class="btn-group pull-right">
						<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <span class="icon-cog"></span> <span class="caret"></span> </a>
						<ul class="dropdown-menu">			
							<?php if ($params->get('show_tfjfa_bacuerdo_print_icon')) : ?>
							<li class="print-icon">
									<?php echo JHtml::_('tfjfa_bacuerdoicon.print_popup',  $this->item, $params); ?>
							</li>
							<?php endif; ?>

							<?php if ($params->get('show_tfjfa_bacuerdo_email_icon')) : ?>
							<li class="email-icon">
									<?php echo JHtml::_('tfjfa_bacuerdoicon.email',  $this->item, $params); ?>
							</li>
							<?php endif; ?>
								<li class="edit-icon">
									<?php echo JHtml::_('tfjfa_bacuerdoicon.edit', $this->item, $params); ?>
								</li>
								<li class="delete-icon">
									<?php echo JHtml::_('tfjfa_bacuerdoicon.delete',$this->item, $params); ?>
								</li>
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


	<?php echo $this->item->event->beforeDisplayTfjfa_bacuerdo; ?>
		<?php
			if ($use_def_list AND $info == 0) : 
				echo $this->loadTemplate('info');
			endif;
		?>	
		
		
		
		<?php
			$dummy = false;
			$use_fields_list = (
						($params->get('show_tfjfa_bacuerdo_fecha_boletin')) OR 
						($params->get('show_tfjfa_bacuerdo_region')) OR 
						($params->get('show_tfjfa_bacuerdo_instancia')) OR 
						($params->get('show_tfjfa_bacuerdo_expediente')) OR 
						($params->get('show_tfjfa_bacuerdo_actor')) OR 
						($params->get('show_tfjfa_bacuerdo_parte_a_notificar')) OR 
						($params->get('show_tfjfa_bacuerdo_auto_o_resolucion')) OR 
						$dummy
						);
		?>
		<?php if ($use_fields_list) : ?>		
		<dl class="info">
			<dt class="info-title"><?php  echo JText::_('COM_BOLETIN_TFJFA_BACUERDOS_INFO'); ?></dt>
		<?php endif; ?>		
		
			<?php if ($params->get('show_tfjfa_bacuerdo_fecha_boletin')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_TFJFA_BACUERDOS_FIELD_FECHA_BOLETIN_LABEL'); ?></strong>
					<?php
						echo ($this->item->fecha_boletin != '' AND $this->item->fecha_boletin != '0000-00-00 00:00:00') ? JHtml::date($this->item->fecha_boletin, '%Y-%m-%d', true) : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_tfjfa_bacuerdo_region')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_TFJFA_BACUERDOS_FIELD_REGION_LABEL'); ?></strong>
					<?php
						echo $this->item->region != '' ? $this->item->region : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_tfjfa_bacuerdo_instancia')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_TFJFA_BACUERDOS_FIELD_INSTANCIA_LABEL'); ?></strong>
					<?php
						echo $this->item->instancia != '' ? $this->item->instancia : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_tfjfa_bacuerdo_expediente')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_TFJFA_BACUERDOS_FIELD_EXPEDIENTE_LABEL'); ?></strong>
					<?php
						echo $this->item->expediente != '' ? $this->item->expediente : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_tfjfa_bacuerdo_actor')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_TFJFA_BACUERDOS_FIELD_ACTOR_LABEL'); ?></strong>
					<?php
						echo $this->item->actor != '' ? $this->item->actor : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_tfjfa_bacuerdo_parte_a_notificar')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_TFJFA_BACUERDOS_FIELD_PARTE_A_NOTIFICAR_LABEL'); ?></strong>
					<?php
						echo $this->item->parte_a_notificar != '' ? $this->item->parte_a_notificar : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_tfjfa_bacuerdo_auto_o_resolucion')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_TFJFA_BACUERDOS_FIELD_AUTO_O_RESOLUCION_LABEL'); ?></strong>
					<?php
						echo $this->item->auto_o_resolucion != '' ? $this->item->auto_o_resolucion : $empty;
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
	<?php echo $this->item->event->afterDisplayTfjfa_bacuerdo; ?>
</div>