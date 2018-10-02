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
 * @CAversion		Id: compobjectplural.php 571 2016-01-04 15:03:02Z BrianWade $
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

defined('JPATH_BASE') or die;

jimport('joomla.form.formfield');

/**
 * Supports a modal tsjcdmx_juzgados_civiles_antiguos picker.
 *
 */
class JFormFieldModal_Tsjcdmx_juzgados_civiles_antiguos extends JFormField
{
	/**
	 * The form field type.
	 *
	 * @var		string
	 * 
	 */
	protected $type = 'Modal_Tsjcdmx_juzgados_civiles_antiguos';

	/**
	 * Method to get the field input markup.
	 *
	 * @return	string	The field input markup.
	 * 
	 */
	protected function getInput()
	{
		// Load the javascript
		JHtml::_('behavior.core');
		JHtml::_('behavior.modal', 'a.modal');
		JHtml::_('bootstrap.tooltip');
		
		// Build the script.
		$script = array();
		$script[] = '';		
		$script[] = '	function jSelectTsjcdmx_juzgados_civiles_antiguo_'.$this->id.'(id, name, object)';
		$script[] = '	{';
		$script[] = '		document.getElementById("'.$this->id.'_id").value = id;';
		$script[] = '		document.getElementById("'.$this->id.'_name").value = name;';
		$script[] = '		SqueezeBox.close();';
		$script[] = '	}';

		// Add the script to the document head.
		JFactory::getDocument()->addScriptDeclaration(implode("\n", $script));

		// Get the title of the linked chart
		$db = JFactory::getDbo();
		$db->setQuery(
			'SELECT name' .
			' FROM #__boletin_tsjcdmx_juzgados_civiles_antiguos' .
			' WHERE id = '.(int) $this->value
		);
		
		try
		{
			$title = $db->loadResult();
		}
		catch (RuntimeException $e)
		{
			JError::raiseWarning(500, $e->getMessage());
		}

		if (empty($title))
		{
			$title = JText::_('COM_BOLETIN_TSJCDMX_JUZGADOS_CIVILES_ANTIGUOS_SELECT_ITEM_LABEL');
		}
		$link = 'index.php?option=com_boletin&amp;view=tsjcdmx_juzgados_civiles_antiguos&amp;layout=modal&amp;tmpl=component&amp;function=jSelectTsjcdmx_juzgados_civiles_antiguo_'.$this->id;

		// The current user display field.
		$html[] = '<span class="input-append fltlft">';
		$html[] = '<input type="text" class="input-medium" id="'.$this->id.'_name" value="'.$title.'" disabled="disabled" size="35" />'
				 .'<a class="modal btn" title="'.JText::_('COM_BOLETIN_TSJCDMX_JUZGADOS_CIVILES_ANTIGUOS_SELECT_BUTTON_LABEL').'"  href="'.$link.'&amp;'.JSession::getFormToken().'=1" rel="{handler: \'iframe\', size: {x: 800, y: 450}}"><i class="icon-file"></i> '.JText::_('COM_BOLETIN_TSJCDMX_JUZGADOS_CIVILES_ANTIGUOS_SELECT_ITEM_LABEL').'</a>';
		$html[] = '</span>';

		
		// The active tsjcdmx_juzgados_civiles_antiguo id field.
		if (0 == (int)$this->value)
		{
			$value = '';
		}
		else
		{
			$value = (int)$this->value;
		}

		// class='required' for client side validation
		$class = '';
		if ($this->required)
		{
			$class = ' class="required modal-value"';
		}

		$html[] = '<input type="hidden" id="'.$this->id.'_id"'.$class.' name="'.$this->id.'_name" value="'.$value.'" />';
		
		return implode("\n", $html);	
	}
}
