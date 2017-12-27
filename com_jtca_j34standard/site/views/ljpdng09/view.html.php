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
 * HTML LIBRO DE ACTUARIOS View class for the TSJ CDMX Libros TxCA component
 *
 */
class JtCaViewLjpdng09 extends JViewLegacy
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
		
		
		// Merge ljpdng09 params. If this is single-ljpdng09 view, menu params override ljpdng09 params
		// Otherwise, ljpdng09 params override menu item params
		$this->params	= $this->state->get('params');
		$active	= $app->getMenu()->getActive();
		$temp	= clone ($this->params);


		// Check to see which parameters should take priority
		if ($active)
		{
			$current_link = $active->link;
			// If the current view is the active item and an ljpdng09 view for this ljpdng09, then the menu item params take priority
			if (JString::strpos($current_link, 'view=ljpdng09') AND (JString::strpos($current_link, '&id='.(string) $item->id)))
			{
				// $item->params are the ljpdng09 params, $temp are the menu item params
				// Merge so that the menu item params take priority
				$item->params->merge($temp);
				// Load layout from active query (in case it is an alternative menu item)
				if (isset($active->query['layout']))
				{
					$this->setLayout($active->query['layout']);
				}
				// Check for alternative layout of ljpdng09
				else
					{
					if ($layout = $item->params->get('ljpdng09_layout'))
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
				// Current view is not a single ljpdng09, so the ljpdng09 params take priority here
				// Merge the menu item params with the ljpdng09 params so that the ljpdng09 params take priority
				$temp->merge($item->params);
				$item->params = $temp;
				
			}
		}
		else
		{
			// Merge so that ljpdng09 params take priority
			$temp->merge($item->params);
			$item->params = $temp;
			// Check for alternative layouts (since we are not in a single-ljpdng09 menu item)
			// Single-ljpdng09 menu item layout takes priority over alt layout for an ljpdng09
			if ($layout = $item->params->get('ljpdng09_layout'))
			{
				$this->setLayout($layout);
			}
		}
		
		$item->readmore_link = JRoute::_(JtCaHelperRoute::getLjpdng09Route($item->slug,
										$this->getLayout(), 
										$this->params->get('keep_ljpdng09_itemid')));


				
		$offset = $this->state->get('list.offset');

	

		//
		// Process the jtca plugins.
		//
		JPluginHelper::importPlugin('jtca');
		$results = $dispatcher->trigger('onLjpdng09Prepare', array ('com_jtca.ljpdng09', &$item, &$this->params, $offset));

		$item->event = new stdClass;
		
		$results = $dispatcher->trigger('onLjpdng09BeforeDisplay', array('com_jtca.ljpdng09', &$item, &$this->params, $offset));
		$item->event->beforeDisplayLjpdng09 = JString::trim(implode("\n", $results));

		$results = $dispatcher->trigger('onLjpdng09AfterDisplay', array('com_jtca.ljpdng09', &$item, &$this->params, $offset));
		$item->event->afterDisplayLjpdng09 = JString::trim(implode("\n", $results));
		

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
			$this->params->def('page_heading', JText::sprintf('COM_JTCA_LJPDNG09_ID_TITLE', $this->item->id));
		}

		$title = $this->params->get('page_title', '');

		$id = (int) @$menu->query['id'];

		// if the menu item does not concern this ljpdng09
		if ($menu AND ($menu->query['option'] != 'com_jtca' OR $menu->query['view'] != 'ljpdng09' OR $id != $this->item->id))
		{
			$path = array(array('title' => $this->item->id, 'link' => ''));
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
			$this->document->setTitle($this->item->page_title . ' - ' . JText::sprintf('COM_JTCA_PAGEBREAK_PAGE_NUM', $this->state->get('list.offset') + 1));
		}

		
		// Include Helpers
		JHtml::addIncludePath(JPATH_COMPONENT.'/helpers');	
	}
}
