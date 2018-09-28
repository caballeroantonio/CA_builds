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
 * @CAversion		Id: architectcomp.php 571 2016-01-04 15:03:02Z BrianWade $
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


require_once JPATH_COMPONENT.'/helpers/route.php';
require_once JPATH_COMPONENT.'/helpers/query.php';
require_once JPATH_COMPONENT.'/helpers/boletin.php';

$app = JFactory::getApplication();
$user  = JFactory::getUser();


if ($app->input->get('view') === 'tsjcdmx_juzgado_acuerdos' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_boletin'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'tsjcdmx_sala_acuerdos' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_boletin'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'prodecon_bacuerdos' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_boletin'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'profeco_proveedores' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_boletin'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'srsps_bacuerdos' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_boletin'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'rsps_bacuerdos' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_boletin'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'pjf_bacuerdos' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_boletin'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'tfca_bacuerdos' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_boletin'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

$controller = JControllerLegacy::getInstance('Boletin');

$controller->execute($app->input->get('task'));
$controller->redirect();
