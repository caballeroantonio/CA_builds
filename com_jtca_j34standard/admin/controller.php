<?php
/**
 * @version 		$Id:$
 * @name			TSJ CDMX Libros TxCA (Release 1.0.0)
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_jtca
 * @subpackage		com_jtca.admin
 * @copyright		Copyright (c) 2017 - 2020. All Rights Reserved
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

class JtCaController extends JControllerLegacy
{
	/**
	 * @var		string	The default view.
	 * 
	 */
	protected $default_view = 'lejemplos';

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
		JtCaHelper::addSubmenu($view);

		// Check for edit form.
		switch ($view)
		{
			case 'ljc01': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljc01', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljc01s', false));

					return false;
				}
				break;				
			case 'ljoc01': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljoc01', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljoc01s', false));

					return false;
				}
				break;				
			case 'ljc02': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljc02', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljc02s', false));

					return false;
				}
				break;				
			case 'lejemplo': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lejemplo', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lejemplos', false));

					return false;
				}
				break;				
			case 'ljc03': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljc03', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljc03s', false));

					return false;
				}
				break;				
			case 'ljoc03': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljoc03', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljoc03s', false));

					return false;
				}
				break;				
			case 'ljc04': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljc04', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljc04s', false));

					return false;
				}
				break;				
			case 'ljoc04': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljoc04', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljoc04s', false));

					return false;
				}
				break;				
			case 'ljc05': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljc05', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljc05s', false));

					return false;
				}
				break;				
			case 'ljoc05': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljoc05', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljoc05s', false));

					return false;
				}
				break;				
			case 'ljc06': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljc06', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljc06s', false));

					return false;
				}
				break;				
			case 'ljoc06': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljoc06', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljoc06s', false));

					return false;
				}
				break;				
			case 'ljc07': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljc07', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljc07s', false));

					return false;
				}
				break;				
			case 'ljoc07': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljoc07', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljoc07s', false));

					return false;
				}
				break;				
			case 'ljc08': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljc08', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljc08s', false));

					return false;
				}
				break;				
			case 'ljoc08': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljoc08', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljoc08s', false));

					return false;
				}
				break;				
			case 'ljc09': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljc09', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljc09s', false));

					return false;
				}
				break;				
			case 'ljoc09': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljoc09', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljoc09s', false));

					return false;
				}
				break;				
			case 'ljc10': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljc10', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljc10s', false));

					return false;
				}
				break;				
			case 'ljoc10': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljoc10', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljoc10s', false));

					return false;
				}
				break;				
			case 'ljc11': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljc11', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljc11s', false));

					return false;
				}
				break;				
			case 'ljoc11': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljoc11', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljoc11s', false));

					return false;
				}
				break;				
			case 'ljc12': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljc12', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljc12s', false));

					return false;
				}
				break;				
			case 'ljoc12': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljoc12', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljoc12s', false));

					return false;
				}
				break;				
			case 'ljc13': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljc13', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljc13s', false));

					return false;
				}
				break;				
			case 'ljoc13': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljoc13', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljoc13s', false));

					return false;
				}
				break;				
			case 'ljc14': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljc14', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljc14s', false));

					return false;
				}
				break;				
			case 'ljoc14': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljoc14', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljoc14s', false));

					return false;
				}
				break;				
			case 'ljc16': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljc16', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljc16s', false));

					return false;
				}
				break;				
			case 'ljc17': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljc17', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljc17s', false));

					return false;
				}
				break;				
			case 'ljc18': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljc18', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljc18s', false));

					return false;
				}
				break;				
			case 'ljc19': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljc19', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljc19s', false));

					return false;
				}
				break;				
			case 'ljc20': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljc20', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljc20s', false));

					return false;
				}
				break;				
			case 'ljc21': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljc21', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljc21s', false));

					return false;
				}
				break;				
		}
		return parent::display();
	}
}
