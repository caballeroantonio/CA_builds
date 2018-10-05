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
 * @CAversion		Id: controller.php 571 2016-01-04 15:03:02Z BrianWade $
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

class RemcaController extends JControllerLegacy
{
	/**
	 * @var		string	The default view.
	 * 
	 */
	protected $default_view = 'houses';

	/**
	 * Method to display a view.
	 *
	 * @param	boolean	$cachable	If true, the view output will be cached
	 * @param	array	$url_params	An array of safe url parameters and their variable types, for valid values see {@link JFilterInput::clean()}.
	 *
	 * @return	JControllerLegacy		This object to support chaining.
	 * 
	 */
	public function display($cachable = false, $url_params =  array())
	{
		$view	= $this->input->getString('view', $this->default_view);
		$layout = $this->input->getString('layout', 'default');
		$id		= $this->input->getInt('id');

		// Load the submenu.
		RemcaHelper::addSubmenu($view);

		// Check for edit form.
		switch ($view)
		{
			case 'house': 
				if ($layout == 'edit' AND !$this->checkEditId('com_remca.edit.house', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_remca&view=houses', false));

					return false;
				}
				break;				
			case 'wa_title_conversation': 
				if ($layout == 'edit' AND !$this->checkEditId('com_remca.edit.wa_title_conversation', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_remca&view=wa_title_conversations', false));

					return false;
				}
				break;				
			case 'wa_entry_conversation': 
				if ($layout == 'edit' AND !$this->checkEditId('com_remca.edit.wa_entry_conversation', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_remca&view=wa_entry_conversations', false));

					return false;
				}
				break;				
			case 'photo': 
				if ($layout == 'edit' AND !$this->checkEditId('com_remca.edit.photo', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_remca&view=photos', false));

					return false;
				}
				break;				
			case 'mime_type': 
				if ($layout == 'edit' AND !$this->checkEditId('com_remca.edit.mime_type', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_remca&view=mime_types', false));

					return false;
				}
				break;				
			case 'mls_for_delete': 
				if ($layout == 'edit' AND !$this->checkEditId('com_remca.edit.mls_for_delete', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_remca&view=mls_for_delete', false));

					return false;
				}
				break;				
			case 'order': 
				if ($layout == 'edit' AND !$this->checkEditId('com_remca.edit.order', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_remca&view=orders', false));

					return false;
				}
				break;				
			case 'orders_detail': 
				if ($layout == 'edit' AND !$this->checkEditId('com_remca.edit.orders_detail', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_remca&view=orders_details', false));

					return false;
				}
				break;				
			case 'main_category': 
				if ($layout == 'edit' AND !$this->checkEditId('com_remca.edit.main_category', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_remca&view=main_categories', false));

					return false;
				}
				break;				
			case 'rent': 
				if ($layout == 'edit' AND !$this->checkEditId('com_remca.edit.rent', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_remca&view=rents', false));

					return false;
				}
				break;				
			case 'rent_request': 
				if ($layout == 'edit' AND !$this->checkEditId('com_remca.edit.rent_request', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_remca&view=rent_requests', false));

					return false;
				}
				break;				
			case 'rent_sal': 
				if ($layout == 'edit' AND !$this->checkEditId('com_remca.edit.rent_sal', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_remca&view=rent_sal', false));

					return false;
				}
				break;				
			case 'review': 
				if ($layout == 'edit' AND !$this->checkEditId('com_remca.edit.review', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_remca&view=reviews', false));

					return false;
				}
				break;				
			case 'track_source': 
				if ($layout == 'edit' AND !$this->checkEditId('com_remca.edit.track_source', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_remca&view=track_source', false));

					return false;
				}
				break;				
			case 'wishlist': 
				if ($layout == 'edit' AND !$this->checkEditId('com_remca.edit.wishlist', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_remca&view=wisheslist', false));

					return false;
				}
				break;				
			case 'video_source': 
				if ($layout == 'edit' AND !$this->checkEditId('com_remca.edit.video_source', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_remca&view=video_source', false));

					return false;
				}
				break;				
			case 'buying_request': 
				if ($layout == 'edit' AND !$this->checkEditId('com_remca.edit.buying_request', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_remca&view=buying_requests', false));

					return false;
				}
				break;				
			case 'rem_category': 
				if ($layout == 'edit' AND !$this->checkEditId('com_remca.edit.rem_category', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_remca&view=rem_categories', false));

					return false;
				}
				break;				
			case 'const': 
				if ($layout == 'edit' AND !$this->checkEditId('com_remca.edit.const', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_remca&view=const', false));

					return false;
				}
				break;				
			case 'const_language': 
				if ($layout == 'edit' AND !$this->checkEditId('com_remca.edit.const_language', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_remca&view=const_language', false));

					return false;
				}
				break;				
			case 'feature': 
				if ($layout == 'edit' AND !$this->checkEditId('com_remca.edit.feature', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_remca&view=feature', false));

					return false;
				}
				break;				
			case 'feature_house': 
				if ($layout == 'edit' AND !$this->checkEditId('com_remca.edit.feature_house', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_remca&view=feature_houses', false));

					return false;
				}
				break;				
			case 'language': 
				if ($layout == 'edit' AND !$this->checkEditId('com_remca.edit.language', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_remca&view=languages', false));

					return false;
				}
				break;				
			case 'lmunicipality': 
				if ($layout == 'edit' AND !$this->checkEditId('com_remca.edit.lmunicipality', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_remca&view=lmunicipalities', false));

					return false;
				}
				break;				
			case 'lstate': 
				if ($layout == 'edit' AND !$this->checkEditId('com_remca.edit.lstate', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_remca&view=lstates', false));

					return false;
				}
				break;				
			case 'country': 
				if ($layout == 'edit' AND !$this->checkEditId('com_remca.edit.country', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_remca&view=countries', false));

					return false;
				}
				break;				
		}
		return parent::display();
	}
}
