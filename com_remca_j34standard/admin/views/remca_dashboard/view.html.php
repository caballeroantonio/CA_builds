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
 * MVC View for Dashboard
 *
 */
class RemcaViewRemca_Dashboard extends JViewLegacy
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

		
		JToolbarHelper::title(JText::_('COM_REMCA_VIEW_DASHBOARD_HEADER'), 'componentarchitect.png');
		
		JToolbarHelper::preferences('com_remca');
		JToolbarHelper::help('JHELP_COMPONENTS_COMPONENTARCHITECT_DASHBOARD', true, null, 'com_remca');
	}
	
	/**
	 * Prepare the dashboard buttons
	 */
	protected function prepareButtons()
	{
		$buttons = array();
		$buttons[] = array('link'=>'index.php?option=com_remca&view=houses',
			'object'=>'houses',
			'text'=>JText::_('COM_REMCA_HOUSES'),
			'desc'=>JText::_('COM_REMCA_HOUSE_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=wa_title_conversations',
			'object'=>'wa_title_conversations',
			'text'=>JText::_('COM_REMCA_WA_TITLE_CONVERSATIONS'),
			'desc'=>JText::_('COM_REMCA_WA_TITLE_CONVERSATION_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=wa_entry_conversations',
			'object'=>'wa_entry_conversations',
			'text'=>JText::_('COM_REMCA_WA_ENTRY_CONVERSATIONS'),
			'desc'=>JText::_('COM_REMCA_WA_ENTRY_CONVERSATION_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=photos',
			'object'=>'photos',
			'text'=>JText::_('COM_REMCA_PHOTOS'),
			'desc'=>JText::_('COM_REMCA_PHOTO_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=mime_types',
			'object'=>'mime_types',
			'text'=>JText::_('COM_REMCA_MIME_TYPES'),
			'desc'=>JText::_('COM_REMCA_MIME_TYPE_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=mls_for_delete',
			'object'=>'mls_for_delete',
			'text'=>JText::_('COM_REMCA_MLS_FOR_DELETE'),
			'desc'=>JText::_('COM_REMCA_MLS_FOR_DELETE_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=orders',
			'object'=>'orders',
			'text'=>JText::_('COM_REMCA_ORDERS'),
			'desc'=>JText::_('COM_REMCA_ORDER_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=orders_details',
			'object'=>'orders_details',
			'text'=>JText::_('COM_REMCA_ORDERS_DETAILS'),
			'desc'=>JText::_('COM_REMCA_ORDERS_DETAIL_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=main_categories',
			'object'=>'main_categories',
			'text'=>JText::_('COM_REMCA_MAIN_CATEGORIES'),
			'desc'=>JText::_('COM_REMCA_MAIN_CATEGORY_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=rents',
			'object'=>'rents',
			'text'=>JText::_('COM_REMCA_RENTS'),
			'desc'=>JText::_('COM_REMCA_RENT_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=rent_requests',
			'object'=>'rent_requests',
			'text'=>JText::_('COM_REMCA_RENT_REQUESTS'),
			'desc'=>JText::_('COM_REMCA_RENT_REQUEST_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=rent_sal',
			'object'=>'rent_sal',
			'text'=>JText::_('COM_REMCA_RENT_SAL'),
			'desc'=>JText::_('COM_REMCA_RENT_SAL_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=reviews',
			'object'=>'reviews',
			'text'=>JText::_('COM_REMCA_REVIEWS'),
			'desc'=>JText::_('COM_REMCA_REVIEW_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=track_source',
			'object'=>'track_source',
			'text'=>JText::_('COM_REMCA_TRACK_SOURCE'),
			'desc'=>JText::_('COM_REMCA_TRACK_SOURCE_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=wisheslist',
			'object'=>'wisheslist',
			'text'=>JText::_('COM_REMCA_WISHESLIST'),
			'desc'=>JText::_('COM_REMCA_WISHLIST_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=video_source',
			'object'=>'video_source',
			'text'=>JText::_('COM_REMCA_VIDEO_SOURCE'),
			'desc'=>JText::_('COM_REMCA_VIDEO_SOURCE_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=buying_requests',
			'object'=>'buying_requests',
			'text'=>JText::_('COM_REMCA_BUYING_REQUESTS'),
			'desc'=>JText::_('COM_REMCA_BUYING_REQUEST_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=rem_categories',
			'object'=>'rem_categories',
			'text'=>JText::_('COM_REMCA_REM_CATEGORIES'),
			'desc'=>JText::_('COM_REMCA_REM_CATEGORY_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=const',
			'object'=>'const',
			'text'=>JText::_('COM_REMCA_CONST'),
			'desc'=>JText::_('COM_REMCA_CONST_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=const_language',
			'object'=>'const_language',
			'text'=>JText::_('COM_REMCA_CONST_LANGUAGE'),
			'desc'=>JText::_('COM_REMCA_CONST_LANGUAGE_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=feature',
			'object'=>'feature',
			'text'=>JText::_('COM_REMCA_FEATURE'),
			'desc'=>JText::_('COM_REMCA_FEATURE_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=feature_houses',
			'object'=>'feature_houses',
			'text'=>JText::_('COM_REMCA_FEATURE_HOUSES'),
			'desc'=>JText::_('COM_REMCA_FEATURE_HOUSE_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=languages',
			'object'=>'languages',
			'text'=>JText::_('COM_REMCA_LANGUAGES'),
			'desc'=>JText::_('COM_REMCA_LANGUAGE_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=lmunicipalities',
			'object'=>'lmunicipalities',
			'text'=>JText::_('COM_REMCA_LMUNICIPALITIES'),
			'desc'=>JText::_('COM_REMCA_LMUNICIPALITY_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=lstates',
			'object'=>'lstates',
			'text'=>JText::_('COM_REMCA_LSTATES'),
			'desc'=>JText::_('COM_REMCA_LSTATE_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=countries',
			'object'=>'countries',
			'text'=>JText::_('COM_REMCA_COUNTRIES'),
			'desc'=>JText::_('COM_REMCA_COUNTRY_DESCRIPTION')
			);

		return $buttons;
	}	
	/**
	 * Prepares the document
	 */
	protected function prepareDocument()
	{
		$this->document->setTitle(JText::_('COM_REMCA_VIEW_DASHBOARD_HEADER'));

		// Include custom admin css
		$this->document->addStyleSheet(JUri::root().'media/com_remca/css/admin.css');

		// Add Javscript functions for field display
		JHtml::_('behavior.tooltip');
	
	}
}