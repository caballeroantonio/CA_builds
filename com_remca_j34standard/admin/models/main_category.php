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
 * Main_category model.
 *
 */
class RemcaModelMain_category extends JModelAdmin
{
	/**
	 * @var		string	The prefix to use with controller messages.
	 */
	protected $text_prefix = 'COM_REMCA_MAIN_CATEGORIES';
	/**
	 * @var      string	The type alias for this object (for example, 'com_remca.main_category')
	 */
	public $typeAlias = 'com_remca.main_category';	
	/**
	 * @var		string	The context for the app call.
	 */
	protected $context = 'com_remca.main_categories';	
	/**
	 * @var		string	The event to trigger after before the data.
	 */
	protected $event_before_save = 'onMain_categoryBeforeSave';
	/**
	 * @var		string	The event to trigger after saving the data.
	 */
	protected $event_after_save = 'onMain_categoryAfterSave';

	/**
	 * @var    string	The event to trigger before deleting the data.
	 */
	protected $event_before_delete = 'onMain_categoryBeforeDelete';	
	/**
	 * @var    string	The event to trigger after deleting the data.
	 */
	protected $event_after_delete = 'onMain_categoryAfterDelete';	
	/**
	 * @var    string	The event to trigger after changing the data's state field.
	 */
	protected $event_change_state = 'onMain_categoryChangeState';	

	/**
	 * Returns a reference to the a Table object, always creating it.
	 *
	 * @param	type	The table type to instantiate
	 * @param	string	A prefix for the table class name. Optional.
	 * @param	array	Configuration array for model. Optional.
	 * @return	JTable	A database object
	 */
	public function getTable($type = 'Main_categories', $prefix = 'RemcaTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
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
		
		// Load associated content items
		$assoc = JLanguageAssociations::isEnabled();

		if ($assoc)
		{
			$item->associations = array();

			if ($item->id != null)
			{
				$associations = JLanguageAssociations::getAssociations('com_remca', '#__rem_main_categories', 'com_remca.main_category.item', $item->id, 'id', 'alias', null);

				foreach ($associations as $tag => $association)
				{
					$item->associations[$tag] = $association->id;
				}

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
		$form = $this->loadForm('com_remca.edit.main_category', 'main_category', array('control' => 'jform', 'load_data' => $load_data));
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

		// Prevent messing with Main_category language and category when editing existing Main_category with associations
		$app = JFactory::getApplication();
		$assoc = JLanguageAssociations::isEnabled();

		if ($id AND $app->isSite() AND $assoc)
		{
			$form->setFieldAttribute('language', 'readonly', 'true');
			$form->setFieldAttribute('language', 'filter', 'unset');
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
		$data = $app->getUserState('com_remca.edit.main_category.data', array());

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
		
		$table->name = htmlspecialchars_decode($table->name, ENT_QUOTES);
		$table->alias = JApplication::stringURLSafe($table->alias);

		if (empty($table->alias))
		{
			$table->alias = $this->generateUniqueAlias((array) $table);
		}
		
		// Increment the main_category version number.
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
		// Include the realestatemanagerca plugins for the onSave events.
		JPluginHelper::importPlugin('remca');	
		
		$input = JFactory::getApplication()->input;
		$filter  = JFilterInput::getInstance();
		



        

		if (parent::save($data))
		{

			$assoc =  JLanguageAssociations::isEnabled();
			if ($assoc)
			{
				$id = (int) $this->getState($this->getName() . '.id');
				$item = $this->getItem($id);

				// Adding self to the association
				$associations = $data['associations'];
	
				$associations = Joomla\Utilities\ArrayHelper::toInteger($associations);

				// Unset any invalid associations
				foreach ($associations as $tag => $id)
				{
					if (!$id)
					{
						unset($associations[$tag]);
					}
				}

				// Detecting all item menus
				$all_language = $item->language == '*';

				if ($all_language AND !empty($associations))
				{
					JError::raiseNotice(403, JText::_('COM_REMCA_ERROR_ALL_LANGUAGE_ASSOCIATED'));
				}

				$associations[$item->language] = $item->id;
				try
				{
					// Deleting old association for these items
					$db = JFactory::getDbo();
					$query = $db->getQuery(true);
					$query->delete($db->quoteName('#__associations'));
					$query->where('context='.$db->quote('com_remca.main_category.item'));
					$query->where($db->quoteName('id').' IN ('.implode(',', $associations).')');
					$db->setQuery($query);
					$db->execute();
				}
				catch (RuntimeException $e)
				{
					$this->setError($e->getMessage());
					return false;
				}

				if (!$all_language AND count($associations))
				{
					// Adding new association for these items
					$key = md5(json_encode($associations));
					$query->clear();
					$query->insert($db->quoteName('#__associations'));

					foreach ($associations as $id)
					{
						$query->values((int) $id.','.$db->quote('com_remca.main_category.item') . ',' . $db->quote($key));
					}

					try
					{
						$db->setQuery($query);
						$db->execute();
					}
					catch (RuntimeException $e)
					{
						$this->setError($e->getMessage());
						return false;
					}					
				}
			}

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
		// Include the remca plugins for the change of state event.
		JPluginHelper::importPlugin('remca');	
		
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
		// Include the remca plugins for the delete events.
		JPluginHelper::importPlugin('remca');	
		
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
	 * Custom clean the cache of com_remca and remca modules
	 *
	 */
	protected function cleanCache($group = null, $client_id = 0)
	{
		parent::cleanCache('com_remca');

	}
	/**
	 * Method to get a unique alias.
	 *
	* @param   array   $data	The data where the original name is stored
	 *
	 * @return	string  $alias		The modified alias.
	 *
	 */
	protected function generateUniqueAlias($data)
	{
		$table = $this->getTable();		

		// Alter the alias
		$key_array = array('alias' => JApplication::stringURLSafe($data['alias']));
		
		while ($table->load($key_array))
		{
			$key_array['alias'] = JString::increment($key_array['alias'], 'dash');
		}

		return $key_array['alias'];
	}
	/**
	 * Pre process the form to pick up main_categories associated by language
	 *
	 * @param   object  $form		A form object
	 * @param   array	$data		The record data
	 * @param   string  $group		The association context.
	 * 
	 * Note. Calling getState in this method will result in recursion.
	 *
	 * @return  void

	 */
	protected function preprocessForm(JForm $form, $data, $group = 'main_category')
	{
		// Association content items
		$assoc = JLanguageAssociations::isEnabled();
		if ($assoc)
		{
			$languages = JLanguageHelper::getLanguages('lang_code');

			$addform = new SimpleXMLElement('<form />');
			$fields = $addform->addChild('fields');
			$fields->addAttribute('name', 'associations');
			$fieldset = $fields->addChild('fieldset');
			$fieldset->addAttribute('name', 'item_associations');
			$fieldset->addAttribute('description', 'COM_REMCA_MAIN_CATEGORIES_ITEM_ASSOCIATIONS_FIELDSET_DESC');
			$add = false;
			foreach ($languages as $tag => $language)
			{
				if (empty($data->language) OR $tag != $data->language)
				{
					$add = true;
					$field = $fieldset->addChild('field');
					$field->addAttribute('name', $tag);
					$field->addAttribute('type', 'modal_main_categories');
					$field->addAttribute('language', $tag);
					$field->addAttribute('label', $language->title);
					$field->addAttribute('translate_label', 'false');
					$field->addAttribute('edit', 'true');
					$field->addAttribute('clear', 'true');
					
				}
			}
			if ($add)
			{
				$form->load($addform, false);
			}
		}

		parent::preprocessForm($form, $data, $group);
	}
}