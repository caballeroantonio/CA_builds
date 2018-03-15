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
 * @CAversion		Id: default.php 571 2016-01-04 15:03:02Z BrianWade $
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
JHtml::_('behavior.caption');

/*
 *	Initialise values for the layout 
 */	
 
// Create shortcuts to some parameters.
$params		= &$this->item->params;
$user		= JFactory::getUser();

$can_edit	= $params->get('access-edit');
$can_delete	= $params->get('access-delete');
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
<div class="remca house-view<?php echo $params->get('pageclass_sfx')?>">
	<?php if ($this->params->get('show_page_heading')) : ?>
	<h1>
		<?php echo $this->escape($this->params->get('page_heading')); ?>
	</h1>
	<?php endif; ?>
	<?php
		if (!empty($this->item->pagination) AND $this->item->pagination AND !$this->item->paginationposition AND $this->item->paginationrelative):
			 echo $this->item->pagination;
		endif;
	?>	
	<?php if ($params->get('show_house_icons',-1) >= 0) : ?>
		<?php if ($params->get('show_house_print_icon') 
			OR $params->get('show_house_email_icon') 
			OR $can_edit 
			OR $can_delete 
			): ?>
			<div class="btn-group pull-right">
				<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <span class="icon-cog"></span> <span class="caret"></span> </a>
				<ul class="dropdown-menu">
					<?php if (!$this->print) : ?>
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
					<?php else : ?>
						<li>
							<?php echo JHtml::_('houseicon.print_screen',  $this->item, $params); ?>
						</li>
					<?php endif; ?>
				</ul>
			</div>
		<?php endif; ?>
	<?php endif; ?>

	<?php if ($params->get('show_house_name')) : ?>
		<div style="float: left;">
			<h2>
				<?php if ($params->get('link_house_names') AND !empty($this->item->readmore_link)) : ?>
					<a href="<?php echo $this->item->readmore_link; ?>">
					<?php echo $this->escape($this->item->name); ?></a>
				<?php else : ?>
					<?php echo $this->escape($this->item->name); ?>
				<?php endif; ?>
			</h2>
		</div>
	<?php endif; ?>
	<?php  echo $this->item->event->afterDisplayHouseName;	?>
	
	<?php echo $this->item->event->beforeDisplayHouse; ?>
	<?php $images = $this->item->images; ?>
	
	<?php if ($params->get('show_house_hits') != '0' OR 
		($params->get('show_house_image', '0') == '1' AND isset($images['image_url']) AND $images['image_url'] != '')): ?>	
			<div class="pull-<?php echo htmlspecialchars($params->get('show_house_image_float','right')); ?>">
			<?php if ($params->get('show_house_image') == '1' AND isset($images['image_url']) AND $images['image_url'] != '') : ?>
			
					<?php 
						$image = $images['image_url'];
						
						list($img_width, $img_height) = getimagesize($image);
						
						$display_width = (int) $params->get('show_house_intro_image_width','100');
						$display_height = (int) $params->get('show_house_intro_image_height','0');
						
						if ($display_width > $img_width) :
							if ($display_height < $img_height AND $display_height > 0) :
								$display_width = 0;
							endif;
						else :
							$display_height = 0;
						endif;	
					?>
					<img src="<?php echo $image; ?>"
						<?php if ($display_width > 0) : ?>
							<?php echo 'width="'.$display_width.'"'; ?>"
						<?php endif; ?>	
						<?php if ($display_height > 0) : ?>
							<?php echo 'height="'.$display_height.'"'; ?>
						<?php endif; ?>	
						<?php if ($images['image_caption']): ?>
							<?php echo 'class="caption"'.' title="' .htmlspecialchars($images['image_caption']) . '"'; ?>
						<?php endif; ?>							
						<?php echo  $images['image_alt_text'] != '' ?'alt="'.$this->escape($images['image_alt_text']).'"':'alt="'.$this->escape($this->item->name).'"';?>
					/>
			<?php endif; ?>			 
			<?php if ($params->get('show_house_hits')) : ?>
				<?php echo '<br />'.JText::sprintf('COM_REMCA_HITS', $this->item->hits); ?>
			<?php endif; ?>	
		</div>
	<?php endif; ?>	
	<div style="clear:both; padding-top: 10px;">

		<?php 
			if (isset ($this->item->toc)) : 
				echo $this->item->toc; 
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
					if (!empty($this->item->pagination) AND $this->item->pagination AND $this->item->paginationposition AND !$this->item->paginationrelative):
						echo $this->item->pagination;
					endif;
				?>		
	</div>
	<div style="padding-top: 10px;">

			<form action="" name="houseForm" id="houseForm">
			<?php $dummy = false;
					$display_fieldset = (
								($params->get('show_house_id_country')) OR 
								($params->get('show_house_id_lstate')) OR 
								($params->get('show_house_id_lmunicipality')) OR 
								($params->get('show_house_sid')) OR 
								($params->get('show_house_id_rent')) OR 
								($params->get('show_house_associate_house')) OR 
								($params->get('show_house_houseid')) OR 
								($params->get('show_house_link')) OR 
								($params->get('show_house_listing_type')) OR 
								($params->get('show_house_price')) OR 
								($params->get('show_house_id_currency')) OR 
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
								($params->get('show_house_owner_id')) OR 
								($params->get('show_house_energy_value')) OR 
								($params->get('show_house_climate_value')) OR 
								$dummy
								);
			?>
			<?php if ($display_fieldset) : ?>				
				<fieldset>	
					<legend><?php echo JText::_('COM_REMCA_HOUSES_FIELDSET_HOUSES_FS_LABEL'); ?></legend>
			<?php endif; ?>
					<div style="padding-top: 10px;">			
						<?php if ($params->get('show_house_id_country')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_ID_COUNTRY_LABEL'); ?>
							</label>
							<span>
								<?php
									echo JString::trim($this->item->c1_country_name);
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_id_lstate')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_ID_LSTATE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo JString::trim($this->item->s_lstate_name);
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_id_lmunicipality')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_ID_LMUNICIPALITY_LABEL'); ?>
							</label>
							<span>
								<?php
									echo JString::trim($this->item->m_lmunicipality_name);
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_sid')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_SID_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->sid != '' ? $this->item->sid : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_id_rent')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_ID_RENT_LABEL'); ?>
							</label>
							<span>
								<?php
									echo JString::trim($this->item->r_rent_name);
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_associate_house')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_ASSOCIATE_HOUSE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->associate_house != '' ? $this->item->associate_house : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_houseid')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_HOUSEID_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->houseid != '' ? $this->item->houseid : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_link')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_LINK_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->link != '' ? $this->item->link : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_listing_type')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_LISTING_TYPE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->listing_type != '' ? $this->item->listing_type : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_price')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_PRICE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->price != '' ? $this->item->price : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_id_currency')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_ID_CURRENCY_LABEL'); ?>
							</label>
							<span>
								<?php
									if (is_array($this->item->id_currency)) :
									if (count($this->item->id_currency) > 0) : 
										echo '<div class="sql">';
										foreach ($this->item->id_currency as $id_currency) :
											echo '<p>'.$id_currency['value'].'</p>';
										endforeach;
										echo '</div>';
									else :
										echo $empty;
									endif;
								else :;
									echo $this->item->id_currency != '' ? $this->item->id_currency : $empty;
								endif;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_hcountry')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_HCOUNTRY_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->hcountry != '' ? $this->item->hcountry : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_hregion')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_HREGION_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->hregion != '' ? $this->item->hregion : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_hcity')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_HCITY_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->hcity != '' ? $this->item->hcity : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_hzipcode')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_HZIPCODE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->hzipcode != '' ? $this->item->hzipcode : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_hlocation')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_HLOCATION_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->hlocation != '' ? $this->item->hlocation : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_hlatitude')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_HLATITUDE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->hlatitude != '' ? $this->item->hlatitude : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_hlongitude')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_HLONGITUDE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->hlongitude != '' ? $this->item->hlongitude : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_map_zoom')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_MAP_ZOOM_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->map_zoom != '' ? $this->item->map_zoom : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_rooms')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_ROOMS_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->rooms != '' ? $this->item->rooms : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_bathrooms')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_BATHROOMS_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->bathrooms != '' ? $this->item->bathrooms : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_bedrooms')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_BEDROOMS_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->bedrooms != '' ? $this->item->bedrooms : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_contacts')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_CONTACTS_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->contacts != '' ? $this->item->contacts : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_image_link')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_IMAGE_LINK_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->image_link != '' ? $this->item->image_link : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_listing_status')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_LISTING_STATUS_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->listing_status != '' ? $this->item->listing_status : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_property_type')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_PROPERTY_TYPE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->property_type != '' ? $this->item->property_type : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_year')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_YEAR_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->year != '' ? $this->item->year : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_agent')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_AGENT_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->agent != '' ? $this->item->agent : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_area_unit')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_AREA_UNIT_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->area_unit != '' ? $this->item->area_unit : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_land_area')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_LAND_AREA_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->land_area != '' ? $this->item->land_area : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_land_area_unit')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_LAND_AREA_UNIT_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->land_area_unit != '' ? $this->item->land_area_unit : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_expiration_date')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_EXPIRATION_DATE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo ($this->item->expiration_date != '' AND $this->item->expiration_date != '0000-00-00 00:00:00') ? JHtml::date($this->item->expiration_date, '%Y-%m-%d', null) : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_lot_size')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_LOT_SIZE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->lot_size != '' ? $this->item->lot_size : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_house_size')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_HOUSE_SIZE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->house_size != '' ? $this->item->house_size : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_garages')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_GARAGES_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->garages != '' ? $this->item->garages : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_date')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_DATE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo ($this->item->date != '' AND $this->item->date != '0000-00-00 00:00:00') ? JHtml::date($this->item->date, '%Y-%m-%d', null) : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_edok_link')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_EDOK_LINK_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->edok_link != '' ? $this->item->edok_link : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_owneremail')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_OWNEREMAIL_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->owneremail != '' ? $this->item->owneremail : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_featured_clicks')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_FEATURED_CLICKS_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->featured_clicks != '' ? $this->item->featured_clicks : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_featured_shows')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_FEATURED_SHOWS_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->featured_shows != '' ? $this->item->featured_shows : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_pixUpdtedDt')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_PIXUPDTEDDT_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->pixUpdtedDt != '' ? $this->item->pixUpdtedDt : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_extra1')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_EXTRA1_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->extra1 != '' ? $this->item->extra1 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_extra2')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_EXTRA2_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->extra2 != '' ? $this->item->extra2 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_extra3')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_EXTRA3_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->extra3 != '' ? $this->item->extra3 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_extra4')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_EXTRA4_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->extra4 != '' ? $this->item->extra4 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_extra5')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_EXTRA5_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->extra5 != '' ? $this->item->extra5 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_extra6')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_EXTRA6_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->extra6 != '' ? $this->item->extra6 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_extra7')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_EXTRA7_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->extra7 != '' ? $this->item->extra7 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_extra8')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_EXTRA8_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->extra8 != '' ? $this->item->extra8 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_extra9')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_EXTRA9_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->extra9 != '' ? $this->item->extra9 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_extra10')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_EXTRA10_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->extra10 != '' ? $this->item->extra10 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_owner_id')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_OWNER_ID_LABEL'); ?>
							</label>
							<span>
								<?php
									echo JString::trim($this->item->u_user_name);
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_energy_value')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_ENERGY_VALUE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->energy_value != '' ? $this->item->energy_value : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_house_climate_value')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_HOUSES_FIELD_CLIMATE_VALUE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->climate_value != '' ? $this->item->climate_value : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
					</div>
			<?php if ($display_fieldset) : ?>				
				</fieldset>	
			<?php endif;?>	
			<?php
				$dummy = false;
		$display_fieldset = (
							($params->get('show_house_category')) OR 
							($params->get('show_house_parent_category') AND $this->item->parent_slug != '1:root') OR
							($params->get('show_house_admin') AND $this->item->params->get('access-change')) OR							
							$dummy
							);
			?>
			<?php if ($display_fieldset) : ?>				
					<fieldset>
						<legend><?php echo JText::_('COM_REMCA_FIELDSET_PUBLISHING_LABEL'); ?></legend>
			<?php endif; ?>
	
			<?php if ($params->get('show_house_parent_category') AND $this->item->parent_slug != '1:root') : ?>
				<?php $title = $this->escape($this->item->parent_title); ?>				
				<div class="formelm">
					<label>
						<?php echo JText::_('COM_REMCA_FIELD_PARENT_CATEGORY_LABEL'); ?>
					</label>
					<span>
						<?php if ($params->get('link_house_parent_category') AND $this->item->parent_slug) : ?>
							<?php $url = '<a href="'.JRoute::_(RemcaHelperRoute::getCategoryRoute($this->item->parent_slug, $params->get('keep_house_itemid'))).'">'.$title.'</a>'; ?>
							<?php echo $url; ?>
						<?php else : ?>
							<?php echo $title; ?>
						<?php endif; ?>
					</span>
				</div>
			<?php endif;?>	
			<?php if ($params->get('show_house_category')) : ?>
				<?php $title = $this->escape($this->item->category_title); ?>
				<div class="formelm">				
					<label>
						<?php echo JText::_('COM_REMCA_FIELD_CATEGORY_LABEL'); ?>
					</label>
					<span>
						<?php if ($params->get('link_house_category') AND $this->item->catslug) : ?>
							<?php $url = '<a href="'.JRoute::_(RemcaHelperRoute::getCategoryRoute($this->item->catslug, $params->get('keep_house_itemid'))).'">'.$title.'</a>'; ?>
							<?php echo $url; ?>
						<?php else : ?>
							<?php echo $title; ?>
						<?php endif; ?>	
					</span>
				</div>								
			<?php endif; ?>						
			<?php if ($params->get('access-change')): ?>
				<?php if ($params->get('show_house_admin')) : ?>
				
					<div class="formelm">
						<label>
						<?php echo JText::_('COM_REMCA_FIELD_STATUS_LABEL'); ?>
						</label>
						<span>
							<?php 
								switch ($this->item->state) :
									case '1':
										echo JText::_('JPUBLISHED');
										break;
									case '0':
										echo JText::_('JUNPUBLISHED');
										break;
									case '2':
										echo JText::_('JARCHIVED');
										break;
									case '-2':
										echo JText::_('JTRASH');
										break;
								endswitch;
							?>
						</span>	
					</div>
					<div class="formelm">
						<label>
							<?php echo JText::_('JFIELD_ORDERING_LABEL'); ?>
						</label>
						<span>
							<?php echo $this->item->ordering; ?>
						</span>
					</div>	
				<?php endif; ?>
				
			<?php endif; ?>
			
			<?php if ($display_fieldset) : ?>				
					</fieldset>	
			<?php endif;?>	
			</form>
		<?php
			if (!empty($this->item->pagination) AND $this->item->pagination AND $this->item->paginationposition AND $this->item->paginationrelative):
				 echo $this->item->pagination;
			endif;
		?>	
		<?php echo $this->item->event->afterDisplayHouse; ?>
	</div>		
</div>