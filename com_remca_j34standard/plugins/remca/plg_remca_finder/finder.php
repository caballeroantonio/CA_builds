<?php
/**
 * @version 		$Id:$
 * @name			RealEstateManagerCA
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_remca
 * @subpackage		com_remca.finder
 * @copyright		
 * @license			GNU General Public License version 3 or later; See http://www.gnu.org/copyleft/gpl.html 
 * 
 * The following Component Architect header section must remain in any distribution of this file
 * 
 * @CAversion		Id: finder.php 571 2016-01-04 15:03:02Z BrianWade $
 * @CAauthor		Component Architect (www.componentarchitect.com)
 * @CApackage		architectcomp
 * @CAsubpackage	architectcomp.finder
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

/**
 * Smart Search Remca Plugin
 *
 */
class PlgRemcaFinder extends JPlugin
{
	/**
	 * Smart Search after save inmueble method
	 * Inmueble is passed by reference, but after the save, so no changes will be saved.
	 * Method is called right after the inmueble is saved
	 *
	 * @param	string		$context	The context of the item passed to the plugin
	 * @param	object		$house	A JTableHouse object
	 * @param	boolean		$is_new		If the inmueble has just been created
	 */
	public function onHouseAfterSave($context, $house, $is_new)
	{
		$dispatcher	= JEventDispatcher::getInstance();
		JPluginHelper::importPlugin('finder.houses');

		// Trigger the onFinderAfterSave event.
		$dispatcher->trigger('onFinderAfterSave', array($context, $house, $is_new));

	}
	/**
	 * Smart Search before save inmueble method
	 * Inmueble is passed by reference, but after the save, so no changes will be saved.
	 * Method is called right after the content is saved
	 *
	 * @param	string		$context	The context of the item passed to the plugin
	 * @param	object		$house	A JTableHouse object
	 * @param	boolean		$is_new		If the inmueble has just been created
	 */
	public function onHouseBeforeSave($context, $house, $is_new)
	{
		$dispatcher	= JEventDispatcher::getInstance();
		JPluginHelper::importPlugin('finder.houses');

		// Trigger the onFinderBeforeSave event.
		$dispatcher->trigger('onFinderBeforeSave', array($context, $house, $is_new));

	}
	/**
	 * Smart Search after delete inmueble method
	 * inmueble is passed by reference, but after the save, so no changes will be saved.
	 * Method is called right after the inmueble is saved
	 *
	 * @param	string		$context	The context of the item passed to the plugin
	 * @param	object		$house	A JTableHouse object
	 * 
	 */
	public function onHouseAfterDelete($context, $house)
	{
		$dispatcher	= JEventDispatcher::getInstance();
		JPluginHelper::importPlugin('finder.houses');

		// Trigger the onFinderAfterDelete event.
		$dispatcher->trigger('onFinderAfterDelete', array($context, $house));

	}
	/**
	 * Smart Search change state inmueble method
	 * Method to update the link information for items that have been changed
	 * from outside the edit screen. This is fired when the item's state,
	 * is changed from the list view.
	 *
	 * @param   string   $context  The context for the item passed to the plugin.
	 * @param   array    $pks      A list of primary key ids of the records that have changed state.
	 * @param   integer  $value    The value of the state that the records have been changed to.
	 * 
	 */
	public function onHouseChangeState($context, $pks, $value)
	{
		$dispatcher	= JEventDispatcher::getInstance();
		JPluginHelper::importPlugin('finder.houses');

		// Trigger the onFinderChangeState event.
		$dispatcher->trigger('onFinderChangeState', array($context, $pks, $value));
	}
	/**
	 * Smart Search change category state method
	 *
	 * @param   string   $extension  The extension whose category has been updated.
	 * @param   array    $pks        A list of primary key ids of the content that has changed state.
	 * @param   integer  $value      The value of the state that the content has been changed to.
	 * 
	 */
	public function onCategoryChangeState($extension, $pks, $value)
	{
		$dispatcher	= JEventDispatcher::getInstance();
		JPluginHelper::importPlugin('finder');

		// Trigger the onFinderCategoryChangeState event.
		$dispatcher->trigger('onFinderCategoryChangeState', array($extension, $pks, $value));

	}
}
