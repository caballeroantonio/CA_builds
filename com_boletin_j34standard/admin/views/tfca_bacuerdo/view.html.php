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
 * View to edit a tfca_bacuerdo.
 *
 */
class BoletinViewTfca_bacuerdo extends JViewLegacy
{
	protected $form;
	protected $item;
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
				
		$this->form		= $this->get('Form');
		$this->item		= $this->get('Item');
		$this->state	= $this->get('State');
		$this->can_do = JHelperContent::getActions('com_boletin');

		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode("\n", $errors));
			return false;
		}

		if ($this->getLayout() == 'modal')
		{
		}
		JToolbarHelper::help('JHELP_COMPONENTS_COM_BOLETIN_TFCA_BACUERDO_EDIT', true, null, 'com_boletin');
		$this->addToolbar();
		$this->prepareDocument();		
		parent::display($tpl);
	}

	/**
	 * Add the page title and toolbar.
	 *
	 */
	protected function addToolbar()
	{
		JFactory::getApplication()->input->set('hidemainmenu', true);
	
		$user		= JFactory::getUser();
		$user_id		= $user->get('id');
		$is_new		= ($this->item->id == 0);

		JToolbarHelper::title(
				JText::_('COM_BOLETIN_TFCA_BACUERDOS_' . (isset($checkedOut) && $checkedOut ? 'VIEW_HEADER' : ($is_new ? 'NEW_HEADER' : 'EDIT_HEADER'))), 
				'tfca_bacuerdos.png'
		);

		// If not checked out, can save the item.
		if (($this->can_do->get('core.edit') 
			OR $this->can_do->get('core.create') 
			)
			) 
		{
			JToolbarHelper::apply('tfca_bacuerdo.apply', 'JTOOLBAR_APPLY');
			JToolbarHelper::save('tfca_bacuerdo.save', 'JTOOLBAR_SAVE');

			if ($this->can_do->get('core.create'))
			{
				JToolbarHelper::custom('tfca_bacuerdo.save2new', 'save-new.png', 'save-new_f2.png', 'JTOOLBAR_SAVE_AND_NEW', false);
			}
		}

				
		if (empty($this->item->id))
		{
			JToolbarHelper::cancel('tfca_bacuerdo.cancel','JTOOLBAR_CANCEL');
		}
		else
		{
			JToolbarHelper::cancel('tfca_bacuerdo.cancel', 'JTOOLBAR_CLOSE');
		}
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
