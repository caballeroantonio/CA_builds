<?php
/**
 * @version 		$Id:$
 * @name			RealEstateManagerCA
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_remca
 * @subpackage		com_remca.itemnavigation
 * @copyright		
 * @license			GNU General Public License version 3 or later; See http://www.gnu.org/copyleft/gpl.html 
 * 
 * The following Component Architect header section must remain in any distribution of this file
 * 
 * @CAversion		Id: itemnavigation.php 571 2016-01-04 15:03:02Z BrianWade $
 * @CAauthor		Component Architect (www.componentarchitect.com)
 * @CApackage		architectcomp
 * @CAsubpackage	architectcomp.itemnavigation
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

/**
 * Remca navigation plugin class.
 *
 */
class PlgRemcaItemnavigation extends JPlugin
{
	/**
	 * @var    $autoloadLanguage boolean	Load the language file on instantiation
	 */
	protected $autoloadLanguage = true;
	
	/**
	 * On Before Display event procedure for item navigation
	 * @param	string			$context	Context of the paging
	 * @param	array			&$row		Passed by reference and row updated with html for prev and/or next buttons
	 * @param	json/registry	&$params	Item navigation parameters	
	 * @param	integer			$page		Current Item page		
	 * 
	 * @return  void
	 */			
	public function onHouseBeforeDisplay ($context, &$row, &$params, $page=0)
	{
		$app = JFactory::getApplication();

		$view = $app->input->getString('view');
		$layout = $app->input->getString('layout');
		$print = $app->input->getBool('print');

		if ($print) 
		{
			return false;
		}

		if ($params->get('show_house_navigation') AND 
			($context == 'com_remca.house') AND 
			($view == 'house')) 
		{
			
			$html = '';
			$db		= JFactory::getDbo();
			$user	= JFactory::getUser();
			$lang	= JFactory::getLanguage();
			$null_date = $db->getNullDate();

			$date	= JFactory::getDate();
			$now	= $date->toSQL();

			$uid	= $row->id;
			$option	= 'com_remca';
			$can_publish = $user->authorise('core.edit.state', $option.'.house.'.$row->id);
			$query	= $db->getQuery(true);
			

			
			$a_id = $query->castAsChar('a.id');			
			$slug_select = $a_id.' as slug, ';
	        $c_id = $query->castAsChar('cc.id');				
			$slug_select .=	$c_id.' as catslug, ';
			
			$query->select($slug_select.
				$db->quoteName('a.language').', '.
				$db->quoteName('a.catid').', '.
				$db->quoteName('a.id'));
			$query->from($db->quoteName('#__rem_houses').' AS a');
			$query->join('LEFT', $db->quoteName('#__categories').' AS cc ON '.$db->quoteName('cc.id').' = '.$db->quoteName('a.catid'));
			
			if ($app->isSite() AND JLanguageMultilang::isEnabled())
			{
				$query->where($db->quoteName('a.language').' IN ('.$db->quote($lang->getTag()).','.$db->quote('*').')');
			}
						
			// Filter by a same category as the selected row
			if ($params->get('limit_category_fieldtype_navigation',false) == true) 
			{
				$query->where($db->quoteName('a.catid').' = '. (int)$row->catid);
			} 
			

			if (!$can_publish) 
			{
				$query->where( '('.$db->quoteName('a.state').' = 1 OR '.$db->quoteName('a.state').' = -1)'
					);
			}
			else
			{
				$query->where($db->quoteName('a.state').' = '. (int)$row->state);			
			}
						
			$db->setQuery($query);
			
			$list = $db->loadObjectList('id');

			// This check needed if incorrect Itemid is given resulting in an incorrect result.
			if (!is_array($list)) 
			{
				$list = array();
			}

			reset($list);

			// Location of current house item in array list.
			$location = array_search($uid, array_keys($list));

			$rows = array_values($list);

			$row->prev = null;
			$row->next = null;
			
			// Get the global params
			$global_params = JComponentHelper::getParams('com_remca', true);

			if ($location -1 >= 0)	
			{
				$row->prev = $location -1 ; 
				// The previous house item cannot be in the array position -1.
				for ($i = $location-1; $i >= 0; $i--)
				{

					$row->prev = $rows[$i];
					break;

				}

			}

			if (($location +1) < count($rows)) 
			{
				$row->next = $location +1;
				// The next house item cannot be in an array position greater than the number of array postions.
				for ($i = $location+1; $i <= count($rows)-1; $i++)
				{
					$row->next = $rows[$i];
					break;
				}	

			}

			$pn_space = "";
			if (JText::_('JGLOBAL_LT') OR JText::_('JGLOBAL_GT')) 
			{
				$pn_space = " ";
			}


			$keep_item_id = (int) $params->get('keep_house_itemid', 0);		
					
			if ($row->prev) 
			{
				$row->prev_label = ($this->params->get('display', 0) == 0) ? JText::_('JPREV') : $row->prev->name;
				$row->prev = JRoute::_(RemcaHelperRoute::getHouseRoute($row->prev->slug,$row->prev->catid, $row->prev->language, $layout, $keep_item_id));
			} 
			else 
			{
				$row->prev_label = '';
				$row->prev = '';
			}

			if ($row->next) 
			{
				$row->next_label = ($this->params->get('display', 0) == 0) ? JText::_('JNEXT') : $row->next->name;
				$row->next = JRoute::_(RemcaHelperRoute::getHouseRoute($row->next->slug,$row->next->catid, $row->next->language, $layout, $keep_item_id));
							
			} 
			else 
			{
				$row->next_label = '';
				$row->next = '';
			}

			// Output.
			if ($row->prev OR $row->next) 
			{
				$lang = JFactory::getLanguage();
				
				$html = '<ul class="pager pagenav">';
				if ($row->prev) 
				{
					$direction = $lang->isRTL() ? 'right' : 'left';
					$html .= '
					<li class="previous">
						<a href="'. $row->prev .'" rel="prev">'
						. '<i class="icon-chevron-' . $direction . '"></i> ' . $row->prev_label
						. '</a>'
					.'</li>';
				}



				if ($row->next) 
				{
					$direction = $lang->isRTL() ? 'left' : 'right';
					$html .= '
					<li class="next">
						<a href="'. $row->next .'" rel="next">'
							. $row->next_label . ' <i class="icon-chevron-' . $direction . '"></i>'
					. '</a>'
					. '</li>';
				}
				$html .= '</ul>';
				
				$row->pagination = $html;
				$row->paginationposition = $this->params->get('house_position', 1);
				// This will default to the 1.5 and 1.6-1.7 behavior.
				$row->paginationrelative = $this->params->get('house_relative',0);				
			}
		}

		return ;
	}
}
