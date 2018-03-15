<?php
/**
 * @version 		$Id:$
 * @name			RealEstateManagerCA
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_remca
 * @subpackage		com_remca.site
 * @copyright		
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

class JHTMLBuyingRequestIcon
{
	/**
	 * Display an create icon for the buyingrequest.
	 *
	 * @param	Registry   $params	  The buyingrequest parameters
	 * @param   array      $attribs   Optional attributes for the link
	 * @param   boolean    $legacy    True to use legacy images, false to use icomoon based graphic
	 *
	 * @return	string	The HTML for the buyingrequest create icon.
	 * 
	 */
	public static function create($params, $attribs = array(), $legacy = false)
	{
		JHtml::_('bootstrap.tooltip');
	
		$uri = JUri::getInstance();

		$url = 'index.php?option=com_remca&task=buyingrequest.add&layout=edit&return='.base64_encode($uri);
		$tmpl = JFactory::getApplication()->input->get('tmpl');
		if($tmpl)
			$url = "{$url}&tmpl={$tmpl}";
		if ($params->get('show_buyingrequest_icons'))
		{
			if ($legacy)
			{
				$text = JHtml::_('image', 'com_remca/new.png', JText::_('COM_REMCA_BUYING_REQUESTS_CREATE_ITEM'), NULL, true);
			}
			else
			{
				$text = '<span class="icon-plus"></span>' . JText::_('COM_REMCA_BUYING_REQUESTS_CREATE_ITEM');
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

		$output = '<span class="hasTooltip tip" title="'.JHtml::tooltipText('COM_REMCA_BUYING_REQUESTS_CREATE_ITEM').'">'.$button.'</span>';
		return $output;
	}
	/**
	 * Display an edit icon for the buyingrequest.
	 *
	 * This icon will not display in a popup window, nor if the buying requests is trashed.
	 * Edit access checks must be performed in the calling code.
	 *
	 * @param	object		$buying_request	The buyingrequest in question.
	 * @param	Registry	$params		The buyingrequest parameters
	 * @param	array		$attribs	Not used??
	 * @param   boolean		$legacy   True to use legacy images, false to use icomoon based graphic
	 *
	 * @return	string	The HTML for the buyingrequest edit icon.
	 * 
	 */
	public static function edit($buying_request, $params, $attribs = array(), $legacy = false)
	{
		
		$user	= JFactory::getUser();
		$user_id	= $user->get('id');
		$uri	= JUri::getInstance();

		// Ignore if in a popup window.
		if ($params AND $params->get('popup'))
		{
			return;
		}


		JHtml::_('bootstrap.tooltip');

		// Show checked_out icon if the buying requests is checked out by a different user
		if (property_exists($buying_request, 'checked_out') AND 
			property_exists($buying_request, 'checked_out_time') AND 
			$buying_request->checked_out > 0 AND 
			$buying_request->checked_out != $user->get('id'))
		{
			$check_out_user = JFactory::getUser($buying_request->checked_out);
			$button = JHtml::_('image','com_remca/checked_out.png', NULL, NULL, true);
			$date = JHtml::_('date',$buying_request->checked_out_time);
			$tooltip = JText::_('JLIB_HTML_CHECKED_OUT').' :: '.JText::sprintf('COM_REMCA_CHECKED_OUT_BY', $check_out_user->name).' <br /> '.$date;
			return '<span class="hasTooltip" title="' . JHtml::tooltipText($tooltip. '', 0) . '">' . $button . '</span>';
		}

		$url	= 'index.php?option=com_remca&task=buyingrequest.edit&layout=edit&id='.$buying_request->id.'&return='.base64_encode($uri);

		$overlib = '';
		


		if ($params->get('show_buyingrequest_icons'))
		{
			if ($legacy)
			{
				$icon	=  'com_remca/edit.png';
				$text	= JHtml::_('image','system/' .$icon, JText::_('COM_REMCA_BUYING_REQUESTS_EDIT_ITEM'), NULL, true);
			}
			else
			{
				$icon	=  'edit';
				$text = '<span class="hasTooltip icon-' . $icon . ' tip" title="' . JHtml::tooltipText(JText::_('COM_REMCA_BUYING_REQUESTS_EDIT_ITEM'), $overlib, 0) 
				. '"></span>' . JText::_('JGLOBAL_EDIT');
			}			
		}
		else
		{
			$text = '<span class="hasTooltip tip" title="' . JHtml::tooltipText(JText::_('COM_REMCA_BUYING_REQUESTS_EDIT_ITEM'), $overlib, 0) . '"></span>' . JText::_('JGLOBAL_EDIT') . '</span>';
		}
				
		$output = JHtml::_('link', JRoute::_($url), $text, $attribs);

		return $output;
	}
	/**
	 * Display an delete icon for the buyingrequest.
	 *
	 * This icon will not display in a popup window, nor if the buying requests is trashed.
	 * Edit access checks must be performed in the calling code.
	 *
	 * @param	object		$buying_request	The buyingrequest in question.
	 * @param	Registry	$params		The buyingrequest parameters
	 * @param	array		$attribs	Not used??
	 * @param   boolean		$legacy		True to use legacy images, false to use icomoon based graphic
	 *
	 * @return	string	The HTML for the buyingrequest edit icon.
	 * 
	 */
	public static function delete($buying_request, $params, $attribs = array(), $legacy = false)
	{
		
		$user	= JFactory::getUser();
		$user_id	= $user->get('id');
		$uri	= JUri::getInstance();

		// Ignore if in a popup window.
		if ($params AND $params->get('popup'))
		{
			return;
		}


		JHtml::_('behavior.tooltip');

		// Show checked_out icon if the buying requests is checked out by a different user
		if (property_exists($buying_request, 'checked_out') AND 
			property_exists($buying_request, 'checked_out_time') AND 
			$buying_request->checked_out > 0 AND 
			$buying_request->checked_out != $user->get('id'))
		{
			$check_out_user = JFactory::getUser($buying_request->checked_out);
			$button = JHtml::_('image','com_remca/checked_out.png', NULL, NULL, true);
			$date = JHtml::_('date',$buying_request->checked_out_time);
			$tooltip = JText::_('JLIB_HTML_CHECKED_OUT').' :: '.JText::sprintf('COM_REMCA_CHECKED_OUT_BY', $check_out_user->name).' <br /> '.$date;
			return '<span class="hasTip" title="'.htmlspecialchars($tooltip, ENT_COMPAT, 'UTF-8').'">'.$button.'</span>';
		}

		$url = 'index.php?option=com_remca&task=buyingrequest.delete&id='.$buying_request->id.'&'.JSession::getFormToken().'=1'.'&return='.base64_encode($uri);

		$overlib = '';

		$attribs['onclick'] = "if(confirm('".JText::_('COM_REMCA_BUYING_REQUESTS_DELETE_ITEM_CONFIRM')."'))
								this.href='".JRoute::_($url)."';
								else this.href='#';";


		if ($params->get('show_buyingrequest_icons'))
		{		
			if ($legacy)
			{
				$icon	= 'com_remca/delete.png';
				$text = JHtml::_('image', 'system/' . $icon, JText::_('COM_REMCA_BUYING_REQUESTS_DELETE_ITEM'), null, true);
			}
			else
			{
				$text = '<span class="hasTooltip icon-delete tip" title="' . JHtml::tooltipText(JText::_('COM_REMCA_BUYING_REQUESTS_DELETE_ITEM'), $overlib, 0) . '"></span>&#160;' . JText::_('JACTION_DELETE') . '&#160;';
			}
		}
		else
		{
			$text = '<span class="hasTooltip tip" title="' . JHtml::tooltipText(JText::_('COM_REMCA_BUYING_REQUESTS_DELETE_ITEM'), $overlib, 0) . '">' . JText::_('JACTION_DELETE') . '</span>';
		}		
		
		$output = JHtml::_('link', JRoute::_($url), $text, $attribs);
		return $output;
	}
	/**
	 * Method to generate a link to the email item page for the given buyingrequest
	 *
	 * @param   object     $buying_request  The buyingrequest information
	 * @param   Registry  $params   The item parameters
	 * @param   array      $attribs  Optional attributes for the link
	 * @param   boolean    $legacy   True to use legacy images, false to use icomoon based graphic
	 *
	 * @return  string  The HTML markup for the email item link
	 */	
	public static function email($buying_request, $params, $attribs = array(), $legacy = false)
	{
		require_once JPATH_SITE . '/components/com_mailto/helpers/mailto.php';	
		$uri	= JUri::getInstance();
		$base	= $uri->toString(array('scheme', 'host', 'port'));
		$app	= JFactory::getApplication();
		
		$layout = $app->input->getString('layout', 'default');
		
		$link	= $base.JRoute::_(RemcaHelperRoute::getBuyingRequestRoute($buying_request->slug,
									$layout,
									$params->get('keep_buyingrequest_itemid')) , false);

		$url	= 'index.php?option=com_mailto&tmpl=component&link='. MailtoHelper::addLink($link);

		$window_params = 'width=400,height=350,menubar=yes,resizable=yes';

		if ($params->get('show_buyingrequest_icons'))
		{
			if ($legacy)
			{
				$text = JHtml::_('image', 'com_remca/emailButton.png', JText::_('JGLOBAL_EMAIL'), null, true);
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
	 * Method to generate a popup link to print an buyingrequest
	 *
	 * @param   object		$buying_request  The buyingrequest information
	 * @param   Registry	$params   The item parameters
	 * @param   array		$attribs  Optional attributes for the link
	 * @param   boolean		$legacy   True to use legacy images, false to use icomoon based graphic
	 *
	 * @return  string  The HTML markup for the popup link
	 */	
	public static function print_popup($buying_request, $params, $attribs = array(), $legacy = false)
	{
		$app = JFactory::getApplication();
		$input = $app->input;
		$request = $input->request;
		
		$layout = $app->input->getString('layout', 'default');
	
		$link	= JRoute::_(RemcaHelperRoute::getBuyingRequestRoute($buying_request->slug,
									$layout,
									$params->get('keep_buyingrequest_itemid')) , false);
		
		if (strpos($link, '?') === false)
		{
			$link .= '?';
		}
		
		$link .= '&tmpl=component&print=1&layout=default&page='.@ $request->limitstart;

		$window_params = 'status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no';

		// checks template image directory for image, if non found default are loaded
		if ($params->get('show_buyingrequest_icons'))
		{
			if ($legacy)
			{
				$text = JHtml::_('image', 'com_remca/printButton.png', JText::_('JGLOBAL_PRINT'), null, true);
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
	 * Method to generate a link to print an buyingrequest
	 *
	 * @param   object		$buying_request  The buyingrequest information
	 * @param   Registry	$params   The item parameters
	 * @param   array		$attribs  Optional attributes for the link
	 * @param   boolean		$legacy   True to use legacy images, false to use icomoon based graphic
	 *
	 * @return  string  The HTML markup for the popup link
	 */
	public static function print_screen($buying_request, $params, $attribs = array(), $legacy = false)
	{
		// checks template image directory for image, if non found default are loaded
		if ($params->get('show_buyingrequest_icons') )
		{
			if ($legacy)
			{
				$text = JHtml::_('image', 'com_remca/printButton.png', JText::_('JGLOBAL_PRINT'), null, true);
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
        
	/**
	 * Method to generate a link to versions an buyingrequest
	 *
	 * @param   object		$buyingrequest  The buyingrequest information
	 * @param   Registry	$params   The item parameters
	 * @param   array		$attribs  Optional attributes for the link
	 * @param   boolean		$legacy   True to use legacy images, false to use icomoon based graphic
	 *
	 * @return  string  The HTML markup for the popup link
	 */
	public static function versions($buyingrequest, $params, $attribs = array(), $legacy = false)
	{
            
            if ($legacy)
            {
                    $text = JHtml::_('image', 'com_remca/versionsButton.png', JText::_('JTOOLBAR_VERSIONS'), null, true);
            }
            else
            {
                    $text = '<span class="icon-archive"></span>&#160;' . JText::_('JTOOLBAR_VERSIONS') . '&#160;';
            }
//            return "<a href=\"index.php?option=com_remca&task=buyingrequest.showHistory&item_id={$buyingrequest->id}\"  target=\"_blank\" onclick=\"window.open(this.href, this.target, 'width=800,height=600'); return false;\">{$text}</a>";
			return "<a href=\"#\" onclick=\"show_collapsibleModal({$buyingrequest->id});return false;\">{$text}</a>";
	}
}
