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

// Add css files for the remca component and categories if they exist
$this->document->addStyleSheet(JUri::root().'media/com_remca/css/site_remca.css');
$this->document->addStyleSheet(JUri::root().'media/com_remca/css/site_houses.css');

if ($lang->isRTL())
{
	$this->document->addStyleSheet(JUri::root().'media/com_remca/css/site_remca-rtl.css');
	$this->document->addStyleSheet(JUri::root().'media/com_remca/css/site_houses-rtl.css');
}

// Add Javscript functions for field display
JHtml::_('behavior.caption');
JHtml::_('bootstrap.tooltip');
JHtml::_('behavior.multiselect');
JHtml::_('dropdown.init');
JHtml::_('formbehavior.chosen', 'select');	

/*
 *	Initialise values for the layout 
 */	
 
$app = JFactory::getApplication();

$function	= $app->input->get('function', 'jSelectHouse');
$list_order	= $this->escape($this->state->get('list.ordering'));
$list_dirn	= $this->escape($this->state->get('list.direction'));
// Get from global settings the text to use for an empty field
$component = JComponentHelper::getComponent( 'com_remca' );
$empty = $component->params->get('default_empty_field', '');

/*
 *	Layout HTML
 */
?>
<div class="houses-modal<?php echo $this->params->get('pageclass_sfx');?>">
	<h3><?php echo JText::_('COM_REMCA_HOUSES_SELECT_ITEM_LABEL'); ?></h3>
	<form action="<?php echo JRoute::_('index.php?option=com_remca&view=houses&layout=modal&tmpl=component');?>" method="post" name="adminForm" id="adminForm">
		<div class="filter_search">
			<input type="text" name="filter_search" id="filter_search" value="<?php echo $this->escape($this->state->get('filter.search')); ?>"  onchange="document.adminForm.submit();" title="<?php echo JText::_('COM_REMCA_FILTER_SEARCH_DESC'); ?>" placeholder="<?php echo JText::_('JSEARCH_FILTER_LABEL'); ?>" />
				<?php if ($this->params->get('show_house_category',1)) : ?>
			<select name="filter_category_id" onchange="this.form.submit()">
				<option value=""><?php echo JText::_('JOPTION_SELECT_CATEGORY');?></option>
				<?php echo JHtml::_('select.options', JHtml::_('category.options', 'com_remca'), 'value', 'text', $this->state->get('filter.category_id'));?>
			</select>
				<?php endif; ?>	
			<select name="filter_site" onchange="this.form.submit()">
				<option value=""><?php echo JText::_('COM_REMCA_HOUSES_SELECT_SITE');?></option>
				<?php echo JHtml::_('select.options', $this->site_values, 'value', 'text', $this->state->get('filter.site'));?>
			</select>	
			<select name="filter_id_country" onchange="this.form.submit()">
				<option value=""><?php echo JText::_('COM_REMCA_HOUSES_SELECT_C1_COUNTRY');?></option>
				<?php echo JHtml::_('select.options', $this->countries, 'value', 'text', $this->state->get('filter.id_country'));?>
			</select>	
			<select name="filter_id_lstate" onchange="this.form.submit()">
				<option value=""><?php echo JText::_('COM_REMCA_HOUSES_SELECT_S_LSTATE');?></option>
				<?php echo JHtml::_('select.options', $this->lstates, 'value', 'text', $this->state->get('filter.id_lstate'));?>
			</select>	
			<select name="filter_id_lmunicipality" onchange="this.form.submit()">
				<option value=""><?php echo JText::_('COM_REMCA_HOUSES_SELECT_M_LMUNICIPALITY');?></option>
				<?php echo JHtml::_('select.options', $this->lmunicipalities, 'value', 'text', $this->state->get('filter.id_lmunicipality'));?>
			</select>	
			<select name="filter_price" onchange="this.form.submit()">
				<option value=""><?php echo JText::_('COM_REMCA_HOUSES_SELECT_PRICE');?></option>
				<?php echo JHtml::_('select.options', $this->price_values, 'value', 'text', $this->state->get('filter.price'));?>
			</select>	
			<select name="filter_bathrooms" onchange="this.form.submit()">
				<option value=""><?php echo JText::_('COM_REMCA_HOUSES_SELECT_BATHROOMS');?></option>
				<?php echo JHtml::_('select.options', $this->bathrooms_values, 'value', 'text', $this->state->get('filter.bathrooms'));?>
			</select>	
			<select name="filter_bedrooms" onchange="this.form.submit()">
				<option value=""><?php echo JText::_('COM_REMCA_HOUSES_SELECT_BEDROOMS');?></option>
				<?php echo JHtml::_('select.options', $this->bedrooms_values, 'value', 'text', $this->state->get('filter.bedrooms'));?>
			</select>	
			<div class="display-limit">
				<?php echo $this->pagination->getLimitBox(); ?>
			</div>
		</div>

		<table class="houses">
			<thead>
				<tr>
					<th>
						<?php echo JHtml::_('grid.sort',  'COM_REMCA_HEADING_NAME', 'a.name', $list_dirn, $list_order); ?>
					</th>
					<th width="10%">
						<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_SITE'); ?>
					</th>	
					<th width="10%">
						<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_ID_COUNTRY'); ?>
					</th>	
					<th width="10%">
						<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_ID_LSTATE'); ?>
					</th>	
					<th width="10%">
						<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_ID_LMUNICIPALITY'); ?>
					</th>	
					<th width="10%">
						<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_PRICE'); ?>
					</th>	
					<th width="10%">
						<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_BATHROOMS'); ?>
					</th>	
					<th width="10%">
						<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_BEDROOMS'); ?>
					</th>	
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
					<td>
						<a class="pointer" onclick="if (window.parent) window.parent.<?php echo $this->escape($function);?>('<?php echo $item->id; ?>', '<?php echo $this->escape(addslashes($item->name)); ?>');">
							<?php echo $this->escape($item->name); ?>
						</a>	
					</td>
					<td class="center">
						<a class="pointer" onclick="if (window.parent) window.parent.<?php echo $this->escape($function);?>('<?php echo $item->id; ?>', '<?php echo $this->escape(addslashes($item->name)); ?>');">
							<?php 
								switch ($item->site) :
									case 'www.vivanuncios.com.mx':
										echo JText::_('COM_REMCA_HOUSES_SITE_VALUE_VIVANUNCIOS');
										break;
									case 'www.bienesonline.mx':
										echo JText::_('COM_REMCA_HOUSES_SITE_VALUE_BIENESONLINE');
										break;
									case 'www.lamudi.com.mx':
										echo JText::_('COM_REMCA_HOUSES_SITE_VALUE_LAMUDI');
										break;
									default :
										echo $empty;
										break;
								endswitch; 
							?>
						</a>	
					</td>	
					<td class="center">
						<a class="pointer" onclick="if (window.parent) window.parent.<?php echo $this->escape($function);?>('<?php echo $item->id; ?>', '<?php echo $this->escape(addslashes($item->name)); ?>');">
							<?php 
								echo JString::trim($item->c1_country_name); 
							?>
						</a>	
					</td>	
					<td class="center">
						<a class="pointer" onclick="if (window.parent) window.parent.<?php echo $this->escape($function);?>('<?php echo $item->id; ?>', '<?php echo $this->escape(addslashes($item->name)); ?>');">
							<?php 
								echo JString::trim($item->s_lstate_name); 
							?>
						</a>	
					</td>	
					<td class="center">
						<a class="pointer" onclick="if (window.parent) window.parent.<?php echo $this->escape($function);?>('<?php echo $item->id; ?>', '<?php echo $this->escape(addslashes($item->name)); ?>');">
							<?php 
								echo JString::trim($item->m_lmunicipality_name); 
							?>
						</a>	
					</td>	
					<td class="center">
						<a class="pointer" onclick="if (window.parent) window.parent.<?php echo $this->escape($function);?>('<?php echo $item->id; ?>', '<?php echo $this->escape(addslashes($item->name)); ?>');">
							<?php 
								echo $item->price != '' ? $item->price : $empty; 
							?>
						</a>	
					</td>	
					<td class="center">
						<a class="pointer" onclick="if (window.parent) window.parent.<?php echo $this->escape($function);?>('<?php echo $item->id; ?>', '<?php echo $this->escape(addslashes($item->name)); ?>');">
							<?php 
								echo $item->bathrooms != '' ? $item->bathrooms : $empty; 
							?>
						</a>	
					</td>	
					<td class="center">
						<a class="pointer" onclick="if (window.parent) window.parent.<?php echo $this->escape($function);?>('<?php echo $item->id; ?>', '<?php echo $this->escape(addslashes($item->name)); ?>');">
							<?php 
								echo $item->bedrooms != '' ? $item->bedrooms : $empty; 
							?>
						</a>	
					</td>	
					<td class="center">
						<a class="pointer" onclick="if (window.parent) window.parent.<?php echo $this->escape($function);?>('<?php echo $item->id; ?>', '<?php echo $this->escape(addslashes($item->name)); ?>');">
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

			<?php if ($this->params->def('show_house_pagination_results', 0)) : ?>
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
$can_create	= $user->authorise('core.create', 'com_remca');
if ($this->params->get('show_house_add_link', 1) AND $can_create)
	echo JHtml::_('houseicon.create', $this->params);
?>
				<button type="button" class="btn" onclick="Joomla.submitbutton('expediente.cancel')">
					<span class="icon-cancel"></span>&#160;<?php echo JText::_('JCANCEL') ?>
				</button>