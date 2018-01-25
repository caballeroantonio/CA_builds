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
 * @CAversion		Id: compobjectplural.php 585 2016-01-12 16:05:00Z BrianWade $
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

use Joomla\Registry\Registry;

/**
 * Const table
 *
 */
class RemcaTableConst extends JTable
{

	/**
	 * Constructor
	 *
	 * @param   JDatabaseDriver  &$db  Database connector object
	 *
	 */
	public function __construct(&$db)
	{
		
		parent::__construct('#__rem_const', 'id', $db);
		
		$date	= JFactory::getDate();		
		$user = JFactory::getUser();	
		



		JTableObserverContenthistory::createObserver($this, array('typeAlias' => 'com_remca.const'));
	}

	/**
	 * Overloaded check function
	 *
	 * @return	boolean
	 * 
	 */
	public function check()
	{
		// Set name



		return true;		
	}

	/**
	 * Overloaded bind function
	 *
	 * @param   array  $array   Named array to bind
	 * @param   mixed  $ignore  An optional array or space separated list of properties to ignore while binding.
	 * 
	 * @return	null|string	null is operation was satisfactory, otherwise returns an error
	 * 
	 */
	public function bind($array, $ignore = array())
	{

		return parent::bind($array, $ignore);
	}


		
	/**
	 * Stores a Const
	 *
	 * @param	boolean	$update_nulls	True to update fields even if they are null.
	 * 
	 * @return	boolean	$result			True on success, false on failure.
	 * 
	 */
	public function store($update_nulls = false)
	{

		$date	= JFactory::getDate();
		$user	= JFactory::getUser();
		






										


		// Attempt to store the data.
		return parent::store($update_nulls);
	}	
}

