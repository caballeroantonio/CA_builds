<?php
/**
 * @version 		$Id:$
 * @name			TSJ CDMX Libros TxCA
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_jtca
 * @subpackage		com_jtca.admin
 * @copyright		Copyright (c) 2017 - 2020. All Rights Reserved
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
 * View class for a list of ljccm09s.
 *
 */
class JtCaViewLjccm09s extends JViewLegacy
{
	protected $items;
	protected $pagination;
	protected $state;
	protected $creators;
	protected $can_do;

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
		
		$this->can_do = JHelperContent::getActions('com_jtca');
				
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
			
		JToolbarHelper::title(JText::_('COM_JTCA_LJCCM09S_LIST_HEADER'), 'stack ljccm09s');

		if ($this->can_do->get('core.create')) 
		{
			JToolbarHelper::addNew('ljccm09.add','JTOOLBAR_NEW');
		}
		
		if ($this->can_do->get('core.edit') OR $this->can_do->get('core.edit.own')) 
		{
			JToolbarHelper::editList('ljccm09.edit','JTOOLBAR_EDIT');
		}
		if ($this->can_do->get('core.edit.state') ) 
		{

			if ($this->state->get('filter.state') != 2)
			{
				JToolbarHelper::custom('ljccm09s.publish', 'publish.png', 'publish_f2.png','JTOOLBAR_PUBLISH', true);
				JToolbarHelper::custom('ljccm09s.unpublish', 'unpublish.png', 'unpublish_f2.png', 'JTOOLBAR_UNPUBLISH', true);
			}

			if ($this->state->get('filter.state') != -1 ) 
			{
				if ($this->state->get('filter.state') != 2) 
				{
					JToolbarHelper::archiveList('ljccm09s.archive','JTOOLBAR_ARCHIVE');
				}
				else 
				{
					if ($this->state->get('filter.state') == 2) 
					{
						JToolbarHelper::unarchiveList('ljccm09s.publish', 'JTOOLBAR_UNARCHIVE');
					}
				}
			}
		}
		

	
		if ($this->state->get('filter.state') == -2)
		{
			if ($this->can_do->get('core.delete'))
			{
				JToolbarHelper::deleteList('', 'ljccm09s.delete','JTOOLBAR_EMPTY_TRASH');
			}
		}
		else 
		{
			if ($this->can_do->get('core.edit.state')) 
			{
				JToolbarHelper::trash('ljccm09s.trash','JTOOLBAR_TRASH');
			}
		}
                        
                JToolbarHelper::custom('ljccm09s.export', 'download','download', 'JTOOLBAR_EXPORT', FALSE);

				
		if ($user->authorise('core.admin', 'com_jtca') OR $user->authorise('core.options', 'com_jtca')) 
		{
			JToolbarHelper::preferences('com_jtca');
		}
		JToolbarHelper::help('JHELP_COMPONENTS_COM_JTCA_LJCCM09', true, null, 'com_jtca');
	}
	/**
	 * Add the page sidebar.
	 *
	 */
	protected function addSidebar()
	{	
		JHtmlSidebar::setAction('index.php?option=com_jtca&view=ljccm09s');
				
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
