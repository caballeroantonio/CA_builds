<?php
/**
 * @version 		$Id:$
 * @name			TSJ CDMX Libros TxCA
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_jtca
 * @subpackage		com_jtca.admin
 * @copyright		Copyright (c) 2017 - 2020. All Rights Reserved
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
 * Lcp28 model.
 *
 */
class JtCaModelLcp28 extends JModelAdmin
{
	/**
	 * @var		string	The prefix to use with controller messages.
	 */
	protected $text_prefix = 'COM_JTCA_LCP28S';
	/**
	 * @var      string	The type alias for this object (for example, 'com_jtca.lcp28')
	 */
	public $typeAlias = 'com_jtca.lcp28';	
	/**
	 * @var		string	The context for the app call.
	 */
	protected $context = 'com_jtca.lcp28s';	
	/**
	 * @var		string	The event to trigger after before the data.
	 */
	protected $event_before_save = 'onLcp28BeforeSave';
	/**
	 * @var		string	The event to trigger after saving the data.
	 */
	protected $event_after_save = 'onLcp28AfterSave';

	/**
	 * @var    string	The event to trigger before deleting the data.
	 */
	protected $event_before_delete = 'onLcp28BeforeDelete';	
	/**
	 * @var    string	The event to trigger after deleting the data.
	 */
	protected $event_after_delete = 'onLcp28AfterDelete';	
	/**
	 * @var    string	The event to trigger after changing the data's state field.
	 */
	protected $event_change_state = 'onLcp28ChangeState';	

	/**
	 * Returns a reference to the a Table object, always creating it.
	 *
	 * @param	type	The table type to instantiate
	 * @param	string	A prefix for the table class name. Optional.
	 * @param	array	Configuration array for model. Optional.
	 * @return	JTable	A database object
	 */
	public function getTable($type = 'Lcp28s', $prefix = 'JtCaTable', $config = array())
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
	
		if ($record->state != -2)
		{
			return false;
		}
		return $user->authorise('core.delete', 'com_jtca');
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
			
			if (isset($item->id_organo) AND $item->id_organo !='')
			{
				$item->id_organo = explode(',',JString::trim($item->id_organo, ','));
			}	
			if (isset($item->id_secretaria) AND $item->id_secretaria !='')
			{
				$item->id_secretaria = explode(',',JString::trim($item->id_secretaria, ','));
			}	

			

			
			
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
		$form = $this->loadForm('com_jtca.edit.lcp28', 'lcp28', array('control' => 'jform', 'load_data' => $load_data));
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

			$form->setFieldAttribute('ordering', 'disabled', 'true');
			$form->setFieldAttribute('state', 'disabled', 'true');

			// Disable fields while saving.
			// The controller has already verified this is a record you can edit.
			$form->setFieldAttribute('ordering', 'filter', 'unset');
			$form->setFieldAttribute('state', 'filter', 'unset');
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
		$data = $app->getUserState('com_jtca.edit.lcp28.data', array());

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
		
		// Increment the libro de turno de excusas para juzgados  de delitos no graves version number.
		$table->version++;
		
		if (empty($table->id) OR $table->id == 0)
		{
			// Set ordering to the last item if not set
			if (empty($table->ordering) OR $table->ordering == 0)
			{
				$conditions_array = $this->getReorderConditions($table);
				
				$conditions = implode(' AND ', $conditions_array);				
				$table->reorder($conditions);
			}
		}
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
		// Include the tsj cdmx libros txca plugins for the onSave events.
		JPluginHelper::importPlugin('jtca');	
		
		$input = JFactory::getApplication()->input;
		$filter  = JFilterInput::getInstance();
		
		if (isset($data['created_by_alias']))
		{
			$data['created_by_alias'] = $filter->clean($data['created_by_alias'], 'TRIM');
		}



		// Alter the name for save as copy
		if ($input->get('task') == 'save2copy')
		{
			$data['state'] = 0;
		}

		if (parent::save($data))
		{


			return true;
		}

		return false;
	}	
	/**
	 * Method to change the published state of one or more records.
	 *
	 * @param   array    &$pks   A list of the primary keys to change.
	 * @param	integer  $value  The value of the published state.
	 *
	 * @return  boolean  True on success.
	 */
	public function publish(&$pks, $value = 1)
	{	
		// Include the jtca plugins for the change of state event.
		JPluginHelper::importPlugin('jtca');	
		
		return parent::publish($pks, $value);
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
		// Include the jtca plugins for the delete events.
		JPluginHelper::importPlugin('jtca');	
		
		return parent::delete($pks);	
	}		

	/**
	 * A protected method to get a set of ordering conditions.
	 *
	 * @param	object	A record object.
	 * @return	array	An array of conditions to add to add to ordering queries.
	 */
	protected function getReorderConditions($table)
	{
		$db = JFactory::getDbo();
	
		$condition = array();
		$condition[] = $db->quoteName('state').' >= 0';
		return $condition;
	}


	/**
	 * Custom clean the cache of com_jtca and jtca modules
	 *
	 */
	protected function cleanCache($group = null, $client_id = 0)
	{
		parent::cleanCache('com_jtca');

	}
}