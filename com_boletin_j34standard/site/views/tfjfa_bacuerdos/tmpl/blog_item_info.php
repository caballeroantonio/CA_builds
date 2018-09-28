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
<dl class="tfjfa_bacuerdo-info">
	<dt class="tfjfa_bacuerdo-info-term"><?php  echo JText::_('COM_BOLETIN_TFJFA_BACUERDOS_INFO'); ?></dt>
	<?php if ($params->get('show_tfjfa_bacuerdo_parent_category') AND $this->item->parent_slug != '1:root') : ?>
		<dd class="parent-category-name">
			<?php $title = $this->escape($this->item->parent_title); ?>
			<?php if ($params->get('link_tfjfa_bacuerdo_parent_category') AND $this->item->parent_slug) : ?>
				<?php $url = '<a href="' . JRoute::_(BoletinHelperRoute::getCategoryRoute($this->item->parent_slug, $params->get('keep_tfjfa_bacuerdo_itemid'))) . '">' . $title . '</a>'; ?>
				<?php echo JText::sprintf('COM_BOLETIN_PARENT_CATEGORY', $url); ?>
			<?php else : ?>
				<?php echo JText::sprintf('COM_BOLETIN_PARENT_CATEGORY', $title); ?>
			<?php endif; ?>
		</dd>
	<?php endif; ?>
	<?php if ($params->get('show_tfjfa_bacuerdo_category')) : ?>
		<dd class="category-name">
			<?php $title = $this->escape($this->item->category_title); ?>
			<?php if ($params->get('link_tfjfa_bacuerdo_category') AND $this->item->catslug) : ?>
				<?php $url = '<a href="'.JRoute::_(BoletinHelperRoute::getCategoryRoute($this->item->catslug, $params->get('keep_tfjfa_bacuerdo_itemid'))).'">'.$title.'</a>';?>
				<?php echo JText::sprintf('COM_BOLETIN_CATEGORY', $url); ?>
			<?php else : ?>
				<?php echo JText::sprintf('COM_BOLETIN_CATEGORY', $title); ?>
			<?php endif; ?>
		</dd>
	<?php endif; ?>
</dl>