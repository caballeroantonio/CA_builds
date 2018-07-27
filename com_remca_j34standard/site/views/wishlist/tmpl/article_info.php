<?php
/**
 * @version 		$Id:$
 * @name			RealEstateManagerCA
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_remca
 * @subpackage		com_remca.admin
 * @copyright		
 * @license			GNU General Public License version 3 or later; See http://www.gnu.org/copyleft/gpl.html 
 * 
 * The following Component Architect header section must remain in any distribution of this file
 *
 * @CAversion		Id: article_info.php 586 2016-01-12 16:10:49Z BrianWade $
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
// Get from global settings the text to use for an empty field
$component = JComponentHelper::getComponent( 'com_remca' );
$empty = $component->params->get('default_empty_field', '');

/*
 *	Layout HTML
 */
?>
<div class="article-info muted">
	<dl class="info">
		<?php if ($params->get('show_wishlist_created_by') ) : ?>
			<dd class="createdby"> 
				<?php $created_by =  $this->item->created_by ?>
				<?php $created_by = ($this->item->created_by_name ? $this->item->created_by_name : $created_by);?>
				<?php if (!empty($this->item->created_by ) AND  $this->params->get('link_wishlist_created_by') == 1):?>
					<?php echo JText::sprintf('COM_REMCA_CREATED_BY',JHtml::_(
							'link',
							JRoute::_('index.php?option=com_users&view=profile&id='.$this->item->created_by),
							$created_by));
					?>
				<?php else :?>
					<?php echo JText::sprintf('COM_REMCA_CREATED_BY', $created_by); ?>
				<?php endif; ?>
			</dd>
		<?php endif; ?>
		<?php if ($params->get('show_wishlist_created_by_alias')) : ?>
			<dd class="field">
				<strong><?php echo JText::_('COM_REMCA_FIELD_CREATED_BY_ALIAS_LABEL'); ?></strong>
				<span>
					<?php echo !empty($this->item->created_by_alias) ? $this->item->created_by_alias : $empty; ?>
				</span>
			</dd>
		<?php endif; ?>					
		<?php if ($params->get('show_wishlist_created')) : ?>
			<dd class="create">
				<span class="icon-calendar"></span>
				<time datetime="<?php echo JHtml::_('date', $this->item->created, 'c'); ?>">
					<?php echo JText::sprintf('COM_REMCA_CREATED_DATE_ON', JHtml::_('date',$this->item->created, JText::_('DATE_FORMAT_LC3'))); ?>
				</time>
			</dd>
		<?php endif; ?>
		<?php if ($params->get('show_wishlist_modified') AND $this->item->modified > 0) : ?>
			<dd class="modified">
				<span class="icon-calendar"></span>
				<time datetime="<?php echo JHtml::_('date', $this->item->modified, 'c'); ?>">
					<?php echo JText::sprintf('COM_REMCA_LAST_UPDATED', JHtml::_('date',$this->item->modified, JText::_('DATE_FORMAT_LC3'))); ?>
				</time>
			</dd>
		<?php endif; ?>
	 </dl>
</div>