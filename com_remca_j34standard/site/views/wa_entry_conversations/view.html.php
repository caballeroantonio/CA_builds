<?php
/**
 * @version 		$Id:$
 * @name			RealEstateManagerCA
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_remca
 * @subpackage		com_remca.site
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
class RemcaViewWa_entry_conversations extends JViewLegacy
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
			$this->action_values	= $this->get('Actionvalues');
		}	
		// Compute the wa_entry_conversation slugs and set the trigger events.
		foreach ($items as $i => &$item)
		{
			// Add router helpers.
			$item->slug = $item->id;
			
			$item->catslug		= $item->category_alias ? ($item->catid.':'.$item->category_alias) : $item->catid;
			$item->parent_slug	= $item->category_alias ? ($item->parent_id.':'.$item->parent_alias) : $item->parent_id;
			//
			// Process the remca plugins.
			//
			
			JPluginHelper::importPlugin('remca');
			$dispatcher->trigger('onWa_entry_conversationPrepare', array ('com_remca.wa_entry_conversation', &$item, &$item->params,$i));

			$item->event = new stdClass;


			$results = $dispatcher->trigger('onWa_entry_conversationBeforeDisplay', array('com_remca.wa_entry_conversation', &$item, &$item->params, $i));
			$item->event->beforeDisplayWa_entry_conversation = JString::trim(implode("\n", $results));

			$results = $dispatcher->trigger('onWa_entry_conversationAfterDisplay', array('com_remca.wa_entry_conversation', &$item, &$item->params,$i));
			$item->event->afterDisplayWa_entry_conversation = JString::trim(implode("\n", $results));

			$dispatcher = JEventDispatcher::getInstance();

		}
		if ($app->input->getString('layout', 'default') == 'blog')
		{			
			// Get the metrics for the structural page layout.
			$num_leading = (int) $params->def('wa_entry_conversation_num_leading', 1);
			$num_intro   = (int) $params->def('wa_entry_conversation_num_intro', 4);
			$num_links   = (int) $params->def('wa_entry_conversation_num_links', 4);
		
			// Preprocess the breakdown of leading, intro and linked entradas conversaciones wtsapp .
			// This makes it much easier for the designer to just interogate the arrays.
			$max = count($items);

			// The first group is the leading entradas conversaciones wtsapp .
			$limit = $num_leading;
			for ($i = 0; $i < $limit AND $i < $max; $i++)
			{
				$this->lead_items[$i] = &$items[$i];
			}

			// The second group is the intro entradas conversaciones wtsapp .
			$limit = $num_leading + $num_intro;
			// Order entradas conversaciones wtsapp  across, then down (or single column mode)
			for ($i = $num_leading; $i < $limit AND $i < $max; $i++)
			{
				$this->intro_items[$i] = &$items[$i];
			}

			$this->columns = max(1, $params->def('wa_entry_conversation_num_columns', 1));
			$order = $params->def('wa_entry_conversation_multi_column_order', 1);

			if ($order == 0 AND $this->columns > 1)
			{
				// call order down helper
				$this->intro_items = RemcaHelperQuery::orderDownColumns($this->intro_items, $this->columns);
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
			$this->params->def('page_heading', JText::_('COM_REMCA_WA_ENTRY_CONVERSATIONS'));
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