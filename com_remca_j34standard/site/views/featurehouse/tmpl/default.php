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
$this->document->addStyleSheet(JUri::root().'media/com_remca/css/site_feature_houses.css');

if ($lang->isRTL())
{
	$this->document->addStyleSheet(JUri::root().'media/com_remca/css/site_remca-rtl.css');
	$this->document->addStyleSheet(JUri::root().'media/com_remca/css/site_feature_houses-rtl.css');
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
<div class="remca featurehouse-view<?php echo $params->get('pageclass_sfx')?>">
	<?php if ($this->params->get('show_page_heading')) : ?>
	<h1>
		<?php echo $this->escape($this->params->get('page_heading')); ?>
	</h1>
	<?php endif; ?>
	<?php if ($params->get('show_featurehouse_icons',-1) >= 0) : ?>
		<?php if ($params->get('show_featurehouse_print_icon') 
			OR $params->get('show_featurehouse_email_icon') 
			): ?>
			<div class="btn-group pull-right">
				<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <span class="icon-cog"></span> <span class="caret"></span> </a>
				<ul class="dropdown-menu">
					<?php if (!$this->print) : ?>
							<?php if ($params->get('show_featurehouse_print_icon')) : ?>
								<li class="print-icon">
										<?php echo JHtml::_('featurehouseicon.print_popup',  $this->item, $params); ?>
								</li>
							<?php endif; ?>

							<?php if ($params->get('show_featurehouse_email_icon')) : ?>
								<li class="email-icon">
										<?php echo JHtml::_('featurehouseicon.email',  $this->item, $params); ?>
								</li>
							<?php endif; ?>
								<li class="edit-icon">
									<?php echo JHtml::_('featurehouseicon.edit', $this->item, $params); ?>
								</li>
								<li class="delete-icon">
									<?php echo JHtml::_('featurehouseicon.delete',$this->item, $params); ?>
								</li>					
					<?php else : ?>
						<li>
							<?php echo JHtml::_('featurehouseicon.print_screen',  $this->item, $params); ?>
						</li>
					<?php endif; ?>
				</ul>
			</div>
		<?php endif; ?>
	<?php endif; ?>

	
	<?php echo $this->item->event->beforeDisplayFeatureHouse; ?>
	<div style="clear:both; padding-top: 10px;">

	</div>
	<div style="padding-top: 10px;">

			<form action="" name="featurehouseForm" id="featurehouseForm">
			<?php $dummy = false;
					$display_fieldset = (
								($params->get('show_featurehouse_fk_houseid')) OR 
								($params->get('show_featurehouse_fk_featureid')) OR 
								$dummy
								);
			?>
			<?php if ($display_fieldset) : ?>				
				<fieldset>	
					<legend><?php echo JText::_('COM_REMCA_FEATURE_HOUSES_FIELDSET_JOS_REM_FEATURE_HOUSES_FS_LABEL'); ?></legend>
			<?php endif; ?>
					<div style="padding-top: 10px;">			
						<?php if ($params->get('show_featurehouse_fk_houseid')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_FEATURE_HOUSES_FIELD_FK_HOUSEID_LABEL'); ?>
							</label>
							<span>
								<?php
									echo JString::trim($this->item->h_house_name);
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_featurehouse_fk_featureid')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_FEATURE_HOUSES_FIELD_FK_FEATUREID_LABEL'); ?>
							</label>
							<span>
								<?php
									echo JString::trim($this->item->f_feature_name);
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
							($params->get('show_featurehouse_admin') AND $this->item->params->get('access-change')) OR							
							$dummy
							);
			?>
			<?php if ($display_fieldset) : ?>				
					<fieldset>
						<legend><?php echo JText::_('COM_REMCA_FIELDSET_PUBLISHING_LABEL'); ?></legend>
			<?php endif; ?>
	
				<?php if ($params->get('show_featurehouse_admin')) : ?>
				
				<?php endif; ?>
				
			
			<?php if ($display_fieldset) : ?>				
					</fieldset>	
			<?php endif;?>	
			</form>
		<?php echo $this->item->event->afterDisplayFeatureHouse; ?>
	</div>		
</div>