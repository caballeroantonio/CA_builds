<?php
/**
 * @version 		$Id:$
 * @name			TSJ CDMX Libros TxCA (Release 1.0.0)
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_jtca
 * @subpackage		com_jtca.site
 * @copyright		Copyright (c) 2017 - 2020. All Rights Reserved
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
require_once JPATH_COMPONENT.'/helpers/jtca.php';

$app = JFactory::getApplication();
$user  = JFactory::getUser();


if ($app->input->get('view') === 'ljc01s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljoc01s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljc02s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lejemplos' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljc03s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljoc03s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljc04s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljoc04s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljc05s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljoc05s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljc06s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljoc06s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljc07s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljoc07s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljc08s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljoc08s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljc09s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljoc09s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljc10s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljoc10s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljc11s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljoc11s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljc12s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljoc12s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljc13s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljoc13s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljc14s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljoc14s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljc16s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljc17s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljc18s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljc19s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljc20s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljc21s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

$controller = JControllerLegacy::getInstance('JtCa');

$controller->execute($app->input->get('task'));
$controller->redirect();
