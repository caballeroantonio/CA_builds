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
 * @CAversion		Id: modal.php 571 2016-01-04 15:03:02Z BrianWade $
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

/*
 *	Add style sheets, javascript and behaviours here in the layout so they can be overridden, if required, in a template override 
 */

// Add css files for the boletin component and categories if they exist
$this->document->addStyleSheet(JUri::root().'media/com_boletin/css/site_boletin.css');
$this->document->addStyleSheet(JUri::root().'media/com_boletin/css/site_facuerdos.css');

if ($lang->isRTL())
{
	$this->document->addStyleSheet(JUri::root().'media/com_boletin/css/site_boletin-rtl.css');
	$this->document->addStyleSheet(JUri::root().'media/com_boletin/css/site_facuerdos-rtl.css');
}

// Add Javscript functions for field display
JHtml::_('bootstrap.tooltip');
JHtml::_('behavior.multiselect');
JHtml::_('dropdown.init');
JHtml::_('formbehavior.chosen', 'select');	

/*
 *	Initialise values for the layout 
 */	
 
$app = JFactory::getApplication();

$function	= $app->input->get('function', 'jSelectFacuerdo');
$list_order	= $this->escape($this->state->get('list.ordering'));
$list_dirn	= $this->escape($this->state->get('list.direction'));
// Get from global settings the text to use for an empty field
$component = JComponentHelper::getComponent( 'com_boletin' );
$empty = $component->params->get('default_empty_field', '');

/*
 *	Layout HTML
 */
?>
<div class="facuerdos-modal<?php echo $this->params->get('pageclass_sfx');?>">
	<h3><?php echo JText::_('COM_BOLETIN_FACUERDOS_SELECT_ITEM_LABEL'); ?></h3>
	<form action="<?php echo JRoute::_('index.php?option=com_boletin&view=facuerdos&layout=modal&tmpl=component');?>" method="post" name="adminForm" id="adminForm">
		<div class="filter_search">
			<input type="text" name="filter_search" id="filter_search" value="<?php echo $this->escape($this->state->get('filter.search')); ?>"  onchange="document.adminForm.submit();" title="<?php echo JText::_('COM_BOLETIN_FILTER_SEARCH_DESC'); ?>" placeholder="<?php echo JText::_('JSEARCH_FILTER_LABEL'); ?>" />
				<?php if ($this->params->get('show_facuerdo_category',1)) : ?>
			<select name="filter_category_id" onchange="this.form.submit()">
				<option value=""><?php echo JText::_('JOPTION_SELECT_CATEGORY');?></option>
				<?php echo JHtml::_('select.options', JHtml::_('category.options', 'com_boletin'), 'value', 'text', $this->state->get('filter.category_id'));?>
			</select>
				<?php endif; ?>	
			<div class="display-limit">
				<?php echo $this->pagination->getLimitBox(); ?>
			</div>
		</div>

		<table class="facuerdos">
			<thead>
				<tr>
					<th width="10%">
						<?php echo JHtml::_('grid.sort', 'JCATEGORY', 'category_title', $list_dirn, $list_order); ?>
					</th>
						
					<th width="1%" class="nowrap" style="display: none;">
						<?php echo JHtml::_('grid.sort', 'JGRID_HEADING_ID', 'a.id', $list_dirn, $list_order); ?>
					</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($this->items as $i => $item) : ?>
				<tr class="row<?php echo $i % 2; ?>">
					<td class="center">
						<a class="pointer" onclick="if (window.parent) window.parent.<?php echo $this->escape($function);?>('<?php echo $item->id; ?>');">
							<?php echo $this->escape($item->category_title); ?>
						</a>	
					</td>	

					<td class="center" style="display: none;">
							<?php echo $item->id; ?>
						</a>	
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<div class="pagination">

			<?php if ($this->params->def('show_facuerdo_pagination_results', 0)) : ?>
			<p class="counter">
					<?php echo $this->pagination->getPagesCounter(); ?>
			</p>
			<?php endif; ?>

			<?php echo $this->pagination->getPagesLinks(); ?>
		</div>
		<input type="hidden" name="task" value="" />
		<input type="hidden" name="filter_order" value="<?php echo $list_order; ?>" />
		<input type="hidden" name="filter_order_Dir" value="<?php echo $list_dirn; ?>" />
		<?php echo JHtml::_('form.token'); ?>
	</form>
</div>

toolbar<br/>
<?php 
$user		= JFactory::getUser();
$can_create	= $user->authorise('core.create', 'com_boletin');
if ($this->params->get('show_facuerdo_add_link', 1) AND $can_create)
	echo JHtml::_('facuerdoicon.create', $this->params);
?>
				<button type="button" class="btn" onclick="Joomla.submitbutton('expediente.cancel')">
					<span class="icon-cancel"></span>&#160;<?php echo JText::_('JCANCEL') ?>
				</button>