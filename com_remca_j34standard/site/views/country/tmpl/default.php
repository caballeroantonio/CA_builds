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
$this->document->addStyleSheet(JUri::root().'media/com_remca/css/site_countries.css');

if ($lang->isRTL())
{
	$this->document->addStyleSheet(JUri::root().'media/com_remca/css/site_remca-rtl.css');
	$this->document->addStyleSheet(JUri::root().'media/com_remca/css/site_countries-rtl.css');
}
				
// Add Javascript behaviors

/*
 *	Initialise values for the layout 
 */	
 
// Create shortcuts to some parameters.
$params		= &$this->item->params;
$user		= JFactory::getUser();

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
<div class="remca country-view<?php echo $params->get('pageclass_sfx')?>">
	<?php if ($this->params->get('show_page_heading')) : ?>
	<h1>
		<?php echo $this->escape($this->params->get('page_heading')); ?>
	</h1>
	<?php endif; ?>
	<?php if ($params->get('show_country_icons',-1) >= 0) : ?>
		<?php if ($params->get('show_country_print_icon') 
			OR $params->get('show_country_email_icon') 
			): ?>
			<div class="btn-group pull-right">
				<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <span class="icon-cog"></span> <span class="caret"></span> </a>
				<ul class="dropdown-menu">
					<?php if (!$this->print) : ?>
							<?php if ($params->get('show_country_print_icon')) : ?>
								<li class="print-icon">
										<?php echo JHtml::_('countryicon.print_popup',  $this->item, $params); ?>
								</li>
							<?php endif; ?>

							<?php if ($params->get('show_country_email_icon')) : ?>
								<li class="email-icon">
										<?php echo JHtml::_('countryicon.email',  $this->item, $params); ?>
								</li>
							<?php endif; ?>
								<li class="edit-icon">
									<?php echo JHtml::_('countryicon.edit', $this->item, $params); ?>
								</li>
								<li class="delete-icon">
									<?php echo JHtml::_('countryicon.delete',$this->item, $params); ?>
								</li>					
					<?php else : ?>
						<li>
							<?php echo JHtml::_('countryicon.print_screen',  $this->item, $params); ?>
						</li>
					<?php endif; ?>
				</ul>
			</div>
		<?php endif; ?>
	<?php endif; ?>

	<?php if ($params->get('show_country_name')) : ?>
		<div style="float: left;">
			<h2>
				<?php if ($params->get('link_country_names') AND !empty($this->item->readmore_link)) : ?>
					<a href="<?php echo $this->item->readmore_link; ?>">
					<?php echo $this->escape($this->item->name); ?></a>
				<?php else : ?>
					<?php echo $this->escape($this->item->name); ?>
				<?php endif; ?>
			</h2>
		</div>
	<?php endif; ?>
	<?php  echo $this->item->event->afterDisplayCountryName;	?>
	
	<?php echo $this->item->event->beforeDisplayCountry; ?>
	<div style="clear:both; padding-top: 10px;">

	</div>
	<div style="padding-top: 10px;">

			<form action="" name="countryForm" id="countryForm">
			<?php $dummy = false;
					$display_fieldset = (
								($params->get('show_country_ordering_cur')) OR 
								($params->get('show_country_published_cur')) OR 
								($params->get('show_country_iso2')) OR 
								($params->get('show_country_iso3')) OR 
								($params->get('show_country_currency')) OR 
								($params->get('show_country_conversion')) OR 
								($params->get('show_country_conversion_date')) OR 
								$dummy
								);
			?>
			<?php if ($display_fieldset) : ?>				
				<fieldset>	
					<legend><?php echo JText::_('COM_REMCA_COUNTRIES_FIELDSET_COUNTRY_FS_LABEL'); ?></legend>
			<?php endif; ?>
					<div style="padding-top: 10px;">			
						<?php if ($params->get('show_country_ordering_cur')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_COUNTRIES_FIELD_ORDERING_CUR_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->ordering_cur != '' ? $this->item->ordering_cur : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_country_published_cur')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_COUNTRIES_FIELD_PUBLISHED_CUR_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->published_cur != '' ? $this->item->published_cur : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_country_iso2')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_COUNTRIES_FIELD_ISO2_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->iso2 != '' ? $this->item->iso2 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_country_iso3')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_COUNTRIES_FIELD_ISO3_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->iso3 != '' ? $this->item->iso3 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_country_currency')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_COUNTRIES_FIELD_CURRENCY_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->currency != '' ? $this->item->currency : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_country_conversion')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_COUNTRIES_FIELD_CONVERSION_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->conversion != '' ? $this->item->conversion : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_country_conversion_date')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_COUNTRIES_FIELD_CONVERSION_DATE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo ($this->item->conversion_date != '' AND $this->item->conversion_date != '0000-00-00 00:00:00') ? JHtml::date($this->item->conversion_date, '%Y-%m-%d', true) : $empty;
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
							($params->get('show_country_admin') AND $this->item->params->get('access-change')) OR							
							$dummy
							);
			?>
			<?php if ($display_fieldset) : ?>				
					<fieldset>
						<legend><?php echo JText::_('COM_REMCA_FIELDSET_PUBLISHING_LABEL'); ?></legend>
			<?php endif; ?>
	
				<?php if ($params->get('show_country_admin')) : ?>
				
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
				
			
			<?php if ($display_fieldset) : ?>				
					</fieldset>	
			<?php endif;?>	
			</form>
		<?php echo $this->item->event->afterDisplayCountry; ?>
	</div>		
</div>