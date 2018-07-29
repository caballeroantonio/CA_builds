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
 * House table
 *
 */
class RemcaTableHouses extends JTable
{

	/**
	 * @var    $state	Integer	Variable to hold state.
	 */
	var $state				= 1;
	/**
	 * Constructor
	 *
	 * @param   JDatabaseDriver  &$db  Database connector object
	 *
	 */
	public function __construct(&$db)
	{
		
		parent::__construct('#__rem_houses', 'id', $db);
		
		$date	= JFactory::getDate();		
		$user = JFactory::getUser();	
		

		$this->modified = $date->toSQL();
		$this->modified_by = $user->id;	


		JTableObserverContenthistory::createObserver($this, array('typeAlias' => 'com_remca.house'));
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
		$this->name = htmlspecialchars_decode($this->name, ENT_QUOTES);

		// Set ordering
		if ($this->state < 0)
		{
			// Set ordering to 0 if state is trashed
			$this->ordering = 0;
		} 
		else
		{ 
			if (empty($this->ordering))
			{
				// Set ordering to last if ordering was 0
				
				$additional_order = '';	
				$additional_order .= $this->_db->quoteName('id_country').'=' . $this->_db->Quote($this->id_country).' AND ';
				$additional_order .= $this->_db->quoteName('id_lstate').'=' . $this->_db->Quote($this->id_lstate).' AND ';
				$additional_order .= $this->_db->quoteName('id_lmunicipality').'=' . $this->_db->Quote($this->id_lmunicipality).' AND ';
				$additional_order .= $this->_db->quoteName('price').'=' . $this->_db->Quote($this->price).' AND ';
				$additional_order .= $this->_db->quoteName('bathrooms').'=' . $this->_db->Quote($this->bathrooms).' AND ';
				$additional_order .= $this->_db->quoteName('bedrooms').'=' . $this->_db->Quote($this->bedrooms).' AND ';
				$this->ordering = self::getNextOrder($additional_order.' state>=0');
			}
		}


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
		
		// Bind the rules.
		if (isset($array['rules']) AND is_array($array['rules']))
		{
			$rules = new JAccessRules($array['rules']);
			$this->setRules($rules);
		}

		return parent::bind($array, $ignore);
	}

	/**
	 * Method to set the publishing state for a row or list of rows in the database
	 * table.  
	 * The method respects checked out rows by other users and will attempt
	 * to checkin rows that it can after adjustments are made.
	 *
	 * @param	mixed	$pks	An optional array of primary key values to update.  If not
	 *							set the instance property value is used.
	 * @param	integer $state	The publishing state. eg. [0 = unpublished, 1 = published, 2=archived, -2=trashed]
	 * @param	integer $user_id	The user id of the user performing the operation.
	 * @return	boolean	True on success.
	 * 
	 */
	public function publish($pks = null, $state = 1, $user_id = 0)
	{
		
		$k = $this->_tbl_key;

		// Sanitize input.
		JArrayHelper::toInteger($pks);
		$user_id = (int) $user_id;
		$state  = (int) $state;

		// If there are no primary keys set check to see if the instance key is set.
		if (empty($pks))
		{
			if ($this->$k)
			{
				$pks = array($this->$k);
			}
			// Nothing to set publishing state on, return false.
			else
			{
				$this->setError(JText::_('JLIB_DATABASE_ERROR_NO_ROWS_SELECTED'));
				return false;
			}
		}

		// Get an instance of the table
		$table = JTable::getInstance('Houses','RemcaTable');

		// For all keys
		foreach ($pks as $pk)
		{
			// Load the house
			if(!$table->load($pk))
			{
				$this->setError($table->getError());
			}

			// Verify checkout
			if($table->checked_out==0 OR $table->checked_out==$user_id)
			{
				// Change the state
				$table->state = $state;
				$table->checked_out=0;
				$table->checked_out_time=0;

				// Check the row
				$table->check();

				// Store the row
				if (!$table->store())
				{
					$this->setError($table->getError());
				}
			}
		}
		return count($this->getErrors())==0;
	}

		
	/**
	 * Stores a Inmueble
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
		

		// Existing item
		$this->modified		= $date->toSQL();
		$this->modified_by	= $user->get('id');		



		if (isset($this->images) AND is_array($this->images))
		{
			$registry = new Registry;
			$registry->loadArray($this->images);
			$this->images = (string)$registry;
			$registry = null; //release memory	
		}		


		if (isset($this->photos) AND is_array($this->photos))
		{
			$this->photos = implode(',',$this->photos);
		}	
										


		// Attempt to store the data.
		return parent::store($update_nulls);
	}	
	/**
	 * Method to compute the default name of the asset.
	 * The default name is in the form `table_name.id`
	 * where id is the value of the primary key of the table.
	 *
	 * @return      string
	 * 
	 */
	protected function _getAssetName()
	{
		return 'com_remca';
	}
	
	/**
	 * Method to return the title to use for the asset table.
	 *
	 * @return      string
	 * 
	 */
	protected function _getAssetTitle()
	{
		return $this->name;
		
	}
	
	/**
	 * Get the parent asset id for the record
	 *
	 * @param   JTable   $table  A JTable object for the asset parent.
	 * @param	integer  $id     Id to look up
	 * 
	 * @return  integer
	 * 
	 */
	protected function _getAssetParentId(JTable $table = null, $id = null)
	{
		
		$asset = JTable::getInstance('Asset');
		// Find the parent-asset
		if (($this->catid) AND !empty($this->catid))
		{
			// The item has a category as asset-parent
			if ($asset->loadByName('com_remca.category.' . (int) $this->catid))
			{
				return $asset->id;
			}
		}
		
		if ($asset->loadByName('com_remca'))
		{
			return $asset->id;
		}
		else
		{		
			return $asset->getRootId();
		}	
	}
}

