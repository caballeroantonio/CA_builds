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
 * @CAversion		Id: view.html.php 571 2016-01-04 15:03:02Z BrianWade $
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

/**
 * HTML tfjfa_bacuerdo View class for the boletines component
 *
 */
class BoletinViewTfjfa_bacuerdo extends JViewLegacy
{
	protected $item;
	protected $params;
	protected $print;
	protected $state;
	protected $user;
	protected $return_page;
	protected $form;

	/**
	 * Execute and display a template script.
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  mixed  A string if successful, otherwise a Error object.
	 */	
	public function display($tpl = null)
	{
		
		$app		= JFactory::getApplication();
		$user		= JFactory::getUser();
		$user_id	= $user->get('id');
		$dispatcher = JEventDispatcher::getInstance();

		$this->state	= $this->get('State');
		$this->item		= $this->get('Item');
		$this->print	= $app->input->getBool('print');
		$this->user		= $user;

		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseWarning(500, implode("\n", $errors));

			return false;
		}

		// Create a shortcut for $item.
		$item = $this->item;
			
		// Add router helpers.
		$item->slug = $item->id;
		
		$item->catslug		= $item->category_alias ? ($item->catid.':'.$item->category_alias) : $item->catid;
		$item->parent_slug	= $item->parent_alias ? ($item->parent_id.':'.$item->parent_alias) : $item->parent_id;
		
		// No link for ROOT category
		if ($item->parent_alias == 'root')
		{
			$item->parent_slug = null;
		}		
		
		// Merge tfjfa_bacuerdo params. If this is single-tfjfa_bacuerdo view, menu params override tfjfa_bacuerdo params
		// Otherwise, tfjfa_bacuerdo params override menu item params
		$this->params	= $this->state->get('params');
		$active	= $app->getMenu()->getActive();
		$temp	= clone ($this->params);


		// Check to see which parameters should take priority
		if ($active)
		{
			$current_link = $active->link;
			// If the current view is the active item and an tfjfa_bacuerdo view for this tfjfa_bacuerdo, then the menu item params take priority
			if (JString::strpos($current_link, 'view=tfjfa_bacuerdo') AND (JString::strpos($current_link, '&id='.(string) $item->id)))
			{
				// $item->params are the tfjfa_bacuerdo params, $temp are the menu item params
				// Merge so that the menu item params take priority
				$item->params->merge($temp);
				// Load layout from active query (in case it is an alternative menu item)
				if (isset($active->query['layout']))
				{
					$this->setLayout($active->query['layout']);
				}
				// Check for alternative layout of tfjfa_bacuerdo
				else
					{
					if ($layout = $item->params->get('tfjfa_bacuerdo_layout'))
					{
						$this->setLayout($layout);
					}
				}

				// $item->params are the article params, $temp are the menu item params
				// Merge so that the menu item params take priority
				$item->params->merge($temp);				
			}
			else
			{
				// Current view is not a single tfjfa_bacuerdo, so the tfjfa_bacuerdo params take priority here
				// Merge the menu item params with the tfjfa_bacuerdo params so that the tfjfa_bacuerdo params take priority
				$temp->merge($item->params);
				$item->params = $temp;
				
				if ($this->getLayout() == 'blog')
				{
					$this->setLayout('article');
				}
			}
		}
		else
		{
			// Merge so that tfjfa_bacuerdo params take priority
			$temp->merge($item->params);
			$item->params = $temp;
			// Check for alternative layouts (since we are not in a single-tfjfa_bacuerdo menu item)
			// Single-tfjfa_bacuerdo menu item layout takes priority over alt layout for an tfjfa_bacuerdo
			if ($layout = $item->params->get('tfjfa_bacuerdo_layout'))
			{
				$this->setLayout($layout);
			}
		}
		
		$item->readmore_link = JRoute::_(BoletinHelperRoute::getTfjfa_bacuerdoRoute($item->slug, 
										$item->catid,
										$this->getLayout(),								
										$this->params->get('keep_tfjfa_bacuerdo_itemid')));


				
		$offset = $this->state->get('list.offset');

	

		//
		// Process the boletin plugins.
		//
		JPluginHelper::importPlugin('boletin');
		$results = $dispatcher->trigger('onTfjfa_bacuerdoPrepare', array ('com_boletin.tfjfa_bacuerdo', &$item, &$this->params, $offset));

		$item->event = new stdClass;
		
		$results = $dispatcher->trigger('onTfjfa_bacuerdoBeforeDisplay', array('com_boletin.tfjfa_bacuerdo', &$item, &$this->params, $offset));
		$item->event->beforeDisplayTfjfa_bacuerdo = JString::trim(implode("\n", $results));

		$results = $dispatcher->trigger('onTfjfa_bacuerdoAfterDisplay', array('com_boletin.tfjfa_bacuerdo', &$item, &$this->params, $offset));
		$item->event->afterDisplayTfjfa_bacuerdo = JString::trim(implode("\n", $results));
		

		$this->prepareDocument();

		//Escape strings for HTML output
		$this->pageclass_sfx = htmlspecialchars($this->params->get('pageclass_sfx'));

		parent::display($tpl);
	}

	/**
	 * Prepares the document
	 */
	protected function prepareDocument()
	{
		$app	= JFactory::getApplication();
		$menus	= $app->getMenu();
		$lang	= JFactory::getLanguage();		
		$pathway = $app->getPathway();
		$title = null;

		// Because the application sets a default page title,
		// we need to get it from the menu item itself
		$menu = $menus->getActive();
		if ($menu  AND $menu->params->get('show_page_heading'))
		{
			$this->params->def('page_heading', $this->params->get('page_title', $menu->title));
		}
		else
		{
			$this->params->def('page_heading', JText::sprintf('COM_BOLETIN_TFJFA_BACUERDO_ID_TITLE', $this->item->id));
		}

		$title = $this->params->get('page_title', '');

		$id = (int) @$menu->query['id'];

		// if the menu item does not concern this tfjfa_bacuerdo
		if ($menu AND ($menu->query['option'] != 'com_boletin' OR $menu->query['view'] != 'tfjfa_bacuerdo' OR $id != $this->item->id))
		{
			$path = array(array('title' => $this->item->id, 'link' => ''));
			if ( $this->params->get('show_tfjfa_bacuerdo_category_breadcrumb', '0'))
			{			
				$options['countItems'] = false;
				$options['table'] = '#__boletin_tfjfa_bacuerdos';					
				$category = JCategories::getInstance('Boletin', $options)->get($this->item->catid);
				while ($category AND ($menu->query['option'] != 'com_boletin' OR $menu->query['view'] == 'tfjfa_bacuerdo' OR $id != $category->id) AND $category->id > 1)
				{
					$path[] = array('title' => $category->title, 'link' => BoletinHelperRoute::getCategoryRoute($category->id, $this->params->get('keep_tfjfa_bacuerdo_itemid')));
					$category = $category->getParent();
				}
			}
			$path = array_reverse($path);
			foreach($path as $item)
			{
				$pathway->addItem($item['title'], $item['link']);
			}
		}

		// Check for empty title and add site name if param is set
		if (empty($title))
		{
			$title = htmlspecialchars_decode($app->get('sitename'));
		}
		elseif ($app->get('sitename_pagetitles', 0))
		{
			$title = JText::sprintf('JPAGETITLE', htmlspecialchars_decode($app->get('sitename')), $title);
		}
		$this->document->setTitle($title);

		if ($this->params->get('menu-meta_description'))
		{
			$this->document->setDescription($this->params->get('menu-meta_description'));
		}

		if ($this->params->get('menu-meta_keywords'))
		{
			$this->document->setMetadata('keywords', $this->params->get('menu-meta_keywords'));
		}

		if ($this->params->get('robots'))
		{
			$this->document->setMetadata('robots', $this->params->get('robots'));
		}	

		// If there is a pagebreak heading or title, add it to the page title
		if (!empty($this->item->page_title))
		{
			$this->document->setTitle($this->item->page_title . ' - ' . JText::sprintf('COM_BOLETIN_PAGEBREAK_PAGE_NUM', $this->state->get('list.offset') + 1));
		}

		
		// Include Helpers
		JHtml::addIncludePath(JPATH_COMPONENT.'/helpers');	
	}
}