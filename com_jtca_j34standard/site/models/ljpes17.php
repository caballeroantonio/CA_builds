<?php
/**
 * @version 		$Id:$
 * @name			TSJ CDMX Libros TxCA
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_jtca
 * @subpackage		com_jtca.site
 * @copyright		Copyright (c) 2017 - 2020. All Rights Reserved
 * @license			GNU General Public License version 3 or later; See http://www.gnu.org/copyleft/gpl.html 
 * 
 * The following Component Architect header section must remain in any distribution of this file
 *
 * @CAversion		Id: compobject.php 571 2016-01-04 15:03:02Z BrianWade $
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

use Joomla\Registry\Registry;

/**
 * TSJ CDMX Libros TxCA Component LIBRO DE ARCHIVO Model
 *
 */
class JtCaModelLjpes17 extends JModelItem
{
	/**
	 * Model context string.  Used in setting the store id for the session
	 *
	 * @var		string
	 */
	protected $context = 'com_jtca.ljpes17';

	/**
	 * Constructor.
	 *
	 * @param	array	An optional associative array of configuration settings.
	 * 
	 */
	public function __construct($config = array())
	{
		if (empty($config['ljpes17_filter_fields']))
		{
			$config['ljpes17_filter_fields'] = array(
				'id', 'a.id',
				'id_organo','a.id_organo',
				'anoj','a.anoj',
				'id_expediente','a.id_expediente',
				'id_secretaria','a.id_secretaria',
				'field1','a.field1',
				'field2','a.field2',
				'field4_isMoral','a.field4_isMoral',
				'field4_paterno','a.field4_paterno',
				'field4_materno','a.field4_materno',
				'field4_nombre','a.field4_nombre',
				'field5','a.field5',
				'field6','a.field6',
				'field7','a.field7',
				'field8','a.field8',
				'state', 'a.state',
				'created', 'a.created',
				'created_by', 'a.created_by',
				'ordering', 'a.ordering',
				);
		}

		parent::__construct($config);
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
			return ;
		}
		if (!empty($record->id))
		{
			return $user->authorise('core.delete', 'com_jtca')
					  OR ($user->authorise('core.delete.own', 'com_jtca')
					  AND $record->created_by == $user->id);
		}
		return ;
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
		return $user->authorise('core.edit.state', 'com_jtca');
	}
	/**
	 * Method to auto-populate the model state.
	 *
	 * Note. Calling getState in this method will result in recursion.
	 *
	 */
	protected function populateState()
	{
		$app = JFactory::getApplication('site');

		// Load state from the request.
		$pk = $app->input->getInt('id');
		$this->setState('ljpes17.id', $pk);

		$offset = $app->input->getInt('limitstart');
		$this->setState('list.offset', $offset);

		// Load the parameters. Merge Global and Menu Item params into new object
		$params = $app->getParams();
		$menu_params = new Registry;

		if ($menu = $app->getMenu()->getActive())
		{
			$menu_params->loadString($menu->params);
		}

		$merged_params = clone $menu_params;
		$merged_params->merge($params);

		$this->setState('params', $merged_params);

		// TODO: Tune these values based on other permissions.
		$user		= JFactory::getUser();
			
		if ((!$user->authorise('core.edit.state', 'com_jtca')) AND  (!$user->authorise('core.edit', 'com_jtca')))
		{
			$this->setState('filter.published', 1);
		}
		else
		{
			$this->setState('filter.published', array(0, 1, 2));
		}		

		if ($params->get('filter_ljpes17_archived'))
		{
			$this->setState('filter.archived', $params->get('filter_ljpes17_archived'));
			
		}
	}
	/**
	 * Returns a Table object, always creating it
	 *
	 * @param	type	The table type to instantiate
	 * @param	string	A prefix for the table class name. Optional.
	 * @param	array	Configuration array for model. Optional.
	 * @return	JTable	A database object
	*/
	public function getTable($type = 'Ljpes17s', $prefix = 'JtCaTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}
	/**
	 * Method to get LIBRO DE ARCHIVO data.
	 *
	 * @param	integer	$pk	The id of the libro de archivo.
	 *
	 * @return	mixed	Menu item data object on success, false on failure.
	 */
	public function getItem($pk = null)
	{
		// Get current user for authorisation checks
		$user	= JFactory::getUser();
		
		$pk = (!empty($pk)) ? $pk : (int) $this->getState('ljpes17.id');
		// Get the global params
		$global_params = JComponentHelper::getParams('com_jtca', true);

		if ($this->_item === null)
		{
			$this->_item = array();
		}

		if (!isset($this->_item[$pk]))
		{
			try
			{
				$db = $this->getDbo();
				$query = $db->getQuery(true);

				$query->select($this->getState(
					'item.select',
					'a.*'

					)
				);
				$query->from($db->quoteName('jt_ljpes17s').' AS a');
				// Join on user table.
				$query->select($db->quoteName('ua.name').' AS created_by_name');
				$query->join('LEFT', $db->quoteName('#__users').' AS ua on '.$db->quoteName('ua.id').' = '.$db->quoteName('a.created_by'));
				$query->select($db->quoteName('uam.name').' AS modified_by_name');
				$query->join('LEFT', $db->quoteName('#__users').' AS uam on '.$db->quoteName('uam.id').' = '.$db->quoteName('a.modified_by'));
				
				
				$query->where($db->quoteName('a.id').' = ' . (int) $pk);
				
					

				$can_publish = $user->authorise('core.edit.state', 'com_jtca');
				//  Do not show unless today's date is within the publish up and down dates (or they are empty)
				// Filter by published status.
				$published = $this->getState('filter.published');
				$archived = $this->getState('filter.archived');
				if (is_numeric($published) 
						AND !$can_publish
					)
				{
					$query->where('('.$db->quoteName('a.state').' = ' . (int) $published . ' OR '.$db->quoteName('a.state').' = ' . (int) $archived . ')');
				
				}
				
					
																				
				$db->setQuery($query);

				$item = $db->loadObject();

				if (empty($item))
				{
					return JError::raiseError(404, JText::_('COM_JTCA_LJPES17S_ERROR_ITEM_NOT_FOUND'));
				}
				// Include any manipulation of the data on the record e.g. expand out Registry fields
				// NB The params registry field - if used - is done automatcially in the JAdminModel parent class
			

				if (isset($item->id_organo) AND $item->id_organo !='')
				{
					$sql = 'SELECT '.$db->quoteName('list.id').' AS id, '.$db->quoteName('list.organo').' AS value FROM (SELECT id, organo FROM jtc_organos) AS list';
					$sql .= ' WHERE '.$db->quoteName('list.id').' IN ('.JString::trim($item->id_organo, ',').');';

					$db->setQuery($sql);
					
					$rows = $db->loadAssocList();
					$result_array = array();
					foreach ($rows as $row)
					{
						$result_array[] = $row;
					}					
					$item->id_organo = $result_array;
				}
				else
				{
					$item->id_organo = array();
				}
				
				
				
				if (isset($item->id_secretaria) AND $item->id_secretaria !='')
				{
					$sql = 'SELECT '.$db->quoteName('list.id').' AS id, '.$db->quoteName('list.secretaria').' AS value FROM (SELECT id, secretaria FROM jtc_secretarias) AS list';
					$sql .= ' WHERE '.$db->quoteName('list.id').' IN ('.JString::trim($item->id_secretaria, ',').');';

					$db->setQuery($sql);
					
					$rows = $db->loadAssocList();
					$result_array = array();
					foreach ($rows as $row)
					{
						$result_array[] = $row;
					}					
					$item->id_secretaria = $result_array;
				}
				else
				{
					$item->id_secretaria = array();
				}
				
				
				
				
				
				
				
				
				
				
				
		

							
				// Check for published state if filter set.
				if (((is_numeric($published)) OR (is_numeric($archived))) AND (($item->state != $published) AND ($item->state != $archived)))
				{
					return JError::raiseError(404, JText::_('COM_JTCA_LJPES17S_ERROR_ITEM_NOT_FOUND'));
				}

				// Convert parameter fields to objects.
				$ljpes17_params = new Registry;
				
				$item->params = clone $this->getState('params');				
								
				// Ljpes17 params override menu item params only if menu param = 'use_ljpes17'
				// Otherwise, menu item params control the layout
				// If menu item is 'use_ljpes17' and there is no ljpes17 param, use global

				// create an array of just the params set to 'use_ljpes17'
				$menu_params_array = $this->getState('params')->toArray();
				$ljpes17_array = array();

				foreach ($menu_params_array as $key => $value)
				{
					if ($value === 'use_ljpes17')
					{
						// if the ljpes17 has a value, use it
						if ($ljpes17_params->get($key) != '')
						{
							// get the value from the ljpes17
							$ljpes17_array[$key] = $ljpes17_params->get($key);
						}
						else
						{
							// otherwise, use the global value
							$ljpes17_array[$key] = $global_params->get($key);
						}
					}
				}

				// merge the selected ljpes17 params
				if (count($ljpes17_array) > 0)
				{
					$ljpes17_params = new Registry;
					$ljpes17_params->loadArray($ljpes17_array);
					$item->params->merge($ljpes17_params);
				}


				// Compute selected asset permissions.

				// Technically guest could edit an ljpes17, but lets not check that to improve performance a little.
				if (!$user->get('guest')) 
				{
					$user_id	= $user->get('id');
					$asset	= 'com_jtca';

					// Check general edit permission first.
					if ($user->authorise('core.edit', $asset)) 
					{
						$item->params->set('access-edit', true);
					}
					// Now check if edit.own is available.
					else
					{ 
						if (!empty($user_id) AND $user->authorise('core.edit.own', $asset)) 
						{
						// Check for a valid user and that they are the owner.
							if ($user_id == $item->created_by) 
							{
								$item->params->set('access-edit', true);
								// If owner allow them to edit state in front end
								$item->params->set('access-change', true);
								
							}
						}
					}

					if ($user->authorise('core.create', $asset))
					{
						$item->params->set('access-create', true);
					}	
					
					if ($user->authorise('core.delete', $asset)) 
					{
						$item->params->set('access-delete', true);
					}
					// Now check if delete.own is available.
					else
					{
						
						if (!empty($user_id) AND $user->authorise('core.delete.own', $asset)) 
						{
							// Check for a valid user and that they are the owner.
							if ($user_id == $item->created_by) 
							{
								$item->params->set('access-delete', true);
							}
						}
					}
				// Check edit state permission.
					if ($user->authorise('core.edit.state', $asset)) 
					{				
						$item->params->set('access-change', true);
					}											
				}


				$this->_item[$pk] = $item;
			}
			catch (Exception $e)
			{
				if ($e->getCode() == 404)
				{
					// Need to go thru the error handler to allow Redirect to work.
					JError::raiseError(404, $e->getMessage());
				}
				else
				{
					$this->setError($e);
					$this->_item[$pk] = false;
				}			
			}
		}

		return $this->_item[$pk];
	}
	/**
	 * Method to change the published state of one or more records.
	 *
	 * @param   array    &$pks   A list of the primary keys to change.
	 * @param	integer  $value  The value of the published state.
	 *
	 * @return  boolean  True on success.
	 *
	 */
	public function publish(&$pks, $value = 1)
	{
		
		$dispatcher = JEventDispatcher::getInstance();
		$table = $this->getTable();
		$user	= JFactory::getUser();
	
		$pks = (array) $pks;

		// Include the jtca plugins for the change of state event.
		JPluginHelper::importPlugin('jtca');

		// Access checks.
		foreach ($pks as $i => $pk)
		{
			$table->reset();

			if ($table->load($pk))
			{
				if (!$this->canEditState($table))
				{
					// Prune items that you can't change.
					unset($pks[$i]);
					JError::raiseWarning(403, JText::_('JLIB_APPLICATION_ERROR_EDITSTATE_NOT_PERMITTED'));
					return false;
				}
			}
		}

		// Attempt to change the state of the records.
		if (!$table->publish($pks, $value, $user->get('id')))
		{
			$this->setError($table->getError());
			return false;
		}

		// Trigger the ChangeState event.
		$result = $dispatcher->trigger('onLjpes17ChangeState', array('com_jtca.ljpes17', $pks, $value));

		if (in_array(false, $result, true))
		{
			$this->setError($table->getError());
			return false;
		}

		// Clear the component's cache
		$this->cleanCache();

		return true;
	}

	/**
	* A protected method to get a set of ordering conditions.
	*
	* @param	object	A record object.
	* @return	array	An array of conditions to add to add to ordering queries.
	*/
	protected function getReorderConditions($table = null)
	{
		$db = JFactory::getDbo();
		
		$condition = array();
		$condition[] = $db->quoteName('state').' >= 0';
		return $condition;
	}
	/**
	 * Method to adjust the ordering of a row.
	 *
	 * Returns NULL if the user did not have edit
	 * privileges for any of the selected primary keys.
	 *
	 * @param	integer  $pks    The ID of the primary key to move.
	 * @param	integer  $delta  Increment, usually +1 or -1
	 *
	 * @return  mixed  False on failure or error, true on success, null if the $pk is empty (no items selected).
	 *
	 */
	public function reorder($pks, $delta = 0)
	{
		
		$table = $this->getTable();
		$pks = (array) $pks;
		$result = true;

		$allowed = true;

		foreach ($pks as $i => $pk)
		{
			$table->reset();

			if ($table->load($pk))
			{
				// Access checks.
				if (!$this->canEditState($table))
				{
					// Prune items that you can't change.
					unset($pks[$i]);
					JError::raiseWarning(403, JText::_('JLIB_APPLICATION_ERROR_EDITSTATE_NOT_PERMITTED'));
					$allowed = false;
					continue;
				}
				
				$where = array();
				$where = $this->getReorderConditions($table);

				if (!$table->move($delta, $where))
				{
					$this->setError($table->getError());
					unset($pks[$i]);
					$result = false;
				}

			}
			else
			{
				$this->setError($table->getError());
				unset($pks[$i]);
				$result = false;
			}
		}

		if ($allowed === false AND empty($pks))
		{
			$result = null;
		}

		// Clear the component's cache
		if ($result == true)
		{
			$this->cleanCache();
		}

		return $result;
	}
	/**
	 * Saves the manually set order of records.
	 *
	 * @param   array    $pks    An array of primary key ids.
	 * @param   integer  $order  +1 or -1
	 *
	 * @return  mixed
	 *
	 */
	public function saveorder($pks = null, $order = null)
	{
		
		$table = $this->getTable();
		$conditions = array();

		if (empty($pks))
		{
			return JError::raiseWarning(500, JText::_($this->text_prefix . '_ERROR_NO_ITEMS_SELECTED'));
		}

		// update ordering values
		foreach ($pks as $i => $pk)
		{
			$table->load((int) $pk);

			// Access checks.
			if (!$this->canEditState($table))
			{
				// Prune items that you can't change.
				unset($pks[$i]);
				JError::raiseWarning(403, JText::_('JLIB_APPLICATION_ERROR_EDITSTATE_NOT_PERMITTED'));
			}
			elseif ($table->ordering != $order[$i])
			{
				$table->ordering = $order[$i];

				if (!$table->store())
				{
					$this->setError($table->getError());
					return false;
				}

				// Remember to reorder within order fields
				$condition = $this->getReorderConditions($table);
				$found = false;

				foreach ($conditions as $cond)
				{
					if ($cond[1] == $condition)
					{
						$found = true;
						break;
					}
				}

				if (!$found)
				{
					$key = $table->getKeyName();
					$conditions[] = array($table->$key, $condition);
				}
			}
		}

		// Execute reorder for each category.
		foreach ($conditions as $cond)
		{
			$table->load($cond[0]);
			$table->reorder($cond[1]);
		}

		// Clear the component's cache
		$this->cleanCache();

		return true;
	}	   	
		
	/**
	 * Method to delete one or more records.
	 *
	 * @param   array    $pks  An array of record primary keys.
	 *
	 * @return  boolean  True if successful, false if an error occurs.
	 * 
	 */
	public function delete(&$pks)
	{
		
		$dispatcher	= JEventDispatcher::getInstance();
		$pks		= (array) $pks;
		$table		= $this->getTable();

		// Include the jtca plugins for the on delete events.
		JPluginHelper::importPlugin('jtca');

		// Iterate the items to delete each one.
		foreach ($pks as $i => $pk)
		{

			if ($table->load($pk))
			{
				if ($this->canDelete($table))
				{
					// Trigger the BeforeDelete event.
					$result = $dispatcher->trigger('onLjpes17BeforeDelete', array('com_jtca.ljpes17', &$table));
					if (in_array(false, $result, true))
					{
						$this->setError($table->getError());
						return false;
					}
					if (!$table->delete($pk))
					{
						$this->setError($table->getError());
						return false;
					}

					// Trigger the AfterDelete event.
					$dispatcher->trigger('onLjpes17AfterDelete', array('com_jtca.ljpes17', &$table));
				}
				else
				{
					// Prune items that you can't change.
					unset($pks[$i]);
					$error = $this->getError();
					if ($error)
					{
						JError::raiseWarning(500, $error);
						return false;
					}
					else
					{
						JError::raiseWarning(403, JText::_('JLIB_APPLICATION_ERROR_DELETE_NOT_PERMITTED'));
						return false;
					}
				}
			}
			else
			{
				$this->setError($table->getError());
				return false;
			}
		}

		// Clear the component's cache
		$this->cleanCache();

		return true;
	}
}
