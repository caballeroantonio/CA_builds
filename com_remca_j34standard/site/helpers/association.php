<?php
/**
 * @version 		$Id:$
 * @name			RealEstateManager
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_remca
 * @subpackage		com_remca.site
 * @copyright		
 * @license			GNU General Public License version 3 or later; See http://www.gnu.org/copyleft/gpl.html 
 * 
 * The following Component Architect header section must remain in any distribution of this file
 *
 * @CAversion		Id: association.php 571 2016-01-04 15:03:02Z BrianWade $
 * @CAauthor		Component Architect (www.componentarchitect.com)
 * @CApackage		architectcomp
 * @CAsubpackage	architectcomp.site
 * @CAtemplate		joomla_3_4_standard (Release 1.0.1)
 * @CAcopyright		Copyright (c)2013 - 2016 Simply Open Source Ltd. (trading as Component Architect). All Rights Reserved
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

JLoader::register('CategoryHelperAssociation', JPATH_ADMINISTRATOR . '/components/com_categories/helpers/association.php');

/**
 * Remca Component Association Helper
 *
 */
abstract class RemcaHelperAssociation extends CategoryHelperAssociation
{
	/**
	 * Method to get the associations for a given item
	 *
	 * @param   integer  $id    Id of the item
	 * @param   string   $view  Name of the view
	 *
	 * @return  array   Array of associations for the item
	 *
	 */

	public static function getAssociations($id = 0, $view = null)
	{

		$app = JFactory::getApplication();
		$view = is_null($view) ? $app->input->get('view') : $view;
		$id = empty($id) ? $jinput->getInt('id') : $id;


		if ($view == 'house')
		{
			if ($id)
			{
				$associations = JLanguageAssociations::getAssociations('com_remca', '#__rem_houses', 'com_remca.house.item', $id);

				$return = array();

				foreach ($associations as $tag => $item)
				{
					$return[$tag] = RemcaHelperRoute::getHouseRoute($item->id, $item->catid, $item->language);
				}

				return $return;
			}
		}
		if ($view == 'maincategory')
		{
			if ($id)
			{
				$associations = JLanguageAssociations::getAssociations('com_remca', '#__rem_main_categories', 'com_remca.maincategory.item', $id);

				$return = array();

				foreach ($associations as $tag => $item)
				{
					$return[$tag] = RemcaHelperRoute::getMainCategoryRoute($item->id, $item->language);
				}

				return $return;
			}
		}

		if ($view == 'category' || $view == 'categories')
		{
			return self::getCategoryAssociations($id, 'com_remca');
		}

		return array();
	}
}
