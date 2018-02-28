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
 * @CAversion		Id: default.php 604 2016-01-14 13:05:26Z BrianWade $
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
JHtml::_('bootstrap.tooltip');
JHtml::_('behavior.multiselect');
JHtml::_('dropdown.init');
JHtml::_('formbehavior.chosen', 'select');	

/*
 *	Initialise values for the layout 
 */	
 
// Create some shortcuts.
$user		= JFactory::getUser();
$n			= count($this->items);
$list_order	= $this->state->get('list.ordering');
$list_dirn	= $this->state->get('list.direction');

$layout		= $this->params->get('house_layout', 'default');

$can_create	= $user->authorise('core.create', 'com_remca');
// Get from global settings the text to use for an empty field
$component = JComponentHelper::getComponent( 'com_remca' );
$empty = $component->params->get('default_empty_field', '');

/*
 *	Layout HTML
 */
?>
<noscript>
<p style="color: red;"><?php echo JText::_('COM_REMCA_WARNING_NOSCRIPT'); ?><p>
</noscript>
<div class="remca houses-list<?php echo $this->params->get('pageclass_sfx');?>">
	<?php if ($this->params->get('show_page_heading')): ?>
		<div class="page-header">
			<h1><?php echo $this->escape($this->params->get('page_heading')); ?></h1>
		</div>
	<?php endif; ?>

	<?php
		$show_actions = false;
		if ($this->params->get('show_house_icons',1) >= 0) :
			foreach ($this->items as $i => $item) :
				if ($item->params->get('access-edit',1) OR $item->params->get('access-delete',1)) :
					$show_actions = true;
					continue;
				endif;
			endforeach;
		endif;
	?>
	<form action="<?php echo htmlspecialchars(JUri::getInstance()->toString()); ?>" method="post" name="adminForm" id="adminForm">
		<?php if (($this->params->get('show_house_filter_field') != '' AND $this->params->get('show_house_filter_field') != 'hide')) :?>
			<div class="filter-search">
				<?php if ($this->params->get('show_house_filter_field') != '' AND $this->params->get('show_house_filter_field') != 'hide') :?>
					<input type="text" name="filter_search" id="filter_search" value="<?php echo $this->escape($this->state->get('filter.search')); ?>" onchange="document.adminForm.submit();" title="<?php echo JText::_('COM_REMCA_FILTER_SEARCH_DESC'); ?>" placeholder="<?php echo JText::_('COM_REMCA_'.$this->params->get('show_house_filter_field').'_FILTER_LABEL'); ?>" />
				<?php endif; ?>	
				<select name="filter_category_id" onchange="this.form.submit()">
					<option value=""><?php echo JText::_('JOPTION_SELECT_CATEGORY');?></option>
					<?php echo JHtml::_('select.options', JHtml::_('category.options', 'com_remca'), 'value', 'text', $this->state->get('filter.category_id'));?>
				</select>
				<?php if ($this->params->get('list_show_house_price',0)) : ?>
					<select name="filter_price" onchange="this.form.submit()">
					<option value=""><?php echo JText::_('COM_REMCA_HOUSES_SELECT_PRICE');?></option>
					<?php echo JHtml::_('select.options', $this->price_values, 'value', 'text', $this->state->get('filter.price'));?>
					</select>
				<?php endif; ?>	
			</div>
		<?php endif; ?>

		<?php if ($this->params->get('show_house_pagination_limit')) : ?>
			<div class="display-limit">
				<?php echo JText::_('JGLOBAL_DISPLAY_NUM'); ?>&#160;
				<?php echo $this->pagination->getLimitBox(); ?>
			</div>
		<?php endif; ?>	
		<div style="clear:both;"></div>				
		<?php if (empty($this->items)) : ?>

			<?php if ($this->params->get('show_no_houses',1)) : ?>
			<p><?php echo JText::_('COM_REMCA_HOUSES_NO_ITEMS'); ?></p>
			<?php endif; ?>

		<?php else : ?>
		<div style="overflow-x:auto;">
			<table class="table table-striped" id="houses">
			<?php if ($this->params->get('show_house_headings')) :?>
			<thead>
				<tr>
					<th width="1%" style="display:none;">
					</th>				
					<th class="list-name" id="tableOrderingname">
					<?php  echo JHtml::_('grid.sort', 'COM_REMCA_HEADING_NAME', 'a.name', $list_dirn, $list_order) ; ?>
					</th>
					<?php if ($date = $this->params->get('list_show_house_date')) : ?>
						<th class="list-date" id="tableOrderingdate">
							<?php echo JHtml::_('grid.sort', 'COM_REMCA_FIELD_'.JString::strtoupper($date).'_LABEL', 'a.'.$date, $list_dirn, $list_order); ?>
						</th>
					<?php endif; ?>

					<?php if ($this->params->get('list_show_house_hits',0)) : ?>
						<th class="list-hits" id="tableOrderinghits">
						<?php echo JHtml::_('grid.sort', 'COM_REMCA_HEADING_HITS', 'a.hits', $list_dirn, $list_order); ?>
						</th>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_houseid',0)) : ?>
						<th class="list-houseid" id="tableOrderinghouseid">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_HOUSEID'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_sid',0)) : ?>
						<th class="list-sid" id="tableOrderingsid">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_SID'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_fk_rentid',0)) : ?>
						<th class="list-fk_rentid" id="tableOrderingfk_rentid">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_FK_RENTID'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_associate_house',0)) : ?>
						<th class="list-associate_house" id="tableOrderingassociate_house">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_ASSOCIATE_HOUSE'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_link',0)) : ?>
						<th class="list-link" id="tableOrderinglink">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_LINK'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_listing_type',0)) : ?>
						<th class="list-listing_type" id="tableOrderinglisting_type">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_LISTING_TYPE'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_price',0)) : ?>
						<th class="list-price" id="tableOrderingprice">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_PRICE'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_priceunit',0)) : ?>
						<th class="list-priceunit" id="tableOrderingpriceunit">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_PRICEUNIT'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_hcountry',0)) : ?>
						<th class="list-hcountry" id="tableOrderinghcountry">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_HCOUNTRY'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_hregion',0)) : ?>
						<th class="list-hregion" id="tableOrderinghregion">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_HREGION'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_hcity',0)) : ?>
						<th class="list-hcity" id="tableOrderinghcity">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_HCITY'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_hzipcode',0)) : ?>
						<th class="list-hzipcode" id="tableOrderinghzipcode">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_HZIPCODE'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_hlocation',0)) : ?>
						<th class="list-hlocation" id="tableOrderinghlocation">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_HLOCATION'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_hlatitude',0)) : ?>
						<th class="list-hlatitude" id="tableOrderinghlatitude">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_HLATITUDE'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_hlongitude',0)) : ?>
						<th class="list-hlongitude" id="tableOrderinghlongitude">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_HLONGITUDE'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_map_zoom',0)) : ?>
						<th class="list-map_zoom" id="tableOrderingmap_zoom">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_MAP_ZOOM'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_rooms',0)) : ?>
						<th class="list-rooms" id="tableOrderingrooms">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_ROOMS'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_bathrooms',0)) : ?>
						<th class="list-bathrooms" id="tableOrderingbathrooms">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_BATHROOMS'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_bedrooms',0)) : ?>
						<th class="list-bedrooms" id="tableOrderingbedrooms">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_BEDROOMS'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_contacts',0)) : ?>
						<th class="list-contacts" id="tableOrderingcontacts">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_CONTACTS'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_image_link',0)) : ?>
						<th class="list-image_link" id="tableOrderingimage_link">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_IMAGE_LINK'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_listing_status',0)) : ?>
						<th class="list-listing_status" id="tableOrderinglisting_status">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_LISTING_STATUS'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_property_type',0)) : ?>
						<th class="list-property_type" id="tableOrderingproperty_type">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_PROPERTY_TYPE'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_year',0)) : ?>
						<th class="list-year" id="tableOrderingyear">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_YEAR'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_agent',0)) : ?>
						<th class="list-agent" id="tableOrderingagent">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_AGENT'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_area_unit',0)) : ?>
						<th class="list-area_unit" id="tableOrderingarea_unit">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_AREA_UNIT'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_land_area',0)) : ?>
						<th class="list-land_area" id="tableOrderingland_area">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_LAND_AREA'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_land_area_unit',0)) : ?>
						<th class="list-land_area_unit" id="tableOrderingland_area_unit">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_LAND_AREA_UNIT'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_expiration_date',0)) : ?>
						<th class="list-expiration_date" id="tableOrderingexpiration_date">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_EXPIRATION_DATE'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_lot_size',0)) : ?>
						<th class="list-lot_size" id="tableOrderinglot_size">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_LOT_SIZE'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_house_size',0)) : ?>
						<th class="list-house_size" id="tableOrderinghouse_size">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_HOUSE_SIZE'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_garages',0)) : ?>
						<th class="list-garages" id="tableOrderinggarages">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_GARAGES'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_date',0)) : ?>
						<th class="list-date" id="tableOrderingdate">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_DATE'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_edok_link',0)) : ?>
						<th class="list-edok_link" id="tableOrderingedok_link">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_EDOK_LINK'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_owneremail',0)) : ?>
						<th class="list-owneremail" id="tableOrderingowneremail">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_OWNEREMAIL'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_featured_clicks',0)) : ?>
						<th class="list-featured_clicks" id="tableOrderingfeatured_clicks">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_FEATURED_CLICKS'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_featured_shows',0)) : ?>
						<th class="list-featured_shows" id="tableOrderingfeatured_shows">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_FEATURED_SHOWS'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_pixUpdtedDt',0)) : ?>
						<th class="list-pixUpdtedDt" id="tableOrderingpixUpdtedDt">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_PIXUPDTEDDT'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_extra1',0)) : ?>
						<th class="list-extra1" id="tableOrderingextra1">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_EXTRA1'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_extra2',0)) : ?>
						<th class="list-extra2" id="tableOrderingextra2">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_EXTRA2'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_extra3',0)) : ?>
						<th class="list-extra3" id="tableOrderingextra3">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_EXTRA3'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_extra4',0)) : ?>
						<th class="list-extra4" id="tableOrderingextra4">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_EXTRA4'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_extra5',0)) : ?>
						<th class="list-extra5" id="tableOrderingextra5">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_EXTRA5'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_extra6',0)) : ?>
						<th class="list-extra6" id="tableOrderingextra6">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_EXTRA6'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_extra7',0)) : ?>
						<th class="list-extra7" id="tableOrderingextra7">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_EXTRA7'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_extra8',0)) : ?>
						<th class="list-extra8" id="tableOrderingextra8">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_EXTRA8'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_extra9',0)) : ?>
						<th class="list-extra9" id="tableOrderingextra9">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_EXTRA9'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_extra10',0)) : ?>
						<th class="list-extra10" id="tableOrderingextra10">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_EXTRA10'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_energy_value',0)) : ?>
						<th class="list-energy_value" id="tableOrderingenergy_value">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_ENERGY_VALUE'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_owner_id',0)) : ?>
						<th class="list-owner_id" id="tableOrderingowner_id">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_OWNER_ID'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_climate_value',0)) : ?>
						<th class="list-climate_value" id="tableOrderingclimate_value">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_CLIMATE_VALUE'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_house_ordering',0)) : ?>
						<th width="10%">
							<?php echo JHtml::_('grid.sort',  'COM_REMCA_HEADING_ORDERING', 'a.ordering', $list_dirn, $list_order); ?>
						</th>
					<?php endif; ?>	
					<?php if ($show_actions) : ?>
						<th width="12%" class="list-actions">
							<?php echo JText::_('COM_REMCA_HEADING_ACTIONS'); ?>						
						</th> 					
					<?php endif; ?>
				</tr>
			</thead>
			<?php endif; ?>

			<tbody>

				<?php foreach ($this->items as $i => $item) :
				
					$can_edit	= $item->params->get('access-edit');
			
					$can_delete	= $item->params->get('access-delete');

							
				?>			
					<?php $params = $item->params; ?>		

					<?php if ($item->state == 0) : ?>
						<tr class="system-unpublished cat-list-row<?php echo $i % 2; ?>">
					<?php else: ?>
						<tr class="cat-list-row<?php echo $i % 2; ?>">
					<?php endif; ?>
					<td class="center" style="display:none;">
						<?php echo JHtml::_('grid.id', $i, $item->id); ?>
					</td>				
					<td class="list-name">
						<a href="<?php echo JRoute::_(RemcaHelperRoute::getHouseRoute($item->slug, 
																									$item->catid, 
																									$item->language,
																									$layout,									
																									$params->get('keep_house_itemid'))); ?>" 
																									>
								<?php echo $this->escape($item->name); ?>
						</a>
					</td>

					<?php if ($this->params->get('list_show_house_date')) : ?>
						<td class="list-date">
							<time datetime="<?php echo JHtml::_('date', $item->display_date, 'c'); ?>">
								<?php echo JHtml::_('date',$item->display_date, $this->escape($this->params->get('house_date_format', JText::_('DATE_FORMAT_LC3')))); ?>
							</time>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_hits',0)) : ?>
						<td class="list-hits">
							<?php echo $this->escape($item->hits); ?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_category',0)) : ?>
						<td class="list-category">
							<?php 
								if (!empty($item->category_title )) :								
									echo $this->escape($item->category_title);
								else:
									echo $empty;
								endif;								
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_houseid',0)) : ?>
						<td class="list-houseid">
							<?php 
								echo $item->houseid != '' ? $item->houseid : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_sid',0)) : ?>
						<td class="list-sid">
							<?php 
								echo $item->sid != '' ? $item->sid : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_fk_rentid',0)) : ?>
						<td class="list-fk_rentid">
							<?php 
								if ($params->get('list_link_house_fk_rentid')) :
									echo '<a href="'.JRoute::_(RemcaHelperRoute::getRentRoute($item->fk_rentid, 0, $item->language)).'">'.JString::trim($item->r_rent_name).'</a>';
								else :
									echo JString::trim($item->r_rent_name);
								endif; 
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_associate_house',0)) : ?>
						<td class="list-associate_house">
							<?php 
								echo $item->associate_house != '' ? $item->associate_house : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_link',0)) : ?>
						<td class="list-link">
							<?php 
								echo $item->link != '' ? $item->link : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_listing_type',0)) : ?>
						<td class="list-listing_type">
							<?php 
								echo $item->listing_type != '' ? $item->listing_type : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_price',0)) : ?>
						<td class="list-price">
							<?php 
								echo $item->price != '' ? $item->price : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_priceunit',0)) : ?>
						<td class="list-priceunit">
							<?php 
								echo $item->priceunit != '' ? $item->priceunit : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_hcountry',0)) : ?>
						<td class="list-hcountry">
							<?php 
								echo $item->hcountry != '' ? $item->hcountry : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_hregion',0)) : ?>
						<td class="list-hregion">
							<?php 
								echo $item->hregion != '' ? $item->hregion : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_hcity',0)) : ?>
						<td class="list-hcity">
							<?php 
								echo $item->hcity != '' ? $item->hcity : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_hzipcode',0)) : ?>
						<td class="list-hzipcode">
							<?php 
								echo $item->hzipcode != '' ? $item->hzipcode : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_hlocation',0)) : ?>
						<td class="list-hlocation">
							<?php 
								echo $item->hlocation != '' ? $item->hlocation : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_hlatitude',0)) : ?>
						<td class="list-hlatitude">
							<?php 
								echo $item->hlatitude != '' ? $item->hlatitude : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_hlongitude',0)) : ?>
						<td class="list-hlongitude">
							<?php 
								echo $item->hlongitude != '' ? $item->hlongitude : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_map_zoom',0)) : ?>
						<td class="list-map_zoom">
							<?php 
								echo $item->map_zoom != '' ? $item->map_zoom : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_rooms',0)) : ?>
						<td class="list-rooms">
							<?php 
								echo $item->rooms != '' ? $item->rooms : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_bathrooms',0)) : ?>
						<td class="list-bathrooms">
							<?php 
								echo $item->bathrooms != '' ? $item->bathrooms : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_bedrooms',0)) : ?>
						<td class="list-bedrooms">
							<?php 
								echo $item->bedrooms != '' ? $item->bedrooms : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_contacts',0)) : ?>
						<td class="list-contacts">
							<?php 
								echo $item->contacts != '' ? $item->contacts : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_image_link',0)) : ?>
						<td class="list-image_link">
							<?php 
								echo $item->image_link != '' ? $item->image_link : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_listing_status',0)) : ?>
						<td class="list-listing_status">
							<?php 
								echo $item->listing_status != '' ? $item->listing_status : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_property_type',0)) : ?>
						<td class="list-property_type">
							<?php 
								echo $item->property_type != '' ? $item->property_type : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_year',0)) : ?>
						<td class="list-year">
							<?php 
								echo $item->year != '' ? $item->year : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_agent',0)) : ?>
						<td class="list-agent">
							<?php 
								echo $item->agent != '' ? $item->agent : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_area_unit',0)) : ?>
						<td class="list-area_unit">
							<?php 
								echo $item->area_unit != '' ? $item->area_unit : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_land_area',0)) : ?>
						<td class="list-land_area">
							<?php 
								echo $item->land_area != '' ? $item->land_area : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_land_area_unit',0)) : ?>
						<td class="list-land_area_unit">
							<?php 
								echo $item->land_area_unit != '' ? $item->land_area_unit : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_expiration_date',0)) : ?>
						<td class="list-expiration_date">
							<?php 
								echo ($item->expiration_date != '' AND $item->expiration_date != '0000-00-00 00:00:00') ? JHtml::date($item->expiration_date, '%Y-%m-%d', null) : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_lot_size',0)) : ?>
						<td class="list-lot_size">
							<?php 
								echo $item->lot_size != '' ? $item->lot_size : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_house_size',0)) : ?>
						<td class="list-house_size">
							<?php 
								echo $item->house_size != '' ? $item->house_size : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_garages',0)) : ?>
						<td class="list-garages">
							<?php 
								echo $item->garages != '' ? $item->garages : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_date',0)) : ?>
						<td class="list-date">
							<?php 
								echo ($item->date != '' AND $item->date != '0000-00-00 00:00:00') ? JHtml::date($item->date, '%Y-%m-%d', null) : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_edok_link',0)) : ?>
						<td class="list-edok_link">
							<?php 
								echo $item->edok_link != '' ? $item->edok_link : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_owneremail',0)) : ?>
						<td class="list-owneremail">
							<?php 
								echo $item->owneremail != '' ? $item->owneremail : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_featured_clicks',0)) : ?>
						<td class="list-featured_clicks">
							<?php 
								echo $item->featured_clicks != '' ? $item->featured_clicks : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_featured_shows',0)) : ?>
						<td class="list-featured_shows">
							<?php 
								echo $item->featured_shows != '' ? $item->featured_shows : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_pixUpdtedDt',0)) : ?>
						<td class="list-pixUpdtedDt">
							<?php 
								echo $item->pixUpdtedDt != '' ? $item->pixUpdtedDt : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_extra1',0)) : ?>
						<td class="list-extra1">
							<?php 
								echo $item->extra1 != '' ? $item->extra1 : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_extra2',0)) : ?>
						<td class="list-extra2">
							<?php 
								echo $item->extra2 != '' ? $item->extra2 : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_extra3',0)) : ?>
						<td class="list-extra3">
							<?php 
								echo $item->extra3 != '' ? $item->extra3 : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_extra4',0)) : ?>
						<td class="list-extra4">
							<?php 
								echo $item->extra4 != '' ? $item->extra4 : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_extra5',0)) : ?>
						<td class="list-extra5">
							<?php 
								echo $item->extra5 != '' ? $item->extra5 : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_extra6',0)) : ?>
						<td class="list-extra6">
							<?php 
								echo $item->extra6 != '' ? $item->extra6 : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_extra7',0)) : ?>
						<td class="list-extra7">
							<?php 
								echo $item->extra7 != '' ? $item->extra7 : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_extra8',0)) : ?>
						<td class="list-extra8">
							<?php 
								echo $item->extra8 != '' ? $item->extra8 : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_extra9',0)) : ?>
						<td class="list-extra9">
							<?php 
								echo $item->extra9 != '' ? $item->extra9 : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_extra10',0)) : ?>
						<td class="list-extra10">
							<?php 
								echo $item->extra10 != '' ? $item->extra10 : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_energy_value',0)) : ?>
						<td class="list-energy_value">
							<?php 
								echo $item->energy_value != '' ? $item->energy_value : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_owner_id',0)) : ?>
						<td class="list-owner_id">
							<?php 
								if ($params->get('list_link_house_owner_id')) :
									echo '<a href="'.JRoute::_(RemcaHelperRoute::getUserRoute($item->owner_id, 0, $item->language)).'">'.JString::trim($item->u_user_name).'</a>';
								else :
									echo JString::trim($item->u_user_name);
								endif; 
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_climate_value',0)) : ?>
						<td class="list-climate_value">
							<?php 
								echo $item->climate_value != '' ? $item->climate_value : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_house_ordering',0)) : ?>
						<td class="list-order">
							<?php echo $item->ordering; ?>
						</td>
					<?php endif; ?>
					
					<?php if ($show_actions) : ?>
						<td class="list-actions">
                        	<div class="btn-group pull-right">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <span class="icon-cog"></span> <span class="caret"></span> </a>
                                <ul class="dropdown-menu">
							<?php if ($params->get('show_house_print_icon')) : ?>
								<li class="print-icon">
										<?php echo JHtml::_('houseicon.print_popup',  $item, $params); ?>
								</li>
							<?php endif; ?>

							<?php if ($params->get('show_house_email_icon')) : ?>
								<li class="email-icon">
										<?php echo JHtml::_('houseicon.email',  $item, $params); ?>
								</li>
							<?php endif; ?>
								<?php if ($can_edit ) : ?>
                                    <li class="edit-icon">
                                        <?php echo JHtml::_('houseicon.edit',$item, $params); ?>
                                    </li>
                                <?php endif; ?>					
                                <?php if ($can_delete) : ?>
                                    <li class="delete-icon">
                                        <?php echo JHtml::_('houseicon.delete',$item, $params); ?>
                                    </li>
                                <?php endif; ?>
							<?php if ($can_edit AND $params->get('save_history') AND $params->get('house_save_history')) : ?>
								<li class="version-icon">
									<?php echo JHtml::_('houseicon.versions',$item, $params); ?>
								</li>	
							<?php endif; ?>	
                                </ul>
                            </div>
						</td>															
					<?php endif; ?>
				</tr>
			<?php endforeach; ?>
			</tbody>
			</table>
		</div>
			<?php if (($this->params->def('show_house_pagination', 2) == 1  OR ($this->params->get('show_house_pagination') == 2)) AND ($this->pagination->get('pages.total') > 1)) : ?>
			<div class="pagination">

				<?php if ($this->params->def('show_house_pagination_results', 0)) : ?>
				<p class="counter">
						<?php echo $this->pagination->getPagesCounter(); ?>
				</p>
				<?php endif; ?>

				<?php echo $this->pagination->getPagesLinks(); ?>
			</div>
			<?php endif; ?>

			<div>
				<!-- @TODO add hidden inputs -->
				<input type="hidden" name="task" value="" />
				<input type="hidden" name="boxchecked" value="0" />			
				<input type="hidden" name="filter_order" value="" />
				<input type="hidden" name="filter_order_Dir" value="" />
				<input type="hidden" name="limitstart" value="" />
				<?php echo JHtml::_('form.token'); ?>
			</div>
		<?php endif; ?>
		<?php // Code to add a link to submit an house. ?>
		<?php if ($this->params->get('show_house_add_link', 1)) : ?>
			<?php if ($can_create) : ?>
				<?php echo JHtml::_('houseicon.create', $this->params); ?>
			<?php  endif; ?>
		<?php endif; ?>		
                <?php echo '<button>export</button>'//JHtml::_('houseicon.create', $this->params); ?>
	</form>
</div>
<?php if ($can_edit AND $params->get('save_history') AND $params->get('house_save_history')) : ?>
<script>
jQuery(document).ready(function($) {
   $('#collapsibleModal')
   .on('hide.bs.modal', function () {
        $(this).removeData('modal');
   });
});

function show_collapseModal(item_id){
	jQuery('#collapsibleModal').modal('show');
	var modalBody = jQuery(document).find('.modal-body');
	modalBody.find('iframe').remove();
	modalBody.prepend('<iframe class="iframe" src="index.php?option=com_remca&task=house.showHistory&item_id='+item_id+'" name="titulo" height="450"></iframe>');
	return;
}
</script>
<div id="collapsibleModal" tabindex="-1" class="modal hide fade">
	<div class="modal-header">
			<button type="button" class="close novalidate" data-dismiss="modal">×</button>
				<h3><?= JText::_('JTOOLBAR_VERSIONS'); ?></h3>
	</div>
	<div class="modal-body"></div>
</div>
<?php endif; ?>	
