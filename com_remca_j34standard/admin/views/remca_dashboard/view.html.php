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
			'text'=>'Houses',//JText::_('REMCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_REMCA_HOUSE_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=photos',
			'object'=>'photos',
			'text'=>'Photos',//JText::_('REMCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_REMCA_PHOTO_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=mime_types',
			'object'=>'mime_types',
			'text'=>'Mime_types',//JText::_('REMCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_REMCA_MIMETYPE_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=mls_for_delete',
			'object'=>'mls_for_delete',
			'text'=>'Mls_for_delete',//JText::_('REMCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_REMCA_MLSFORDELETE_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=orders',
			'object'=>'orders',
			'text'=>'Orders',//JText::_('REMCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_REMCA_ORDER_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=orders_details',
			'object'=>'orders_details',
			'text'=>'Orders_details',//JText::_('REMCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_REMCA_ORDERSDETAIL_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=main_categories',
			'object'=>'main_categories',
			'text'=>'Main_categories',//JText::_('REMCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_REMCA_MAINCATEGORY_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=rent',
			'object'=>'rent',
			'text'=>'Rent',//JText::_('REMCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_REMCA_RENT_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=rent_request',
			'object'=>'rent_request',
			'text'=>'Rent_request',//JText::_('REMCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_REMCA_RENTREQUEST_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=rent_sal',
			'object'=>'rent_sal',
			'text'=>'Rent_sal',//JText::_('REMCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_REMCA_RENTSAL_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=reviews',
			'object'=>'reviews',
			'text'=>'Reviews',//JText::_('REMCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_REMCA_REVIEW_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=track_source',
			'object'=>'track_source',
			'text'=>'Track_source',//JText::_('REMCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_REMCA_TRACKSOURCE_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=users_wishlist',
			'object'=>'users_wishlist',
			'text'=>'Users_wishlist',//JText::_('REMCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_REMCA_USERSWISHLIST_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=video_source',
			'object'=>'video_source',
			'text'=>'Video_source',//JText::_('REMCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_REMCA_VIDEOSOURCE_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=buying_requests',
			'object'=>'buying_requests',
			'text'=>'Buying Requests',//JText::_('REMCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_REMCA_BUYINGREQUEST_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=categories',
			'object'=>'categories',
			'text'=>'Categories',//JText::_('REMCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_REMCA_CATEGORY_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=const',
			'object'=>'const',
			'text'=>'Const',//JText::_('REMCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_REMCA_CONST_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=const_language',
			'object'=>'const_language',
			'text'=>'Const_language',//JText::_('REMCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_REMCA_CONSTLANGUAGE_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=feature',
			'object'=>'feature',
			'text'=>'Feature',//JText::_('REMCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_REMCA_FEATURE_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=feature_houses',
			'object'=>'feature_houses',
			'text'=>'Feature_houses',//JText::_('REMCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_REMCA_FEATUREHOUSE_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=languages',
			'object'=>'languages',
			'text'=>'Languages',//JText::_('REMCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_REMCA_LANGUAGE_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=lmunicipalities',
			'object'=>'lmunicipalities',
			'text'=>'Municipalities',//JText::_('REMCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_REMCA_LMUNICIPALITY_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=lstates',
			'object'=>'lstates',
			'text'=>'States',//JText::_('REMCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_REMCA_LSTATE_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_remca&view=countries',
			'object'=>'countries',
			'text'=>'Countries',//JText::_('REMCA_COMPONENT_WIZARD'),
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