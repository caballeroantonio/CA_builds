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
 * @CAversion		Id: compobjectbatch.php 571 2016-01-04 15:03:02Z BrianWade $
 * @CAauthor		Component Architect (www.componentarchitect.com)
 * @CApackage		architectcomp
 * @CAsubpackage	architectcomp.admin
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

JHtml::addIncludePath(JPATH_COMPONENT.'/helpers/html');

/**
 * Extended Utility class for batch processing widgets.
 * 
 */
abstract class JHtmlWa_title_conversationBatch
{
	/**
	 * Displays a check box to select copying items.
	 *
	 * @return  string  The necessary HTML for the widget.
	 *
	 */
	public static function copy_items()
	{
		// Create the copy/move options.
		$lines = array('<label id="batch-copy-items-lbl" for="batch-copy-items"  class="hasTip"'
			. ' title="' . JText::_('COM_REMCA_WA_TITLE_CONVERSATIONS_BATCH_COPY_ITEMS_LABEL') . '::' . JText::_('COM_REMCA_WA_TITLE_CONVERSATIONS_BATCH_COPY_ITEMS_DESC') . '">',
			 JText::_('COM_REMCA_WA_TITLE_CONVERSATIONS_BATCH_COPY_ITEMS_LABEL'), '</label>',
			'<input type="checkbox" name="batch[copy_items]" id="batch-copy-items" value="1"/>'
		);

		return implode("\n", $lines);
	}
}
