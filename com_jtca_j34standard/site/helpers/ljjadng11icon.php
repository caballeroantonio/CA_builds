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
 * @CAversion		Id: compobjecticon.php 571 2016-01-04 15:03:02Z BrianWade $
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

class JHTMLLjjadng11Icon
{
	/**
	 * Display an create icon for the ljjadng11.
	 *
	 * @param	Registry   $params	  The ljjadng11 parameters
	 * @param   array      $attribs   Optional attributes for the link
	 * @param   boolean    $legacy    True to use legacy images, false to use icomoon based graphic
	 *
	 * @return	string	The HTML for the ljjadng11 create icon.
	 * 
	 */
	public static function create($params, $attribs = array(), $legacy = false)
	{
		JHtml::_('bootstrap.tooltip');
	
		$uri = JUri::getInstance();

		$url = 'index.php?option=com_jtca&task=ljjadng11.add&layout=edit&return='.base64_encode($uri);
		$tmpl = JFactory::getApplication()->input->get('tmpl');
		if($tmpl)
			$url = "{$url}&tmpl={$tmpl}";
		if ($params->get('show_ljjadng11_icons'))
		{
			if ($legacy)
			{
				$text = JHtml::_('image', 'com_jtca/new.png', JText::_('COM_JTCA_LJJADNG11S_CREATE_ITEM'), NULL, true);
			}
			else
			{
				$text = '<span class="icon-plus"></span>' . JText::_('COM_JTCA_LJJADNG11S_CREATE_ITEM');
			}		
		}
		else
		{
			$text = JText::_('JNEW') . '&#160;';
		}

		// Add the button classes to the attribs array
		if (isset($attribs['class']))
		{
			$attribs['class'] = $attribs['class'] . ' btn btn-primary';
		}
		else
		{
			$attribs['class'] = 'btn btn-primary';
		}
		
		$button =  JHtml::_('link', JRoute::_($url), $text, $attribs);

		$output = '<span class="hasTooltip tip" title="'.JHtml::tooltipText('COM_JTCA_LJJADNG11S_CREATE_ITEM').'">'.$button.'</span>';
		return $output;
	}
	/**
	 * Display an edit icon for the ljjadng11.
	 *
	 * This icon will not display in a popup window, nor if the libro de remisión al archivo is trashed.
	 * Edit access checks must be performed in the calling code.
	 *
	 * @param	object		$ljjadng11	The ljjadng11 in question.
	 * @param	Registry	$params		The ljjadng11 parameters
	 * @param	array		$attribs	Not used??
	 * @param   boolean		$legacy   True to use legacy images, false to use icomoon based graphic
	 *
	 * @return	string	The HTML for the ljjadng11 edit icon.
	 * 
	 */
	public static function edit($ljjadng11, $params, $attribs = array(), $legacy = false)
	{
		
		$user	= JFactory::getUser();
		$user_id	= $user->get('id');
		$uri	= JUri::getInstance();

		// Ignore if in a popup window.
		if ($params AND $params->get('popup'))
		{
			return;
		}

		// Ignore if the state is negative (trashed).
		if ($ljjadng11->state < 0)
		{
			return;
		}

		JHtml::_('bootstrap.tooltip');


		$url	= 'index.php?option=com_jtca&task=ljjadng11.edit&layout=edit&id='.$ljjadng11->id.'&return='.base64_encode($uri);

		$overlib = '';
		
		if ($ljjadng11->state == 0)
		{
			$overlib = JText::_('JUNPUBLISHED');
		}
		else
		{
			$overlib = JText::_('JPUBLISHED');
		}

		$date = JHtml::_('date',$ljjadng11->created);
		$created_by = $ljjadng11->created_by_name;


		$overlib .= '&lt;br /&gt;';
		$overlib .= $date;
		$overlib .= '&lt;br /&gt;';
		$overlib .= JText::sprintf('COM_JTCA_CREATED_BY', htmlspecialchars($created_by, ENT_COMPAT, 'UTF-8'));

		if ($params->get('show_ljjadng11_icons'))
		{
			if ($legacy)
			{
				$icon	= $ljjadng11->state ? 'com_jtca/edit.png' : 'com_jtca/edit_unpublished.png';
				$text	= JHtml::_('image','system/' .$icon, JText::_('COM_JTCA_LJJADNG11S_EDIT_ITEM'), NULL, true);
			}
			else
			{
				$icon = $ljjadng11->state ? 'edit' : 'eye-close';
				$text = '<span class="hasTooltip icon-' . $icon . ' tip" title="' . JHtml::tooltipText(JText::_('COM_JTCA_LJJADNG11S_EDIT_ITEM'), $overlib, 0) 
				. '"></span>' . JText::_('JGLOBAL_EDIT');
			}			
		}
		else
		{
			$text = '<span class="hasTooltip tip" title="' . JHtml::tooltipText(JText::_('COM_JTCA_LJJADNG11S_EDIT_ITEM'), $overlib, 0) . '"></span>' . JText::_('JGLOBAL_EDIT') . '</span>';
		}
				
		$output = JHtml::_('link', JRoute::_($url), $text, $attribs);

		return $output;
	}
	/**
	 * Display an delete icon for the ljjadng11.
	 *
	 * This icon will not display in a popup window, nor if the libro de remisión al archivo is trashed.
	 * Edit access checks must be performed in the calling code.
	 *
	 * @param	object		$ljjadng11	The ljjadng11 in question.
	 * @param	Registry	$params		The ljjadng11 parameters
	 * @param	array		$attribs	Not used??
	 * @param   boolean		$legacy		True to use legacy images, false to use icomoon based graphic
	 *
	 * @return	string	The HTML for the ljjadng11 edit icon.
	 * 
	 */
	public static function delete($ljjadng11, $params, $attribs = array(), $legacy = false)
	{
		
		$user	= JFactory::getUser();
		$user_id	= $user->get('id');
		$uri	= JUri::getInstance();

		// Ignore if in a popup window.
		if ($params AND $params->get('popup'))
		{
			return;
		}

		// Ignore if the state is negative (trashed).
		if ($ljjadng11->state < 0)
		{
			return;
		}

		JHtml::_('behavior.tooltip');


		$url = 'index.php?option=com_jtca&task=ljjadng11.delete&id='.$ljjadng11->id.'&'.JSession::getFormToken().'=1'.'&return='.base64_encode($uri);

		$overlib = '';

		$date = JHtml::_('date',$ljjadng11->created);
		$created_by = $ljjadng11->created_by_name;

		$overlib .= '&lt;br /&gt;';
		$overlib .= $date;
		$overlib .= '&lt;br /&gt;';
		$overlib .= JText::sprintf('COM_JTCA_CREATED_BY', htmlspecialchars($created_by, ENT_COMPAT, 'UTF-8'));
		$attribs['onclick'] = "if(confirm('".JText::_('COM_JTCA_LJJADNG11S_DELETE_ITEM_CONFIRM')."'))
								this.href='".JRoute::_($url)."';
								else this.href='#';";


		if ($params->get('show_ljjadng11_icons'))
		{		
			if ($legacy)
			{
				$icon	= 'com_jtca/delete.png';
				$text = JHtml::_('image', 'system/' . $icon, JText::_('COM_JTCA_LJJADNG11S_DELETE_ITEM'), null, true);
			}
			else
			{
				$text = '<span class="hasTooltip icon-delete tip" title="' . JHtml::tooltipText(JText::_('COM_JTCA_LJJADNG11S_DELETE_ITEM'), $overlib, 0) . '"></span>&#160;' . JText::_('JACTION_DELETE') . '&#160;';
			}
		}
		else
		{
			$text = '<span class="hasTooltip tip" title="' . JHtml::tooltipText(JText::_('COM_JTCA_LJJADNG11S_DELETE_ITEM'), $overlib, 0) . '">' . JText::_('JACTION_DELETE') . '</span>';
		}		
		
		$output = JHtml::_('link', JRoute::_($url), $text, $attribs);
		return $output;
	}
	/**
	 * Method to generate a link to the email item page for the given ljjadng11
	 *
	 * @param   object     $ljjadng11  The ljjadng11 information
	 * @param   Registry  $params   The item parameters
	 * @param   array      $attribs  Optional attributes for the link
	 * @param   boolean    $legacy   True to use legacy images, false to use icomoon based graphic
	 *
	 * @return  string  The HTML markup for the email item link
	 */	
	public static function email($ljjadng11, $params, $attribs = array(), $legacy = false)
	{
		require_once JPATH_SITE . '/components/com_mailto/helpers/mailto.php';	
		$uri	= JUri::getInstance();
		$base	= $uri->toString(array('scheme', 'host', 'port'));
		$app	= JFactory::getApplication();
		
		$layout = $app->input->getString('layout', 'default');
		
		$link	= $base.JRoute::_(JtCaHelperRoute::getLjjadng11Route($ljjadng11->slug,
									$layout,
									$params->get('keep_ljjadng11_itemid')) , false);

		$url	= 'index.php?option=com_mailto&tmpl=component&link='. MailtoHelper::addLink($link);

		$window_params = 'width=400,height=350,menubar=yes,resizable=yes';

		if ($params->get('show_ljjadng11_icons'))
		{
			if ($legacy)
			{
				$text = JHtml::_('image', 'com_jtca/emailButton.png', JText::_('JGLOBAL_EMAIL'), null, true);
			}
			else
			{
				$text = '<span class="icon-envelope"></span> ' . JText::_('JGLOBAL_EMAIL');
			}			
		}
		else
		{
			$text = JText::_('JGLOBAL_EMAIL');
		}

		$attribs['title']	= JText::_('JGLOBAL_EMAIL');
		$attribs['onclick'] = "window.open(this.href,'win2','".$window_params."'); return false;";
		$attribs['rel']     = 'nofollow';

		$output = JHtml::_('link',JRoute::_($url), $text, $attribs);
		return $output;
	}	
	/**
	 * Method to generate a popup link to print an ljjadng11
	 *
	 * @param   object		$ljjadng11  The ljjadng11 information
	 * @param   Registry	$params   The item parameters
	 * @param   array		$attribs  Optional attributes for the link
	 * @param   boolean		$legacy   True to use legacy images, false to use icomoon based graphic
	 *
	 * @return  string  The HTML markup for the popup link
	 */	
	public static function print_popup($ljjadng11, $params, $attribs = array(), $legacy = false)
	{
		$app = JFactory::getApplication();
		$input = $app->input;
		$request = $input->request;
		
		$layout = $app->input->getString('layout', 'default');
	
		$link	= JRoute::_(JtCaHelperRoute::getLjjadng11Route($ljjadng11->slug,
									$layout,
									$params->get('keep_ljjadng11_itemid')) , false);
		
		if (strpos($link, '?') === false)
		{
			$link .= '?';
		}
		
		$link .= '&tmpl=component&print=1&layout=default&page='.@ $request->limitstart;

		$window_params = 'status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no';

		// checks template image directory for image, if non found default are loaded
		if ($params->get('show_ljjadng11_icons'))
		{
			if ($legacy)
			{
				$text = JHtml::_('image', 'com_jtca/printButton.png', JText::_('JGLOBAL_PRINT'), null, true);
			}
			else
			{
				$text = '<span class="icon-print"></span>' . JText::_('JGLOBAL_PRINT');
			}			
		}
		else
		{
			$text =  JText::_('JGLOBAL_PRINT');
		}

		$attribs['title']	= JText::_('JGLOBAL_PRINT');
		$attribs['onclick'] = "window.open(this.href,'win2','".$window_params."'); return false;";
		$attribs['rel']		= 'nofollow';

		return JHtml::_('link',JRoute::_($link), $text, $attribs);
	}
	/**
	 * Method to generate a link to print an ljjadng11
	 *
	 * @param   object		$ljjadng11  The ljjadng11 information
	 * @param   Registry	$params   The item parameters
	 * @param   array		$attribs  Optional attributes for the link
	 * @param   boolean		$legacy   True to use legacy images, false to use icomoon based graphic
	 *
	 * @return  string  The HTML markup for the popup link
	 */
	public static function print_screen($ljjadng11, $params, $attribs = array(), $legacy = false)
	{
		// checks template image directory for image, if non found default are loaded
		if ($params->get('show_ljjadng11_icons') )
		{
			if ($legacy)
			{
				$text = JHtml::_('image', 'com_jtca/printButton.png', JText::_('JGLOBAL_PRINT'), null, true);
			}
			else
			{
				$text = '<span class="icon-print"></span>&#160;' . JText::_('JGLOBAL_PRINT') . '&#160;';
			}			
		}
		else
		{
			$text =  JText::_('JGLOBAL_PRINT');
		}
		return '<a href="#" onclick="window.print();return false;">'.$text.'</a>';
	}

}
