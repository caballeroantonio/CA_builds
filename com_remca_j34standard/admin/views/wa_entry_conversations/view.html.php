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
 * @CAversion		Id: view.html.php 571 2016-01-04 15:03:02Z BrianWade $
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

/**
 * View class for a list of wa_entry_conversations.
 *
 */
class RemcaViewWa_entry_conversations extends JViewLegacy
{
	protected $items;
	protected $pagination;
	protected $state;
	protected $creators;
	protected $can_do;
	protected $id_wa_title_conversation_values;
	protected $phone_values;

	/**
	 * Execute and display a template script.
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  mixed  A string if successful, otherwise a Error object.
	 */
	public function display($tpl = null)
	{
		
		$this->items		= $this->get('Items');
		$this->pagination	= $this->get('Pagination');
		$this->state		= $this->get('State');
		$this->filterForm    = $this->get('FilterForm');
		$this->activeFilters = $this->get('ActiveFilters');
		
		$this->can_do = JHelperContent::getActions('com_remca', 'category', $this->state->get('filter.category_id'));
				
		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode("\n", $errors));
			return false;
		}

		if ($this->getLayout() !== 'modal')
		{
			$this->addSidebar();
			$this->addToolbar();
		}
		$this->prepareDocument();		
		parent::display($tpl);
	}

	/**
	 * Add the page title and toolbar.
	 *
	 */
	protected function addToolbar()
	{
		$user  = JFactory::getUser();	
		// Get the toolbar object instance
		$bar = JToolbar::getInstance('toolbar');
			
		JToolbarHelper::title(JText::_('COM_REMCA_WA_ENTRY_CONVERSATIONS_LIST_HEADER'), 'stack wa_entry_conversations');

		if ($this->can_do->get('core.create')) 
		{
			JToolbarHelper::addNew('wa_entry_conversation.add','JTOOLBAR_NEW');
		}
		
		if ($this->can_do->get('core.edit') OR $this->can_do->get('core.edit.own')) 
		{
			JToolbarHelper::editList('wa_entry_conversation.edit','JTOOLBAR_EDIT');
		}
		if ($this->can_do->get('core.edit.state') ) 
		{

			if ($this->state->get('filter.state') != 2)
			{
				JToolbarHelper::custom('wa_entry_conversations.publish', 'publish.png', 'publish_f2.png','JTOOLBAR_PUBLISH', true);
				JToolbarHelper::custom('wa_entry_conversations.unpublish', 'unpublish.png', 'unpublish_f2.png', 'JTOOLBAR_UNPUBLISH', true);
			}

			if ($this->state->get('filter.state') != -1 ) 
			{
				if ($this->state->get('filter.state') != 2) 
				{
					JToolbarHelper::archiveList('wa_entry_conversations.archive','JTOOLBAR_ARCHIVE');
				}
				else 
				{
					if ($this->state->get('filter.state') == 2) 
					{
						JToolbarHelper::unarchiveList('wa_entry_conversations.publish', 'JTOOLBAR_UNARCHIVE');
					}
				}
			}
		}
		

		// Add a batch button
		if ($user->authorise('core.create', 'com_remca') AND $user->authorise('core.edit', 'com_remca') AND $user->authorise('core.edit.state', 'com_remca'))
		{
			JHtml::_('bootstrap.modal', 'collapseModal');
			$title = JText::_('JTOOLBAR_BATCH');
			$dhtml = "<button data-toggle=\"modal\" data-target=\"#collapseModal\" class=\"btn btn-small\">
						<i class=\"icon-checkbox-partial\" title=\"$title\"></i>
						$title</button>";
			$bar->appendButton('Custom', $dhtml, 'batch');
		}
	
		if ($this->state->get('filter.state') == -2)
		{
			if ($this->can_do->get('core.delete'))
			{
				JToolbarHelper::deleteList('', 'wa_entry_conversations.delete','JTOOLBAR_EMPTY_TRASH');
			}
		}
		else 
		{
			if ($this->can_do->get('core.edit.state')) 
			{
				JToolbarHelper::trash('wa_entry_conversations.trash','JTOOLBAR_TRASH');
			}
		}
                        
                JToolbarHelper::custom('wa_entry_conversations.export', 'download','download', 'JTOOLBAR_EXPORT', FALSE);

				
		if ($user->authorise('core.admin', 'com_remca') OR $user->authorise('core.options', 'com_remca')) 
		{
			JToolbarHelper::preferences('com_remca');
		}
		JToolbarHelper::help('JHELP_COMPONENTS_COM_REMCA_WA_ENTRY_CONVERSATION', true, null, 'com_remca');
	}
	/**
	 * Add the page sidebar.
	 *
	 */
	protected function addSidebar()
	{	
		JHtmlSidebar::setAction('index.php?option=com_remca&view=wa_entry_conversations');
				
		$this->sidebar = JHtmlSidebar::render();			
	}	
	
	/**
	 * Prepares the document
	 */
	protected function prepareDocument()
	{
		// Include HTML Helpers
		JHtml::addIncludePath(JPATH_COMPONENT.'/helpers/html');	
	}	
}
