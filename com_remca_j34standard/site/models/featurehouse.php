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
 * RealEstateManager Component Feature_house Model
 *
 */
class RemcaModelFeatureHouse extends JModelItem
{
	/**
	 * Model context string.  Used in setting the store id for the session
	 *
	 * @var		string
	 */
	protected $context = 'com_remca.featurehouse';

	/**
	 * Constructor.
	 *
	 * @param	array	An optional associative array of configuration settings.
	 * 
	 */
	public function __construct($config = array())
	{
		if (empty($config['featurehouse_filter_fields']))
		{
			$config['featurehouse_filter_fields'] = array(
				'id', 'a.id',
				'fk_houseid','a.fk_houseid',
				'fk_featureid','a.fk_featureid',
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
		$this->setState('featurehouse.id', $pk);

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
	public function getTable($type = 'FeatureHouses', $prefix = 'RemcaTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}
	/**
	 * Method to get Feature_house data.
	 *
	 * @param	integer	$pk	The id of the feature_house.
	 *
	 * @return	mixed	Menu item data object on success, false on failure.
	 */
	public function getItem($pk = null)
	{
		// Get current user for authorisation checks
		$user	= JFactory::getUser();
		
		$pk = (!empty($pk)) ? $pk : (int) $this->getState('featurehouse.id');
		// Get the global params
		$global_params = JComponentHelper::getParams('com_remca', true);

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
				$query->from($db->quoteName('#__rem_feature_houses').' AS a');
				
				
				$query->where($db->quoteName('a.id').' = ' . (int) $pk);
				
					

				//  Do not show unless today's date is within the publish up and down dates (or they are empty)
				
					
				// Filter by and return name for fk_houseid level.
				$query->select($db->quoteName('h.id').' AS h_house_id');
				$query->join('LEFT', $db->quoteName('#__rem_houses').' AS h ON '.$db->quoteName('h.id').' = '.$db->quoteName('a.fk_houseid'));	
				// Filter by and return name for fk_featureid level.
				$query->select($db->quoteName('f.name').' AS f_feature_name');
				$query->join('LEFT', $db->quoteName('#__rem_feature').' AS f ON '.$db->quoteName('f.id').' = '.$db->quoteName('a.fk_featureid'));	
																				
				$db->setQuery($query);

				$item = $db->loadObject();

				if (empty($item))
				{
					return JError::raiseError(404, JText::_('COM_REMCA_FEATURE_HOUSES_ERROR_ITEM_NOT_FOUND'));
				}
				// Include any manipulation of the data on the record e.g. expand out Registry fields
				// NB The params registry field - if used - is done automatcially in the JAdminModel parent class
			

				
				
		

							

				// Convert parameter fields to objects.
				$feature_house_params = new Registry;
				
				$item->params = clone $this->getState('params');				
								
				// FeatureHouse params override menu item params only if menu param = 'use_featurehouse'
				// Otherwise, menu item params control the layout
				// If menu item is 'use_featurehouse' and there is no featurehouse param, use global

				// create an array of just the params set to 'use_featurehouse'
				$menu_params_array = $this->getState('params')->toArray();
				$feature_house_array = array();

				foreach ($menu_params_array as $key => $value)
				{
					if ($value === 'use_featurehouse')
					{
						// if the featurehouse has a value, use it
						if ($feature_house_params->get($key) != '')
						{
							// get the value from the featurehouse
							$feature_house_array[$key] = $feature_house_params->get($key);
						}
						else
						{
							// otherwise, use the global value
							$feature_house_array[$key] = $global_params->get($key);
						}
					}
				}

				// merge the selected featurehouse params
				if (count($feature_house_array) > 0)
				{
					$feature_house_params = new Registry;
					$feature_house_params->loadArray($feature_house_array);
					$item->params->merge($feature_house_params);
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

		// Include the remca plugins for the on delete events.
		JPluginHelper::importPlugin('remca');

		// Iterate the items to delete each one.
		foreach ($pks as $i => $pk)
		{

			if ($table->load($pk))
			{
					// Trigger the BeforeDelete event.
					$result = $dispatcher->trigger('onFeatureHouseBeforeDelete', array('com_remca.featurehouse', &$table));
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
					$dispatcher->trigger('onFeatureHouseAfterDelete', array('com_remca.featurehouse', &$table));
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