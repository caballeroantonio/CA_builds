<?php
/**
 * @version 		$Id:$
 * @name			Boletines
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_boletin
 * @subpackage		com_boletin.site
 * @copyright		
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
 * Boletines Component Tribunal Federal De Justicia Administrativa - Boletín Jurisdiccional Model
 *
 */
class BoletinModelTfjfa_bacuerdo extends JModelItem
{
	/**
	 * Model context string.  Used in setting the store id for the session
	 *
	 * @var		string
	 */
	protected $context = 'com_boletin.tfjfa_bacuerdo';

	/**
	 * Constructor.
	 *
	 * @param	array	An optional associative array of configuration settings.
	 * 
	 */
	public function __construct($config = array())
	{
		if (empty($config['tfjfa_bacuerdo_filter_fields']))
		{
			$config['tfjfa_bacuerdo_filter_fields'] = array(
				'id', 'a.id',
				'fecha_boletin','a.fecha_boletin',
				'region','a.region',
				'instancia','a.instancia',
				'expediente','a.expediente',
				'actor','a.actor',
				'parte_a_notificar','a.parte_a_notificar',
				'auto_o_resolucion','a.auto_o_resolucion',
				'catid', 'a.catid', 'category_title',
				'ordering', 'a.ordering',
				);
		}

		parent::__construct($config);
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
		$this->setState('tfjfa_bacuerdo.id', $pk);

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
			
	}
	/**
	 * Returns a Table object, always creating it
	 *
	 * @param	type	The table type to instantiate
	 * @param	string	A prefix for the table class name. Optional.
	 * @param	array	Configuration array for model. Optional.
	 * @return	JTable	A database object
	*/
	public function getTable($type = 'Tfjfa_bacuerdos', $prefix = 'BoletinTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}
	/**
	 * Method to get Tribunal Federal De Justicia Administrativa - Boletín Jurisdiccional data.
	 *
	 * @param	integer	$pk	The id of the tribunal federal de justicia administrativa - boletín jurisdiccional.
	 *
	 * @return	mixed	Menu item data object on success, false on failure.
	 */
	public function getItem($pk = null)
	{
		// Get current user for authorisation checks
		$user	= JFactory::getUser();
		
		$pk = (!empty($pk)) ? $pk : (int) $this->getState('tfjfa_bacuerdo.id');
		// Get the global params
		$global_params = JComponentHelper::getParams('com_boletin', true);

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
				$query->from($db->quoteName('#__boletin_tfjfa_bacuerdos').' AS a');
				
				// Join on category table.
				$query->select($db->quoteName('c.title').' AS category_title, '.
								$db->quoteName('c.alias').' AS category_alias, '.
								$db->quoteName('c.access').' AS category_access'
								);
				$query->join('LEFT', $db->quoteName('#__categories').' AS c on '.$db->quoteName('c.id').' = '.$db->quoteName('a.catid'));
				
				// Join over the categories to get parent category titles
				$query->select($db->quoteName('parent.title').' AS parent_title, '.
								$db->quoteName('parent.id').' AS parent_id, '.
								$db->quoteName('parent.alias').' AS parent_alias, '.
								$db->quoteName('parent.path').' AS parent_route'
				);
				$query->join('LEFT', $db->quoteName('#__categories').' AS parent ON '.$db->quoteName('parent.id').' = '.$db->quoteName('c.parent_id'));				
				
				
				$query->where($db->quoteName('a.id').' = ' . (int) $pk);
				
				// Join to check for category published status in parent categories up the tree
				// If all categories are published, badcats.id will be null, and we just use the tfjfa_bacuerdo state
				$sub_query = ' (SELECT '.$db->quoteName('cat.id').' as id FROM '.$db->quoteName('#__categories').' AS cat JOIN '.$db->quoteName('#__categories').' AS parent ';
				$sub_query .= 'ON '.$db->quoteName('cat.lft').' BETWEEN '.$db->quoteName('parent.lft').' AND '.$db->quoteName('parent.rgt').' ';
				$sub_query .= 'WHERE '.$db->quoteName('parent.extension').' = ' . $db->quote('com_boletin');
				$sub_query .= ' AND '.$db->quoteName('parent.published').' <= 0 GROUP BY '.$db->quoteName('cat.id').')';
				$query->join('LEFT OUTER', $sub_query . ' AS badcats ON '.$db->quoteName('badcats.id').' = '.$db->quoteName('c.id'));
					

				//  Do not show unless today's date is within the publish up and down dates (or they are empty)
				
					
																				
				$db->setQuery($query);

				$item = $db->loadObject();

				if (empty($item))
				{
					return JError::raiseError(404, JText::_('COM_BOLETIN_TFJFA_BACUERDOS_ERROR_ITEM_NOT_FOUND'));
				}
				// Include any manipulation of the data on the record e.g. expand out Registry fields
				// NB The params registry field - if used - is done automatcially in the JAdminModel parent class
			

				
				
				
				
				
				
				
		

							

				// Convert parameter fields to objects.
				$tfjfa_bacuerdo_params = new Registry;
				
				$item->params = clone $this->getState('params');				
								
				// Tfjfa_bacuerdo params override menu item params only if menu param = 'use_tfjfa_bacuerdo'
				// Otherwise, menu item params control the layout
				// If menu item is 'use_tfjfa_bacuerdo' and there is no tfjfa_bacuerdo param, use global

				// create an array of just the params set to 'use_tfjfa_bacuerdo'
				$menu_params_array = $this->getState('params')->toArray();
				$tfjfa_bacuerdo_array = array();

				foreach ($menu_params_array as $key => $value)
				{
					if ($value === 'use_tfjfa_bacuerdo')
					{
						// if the tfjfa_bacuerdo has a value, use it
						if ($tfjfa_bacuerdo_params->get($key) != '')
						{
							// get the value from the tfjfa_bacuerdo
							$tfjfa_bacuerdo_array[$key] = $tfjfa_bacuerdo_params->get($key);
						}
						else
						{
							// otherwise, use the global value
							$tfjfa_bacuerdo_array[$key] = $global_params->get($key);
						}
					}
				}

				// merge the selected tfjfa_bacuerdo params
				if (count($tfjfa_bacuerdo_array) > 0)
				{
					$tfjfa_bacuerdo_params = new Registry;
					$tfjfa_bacuerdo_params->loadArray($tfjfa_bacuerdo_array);
					$item->params->merge($tfjfa_bacuerdo_params);
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
	* A protected method to get a set of ordering conditions.
	*
	* @param	object	A record object.
	* @return	array	An array of conditions to add to add to ordering queries.
	*/
	protected function getReorderConditions($table = null)
	{
		$db = JFactory::getDbo();
		
		$condition = array();
		$condition[] = $db->quoteName('catid').' = '.(int) $table->catid;	
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

			if ($table->ordering != $order[$i])
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

		// Include the boletin plugins for the on delete events.
		JPluginHelper::importPlugin('boletin');

		// Iterate the items to delete each one.
		foreach ($pks as $i => $pk)
		{

			if ($table->load($pk))
			{
					// Trigger the BeforeDelete event.
					$result = $dispatcher->trigger('onTfjfa_bacuerdoBeforeDelete', array('com_boletin.tfjfa_bacuerdo', &$table));
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
					$dispatcher->trigger('onTfjfa_bacuerdoAfterDelete', array('com_boletin.tfjfa_bacuerdo', &$table));
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