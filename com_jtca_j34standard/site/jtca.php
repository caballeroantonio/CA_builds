<?php
/**
 * @version 		$Id:$
 * @name			TSJ CDMX Libros TxCA
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

if ($app->input->get('view') === 'lsc01s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljf01s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljp01s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljccm01s' AND $app->input->get('layout') === 'modal')
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

if ($app->input->get('view') === 'ljpdng01s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljpes01s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljjadng01s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljjadg01s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lcp01s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lcp02s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lcp03s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lcp04s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lcp05s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lcp06s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lcp07s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lcp09s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lcp10s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lcp18s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lcp19s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lcp20s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lcp21s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lcp22s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lcp23s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lcp24s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lcp25s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lcp26s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lcp27s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lcp28s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lcp29s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lcp11s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lcp12s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lcp13s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lcp14s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lcp15s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lcp16s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lcp30s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lcp31s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lcp32s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lcp33s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lcp34s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lcp35s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lcp36s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lcp39s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lcp40s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lcp41s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lspe01s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lspe02s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lspe03s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lspe04s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lspe05s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lspe06s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lspe07s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lspe08s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lsps01s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lsc02s' AND $app->input->get('layout') === 'modal')
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

if ($app->input->get('view') === 'ljp02s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljccm02s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljpdng02s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljpes02s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljjadng02s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljjadg02s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lsps02s' AND $app->input->get('layout') === 'modal')
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

if ($app->input->get('view') === 'lsc03s' AND $app->input->get('layout') === 'modal')
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

if ($app->input->get('view') === 'ljccm03s' AND $app->input->get('layout') === 'modal')
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

if ($app->input->get('view') === 'ljpdng03s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljpes03s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljjadng03s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljjadg03s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lsps03s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lsc04s' AND $app->input->get('layout') === 'modal')
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

if ($app->input->get('view') === 'ljf04s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljp04s' AND $app->input->get('layout') === 'modal')
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

if ($app->input->get('view') === 'ljpdng04s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljpes04s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljjadng04s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljjadg04s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lsps04s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lsc05s' AND $app->input->get('layout') === 'modal')
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

if ($app->input->get('view') === 'ljf05s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljp05s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljccm05s' AND $app->input->get('layout') === 'modal')
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

if ($app->input->get('view') === 'ljpdng05s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljpes05s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljjadng05s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljjadg05s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lsps05s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lsc06s' AND $app->input->get('layout') === 'modal')
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

if ($app->input->get('view') === 'ljf06s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljp06s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljccm06s' AND $app->input->get('layout') === 'modal')
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

if ($app->input->get('view') === 'ljpdng06s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljpes06s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljjadng06s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljjadg06s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lsps06s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lsc07s' AND $app->input->get('layout') === 'modal')
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

if ($app->input->get('view') === 'ljf07s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljccm07s' AND $app->input->get('layout') === 'modal')
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

if ($app->input->get('view') === 'ljpdng07s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljpes07s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljjadng07s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lsps07s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lsc08s' AND $app->input->get('layout') === 'modal')
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

if ($app->input->get('view') === 'ljf08s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljp08s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljccm08s' AND $app->input->get('layout') === 'modal')
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

if ($app->input->get('view') === 'ljpdng08s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljpes08s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljjadng08s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lsc14s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lsps08s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lsc09s' AND $app->input->get('layout') === 'modal')
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

if ($app->input->get('view') === 'ljf09s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljp09s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljccm09s' AND $app->input->get('layout') === 'modal')
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

if ($app->input->get('view') === 'ljpdng09s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljpes09s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljjadng09s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljjadg09s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lsps09s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lsc10s' AND $app->input->get('layout') === 'modal')
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

if ($app->input->get('view') === 'ljf10s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljp10s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljccm10s' AND $app->input->get('layout') === 'modal')
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

if ($app->input->get('view') === 'ljpdng10s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljpes10s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljjadng10s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljjadg10s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lsps10s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lsc11s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljf11s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljp11s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljccm11s' AND $app->input->get('layout') === 'modal')
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

if ($app->input->get('view') === 'ljpdng11s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljpes11s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljjadng11s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljjadg11s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lsps11s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lsc12s' AND $app->input->get('layout') === 'modal')
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

if ($app->input->get('view') === 'ljf12s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljp12s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljccm12s' AND $app->input->get('layout') === 'modal')
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

if ($app->input->get('view') === 'ljpdng12s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljpes12s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljjadng12s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lsps12s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lsc13s' AND $app->input->get('layout') === 'modal')
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

if ($app->input->get('view') === 'ljf13s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljp13s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljccm13s' AND $app->input->get('layout') === 'modal')
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

if ($app->input->get('view') === 'ljpdng13s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljpes13s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljjadg13s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lsps13s' AND $app->input->get('layout') === 'modal')
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

if ($app->input->get('view') === 'ljf14s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljp14s' AND $app->input->get('layout') === 'modal')
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

if ($app->input->get('view') === 'ljpdng14s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljpes14s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljjadg14s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'lsps14s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljf15s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljccm15s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljpdng15s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljpes15s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljjadg15s' AND $app->input->get('layout') === 'modal')
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

if ($app->input->get('view') === 'ljf16s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljp16s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljccm16s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljpdng16s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljpes16s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljjadg16s' AND $app->input->get('layout') === 'modal')
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

if ($app->input->get('view') === 'ljf17s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljp17s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljccm17s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljpdng17s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljpes17s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljjadg17s' AND $app->input->get('layout') === 'modal')
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

if ($app->input->get('view') === 'ljf18s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljp18s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljpdng18s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljjadg18s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljpes18s' AND $app->input->get('layout') === 'modal')
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

if ($app->input->get('view') === 'ljf19s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljp19s' AND $app->input->get('layout') === 'modal')
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

if ($app->input->get('view') === 'ljf20s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljp20s' AND $app->input->get('layout') === 'modal')
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

if ($app->input->get('view') === 'ljf21s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljp21s' AND $app->input->get('layout') === 'modal')
{
	if (!$user->authorise('core.edit', 'com_jtca'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

if ($app->input->get('view') === 'ljf22s' AND $app->input->get('layout') === 'modal')
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
