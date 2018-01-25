<?php
/**
 * @version 		$Id:$
 * @name			RealEstateManager
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_remca
 * @subpackage		com_remca.admin
 * @copyright		
 * @license			GNU General Public License version 3 or later; See http://www.gnu.org/copyleft/gpl.html 
 * 
 * The following Component Architect header section must remain in any distribution of this file
 *
 * @CAversion		Id: compobjectadministrator.php 571 2016-01-04 15:03:02Z BrianWade $
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

JLoader::register('ContentHelper', JPATH_ADMINISTRATOR . '/components/com_remca/helpers/remca.php');
/**
 * Houses component helper.
 *
 */
abstract class JHtmlHouseAdministrator
{
	/**
	 * Render the list of associated items
	 * 
	 * @param	integer $house_id	The house item id
	 * 
	 * @return  string  The language HTML
     */
	public static function association($house_id)
	{
		// Get the associations
		// Defaults
		$html = '';

		// Get the associations
		if ($associations = JLanguageAssociations::getAssociations('com_remca', '#__rem_houses', 'com_remca.house.item',  $house_id, 'id', null, 'catid'))
		{		
			foreach ($associations as $tag => $associated)
			{
				$associations[$tag] = (int) $associated->id;
			}

			// Get the associated menu items
			$db = JFactory::getDbo();
			$query = $db->getQuery(true);
			$query->select('a.*');
			$query->from($db->quoteName('#__rem_houses').' as a');
			$query->select($db->quoteName('c.title').' as category_title');
			$query->join('LEFT', $db->quoteName('#__categories').' as c ON '.$db->quoteName('c.id').' = '.$db->quoteName('a.catid'));
			$query->where($db->quoteName('a.id').' IN ('.implode(',', array_values($associations)).')');
			$query->join('LEFT', $db->quoteName('#__languages').' as l ON '.$db->quoteName('a.language').' = '.$db->quoteName('l.lang_code'));
			$query->select($db->quoteName('l.image'));
			$query->select($db->quoteName('l.title').' as language_title');
			$query->select($db->quoteName('l.sef').' as lang_sef');
			
			$db->setQuery($query);

			try
			{
				$items = $db->loadObjectList('id');
			}
			catch (runtimeException $e)
			{
				throw new Exception($e->getMessage(), 500);
			}

			if ($items)
			{
				foreach ($items as &$item)
				{
					$text = strtoupper($item->lang_sef);
					$url = JRoute::_('index.php?option=com_remca&task=house.edit&id=' . (int) $item->id);
					$tooltip_parts = array(
						JHtml::_('image', 'mod_languages/' . $item->image . '.gif',
							$item->language_title,
							array('title' => $item->language_title),
							true
						),
						'(' . $item->category_title . ')'
					);
					$item->link = JHtml::_('tooltip', implode(' ', $tooltip_parts), null, null, $text, $url, null, 'hasTooltip label label-association label-' . $item->lang_sef);
				}
			}

			$html = JLayoutHelper::render('joomla.content.associations', $items);
		}
		return $html;
	}
}
