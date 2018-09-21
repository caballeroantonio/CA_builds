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
$layout		= $params->get('facuerdo_layout', 'default');
$info		= $this->item->params->get('facuerdo_info_block_position', 0);
// Get from global settings the text to use for an empty field
$component = JComponentHelper::getComponent( 'com_boletin' );
$empty = $component->params->get('default_empty_field', '');

/*
 *	Layout HTML
 */
?>

<?php if ($params->get('show_facuerdo_icons',-1) >= 0) : ?>
	<?php if (($params->get('show_facuerdo_print_icon') 
		OR $params->get('show_facuerdo_email_icon') 
			)
		) : ?>
		<ul class="actions">
			<?php if ($params->get('show_facuerdo_print_icon')) : ?>
			<li class="print-icon">
				<?php echo JHtml::_('facuerdoicon.print_popup', $this->item, $params); ?>
			</li>
			<?php endif; ?>
			<?php if ($params->get('show_facuerdo_email_icon')) : ?>
			<li class="email-icon">
				<?php echo JHtml::_('facuerdoicon.email', $this->item, $params); ?>
			</li>
			<?php endif; ?>

				<li class="edit-icon">
					<?php echo JHtml::_('facuerdoicon.edit', $this->item, $params); ?>
				</li>
				<li class="delete-icon">
					<?php echo JHtml::_('facuerdoicon.delete',$this->item, $params); ?>
				</li>		
		</ul>
	<?php endif; ?>
<?php endif; ?>
<?php echo $this->item->event->beforeDisplayFacuerdo; ?>
<?php // to do not that elegant would be nice to group the params ?>

<?php 
	$dummy = false;
	$use_def_list = (
		($params->get('show_facuerdo_category')) OR 
		($params->get('show_facuerdo_parent_category') AND $this->item->parent_slug != '1:root') OR 
		$dummy
	);
?>

<?php if (!$params->get('show_facuerdo_readmore') 
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
	<?php //Optional link to let them register to see the whole acuerdos fiscales. ?>
	<?php if ($params->get('show_facuerdo_readmore')) :
				$link = JRoute::_(BoletinHelperRoute::getFacuerdoRoute($this->item->slug, 
																							$this->item->catid,								
																							$layout,									
																							$params->get('keep_facuerdo_itemid')));
			?>
			<p class="readmore">
				<a href="<?php echo $link; ?>">
			<?php
				$item_params = new Registry;				
				$item_params->loadString($this->item->params);
				if ($item_params->get('facuerdo_alternative_readmore') == null) :
						echo JText::sprintf('COM_BOLETIN_READ_MORE');
				else :
					echo $this->item->facuerdo_alternative_readmore;
				endif;?>
			</a>
		</p>
	<?php endif; ?>
<?php endif; ?>


<div class="item-separator"></div>
<?php echo $this->item->event->afterDisplayFacuerdo; ?>
