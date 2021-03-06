<?php
/**
 * @version 		$Id:$
 * @name			TSJ CDMX Libros TxCA (Release 1.0.0)
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_jtca
 * @subpackage		com_jtca.admin
 * @copyright		Copyright (c) 2017 - 2020. All Rights Reserved
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
 * Ljc20 table
 *
 */
class JtCaTableLjc20s extends JTable
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
		
		parent::__construct('jt_ljc20s', 'id', $db);
		
		$date	= JFactory::getDate();		
		$user = JFactory::getUser();	
		
		$this->created = $date->toSQL();
		$this->created_by = $user->id;

		$this->modified = $date->toSQL();
		$this->modified_by = $user->id;	


		JTableObserverContenthistory::createObserver($this, array('typeAlias' => 'com_jtca.ljc20'));
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
				$additional_order .= $this->_db->quoteName('id_expediente').'=' . $this->_db->Quote($this->id_expediente).' AND ';
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
			
		if ( !array_key_exists('field7',$array)  ) 
		{
			$array['field7'] = '0';
		}
		
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
		$table = JTable::getInstance('Ljc20s','JtCaTable');

		// For all keys
		foreach ($pks as $pk)
		{
			// Load the ljc20
			if(!$table->load($pk))
			{
				$this->setError($table->getError());
			}

			// Verify checkout
				// Change the state
				$table->state = $state;

				// Check the row
				$table->check();

				// Store the row
				if (!$table->store())
				{
					$this->setError($table->getError());
				}
		}
		return count($this->getErrors())==0;
	}

		
	/**
	 * Stores a LIBRO DE CONTROL DE ASUNTOS CONFORME A LOS ARTÍCULOS 13 FRACCIÓN XIV Y 25 DE LA LEY DE TRANSPARENCIA Y ACCESO A LA INFORMACIÓN PÚBLICA
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
		
		if (empty($this->id))
		{
			// New LIBRO DE CONTROL DE ASUNTOS CONFORME A LOS ARTÍCULOS 13 FRACCIÓN XIV Y 25 DE LA LEY DE TRANSPARENCIA Y ACCESO A LA INFORMACIÓN PÚBLICA. A created and created_by field can be set by the user,
			// so we don't touch either of these if they are set.
			if (!intval($this->created))
			{
				$this->created = $date->toSQL();
			}
			if (empty($this->created_by))
			{
				$this->created_by = $user->get('id');
			}
		}

		// Existing item
		$this->modified		= $date->toSQL();
		$this->modified_by	= $user->get('id');		





										


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
		return 'com_jtca';
	}
	
	/**
	 * Method to return the title to use for the asset table.
	 *
	 * @return      string
	 * 
	 */
	protected function _getAssetTitle()
	{
		return $this->id;
		
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
		
		if ($asset->loadByName('com_jtca'))
		{
			return $asset->id;
		}
		else
		{		
			return $asset->getRootId();
		}	
	}
}

