<?php
/**
 * @version 		$Id:$
 * @name			Boletines
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_boletin
 * @subpackage		com_boletin.site
 * @copyright		
 * @license			GNU General Public License version 3 or later; See http://www.gnu.org/copyleft/gpl.html 
 * 
 * The following Component Architect header section must remain in any distribution of this file
 *
 * @CAversion		Id: view.feed.php 571 2016-01-04 15:03:02Z BrianWade $
 * @CAauthor		Component Architect (www.componentarchitect.com)
 * @CApackage		architectcomp
 * @CAsubpackage	architectcomp.site
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
 * HTML View class for the Boletines component
 *
 */
class BoletinViewCategory extends JViewLegacy
{

	/**
	 * Create an item feed.
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 * 
	 */
	public function display($tpl = null)
	{
		$app = JFactory::getApplication();

		$doc	= JFactory::getDocument();
		$params = $app->getParams();
		$feed_email	= (@$app->get('feed_email')) ? $app->get('feed_email') : 'creator';

		// Get some data from the model
		$app->input->set('limit', $app->get('feed_limit'));
		$category	= $this->get('Category');
		$rows		= $this->get('Items');

		$doc->link = JRoute::_(BoletinHelperRoute::getCategoryRoute($category->id, $params->get('keep_tfjfa_bacuerdo_itemid')));

		foreach ($rows as $row)
		{
			// strip html from feed item title
			$title = $this->escape($row->id);
			
			$title = html_entity_decode($title, ENT_COMPAT, 'UTF-8');

			// Compute the slug
			$row->slug = $row->id;

			// url link to tfjfa_bacuerdo
			// & used instead of &amp; as this is converted by feed creator
			$link = JRoute::_(BoletinHelperRoute::getTfjfa_bacuerdoRoute($row->slug, 
																						$row->catid,
																						'default',								
																						$params->get('keep_tfjfa_bacuerdo_itemid')), false);
			

			// load individual item creator class
			$item = new JFeedItem;
			$item->title		= $title;
			$item->link			= $link;
			$item->date			= $date;
			$item->category		= $row->category;
			if ($feed_email == 'site')
			{
				$item->creatorEmail = $site_email;
			}
			else
			{
				$item->creatorEmail = $row->creator_email;
			}

			// loads item info into rss array
			$doc->addItem($item);
		}
	}
}
