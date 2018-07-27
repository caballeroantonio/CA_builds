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
$this->document->addStyleSheet(JUri::root().'media/com_remca/css/site_rent_requests.css');

if ($lang->isRTL())
{
	$this->document->addStyleSheet(JUri::root().'media/com_remca/css/site_remca-rtl.css');
	$this->document->addStyleSheet(JUri::root().'media/com_remca/css/site_rent_requests-rtl.css');
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
<div class="remca rentrequest-view<?php echo $params->get('pageclass_sfx')?>">
	<?php if ($this->params->get('show_page_heading')) : ?>
	<h1>
		<?php echo $this->escape($this->params->get('page_heading')); ?>
	</h1>
	<?php endif; ?>
	<?php if ($params->get('show_rentrequest_icons',-1) >= 0) : ?>
		<?php if ($params->get('show_rentrequest_print_icon') 
			OR $params->get('show_rentrequest_email_icon') 
			): ?>
			<div class="btn-group pull-right">
				<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <span class="icon-cog"></span> <span class="caret"></span> </a>
				<ul class="dropdown-menu">
					<?php if (!$this->print) : ?>
							<?php if ($params->get('show_rentrequest_print_icon')) : ?>
								<li class="print-icon">
										<?php echo JHtml::_('rentrequesticon.print_popup',  $this->item, $params); ?>
								</li>
							<?php endif; ?>

							<?php if ($params->get('show_rentrequest_email_icon')) : ?>
								<li class="email-icon">
										<?php echo JHtml::_('rentrequesticon.email',  $this->item, $params); ?>
								</li>
							<?php endif; ?>
								<li class="edit-icon">
									<?php echo JHtml::_('rentrequesticon.edit', $this->item, $params); ?>
								</li>
								<li class="delete-icon">
									<?php echo JHtml::_('rentrequesticon.delete',$this->item, $params); ?>
								</li>					
					<?php else : ?>
						<li>
							<?php echo JHtml::_('rentrequesticon.print_screen',  $this->item, $params); ?>
						</li>
					<?php endif; ?>
				</ul>
			</div>
		<?php endif; ?>
	<?php endif; ?>

	
	<?php echo $this->item->event->beforeDisplayRentRequest; ?>
	<div style="clear:both; padding-top: 10px;">

	</div>
	<div style="padding-top: 10px;">

			<form action="" name="rentrequestForm" id="rentrequestForm">
			<?php $dummy = false;
					$display_fieldset = (
								($params->get('show_rentrequest_id_house')) OR 
								($params->get('show_rentrequest_id_user')) OR 
								($params->get('show_rentrequest_rent_from')) OR 
								($params->get('show_rentrequest_rent_until')) OR 
								($params->get('show_rentrequest_rent_request')) OR 
								($params->get('show_rentrequest_user_name')) OR 
								($params->get('show_rentrequest_user_email')) OR 
								($params->get('show_rentrequest_user_mailing')) OR 
								($params->get('show_rentrequest_status')) OR 
								$dummy
								);
			?>
			<?php if ($display_fieldset) : ?>				
				<fieldset>	
					<legend><?php echo JText::_('COM_REMCA_RENT_REQUESTS_FIELDSET_RENT_REQUEST_FS_LABEL'); ?></legend>
			<?php endif; ?>
					<div style="padding-top: 10px;">			
						<?php if ($params->get('show_rentrequest_id_house')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_RENT_REQUESTS_FIELD_ID_HOUSE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo JString::trim($this->item->i_house_name);
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_rentrequest_id_user')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_RENT_REQUESTS_FIELD_ID_USER_LABEL'); ?>
							</label>
							<span>
								<?php
									echo JString::trim($this->item->u_user_name);
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_rentrequest_rent_from')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_RENT_REQUESTS_FIELD_RENT_FROM_LABEL'); ?>
							</label>
							<span>
								<?php
									echo ($this->item->rent_from != '' AND $this->item->rent_from != '0000-00-00 00:00:00') ? JHtml::date($this->item->rent_from, '%Y-%m-%d', null) : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_rentrequest_rent_until')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_RENT_REQUESTS_FIELD_RENT_UNTIL_LABEL'); ?>
							</label>
							<span>
								<?php
									echo ($this->item->rent_until != '' AND $this->item->rent_until != '0000-00-00 00:00:00') ? JHtml::date($this->item->rent_until, '%Y-%m-%d', null) : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_rentrequest_rent_request')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_RENT_REQUESTS_FIELD_RENT_REQUEST_LABEL'); ?>
							</label>
							<span>
								<?php
									echo ($this->item->rent_request != '' AND $this->item->rent_request != '0000-00-00 00:00:00') ? JHtml::date($this->item->rent_request, '%Y-%m-%d', null) : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_rentrequest_user_name')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_RENT_REQUESTS_FIELD_USER_NAME_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->user_name != '' ? $this->item->user_name : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_rentrequest_user_email')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_RENT_REQUESTS_FIELD_USER_EMAIL_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->user_email != '' ? $this->item->user_email : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_rentrequest_user_mailing')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_RENT_REQUESTS_FIELD_USER_MAILING_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->user_mailing != '' ? $this->item->user_mailing : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_rentrequest_status')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_RENT_REQUESTS_FIELD_STATUS_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->status != '' ? $this->item->status : $empty;
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
							($params->get('show_rentrequest_admin') AND $this->item->params->get('access-change')) OR							
							$dummy
							);
			?>
			<?php if ($display_fieldset) : ?>				
					<fieldset>
						<legend><?php echo JText::_('COM_REMCA_FIELDSET_PUBLISHING_LABEL'); ?></legend>
			<?php endif; ?>
	
				<?php if ($params->get('show_rentrequest_admin')) : ?>
				
				<?php endif; ?>
				
			
			<?php if ($display_fieldset) : ?>				
					</fieldset>	
			<?php endif;?>	
			</form>
		<?php echo $this->item->event->afterDisplayRentRequest; ?>
	</div>		
</div>