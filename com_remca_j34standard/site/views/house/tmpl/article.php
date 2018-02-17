<?php
/**
 * @version 		$Id:$
 * @name			RealEstateManagerCA
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_remca
 * @subpackage		com_remca.admin
 * @copyright		
 * @license			GNU General Public License version 3 or later; See http://www.gnu.org/copyleft/gpl.html 
 * 
 * The following Component Architect header section must remain in any distribution of this file
 *
 * @CAversion		Id: article.php 571 2016-01-04 15:03:02Z BrianWade $
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
				
// Add Javascript behaviors

/*
 *	Initialise values for the layout 
 */	
 		
// Create shortcuts to some parameters.
$params		= &$this->item->params;
$user		= JFactory::getUser();
$info		= $this->item->params->get('house_info_block_position', 0);
$can_edit	= $params->get('access-edit');
$can_delete	= $params->get('access-delete');
// Get from global settings the text to use for an empty field
$component = JComponentHelper::getComponent( 'com_remca' );
$empty = $component->params->get('default_empty_field', '');
$dummy = false;
$use_def_list = (
			($params->get('show_house_category')) OR 
			($params->get('show_house_parent_category') AND $this->item->parent_slug != '1:root') OR
			($params->get('show_house_hits')) OR
			$dummy
			);

/*
 *	Layout HTML
 */
?>
<noscript>
<p style="color: red;"><?php echo JText::_('COM_REMCA_WARNING_NOSCRIPT'); ?><p>
</noscript>
<div class="remca house-article<?php echo $params->get('pageclass_sfx')?>">
	<?php if ($this->params->get('show_page_heading')) : ?>
		<div class="page-header">	
			<h1><?php echo $this->escape($this->params->get('page_heading')); ?></h1>
		</div>
	<?php endif; ?>
	<?php
		if (!empty($this->item->pagination) AND $this->item->pagination AND !$this->item->paginationposition AND $this->item->paginationrelative) :
			echo $this->item->pagination;
		endif;
	 ?>
	<?php if (!$use_def_list AND $this->print) : ?>
		<div id="pop-print" class="btn">
			<?php echo JHtml::_('houseicon.print_screen', $this->item, $params); ?>
		</div>
		<div class="clearfix"> </div>
	<?php endif; ?>	
	<?php if ($params->get('show_house_icons',-1) >= 0) : ?>
		<?php
			if ($params->get('show_house_print_icon') 
					OR $params->get('show_house_email_icon') 
					OR $can_edit 
					OR $can_delete 
					):
		?>
			<?php if (!$this->print) : ?>
					<div class="btn-group pull-right">
						<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <span class="icon-cog"></span> <span class="caret"></span> </a>
						<ul class="dropdown-menu">			
							<?php if ($params->get('show_house_print_icon')) : ?>
							<li class="print-icon">
									<?php echo JHtml::_('houseicon.print_popup',  $this->item, $params); ?>
							</li>
							<?php endif; ?>

							<?php if ($params->get('show_house_email_icon')) : ?>
							<li class="email-icon">
									<?php echo JHtml::_('houseicon.email',  $this->item, $params); ?>
							</li>
							<?php endif; ?>
							<?php if ($can_edit) : ?>
								<li class="edit-icon">
									<?php echo JHtml::_('houseicon.edit', $this->item, $params); ?>
								</li>
							<?php endif; ?>
							<?php if ($can_delete) : ?>
								<li class="delete-icon">
									<?php echo JHtml::_('houseicon.delete',$this->item, $params); ?>
								</li>
							<?php endif; ?>
						</ul>
					</div>
			<?php else : ?>
				<?php if ($use_def_list) : ?>
					<div id="pop-print" class="btn">
						<?php echo JHtml::_('icon.print_screen', $this->item, $params); ?>
					</div>
				<?php endif; ?>
			<?php endif; ?>
		<?php endif; ?>
	<?php endif; ?>

	<?php if ($params->get('show_house_name')
				OR $params->get('access-edit') 
				): ?>
		<h2>
			<?php if ($params->get('link_house_names') AND !empty($this->item->readmore_link)) : ?>
				<a href="<?php echo $this->item->readmore_link; ?>">
				<?php echo $this->escape($this->item->name); ?></a>
			<?php else : ?>
				<?php echo $this->escape($this->item->name); ?>
			<?php endif; ?>
		</h2>
	<?php endif; ?>
	<?php  echo $this->item->event->afterDisplayHouseName;
	?>

	<?php echo $this->item->event->beforeDisplayHouse; ?>
		<?php 
			if (isset ($this->item->toc)) : 
				echo $this->item->toc; 
			endif;
		?>	
		<?php
			if ($use_def_list AND $info == 0) : 
				echo $this->loadTemplate('info');
			endif;
		?>	
		
		<?php
			if (!empty($this->item->pagination) AND $this->item->pagination AND !$this->item->paginationposition AND !$this->item->paginationrelative) :
				echo $this->item->pagination;
			endif;
		?>	
		
		<div>
		<?php echo $this->item->description; ?>
		</div>
		
		<?php
			if (!empty($this->item->pagination) AND $this->item->pagination AND $this->item->paginationposition AND!$this->item->paginationrelative):
			 echo $this->item->pagination;
			endif;
		?>	
		<?php
			$dummy = false;
			$use_fields_list = (
						($params->get('show_house_houseid')) OR 
						($params->get('show_house_sid')) OR 
						($params->get('show_house_fk_rentid')) OR 
						($params->get('show_house_associate_house')) OR 
						($params->get('show_house_link')) OR 
						($params->get('show_house_listing_type')) OR 
						($params->get('show_house_price')) OR 
						($params->get('show_house_priceunit')) OR 
						($params->get('show_house_hcountry')) OR 
						($params->get('show_house_hregion')) OR 
						($params->get('show_house_hcity')) OR 
						($params->get('show_house_hzipcode')) OR 
						($params->get('show_house_hlocation')) OR 
						($params->get('show_house_hlatitude')) OR 
						($params->get('show_house_hlongitude')) OR 
						($params->get('show_house_map_zoom')) OR 
						($params->get('show_house_rooms')) OR 
						($params->get('show_house_bathrooms')) OR 
						($params->get('show_house_bedrooms')) OR 
						($params->get('show_house_contacts')) OR 
						($params->get('show_house_image_link')) OR 
						($params->get('show_house_listing_status')) OR 
						($params->get('show_house_property_type')) OR 
						($params->get('show_house_year')) OR 
						($params->get('show_house_agent')) OR 
						($params->get('show_house_area_unit')) OR 
						($params->get('show_house_land_area')) OR 
						($params->get('show_house_land_area_unit')) OR 
						($params->get('show_house_expiration_date')) OR 
						($params->get('show_house_lot_size')) OR 
						($params->get('show_house_house_size')) OR 
						($params->get('show_house_garages')) OR 
						($params->get('show_house_date')) OR 
						($params->get('show_house_edok_link')) OR 
						($params->get('show_house_owneremail')) OR 
						($params->get('show_house_featured_clicks')) OR 
						($params->get('show_house_featured_shows')) OR 
						($params->get('show_house_pixUpdtedDt')) OR 
						($params->get('show_house_extra1')) OR 
						($params->get('show_house_extra2')) OR 
						($params->get('show_house_extra3')) OR 
						($params->get('show_house_extra4')) OR 
						($params->get('show_house_extra5')) OR 
						($params->get('show_house_extra6')) OR 
						($params->get('show_house_extra7')) OR 
						($params->get('show_house_extra8')) OR 
						($params->get('show_house_extra9')) OR 
						($params->get('show_house_extra10')) OR 
						($params->get('show_house_energy_value')) OR 
						($params->get('show_house_owner_id')) OR 
						($params->get('show_house_climate_value')) OR 
						$dummy
						);
		?>
		<?php if ($use_fields_list) : ?>		
		<dl class="info">
			<dt class="info-title"><?php  echo JText::_('COM_REMCA_HOUSES_INFO'); ?></dt>
		<?php endif; ?>		
		
			<?php if ($params->get('show_house_houseid')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_HOUSEID_LABEL'); ?></strong>
					<?php
						echo $this->item->houseid != '' ? $this->item->houseid : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_sid')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_SID_LABEL'); ?></strong>
					<?php
						echo $this->item->sid != '' ? $this->item->sid : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_fk_rentid')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_FK_RENTID_LABEL'); ?></strong>
					<?php
						echo JString::trim($this->item->r_rent_name);
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_associate_house')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_ASSOCIATE_HOUSE_LABEL'); ?></strong>
					<?php
						echo $this->item->associate_house != '' ? $this->item->associate_house : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_link')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_LINK_LABEL'); ?></strong>
					<?php
						echo $this->item->link != '' ? $this->item->link : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_listing_type')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_LISTING_TYPE_LABEL'); ?></strong>
					<?php
						echo $this->item->listing_type != '' ? $this->item->listing_type : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_price')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_PRICE_LABEL'); ?></strong>
					<?php
						echo $this->item->price != '' ? $this->item->price : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_priceunit')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_PRICEUNIT_LABEL'); ?></strong>
					<?php
						echo $this->item->priceunit != '' ? $this->item->priceunit : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_hcountry')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_HCOUNTRY_LABEL'); ?></strong>
					<?php
						echo $this->item->hcountry != '' ? $this->item->hcountry : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_hregion')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_HREGION_LABEL'); ?></strong>
					<?php
						echo $this->item->hregion != '' ? $this->item->hregion : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_hcity')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_HCITY_LABEL'); ?></strong>
					<?php
						echo $this->item->hcity != '' ? $this->item->hcity : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_hzipcode')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_HZIPCODE_LABEL'); ?></strong>
					<?php
						echo $this->item->hzipcode != '' ? $this->item->hzipcode : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_hlocation')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_HLOCATION_LABEL'); ?></strong>
					<?php
						echo $this->item->hlocation != '' ? $this->item->hlocation : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_hlatitude')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_HLATITUDE_LABEL'); ?></strong>
					<?php
						echo $this->item->hlatitude != '' ? $this->item->hlatitude : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_hlongitude')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_HLONGITUDE_LABEL'); ?></strong>
					<?php
						echo $this->item->hlongitude != '' ? $this->item->hlongitude : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_map_zoom')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_MAP_ZOOM_LABEL'); ?></strong>
					<?php
						echo $this->item->map_zoom != '' ? $this->item->map_zoom : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_rooms')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_ROOMS_LABEL'); ?></strong>
					<?php
						echo $this->item->rooms != '' ? $this->item->rooms : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_bathrooms')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_BATHROOMS_LABEL'); ?></strong>
					<?php
						echo $this->item->bathrooms != '' ? $this->item->bathrooms : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_bedrooms')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_BEDROOMS_LABEL'); ?></strong>
					<?php
						echo $this->item->bedrooms != '' ? $this->item->bedrooms : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_contacts')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_CONTACTS_LABEL'); ?></strong>
					<?php
						echo $this->item->contacts != '' ? $this->item->contacts : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_image_link')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_IMAGE_LINK_LABEL'); ?></strong>
					<?php
						echo $this->item->image_link != '' ? $this->item->image_link : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_listing_status')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_LISTING_STATUS_LABEL'); ?></strong>
					<?php
						echo $this->item->listing_status != '' ? $this->item->listing_status : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_property_type')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_PROPERTY_TYPE_LABEL'); ?></strong>
					<?php
						echo $this->item->property_type != '' ? $this->item->property_type : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_year')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_YEAR_LABEL'); ?></strong>
					<?php
						echo $this->item->year != '' ? $this->item->year : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_agent')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_AGENT_LABEL'); ?></strong>
					<?php
						echo $this->item->agent != '' ? $this->item->agent : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_area_unit')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_AREA_UNIT_LABEL'); ?></strong>
					<?php
						echo $this->item->area_unit != '' ? $this->item->area_unit : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_land_area')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_LAND_AREA_LABEL'); ?></strong>
					<?php
						echo $this->item->land_area != '' ? $this->item->land_area : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_land_area_unit')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_LAND_AREA_UNIT_LABEL'); ?></strong>
					<?php
						echo $this->item->land_area_unit != '' ? $this->item->land_area_unit : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_expiration_date')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_EXPIRATION_DATE_LABEL'); ?></strong>
					<?php
						echo ($this->item->expiration_date != '' AND $this->item->expiration_date != '0000-00-00 00:00:00') ? JHtml::date($this->item->expiration_date, '%Y-%m-%d', null) : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_lot_size')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_LOT_SIZE_LABEL'); ?></strong>
					<?php
						echo $this->item->lot_size != '' ? $this->item->lot_size : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_house_size')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_HOUSE_SIZE_LABEL'); ?></strong>
					<?php
						echo $this->item->house_size != '' ? $this->item->house_size : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_garages')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_GARAGES_LABEL'); ?></strong>
					<?php
						echo $this->item->garages != '' ? $this->item->garages : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_date')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_DATE_LABEL'); ?></strong>
					<?php
						echo ($this->item->date != '' AND $this->item->date != '0000-00-00 00:00:00') ? JHtml::date($this->item->date, '%Y-%m-%d', null) : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_edok_link')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_EDOK_LINK_LABEL'); ?></strong>
					<?php
						echo $this->item->edok_link != '' ? $this->item->edok_link : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_owneremail')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_OWNEREMAIL_LABEL'); ?></strong>
					<?php
						echo $this->item->owneremail != '' ? $this->item->owneremail : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_featured_clicks')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_FEATURED_CLICKS_LABEL'); ?></strong>
					<?php
						echo $this->item->featured_clicks != '' ? $this->item->featured_clicks : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_featured_shows')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_FEATURED_SHOWS_LABEL'); ?></strong>
					<?php
						echo $this->item->featured_shows != '' ? $this->item->featured_shows : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_pixUpdtedDt')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_PIXUPDTEDDT_LABEL'); ?></strong>
					<?php
						echo $this->item->pixUpdtedDt != '' ? $this->item->pixUpdtedDt : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_extra1')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_EXTRA1_LABEL'); ?></strong>
					<?php
						echo $this->item->extra1 != '' ? $this->item->extra1 : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_extra2')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_EXTRA2_LABEL'); ?></strong>
					<?php
						echo $this->item->extra2 != '' ? $this->item->extra2 : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_extra3')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_EXTRA3_LABEL'); ?></strong>
					<?php
						echo $this->item->extra3 != '' ? $this->item->extra3 : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_extra4')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_EXTRA4_LABEL'); ?></strong>
					<?php
						echo $this->item->extra4 != '' ? $this->item->extra4 : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_extra5')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_EXTRA5_LABEL'); ?></strong>
					<?php
						echo $this->item->extra5 != '' ? $this->item->extra5 : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_extra6')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_EXTRA6_LABEL'); ?></strong>
					<?php
						echo $this->item->extra6 != '' ? $this->item->extra6 : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_extra7')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_EXTRA7_LABEL'); ?></strong>
					<?php
						echo $this->item->extra7 != '' ? $this->item->extra7 : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_extra8')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_EXTRA8_LABEL'); ?></strong>
					<?php
						echo $this->item->extra8 != '' ? $this->item->extra8 : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_extra9')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_EXTRA9_LABEL'); ?></strong>
					<?php
						echo $this->item->extra9 != '' ? $this->item->extra9 : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_extra10')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_EXTRA10_LABEL'); ?></strong>
					<?php
						echo $this->item->extra10 != '' ? $this->item->extra10 : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_energy_value')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_ENERGY_VALUE_LABEL'); ?></strong>
					<?php
						echo $this->item->energy_value != '' ? $this->item->energy_value : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_owner_id')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_OWNER_ID_LABEL'); ?></strong>
					<?php
						echo JString::trim($this->item->u_user_name);
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_house_climate_value')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_HOUSES_FIELD_CLIMATE_VALUE_LABEL'); ?></strong>
					<?php
						echo $this->item->climate_value != '' ? $this->item->climate_value : $empty;
					?>
				</dd>
			<?php endif; ?>
		<?php if ($use_fields_list) : ?>		
		</dl>	
		<?php endif; ?>
		<?php
			if ($use_def_list AND $info == 1) :
				echo $this->loadTemplate('info');
			endif;
		?>			
	<?php
		if (!empty($this->item->pagination) AND $this->item->pagination AND $this->item->paginationposition AND $this->item->paginationrelative):
			 echo $this->item->pagination;
		endif;
	?>	
	<?php echo $this->item->event->afterDisplayHouse; ?>
</div>