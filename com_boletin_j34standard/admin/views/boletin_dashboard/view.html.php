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
 * MVC View for Dashboard
 *
 */
class BoletinViewBoletin_Dashboard extends JViewLegacy
{
	protected $params;
	
	public function display($tpl = null)
	{
		$this->state	= $this->get('State');


		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode("\n", $errors));
			return false;
		}
		
		$buttons = $this->prepareButtons();
		$this->assignRef('buttons',$buttons);
		
		$this->addToolbar();
		$this->prepareDocument();


		parent::display($tpl);
	}
	/**
	 * Add the page title and toolbar.
	 *
	 * 
	 */
	protected function addToolbar()
	{

		
		JToolbarHelper::title(JText::_('COM_BOLETIN_VIEW_DASHBOARD_HEADER'), 'componentarchitect.png');
		
		JToolbarHelper::preferences('com_boletin');
		JToolbarHelper::help('JHELP_COMPONENTS_COMPONENTARCHITECT_DASHBOARD', true, null, 'com_boletin');
	}
	
	/**
	 * Prepare the dashboard buttons
	 */
	protected function prepareButtons()
	{
		$buttons = array();
		$buttons[] = array('link'=>'index.php?option=com_boletin&view=facuerdos',
			'object'=>'facuerdos',
			'text'=>JText::_('COM_BOLETIN_FACUERDOS'),
			'desc'=>JText::_('COM_BOLETIN_FACUERDO_DESCRIPTION')
			);

		return $buttons;
	}	
	/**
	 * Prepares the document
	 */
	protected function prepareDocument()
	{
		$this->document->setTitle(JText::_('COM_BOLETIN_VIEW_DASHBOARD_HEADER'));

		// Include custom admin css
		$this->document->addStyleSheet(JUri::root().'media/com_boletin/css/admin.css');

		// Add Javscript functions for field display
		JHtml::_('behavior.tooltip');
	
	}
}