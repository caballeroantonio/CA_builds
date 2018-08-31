<?php
/**
 * @version 		$Id:$
 * @name			RealEstateManagerCA
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_remca
 * @subpackage		com_remca.site
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
$layout		= $params->get('wa_entry_conversation_layout', 'default');
$info		= $this->item->params->get('wa_entry_conversation_info_block_position', 0);
$can_edit	= $params->get('access-edit');
$can_delete = $params->get('access-delete');
// Get from global settings the text to use for an empty field
$component = JComponentHelper::getComponent( 'com_remca' );
$empty = $component->params->get('default_empty_field', '');

/*
 *	Layout HTML
 */
?>

<?php if ($this->item->state == 0) : ?>
	<div class="system-unpublished">
<?php endif; ?>
<?php if ($params->get('show_wa_entry_conversation_icons',-1) >= 0) : ?>
	<?php if (($params->get('show_wa_entry_conversation_print_icon') 
		OR $params->get('show_wa_entry_conversation_email_icon') 
		OR $can_edit
		OR $can_delete
			)
		) : ?>
		<ul class="actions">
			<?php if ($params->get('show_wa_entry_conversation_print_icon')) : ?>
			<li class="print-icon">
				<?php echo JHtml::_('wa_entry_conversationicon.print_popup', $this->item, $params); ?>
			</li>
			<?php endif; ?>
			<?php if ($params->get('show_wa_entry_conversation_email_icon')) : ?>
			<li class="email-icon">
				<?php echo JHtml::_('wa_entry_conversationicon.email', $this->item, $params); ?>
			</li>
			<?php endif; ?>

			<?php if ($can_edit) : ?>
				<li class="edit-icon">
					<?php echo JHtml::_('wa_entry_conversationicon.edit', $this->item, $params); ?>
				</li>
			<?php endif; ?>
			<?php if ($can_delete) : ?>
				<li class="delete-icon">
					<?php echo JHtml::_('wa_entry_conversationicon.delete',$this->item, $params); ?>
				</li>		
			<?php endif; ?>
		</ul>
	<?php endif; ?>
<?php endif; ?>
<?php echo $this->item->event->beforeDisplayWa_entry_conversation; ?>
<?php // to do not that elegant would be nice to group the params ?>

<?php 
	$dummy = false;
	$use_def_list = (
		($params->get('show_wa_entry_conversation_category')) OR 
		($params->get('show_wa_entry_conversation_parent_category') AND $this->item->parent_slug != '1:root') OR 
		($params->get('show_wa_entry_conversation_created')) OR 
		($params->get('show_wa_entry_conversation_created_by')) OR 			
		$dummy
	);
?>

<?php if (!$params->get('show_wa_entry_conversation_readmore') 
		):?>
	<?php
		if ($use_def_list AND $info == 0) :
			echo $this->loadTemplate('item_info');
		endif;
	?>
		
	<?php echo $this->item->description; ?>
	
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
	<?php //Optional link to let them register to see the whole entrada de la conversación whatsapp. ?>
	<?php if ($params->get('show_wa_entry_conversation_readmore')) :
				$link = JRoute::_(RemcaHelperRoute::getWa_entry_conversationRoute($this->item->slug, 
																							$this->item->catid,								
																							$layout,									
																							$params->get('keep_wa_entry_conversation_itemid')));
			?>
			<p class="readmore">
				<a href="<?php echo $link; ?>">
			<?php
				$item_params = new Registry;				
				$item_params->loadString($this->item->params);
				if ($item_params->get('wa_entry_conversation_alternative_readmore') == null) :
						echo JText::sprintf('COM_REMCA_READ_MORE');
				else :
					echo $this->item->wa_entry_conversation_alternative_readmore;
				endif;?>
			</a>
		</p>
	<?php endif; ?>
<?php endif; ?>

<?php if ($this->item->state == 0) : ?>
	</div>
<?php endif; ?>

<div class="item-separator"></div>
<?php echo $this->item->event->afterDisplayWa_entry_conversation; ?>
