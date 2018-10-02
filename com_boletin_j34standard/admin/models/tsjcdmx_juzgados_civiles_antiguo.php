<?php
/**
 * @version 		$Id:$
 * @name			Boletines
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_boletin
 * @subpackage		com_boletin.admin
 * @copyright		
 * @license			GNU General Public License version 3 or later; See http://www.gnu.org/copyleft/gpl.html 
 * 
 * The following Component Architect header section must remain in any distribution of this file
 *
 * @CAversion		Id: compobject.php 571 2016-01-04 15:03:02Z BrianWade $
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
 * Tsjcdmx_juzgados_civiles_antiguo model.
 *
 */
class BoletinModelTsjcdmx_juzgados_civiles_antiguo extends JModelAdmin
{
	/**
	 * @var		string	The prefix to use with controller messages.
	 */
	protected $text_prefix = 'COM_BOLETIN_TSJCDMX_JUZGADOS_CIVILES_ANTIGUOS';
	/**
	 * @var      string	The type alias for this object (for example, 'com_boletin.tsjcdmx_juzgados_civiles_antiguo')
	 */
	public $typeAlias = 'com_boletin.tsjcdmx_juzgados_civiles_antiguo';	
	/**
	 * @var		string	The context for the app call.
	 */
	protected $context = 'com_boletin.tsjcdmx_juzgados_civiles_antiguos';	
	/**
	 * @var		string	The event to trigger after before the data.
	 */
	protected $event_before_save = 'onTsjcdmx_juzgados_civiles_antiguoBeforeSave';
	/**
	 * @var		string	The event to trigger after saving the data.
	 */
	protected $event_after_save = 'onTsjcdmx_juzgados_civiles_antiguoAfterSave';

	/**
	 * @var    string	The event to trigger before deleting the data.
	 */
	protected $event_before_delete = 'onTsjcdmx_juzgados_civiles_antiguoBeforeDelete';	
	/**
	 * @var    string	The event to trigger after deleting the data.
	 */
	protected $event_after_delete = 'onTsjcdmx_juzgados_civiles_antiguoAfterDelete';	

	/**
	 * Returns a reference to the a Table object, always creating it.
	 *
	 * @param	type	The table type to instantiate
	 * @param	string	A prefix for the table class name. Optional.
	 * @param	array	Configuration array for model. Optional.
	 * @return	JTable	A database object
	 */
	public function getTable($type = 'Tsjcdmx_juzgados_civiles_antiguos', $prefix = 'BoletinTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}	
	/**	
	 * Method to test whether a record can be deleted.
	 *
	 * @param	object	record	A record object.
	 * @return	boolean	True if allowed to delete the record. Defaults to the permission set in the component.
	 */
	protected function canDelete($record)
	{
		$user = JFactory::getUser();
	
		return $user->authorise('core.delete', 'com_boletin');
	}

	/**
	 * Method to test whether a record can have its state changed.
	 *
	 * @param	object	A record object.
	 * @return	boolean	True if allowed to change the state of the record. Defaults to the permission set in the component.
	 */
	protected function canEditState($record)
	{
		$user = JFactory::getUser();

		// Default to component settings.			
		return parent::canEditState($record);
	}
	/**
	 * Method to get a single record.
	 *
	 * @param	integer	The id of the primary key.
	 * @param	boolean		Get recursively item children - true or false
	 *
	 * @return	mixed	Object on success, false on failure.
	 */
	public function getItem($pk = null, $recursive = false)
	{
		if ($item = parent::getItem($pk))
		{
			// Include any manipulation of the data on the record e.g. expand out Registry fields
			// NB The params registry field - if used - is done automatically in the JAdminModel parent class
			

			

			
			
		}
		
				
		return $item;
	}
	/**
	 * Method to get the record form.
	 *
	 * @param	array	$data		Data for the form.
	 * @param	boolean	$load_data	True if the form is to load its own data (default case), false if not.
	 * @return	mixed	A JForm object on success, false on failure
	 */
	public function getForm($data = array(), $load_data = true)
	{
		$form = $this->loadForm('com_boletin.edit.tsjcdmx_juzgados_civiles_antiguo', 'tsjcdmx_juzgados_civiles_antiguo', array('control' => 'jform', 'load_data' => $load_data));
		if (empty($form))
		{
			return false;
		}
		$jinput = JFactory::getApplication()->input;

		// The front end calls this model and uses a_id to avoid id clashes so we need to check for that first.
		if ($jinput->get('a_id'))
		{
			$id =  $jinput->get('a_id', 0);
		}
		// The back end uses id so we use that the rest of the time and set it to 0 by default.
		else
		{
			$id =  $jinput->get('id', 0);
		}		
		// Modify the form based on access controls.
		if (!$this->canEditState((object) $data))
		{
			// Disable fields for display.


			// Disable fields while saving.
			// The controller has already verified this is a record you can edit.
		}

		
		return $form;
	}

	/**
	 * Method to get the data that should be injected in the form.
	 *
	 * @return	mixed	The data for the form.
	 */
	protected function loadFormData()
	{
		$app = JFactory::getApplication();
		// Check the session for previously entered form data.
		$data = $app->getUserState('com_boletin.edit.tsjcdmx_juzgados_civiles_antiguo.data', array());

		if (empty($data))
		{
			$data = $this->getItem();
		}

		return $data;
	}
	/**
	 * Prepare and sanitise the table prior to saving.
	 *
	 * @param	JTable	$table
	 *
	 * @return	void
	 */
	protected function prepareTable($table)
	{
		$db = $this->getDbo();		
		$date = JFactory::getDate();
		$user = JFactory::getUser();
	}
	/**
	 * Method to save the form data.
	 *
	 * @param   array  $data  The form data.
	 *
	 * @return  boolean  True on success, False on error.
	 *
	 */
	public function save($data)
	{
		// Include the boletines plugins for the onSave events.
		JPluginHelper::importPlugin('boletin');	
		
		$input = JFactory::getApplication()->input;
		$filter  = JFilterInput::getInstance();
		



        

		if (parent::save($data))
		{


			return true;
		}

		return false;
	}	
	/**
	 * Method to delete one or more records.
	 *
	 * @param   array  &$pks  An array of record primary keys.
	 *
	 * @return  boolean  True if successful, false if an error occurs.
	 *
	 */
	public function delete(&$pks)
	{
		// Include the boletin plugins for the delete events.
		JPluginHelper::importPlugin('boletin');	
		
		return parent::delete($pks);	
	}		



	/**
	 * Custom clean the cache of com_boletin and boletin modules
	 *
	 */
	protected function cleanCache($group = null, $client_id = 0)
	{
		parent::cleanCache('com_boletin');

	}
}