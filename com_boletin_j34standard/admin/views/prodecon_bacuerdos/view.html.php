<?php
/**
 * @version 		$Id:$
 * @name			Boletines
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_boletin
 * @subpackage		com_boletin.admin
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
 * View class for a list of prodecon_bacuerdos.
 *
 */
class BoletinViewProdecon_bacuerdos extends JViewLegacy
{
	protected $items;
	protected $pagination;
	protected $state;
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
		
		$this->can_do = JHelperContent::getActions('com_boletin');
				
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
			
		JToolbarHelper::title(JText::_('COM_BOLETIN_PRODECON_BACUERDOS_LIST_HEADER'), 'stack prodecon_bacuerdos');

		if ($this->can_do->get('core.create')) 
		{
			JToolbarHelper::addNew('prodecon_bacuerdo.add','JTOOLBAR_NEW');
		}
		
		if ($this->can_do->get('core.edit') OR $this->can_do->get('core.edit.own')) 
		{
			JToolbarHelper::editList('prodecon_bacuerdo.edit','JTOOLBAR_EDIT');
		}
		

	
		if ($this->can_do->get('core.delete'))
		{
			JToolbarHelper::deleteList('', 'prodecon_bacuerdos.delete','JTOOLBAR_DELETE');
		}
                        
                JToolbarHelper::custom('prodecon_bacuerdos.export', 'download','download', 'JTOOLBAR_EXPORT', FALSE);

				
		if ($user->authorise('core.admin', 'com_boletin') OR $user->authorise('core.options', 'com_boletin')) 
		{
			JToolbarHelper::preferences('com_boletin');
		}
		JToolbarHelper::help('JHELP_COMPONENTS_COM_BOLETIN_PRODECON_BACUERDO', true, null, 'com_boletin');
	}
	/**
	 * Add the page sidebar.
	 *
	 */
	protected function addSidebar()
	{	
		JHtmlSidebar::setAction('index.php?option=com_boletin&view=prodecon_bacuerdos');
				
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
