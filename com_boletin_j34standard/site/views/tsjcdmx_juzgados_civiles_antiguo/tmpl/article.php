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
$this->document->addStyleSheet(JUri::root().'media/com_boletin/css/site_tsjcdmx_juzgados_civiles_antiguos.css');

if ($lang->isRTL())
{
	$this->document->addStyleSheet(JUri::root().'media/com_boletin/css/site_boletin-rtl.css');
	$this->document->addStyleSheet(JUri::root().'media/com_boletin/css/site_tsjcdmx_juzgados_civiles_antiguos-rtl.css');
}
				
// Add Javascript behaviors

/*
 *	Initialise values for the layout 
 */	
 		
// Create shortcuts to some parameters.
$params		= &$this->item->params;
$user		= JFactory::getUser();
$info		= $this->item->params->get('tsjcdmx_juzgados_civiles_antiguo_info_block_position', 0);
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
<div class="boletin tsjcdmx_juzgados_civiles_antiguo-article<?php echo $params->get('pageclass_sfx')?>">
	<?php if ($this->params->get('show_page_heading')) : ?>
		<div class="page-header">	
			<h1><?php echo $this->escape($this->params->get('page_heading')); ?></h1>
		</div>
	<?php endif; ?>
	<?php if (!$use_def_list AND $this->print) : ?>
		<div id="pop-print" class="btn">
			<?php echo JHtml::_('tsjcdmx_juzgados_civiles_antiguoicon.print_screen', $this->item, $params); ?>
		</div>
		<div class="clearfix"> </div>
	<?php endif; ?>	
	<?php if ($params->get('show_tsjcdmx_juzgados_civiles_antiguo_icons',-1) >= 0) : ?>
		<?php
			if ($params->get('show_tsjcdmx_juzgados_civiles_antiguo_print_icon') 
					OR $params->get('show_tsjcdmx_juzgados_civiles_antiguo_email_icon') 
					OR $can_edit 
					OR $can_delete 
					):
		?>
			<?php if (!$this->print) : ?>
					<div class="btn-group pull-right">
						<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <span class="icon-cog"></span> <span class="caret"></span> </a>
						<ul class="dropdown-menu">			
							<?php if ($params->get('show_tsjcdmx_juzgados_civiles_antiguo_print_icon')) : ?>
							<li class="print-icon">
									<?php echo JHtml::_('tsjcdmx_juzgados_civiles_antiguoicon.print_popup',  $this->item, $params); ?>
							</li>
							<?php endif; ?>

							<?php if ($params->get('show_tsjcdmx_juzgados_civiles_antiguo_email_icon')) : ?>
							<li class="email-icon">
									<?php echo JHtml::_('tsjcdmx_juzgados_civiles_antiguoicon.email',  $this->item, $params); ?>
							</li>
							<?php endif; ?>
							<?php if ($can_edit) : ?>
								<li class="edit-icon">
									<?php echo JHtml::_('tsjcdmx_juzgados_civiles_antiguoicon.edit', $this->item, $params); ?>
								</li>
							<?php endif; ?>
							<?php if ($can_delete) : ?>
								<li class="delete-icon">
									<?php echo JHtml::_('tsjcdmx_juzgados_civiles_antiguoicon.delete',$this->item, $params); ?>
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


	<?php echo $this->item->event->beforeDisplayTsjcdmx_juzgados_civiles_antiguo; ?>
		<?php
			if ($use_def_list AND $info == 0) : 
				echo $this->loadTemplate('info');
			endif;
		?>	
		
		
		
		<?php
			$dummy = false;
			$use_fields_list = (
						($params->get('show_tsjcdmx_juzgados_civiles_antiguo_id_acuerdo')) OR 
						($params->get('show_tsjcdmx_juzgados_civiles_antiguo_juzgado')) OR 
						($params->get('show_tsjcdmx_juzgados_civiles_antiguo_expediente')) OR 
						($params->get('show_tsjcdmx_juzgados_civiles_antiguo_anio')) OR 
						($params->get('show_tsjcdmx_juzgados_civiles_antiguo_bis')) OR 
						($params->get('show_tsjcdmx_juzgados_civiles_antiguo_tipo')) OR 
						($params->get('show_tsjcdmx_juzgados_civiles_antiguo_actor')) OR 
						($params->get('show_tsjcdmx_juzgados_civiles_antiguo_demandado')) OR 
						($params->get('show_tsjcdmx_juzgados_civiles_antiguo_terceria')) OR 
						($params->get('show_tsjcdmx_juzgados_civiles_antiguo_juicio')) OR 
						($params->get('show_tsjcdmx_juzgados_civiles_antiguo_accion')) OR 
						($params->get('show_tsjcdmx_juzgados_civiles_antiguo_materia')) OR 
						($params->get('show_tsjcdmx_juzgados_civiles_antiguo_resolucion')) OR 
						($params->get('show_tsjcdmx_juzgados_civiles_antiguo_fecha_acuerdo')) OR 
						($params->get('show_tsjcdmx_juzgados_civiles_antiguo_fecha_publicacion')) OR 
						($params->get('show_tsjcdmx_juzgados_civiles_antiguo_tipo_acuerdo')) OR 
						($params->get('show_tsjcdmx_juzgados_civiles_antiguo_visibilidad')) OR 
						($params->get('show_tsjcdmx_juzgados_civiles_antiguo_especial')) OR 
						$dummy
						);
		?>
		<?php if ($use_fields_list) : ?>		
		<dl class="info">
			<dt class="info-title"><?php  echo JText::_('COM_BOLETIN_TSJCDMX_JUZGADOS_CIVILES_ANTIGUOS_INFO'); ?></dt>
		<?php endif; ?>		
		
			<?php if ($params->get('show_tsjcdmx_juzgados_civiles_antiguo_id_acuerdo')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_TSJCDMX_JUZGADOS_CIVILES_ANTIGUOS_FIELD_ID_ACUERDO_LABEL'); ?></strong>
					<?php
						echo $this->item->id_acuerdo != '' ? $this->item->id_acuerdo : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_tsjcdmx_juzgados_civiles_antiguo_juzgado')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_TSJCDMX_JUZGADOS_CIVILES_ANTIGUOS_FIELD_JUZGADO_LABEL'); ?></strong>
					<?php
						echo $this->item->juzgado != '' ? $this->item->juzgado : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_tsjcdmx_juzgados_civiles_antiguo_expediente')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_TSJCDMX_JUZGADOS_CIVILES_ANTIGUOS_FIELD_EXPEDIENTE_LABEL'); ?></strong>
					<?php
						echo $this->item->expediente != '' ? $this->item->expediente : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_tsjcdmx_juzgados_civiles_antiguo_anio')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_TSJCDMX_JUZGADOS_CIVILES_ANTIGUOS_FIELD_ANIO_LABEL'); ?></strong>
					<?php
						echo $this->item->anio != '' ? $this->item->anio : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_tsjcdmx_juzgados_civiles_antiguo_bis')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_TSJCDMX_JUZGADOS_CIVILES_ANTIGUOS_FIELD_BIS_LABEL'); ?></strong>
					<?php
						echo $this->item->bis != '' ? $this->item->bis : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_tsjcdmx_juzgados_civiles_antiguo_tipo')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_TSJCDMX_JUZGADOS_CIVILES_ANTIGUOS_FIELD_TIPO_LABEL'); ?></strong>
					<?php
						echo $this->item->tipo != '' ? $this->item->tipo : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_tsjcdmx_juzgados_civiles_antiguo_actor')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_TSJCDMX_JUZGADOS_CIVILES_ANTIGUOS_FIELD_ACTOR_LABEL'); ?></strong>
					<?php
						echo $this->item->actor != '' ? $this->item->actor : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_tsjcdmx_juzgados_civiles_antiguo_demandado')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_TSJCDMX_JUZGADOS_CIVILES_ANTIGUOS_FIELD_DEMANDADO_LABEL'); ?></strong>
					<?php
						echo $this->item->demandado != '' ? $this->item->demandado : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_tsjcdmx_juzgados_civiles_antiguo_terceria')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_TSJCDMX_JUZGADOS_CIVILES_ANTIGUOS_FIELD_TERCERIA_LABEL'); ?></strong>
					<?php
						echo $this->item->terceria != '' ? $this->item->terceria : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_tsjcdmx_juzgados_civiles_antiguo_juicio')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_TSJCDMX_JUZGADOS_CIVILES_ANTIGUOS_FIELD_JUICIO_LABEL'); ?></strong>
					<?php
						echo $this->item->juicio != '' ? $this->item->juicio : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_tsjcdmx_juzgados_civiles_antiguo_accion')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_TSJCDMX_JUZGADOS_CIVILES_ANTIGUOS_FIELD_ACCION_LABEL'); ?></strong>
					<?php
						echo $this->item->accion != '' ? $this->item->accion : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_tsjcdmx_juzgados_civiles_antiguo_materia')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_TSJCDMX_JUZGADOS_CIVILES_ANTIGUOS_FIELD_MATERIA_LABEL'); ?></strong>
					<?php
						echo $this->item->materia != '' ? $this->item->materia : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_tsjcdmx_juzgados_civiles_antiguo_resolucion')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_TSJCDMX_JUZGADOS_CIVILES_ANTIGUOS_FIELD_RESOLUCION_LABEL'); ?></strong>
					<?php
						echo $this->item->resolucion != '' ? $this->item->resolucion : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_tsjcdmx_juzgados_civiles_antiguo_fecha_acuerdo')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_TSJCDMX_JUZGADOS_CIVILES_ANTIGUOS_FIELD_FECHA_ACUERDO_LABEL'); ?></strong>
					<?php
						echo ($this->item->fecha_acuerdo != '' AND $this->item->fecha_acuerdo != '0000-00-00 00:00:00') ? JHtml::date($this->item->fecha_acuerdo, 'Y-m-d', true) : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_tsjcdmx_juzgados_civiles_antiguo_fecha_publicacion')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_TSJCDMX_JUZGADOS_CIVILES_ANTIGUOS_FIELD_FECHA_PUBLICACION_LABEL'); ?></strong>
					<?php
						echo ($this->item->fecha_publicacion != '' AND $this->item->fecha_publicacion != '0000-00-00 00:00:00') ? JHtml::date($this->item->fecha_publicacion, 'Y-m-d', true) : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_tsjcdmx_juzgados_civiles_antiguo_tipo_acuerdo')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_TSJCDMX_JUZGADOS_CIVILES_ANTIGUOS_FIELD_TIPO_ACUERDO_LABEL'); ?></strong>
					<?php
						echo $this->item->tipo_acuerdo != '' ? $this->item->tipo_acuerdo : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_tsjcdmx_juzgados_civiles_antiguo_visibilidad')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_TSJCDMX_JUZGADOS_CIVILES_ANTIGUOS_FIELD_VISIBILIDAD_LABEL'); ?></strong>
					<?php
						echo $this->item->visibilidad != '' ? $this->item->visibilidad : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_tsjcdmx_juzgados_civiles_antiguo_especial')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_BOLETIN_TSJCDMX_JUZGADOS_CIVILES_ANTIGUOS_FIELD_ESPECIAL_LABEL'); ?></strong>
					<?php
						echo $this->item->especial != '' ? $this->item->especial : $empty;
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
	<?php echo $this->item->event->afterDisplayTsjcdmx_juzgados_civiles_antiguo; ?>
</div>