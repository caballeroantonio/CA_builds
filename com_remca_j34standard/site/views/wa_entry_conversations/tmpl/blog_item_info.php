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
 * @CAversion		Id: blog_item_info.php 586 2016-01-12 16:10:49Z BrianWade $
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
 *	Initialise values for the layout 
 */	
 
// Create shortcuts to some parameters.
$params = $this->item->params;

/*
 *	Layout HTML
 */	
?>
<dl class="wa_entry_conversation-info">
	<dt class="wa_entry_conversation-info-term"><?php  echo JText::_('COM_REMCA_WA_ENTRY_CONVERSATIONS_INFO'); ?></dt>
	<?php if ($params->get('show_wa_entry_conversation_parent_category') AND $this->item->parent_slug != '1:root') : ?>
		<dd class="parent-category-name">
			<?php $title = $this->escape($this->item->parent_title); ?>
			<?php if ($params->get('link_wa_entry_conversation_parent_category') AND $this->item->parent_slug) : ?>
				<?php $url = '<a href="' . JRoute::_(RemcaHelperRoute::getCategoryRoute($this->item->parent_slug, $params->get('keep_wa_entry_conversation_itemid'))) . '">' . $title . '</a>'; ?>
				<?php echo JText::sprintf('COM_REMCA_PARENT_CATEGORY', $url); ?>
			<?php else : ?>
				<?php echo JText::sprintf('COM_REMCA_PARENT_CATEGORY', $title); ?>
			<?php endif; ?>
		</dd>
	<?php endif; ?>
	<?php if ($params->get('show_wa_entry_conversation_category')) : ?>
		<dd class="category-name">
			<?php $title = $this->escape($this->item->category_title); ?>
			<?php if ($params->get('link_wa_entry_conversation_category') AND $this->item->catslug) : ?>
				<?php $url = '<a href="'.JRoute::_(RemcaHelperRoute::getCategoryRoute($this->item->catslug, $params->get('keep_wa_entry_conversation_itemid'))).'">'.$title.'</a>';?>
				<?php echo JText::sprintf('COM_REMCA_CATEGORY', $url); ?>
			<?php else : ?>
				<?php echo JText::sprintf('COM_REMCA_CATEGORY', $title); ?>
			<?php endif; ?>
		</dd>
	<?php endif; ?>
	<?php if ($params->get('show_wa_entry_conversation_created')) : ?>
		<dd class="create">
				<time datetime="<?php echo JHtml::_('date', $this->item->created, 'c'); ?>">
				<?php echo JText::sprintf('COM_REMCA_CREATED_DATE_ON', JHtml::_('date',$this->item->created, JText::_('DATE_FORMAT_LC2'))); ?>
			</time>
		</dd>
	<?php endif; ?>
	<?php if ($params->get('show_wa_entry_conversation_created_by')) : ?>
	<dd class="createdby"> 
		<?php $created_by =  $this->item->created_by ?>
		<?php $created_by = ($this->item->created_by_name ? $this->item->created_by_name : $created_by);?>
		<?php if (!empty($this->item->created_by ) AND  $this->params->get('link_wa_entry_conversation_created_by') == 1):?>
			<?php echo JText::sprintf('COM_REMCA_CREATED_BY',JHtml::_('link',
			JRoute::_('index.php?option=com_users&view=profile&id='.$this->item->created_by),$created_by)); ?>

		<?php else :?>
			<?php echo JText::sprintf('COM_REMCA_CREATED_BY', $created_by); ?>
		<?php endif; ?>
	</dd>
	<?php endif; ?>	
</dl>