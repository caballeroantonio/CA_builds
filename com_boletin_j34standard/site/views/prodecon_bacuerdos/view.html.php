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
 * Frontpage View class
 *
 */
class BoletinViewProdecon_bacuerdos extends JViewLegacy
{
	protected $items;
	protected $pagination;
	protected $state;
	protected $item;

	protected $lead_items = array();
	protected $intro_items = array();
	protected $link_items = array();

	/**
	 * Execute and display a template script.
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  mixed  A string if successful, otherwise a Error object.
	 */
	public function display($tpl = null)
	{
		
		$app = JFactory::getApplication();
		$state		= $this->get('State');
		$params		= $state->params;
		$items 		= $this->get('Items');
		$pagination	= $this->get('Pagination');
			
		$dispatcher	= JEventDispatcher::getInstance();		

		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseWarning(500, implode("\n", $errors));
			return false;
		}

		// PREPARE THE DATA
		if ($app->input->getString('layout', 'default') != 'blog')
		{			
		}	
		// Compute the prodecon_bacuerdo slugs and set the trigger events.
		foreach ($items as $i => &$item)
		{
			// Add router helpers.
			$item->slug = $item->id;
			
			//
			// Process the boletin plugins.
			//
			
			JPluginHelper::importPlugin('boletin');
			$dispatcher->trigger('onProdecon_bacuerdoPrepare', array ('com_boletin.prodecon_bacuerdo', &$item, &$item->params,$i));

			$item->event = new stdClass;


			$results = $dispatcher->trigger('onProdecon_bacuerdoBeforeDisplay', array('com_boletin.prodecon_bacuerdo', &$item, &$item->params, $i));
			$item->event->beforeDisplayProdecon_bacuerdo = JString::trim(implode("\n", $results));

			$results = $dispatcher->trigger('onProdecon_bacuerdoAfterDisplay', array('com_boletin.prodecon_bacuerdo', &$item, &$item->params,$i));
			$item->event->afterDisplayProdecon_bacuerdo = JString::trim(implode("\n", $results));

			$dispatcher = JEventDispatcher::getInstance();

		}
		if ($app->input->getString('layout', 'default') == 'blog')
		{			
			// Get the metrics for the structural page layout.
			$num_leading = (int) $params->def('prodecon_bacuerdo_num_leading', 1);
			$num_intro   = (int) $params->def('prodecon_bacuerdo_num_intro', 4);
			$num_links   = (int) $params->def('prodecon_bacuerdo_num_links', 4);
		
			// Preprocess the breakdown of leading, intro and linked prodecon_bacuerdos.
			// This makes it much easier for the designer to just interogate the arrays.
			$max = count($items);

			// The first group is the leading prodecon_bacuerdos.
			$limit = $num_leading;
			for ($i = 0; $i < $limit AND $i < $max; $i++)
			{
				$this->lead_items[$i] = &$items[$i];
			}

			// The second group is the intro prodecon_bacuerdos.
			$limit = $num_leading + $num_intro;
			// Order prodecon_bacuerdos across, then down (or single column mode)
			for ($i = $num_leading; $i < $limit AND $i < $max; $i++)
			{
				$this->intro_items[$i] = &$items[$i];
			}

			$this->columns = max(1, $params->def('prodecon_bacuerdo_num_columns', 1));
			$order = $params->def('prodecon_bacuerdo_multi_column_order', 1);

			if ($order == 0 AND $this->columns > 1)
			{
				// call order down helper
				$this->intro_items = BoletinHelperQuery::orderDownColumns($this->intro_items, $this->columns);
			}

			// The remainder are the links.
			$limit = $num_leading + $num_intro + $num_links;			
			for ($i = $num_leading + $num_intro; $i < $limit AND $i < $max; $i++)
			{
				$this->link_items[$i] = &$items[$i];
			}
		}
		
		//Escape strings for HTML output
		$this->pageclass_sfx = htmlspecialchars($params->get('pageclass_sfx'));
		
		$this->params     = &$params;
		$this->state      = &$state;
		$this->items      = &$items;
		$this->pagination = &$pagination;				

		$this->prepareDocument();

		parent::display($tpl);
	}

	/**
	 * Prepares the document
	 */
	protected function prepareDocument()
	{
		$app		= JFactory::getApplication();
		$menus		= $app->getMenu();
		$lang		= JFactory::getLanguage();		
		$title 		= null;
		
		// Because the application sets a default page title,
		// we need to get it from the menu item itself
		$menu = $menus->getActive();
		if ($menu  AND $menu->params->get('show_page_heading'))
		{
			$this->params->def('page_heading', $this->params->get('page_title', $menu->title));
		}
		else
		{
			$this->params->def('page_heading', JText::_('COM_BOLETIN_PRODECON_BACUERDOS'));
		}

		$title = $this->params->get('page_title', '');
		if (empty($title))
		{
			$title = htmlspecialchars_decode($app->get('sitename'));
		}
		else
		{
			if ($app->get('sitename_pagetitles', 0))
			{
				$title = JText::sprintf('JPAGETITLE', htmlspecialchars_decode($app->get('sitename')), $title);
			}
		}
		$this->document->setTitle($title);
		// Get Menu Item meta description, Keywords and robots instruction to insert in page header
		
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
		
		// Add feed links
		if ($this->params->get('show_feed_link', 1))
		{
			$link = '&format=feed&limitstart=';
			$attribs = array('type' => 'application/rss+xml', 'title' => 'RSS 2.0');
			$this->document->addHeadLink(JRoute::_($link . '&type=rss'), 'alternate', 'rel', $attribs);
			$attribs = array('type' => 'application/atom+xml', 'title' => 'Atom 1.0');
			$this->document->addHeadLink(JRoute::_($link . '&type=atom'), 'alternate', 'rel', $attribs);
		}

		// Include Helpers
		JHtml::addIncludePath(JPATH_COMPONENT.'/helpers');	
	}
}
