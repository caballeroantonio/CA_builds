<?php
/**
 * @version 		$Id:$
 * @name			RealEstateManagerCA
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_remca
 * @subpackage		com_remca.search.remca.houses
 * @copyright		
 * @license			GNU General Public License version 3 or later; See http://www.gnu.org/copyleft/gpl.html 
 * 
 * The following Component Architect header section must remain in any distribution of this file
 * 
 * @CAversion		Id: compobjectplural.php 571 2016-01-04 15:03:02Z BrianWade $
 * @CAauthor		Component Architect (www.componentarchitect.com)
 * @CApackage		architectcomp
 * @CAsubpackage	architectcomp.search.architectcomp.compobjectplural
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

require_once JPATH_SITE.'/components/com_remca/router.php';

/**
 * Houses Search plugin
 *
 */
class PlgSearchHouses extends JPlugin
{
	/**
	 * @var    $layout	string	The sublayout to use when rendering the results.
	 */
	protected $layout = 'default';
	
	/**
	 * @var    $autoloadLanguage boolean	Load the language file on instantiation
	 */
	protected $autoloadLanguage = true;
		
	/**
	 * Constructor
	 *
	 * @access      protected
	 * @param       object  $subject The object to observe
	 * @param       array   $config  An array that holds the plugin configuration
	 * 
	 */
	public function __construct(&$subject, $config)
	{
		parent::__construct($subject, $config);
		if (isset($config['layout']))
		{		
			$this->layout = str_replace('_:','',$config['layout']);
		}		
	}
	/**
	 * @return array An array of search areas
	 */
	public function onContentSearchAreas()
	{
		static $areas = array(
			'houses' => 'PLG_SEARCH_HOUSES_HOUSES'
			);
			return $areas;
	}

	/**
	 * Houses Search method
	 * The sql must return the following fields that are used in a common display
	 * routine: href, title, section, created, text, browsernav
	 * @param string Target search string
	 * @param string mathcing option, exact|any|all
	 * @param string ordering option, newest|oldest|popular|alpha|category(if used)
	 * @param mixed An array if the search it to be restricted to areas, null if search all
	 */
	public function onContentSearch($text, $phrase='', $ordering='', $areas=null)
	{
		$db		= JFactory::getDbo();
		$app	= JFactory::getApplication();
		$user	= JFactory::getUser();
		$groups	= implode(',', $user->getAuthorisedViewLevels());
		$tag = JFactory::getLanguage()->getTag();

		require_once JPATH_SITE.'/components/com_remca/helpers/route.php';
		require_once JPATH_ADMINISTRATOR.'/components/com_search/helpers/search.php';

		$search_text = $text;
		if (is_array($areas))
		{
			if (!array_intersect($areas, array_keys($this->onContentSearchAreas())))
			{
				return array();
			}
		}

		$sHouse	= 1;
		$sHouseArchived 	= 0;
		$limit = 50;		

		$sHouse	= $this->params->get('search_houses',1);
		$sHouseArchived		= $this->params->get('search_archived_houses',0);

		$limit			= $this->params->def('search_limit',		50);
		if ($this->params->get('itemid') <> '')
		{
			$item_id_str = '&Itemid='.(string) $this->params->get('itemid');
			$keep_item_id = true;
		}
		else
		{
			$item_id_str = '';
			$keep_item_id = false;
		}

		$null_date		= $db->getNullDate();
		$date = JFactory::getDate();
		$now = $date->toSQL();

		$text = JString::trim($text);
		if ($text == '')
		{
			return array();
		}

		switch ($phrase)
		{
			case 'exact':
				$text		= $db->quote('%'.$db->escape($text, true).'%', false);
				$wheres_2	= array();
				$wheres_2[]	= $db->quoteName('a.name').' LIKE '.$text;
				$wheres_2[]	= $db->quoteName('a.description').' LIKE '.$text;
				$where		= '(' . implode(') OR (', $wheres_2) . ')';
				break;

			case 'all':
			case 'any':
			default:
				$words = explode(' ', $text);
				$wheres = array();
				foreach ($words as $word)
				{
					$word		= $db->quote('%'.$db->escape($word, true).'%', false);
					$wheres_2	= array();
					$wheres_2[]	= 'LOWER('.$db->quoteName('a.name').') LIKE LOWER('.$word.')';
					$wheres_2[]	= 'LOWER('.$db->quoteName('a.description').') LIKE LOWER('.$word.')';
					$wheres[]	= implode(' OR ', $wheres_2);
				}
				$where = '(' . implode(($phrase == 'all' ? ') AND (' : ') OR ('), $wheres) . ')';
				break;
		}

		$order = '';
		switch ($ordering)
		{
			case 'popular':
				$order = $db->quoteName('a.hits').' DESC';
				break;
			case 'alpha':
				$order = $db->quoteName('a.name').' ASC';
				break;
			case 'category':
				$order = $db->quoteName('c.title').' ASC, '.$db->quoteName('a.name').' ASC';
				break;

			default:
				$order = $db->quoteName('a.ordering').' DESC';
				
				break;
		}

		$rows = array();
		$query	= $db->getQuery(true);

		$search_section = JText::_('PLG_SEARCH_HOUSES_HOUSES');
		// search houses
		if ($sHouse AND $limit > 0)
		{
			$query->clear();
					
			$slug_select = $db->quoteName('a.id').' AS slug, ';

			$slug_select .= ' CASE WHEN ';
			$slug_select .= $query->charLength('c.alias', '!=', '0');
			$slug_select .= ' THEN ';
			$c_id = $query->castAsChar('c.id');
			$slug_select .= $query->concatenate(array($c_id, 'c.alias'), ':');
			$slug_select .= ' ELSE ';
			$slug_select .= $c_id.' END AS catslug, ';
								
			$query->select(
						$db->quoteName('a.name').' AS title, '.
						'NULL AS created, '.
						$db->quoteName('a.description').' AS text, '.
						$db->quoteName('a.language').' AS language, '.						
						$db->quoteName('a.catid').' AS catid, '.
						'CONCAT_WS('.$db->quote($search_section).'"/", '.$db->quoteName('c.title').') AS section, '.
						$slug_select.
						'"2" AS browsernav');
			$query->from($db->quoteName('#__rem_houses').' AS a');
			$query->join('INNER', $db->quoteName('#__categories').' AS c ON '.$db->quoteName('c.id').' = '.$db->quoteName('a.catid'));
			$query->where('('. $where .')' 
						.'AND '.$db->quoteName('a.state').' = 1 '
						.'AND '.$db->quoteName('c.published').' = 1 '
						);

			// Filter by language
			if ($app->isSite() AND JLanguageMultilang::isEnabled())
			{
				$query->where($db->quoteName('a.language').' IN (' . $db->quote($tag) . ',' . $db->quote('*') . ')');
				$query->where($db->quoteName('c.language').' IN (' . $db->quote($tag) . ',' . $db->quote('*') . ')');
			}
			
			$query->group($db->quoteName('a.id').', '.$db->quoteName('a.name'));
			$query->order($order);

			$db->setQuery($query, 0, $limit);
			$list = $db->loadObjectList();
			$limit -= count($list);

			if (isset($list))
			{
				foreach($list as $key => $item)
				{
					$list[$key]->href = JRoute::_(RemcaHelperRoute::getHouseRoute($item->slug, $item->catid, $item->language, $this->layout, $keep_item_id));
					//Add the selected item id to the link if there is one
					$list[$key]->href .= $item_id_str;										
										
				}
			}
			$rows[] = $list;
		}

		// search archived houses
		if ($sHouseArchived AND $limit > 0)
		{
			$query->clear();

			$slug_select = $db->quoteName('a.id').' AS slug, ';

			$slug_select .= ' CASE WHEN ';
			$slug_select .= $query->charLength('c.alias', '!=', '0');
			$slug_select .= ' THEN ';
			$c_id = $query->castAsChar('c.id');
			$slug_select .= $query->concatenate(array($c_id, 'c.alias'), ':');
			$slug_select .= ' ELSE ';
			$slug_select .= $c_id.' END AS catslug, ';
			
			$query->select(
						$db->quoteName('a.name').' AS title, '.
						'NULL AS created, '.
						$db->quoteName('a.description').' AS text, '.
						$db->quoteName('a.language').' AS language, '.						
						$db->quoteName('a.catid').' AS catid, '.
						'CONCAT_WS('.$db->quote($search_section).'"/", c.title) AS section, '.
						$slug_select.
						'"2" AS browsernav');
			$query->from($db->quoteName('#__rem_houses').' AS a');
			$join = $db->quoteName('#__categories').' AS c ON '.$db->quoteName('c.id').' = '.$db->quoteName('a.catid');
			$query->join('INNER', $join);
			$query->where('('. $where .') '
				.'AND '.$db->quoteName('a.state').' = 2 '
				.'AND '.$db->quoteName('c.published').' = 1 '
			);	
				
			// Filter by language
			if ($app->isSite() AND JLanguageMultilang::isEnabled())
			{
				$query->where($db->quoteName('a.language').' IN (' . $db->quote($tag) . ',' . $db->quote('*') . ')');
				$query->where($db->quoteName('c.language').' IN (' . $db->quote($tag) . ',' . $db->quote('*') . ')');
			}	
			$query->order($order);


			$db->setQuery($query, 0, $limit);
			$list3 = $db->loadObjectList();

			// find an itemid for archived to use if there isn't another one
			$item	= $app->getMenu()->getItems('link', 'index.php?option=com_remca&view=housearchive', true);
			$item_id = isset($item) ? '&Itemid='.$item->id : $item_id_str;

			if (isset($list3))
			{
				foreach($list3 as $key => $item)
				{

					$list3[$key]->href	= JRoute::_('index.php?option=com_remca&view=housearchive'.
													$item_id);
				}
			}

			$rows[] = $list3;
		}

		$results = array();
		if (count($rows))
		{
			foreach($rows as $row)
			{
				$new_row = array();
				foreach($row as $house)
				{
					if (SearchHelper::checkNoHTML($house, $search_text, array('title',
																						'description',
																						)))
					{
						$new_row[] = $house;
					}
				}
				$results = array_merge($results, (array) $new_row);
			}
		}

		return $results;
	}
}
