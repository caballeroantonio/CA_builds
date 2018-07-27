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
 * View to edit a wishlist.
 *
 */
class RemcaViewWishlist extends JViewLegacy
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

		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode("\n", $errors));
			return false;
		}

		if ($this->getLayout() == 'modal')
		{
		}
		JToolbarHelper::help('JHELP_COMPONENTS_COM_REMCA_WISHLIST_EDIT', true, null, 'com_remca');
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
				JText::_('COM_REMCA_WISHESLIST_' . (isset($checkedOut) && $checkedOut ? 'VIEW_HEADER' : ($is_new ? 'NEW_HEADER' : 'EDIT_HEADER'))), 
				'wisheslist.png'
		);


		JToolbarHelper::apply('wishlist.apply', 'JTOOLBAR_APPLY');
		JToolbarHelper::save('wishlist.save', 'JTOOLBAR_SAVE');

		JToolbarHelper::custom('wishlist.save2new', 'save-new.png', 'save-new_f2.png', 'JTOOLBAR_SAVE_AND_NEW', false);

		if ($this->state->params->get('save_history', 1) AND $this->state->params->get('wishlist_save_history', 1)
			AND !$is_new  
			)
		{
			$item_id = $this->item->id;
			$type_alias = 'com_remca.wishlist';
			JToolbarHelper::versions($type_alias, $item_id);
		}
				
		if (empty($this->item->id))
		{
			JToolbarHelper::cancel('wishlist.cancel','JTOOLBAR_CANCEL');
		}
		else
		{
			JToolbarHelper::cancel('wishlist.cancel', 'JTOOLBAR_CLOSE');
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
