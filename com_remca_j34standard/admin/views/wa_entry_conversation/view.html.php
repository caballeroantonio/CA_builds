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
 * View to edit a wa_entry_conversation.
 *
 */
class RemcaViewWa_entry_conversation extends JViewLegacy
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
		if ($this->getLayout() == 'pagebreak')
		{
			// TODO: This is really dogy - should change this one day.
			$input = JFactory::getApplication()->input;
			$eName = $input->getCmd('e_name');
			$eName    = preg_replace('#[^A-Z0-9\-\_\[\]]#i', '', $eName);
			$document = JFactory::getDocument();
			$document->setTitle(JText::_('COM_REMCA_PAGEBREAK_DOC_TITLE'));
			$this->eName = &$eName;
			parent::display($tpl);
			return;
		}
				
		$this->form		= $this->get('Form');
		$this->item		= $this->get('Item');
		$this->state	= $this->get('State');
		$this->can_do = JHelperContent::getActions('com_remca');

		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode("\n", $errors));
			return false;
		}

		if ($this->getLayout() == 'modal')
		{
			$this->form->setFieldAttribute('catid', 'readonly', 'true');
		}
		JToolbarHelper::help('JHELP_COMPONENTS_COM_REMCA_WA_ENTRY_CONVERSATION_EDIT', true, null, 'com_remca');
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
				JText::_('COM_REMCA_WA_ENTRY_CONVERSATIONS_' . (isset($checkedOut) && $checkedOut ? 'VIEW_HEADER' : ($is_new ? 'NEW_HEADER' : 'EDIT_HEADER'))), 
				'wa_entry_conversations.png'
		);

		// If not checked out, can save the item.
		if (($this->can_do->get('core.edit') 
			OR $this->can_do->get('core.create') 
			OR ($this->can_do->get('core.edit.own') AND $this->item->created_by == $user_id)
			)
			) 
		{
			JToolbarHelper::apply('wa_entry_conversation.apply', 'JTOOLBAR_APPLY');
			JToolbarHelper::save('wa_entry_conversation.save', 'JTOOLBAR_SAVE');

			if ($this->can_do->get('core.create'))
			{
				JToolbarHelper::custom('wa_entry_conversation.save2new', 'save-new.png', 'save-new_f2.png', 'JTOOLBAR_SAVE_AND_NEW', false);
			}
		}
		// If an existing item, can save to a copy.
		if (!$is_new AND $this->can_do->get('core.create'))		
		{
			JToolbarHelper::custom('wa_entry_conversation.save2copy', 'save-copy.png', 'save-copy_f2.png', 'JTOOLBAR_SAVE_AS_COPY', false);
		}

				
		if (empty($this->item->id))
		{
			JToolbarHelper::cancel('wa_entry_conversation.cancel','JTOOLBAR_CANCEL');
		}
		else
		{
			JToolbarHelper::cancel('wa_entry_conversation.cancel', 'JTOOLBAR_CLOSE');
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
