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
 * @CAversion		Id: blog_item.php 571 2016-01-04 15:03:02Z BrianWade $
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

use Joomla\Registry\Registry;

/*
 *	Initialise values for the layout 
 */	
 
// Create a shortcut for params.
$params = &$this->item->params;
$user		= JFactory::getUser();
$layout		= $params->get('tsjcdmx_juzgados_civiles_antiguo_layout', 'default');
$info		= $this->item->params->get('tsjcdmx_juzgados_civiles_antiguo_info_block_position', 0);
$can_edit	= $params->get('access-edit');
$can_delete = $params->get('access-delete');
// Get from global settings the text to use for an empty field
$component = JComponentHelper::getComponent( 'com_boletin' );
$empty = $component->params->get('default_empty_field', '');

/*
 *	Layout HTML
 */
?>

<?php if ($params->get('show_tsjcdmx_juzgados_civiles_antiguo_icons',-1) >= 0) : ?>
	<?php if (($params->get('show_tsjcdmx_juzgados_civiles_antiguo_print_icon') 
		OR $params->get('show_tsjcdmx_juzgados_civiles_antiguo_email_icon') 
		OR $can_edit
		OR $can_delete
			)
		) : ?>
		<ul class="actions">
			<?php if ($params->get('show_tsjcdmx_juzgados_civiles_antiguo_print_icon')) : ?>
			<li class="print-icon">
				<?php echo JHtml::_('tsjcdmx_juzgados_civiles_antiguoicon.print_popup', $this->item, $params); ?>
			</li>
			<?php endif; ?>
			<?php if ($params->get('show_tsjcdmx_juzgados_civiles_antiguo_email_icon')) : ?>
			<li class="email-icon">
				<?php echo JHtml::_('tsjcdmx_juzgados_civiles_antiguoicon.email', $this->item, $params); ?>
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
	<?php endif; ?>
<?php endif; ?>
<?php echo $this->item->event->beforeDisplayTsjcdmx_juzgados_civiles_antiguo; ?>
<?php // to do not that elegant would be nice to group the params ?>

<?php 
	$dummy = false;
	$use_def_list = (
		$dummy
	);
?>

<?php if (!$params->get('show_tsjcdmx_juzgados_civiles_antiguo_readmore') 
		):?>
	<?php
		if ($use_def_list AND $info == 0) :
			echo $this->loadTemplate('item_info');
		endif;
	?>
		
	
	<?php
		if ($use_def_list AND $info == 1) :
			echo $this->loadTemplate('item_info');
		endif;
	?>
<?php else : ?>
	<?php
		if ($use_def_list AND $info == 0) :
			echo $this->loadTemplate('item_info');
		endif;
	?>	
	<?php
		if ($use_def_list AND $info == 1) :
			echo $this->loadTemplate('item_info');
		endif;
	?>			
	<?php 
        //Optional link to let them register to see the whole tsjcdmx_juzgados_civiles_antiguo.
		if ($params->get('show_tsjcdmx_juzgados_civiles_antiguo_readmore')) :
				$link = JRoute::_(BoletinHelperRoute::getTsjcdmx_juzgados_civiles_antiguoRoute($this->item->slug, 
																							$layout,									
																							$params->get('keep_tsjcdmx_juzgados_civiles_antiguo_itemid')));
			?>
			<p class="readmore">
				<a href="<?php echo $link; ?>">
			<?php
				$item_params = new Registry;				
				$item_params->loadString($this->item->params);
				if ($item_params->get('tsjcdmx_juzgados_civiles_antiguo_alternative_readmore') == null) :
						echo JText::sprintf('COM_BOLETIN_READ_MORE');
				else :
					echo $this->item->tsjcdmx_juzgados_civiles_antiguo_alternative_readmore;
				endif;?>
			</a>
		</p>
	<?php endif; ?>
<?php endif; ?>


<div class="item-separator"></div>
<?php echo $this->item->event->afterDisplayTsjcdmx_juzgados_civiles_antiguo; ?>
