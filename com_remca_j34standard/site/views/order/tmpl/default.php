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
$this->document->addStyleSheet(JUri::root().'media/com_remca/css/site_orders.css');

if ($lang->isRTL())
{
	$this->document->addStyleSheet(JUri::root().'media/com_remca/css/site_remca-rtl.css');
	$this->document->addStyleSheet(JUri::root().'media/com_remca/css/site_orders-rtl.css');
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
<div class="remca order-view<?php echo $params->get('pageclass_sfx')?>">
	<?php if ($this->params->get('show_page_heading')) : ?>
	<h1>
		<?php echo $this->escape($this->params->get('page_heading')); ?>
	</h1>
	<?php endif; ?>
	<?php if ($params->get('show_order_icons',-1) >= 0) : ?>
		<?php if ($params->get('show_order_print_icon') 
			OR $params->get('show_order_email_icon') 
			): ?>
			<div class="btn-group pull-right">
				<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <span class="icon-cog"></span> <span class="caret"></span> </a>
				<ul class="dropdown-menu">
					<?php if (!$this->print) : ?>
							<?php if ($params->get('show_order_print_icon')) : ?>
								<li class="print-icon">
										<?php echo JHtml::_('ordericon.print_popup',  $this->item, $params); ?>
								</li>
							<?php endif; ?>

							<?php if ($params->get('show_order_email_icon')) : ?>
								<li class="email-icon">
										<?php echo JHtml::_('ordericon.email',  $this->item, $params); ?>
								</li>
							<?php endif; ?>
								<li class="edit-icon">
									<?php echo JHtml::_('ordericon.edit', $this->item, $params); ?>
								</li>
								<li class="delete-icon">
									<?php echo JHtml::_('ordericon.delete',$this->item, $params); ?>
								</li>					
					<?php else : ?>
						<li>
							<?php echo JHtml::_('ordericon.print_screen',  $this->item, $params); ?>
						</li>
					<?php endif; ?>
				</ul>
			</div>
		<?php endif; ?>
	<?php endif; ?>

	<?php if ($params->get('show_order_name')) : ?>
		<div style="float: left;">
			<h2>
				<?php if ($params->get('link_order_names') AND !empty($this->item->readmore_link)) : ?>
					<a href="<?php echo $this->item->readmore_link; ?>">
					<?php echo $this->escape($this->item->name); ?></a>
				<?php else : ?>
					<?php echo $this->escape($this->item->name); ?>
				<?php endif; ?>
			</h2>
		</div>
	<?php endif; ?>
	<?php  echo $this->item->event->afterDisplayOrderName;	?>
	
	<?php echo $this->item->event->beforeDisplayOrder; ?>
	<div style="clear:both; padding-top: 10px;">

	</div>
	<div style="padding-top: 10px;">

			<form action="" name="orderForm" id="orderForm">
			<?php $dummy = false;
					$display_fieldset = (
								($params->get('show_order_id_user')) OR 
								($params->get('show_order_fk_houses_htitle')) OR 
								($params->get('show_order_email')) OR 
								($params->get('show_order_status')) OR 
								($params->get('show_order_order_date')) OR 
								($params->get('show_order_id_house')) OR 
								($params->get('show_order_txn_type')) OR 
								($params->get('show_order_txn_id')) OR 
								($params->get('show_order_payer_id')) OR 
								($params->get('show_order_payer_status')) OR 
								($params->get('show_order_order_calculated_price')) OR 
								($params->get('show_order_order_price')) OR 
								($params->get('show_order_order_currency_code')) OR 
								($params->get('show_order_paypal_paykay')) OR 
								$dummy
								);
			?>
			<?php if ($display_fieldset) : ?>				
				<fieldset>	
					<legend><?php echo JText::_('COM_REMCA_ORDERS_FIELDSET_ORDERS_FS_LABEL'); ?></legend>
			<?php endif; ?>
					<div style="padding-top: 10px;">			
						<?php if ($params->get('show_order_id_user')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_ORDERS_FIELD_ID_USER_LABEL'); ?>
							</label>
							<span>
								<?php
									echo JString::trim($this->item->u_user_name);
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_order_fk_houses_htitle')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_ORDERS_FIELD_FK_HOUSES_HTITLE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->fk_houses_htitle != '' ? $this->item->fk_houses_htitle : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_order_email')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_ORDERS_FIELD_EMAIL_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->email != '' ? $this->item->email : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_order_status')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_ORDERS_FIELD_STATUS_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->status != '' ? $this->item->status : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_order_order_date')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_ORDERS_FIELD_ORDER_DATE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo ($this->item->order_date != '' AND $this->item->order_date != '0000-00-00 00:00:00') ? JHtml::date($this->item->order_date, '%Y-%m-%d', null) : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_order_id_house')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_ORDERS_FIELD_ID_HOUSE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo JString::trim($this->item->h_house_name);
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_order_txn_type')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_ORDERS_FIELD_TXN_TYPE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->txn_type != '' ? $this->item->txn_type : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_order_txn_id')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_ORDERS_FIELD_TXN_ID_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->txn_id != '' ? $this->item->txn_id : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_order_payer_id')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_ORDERS_FIELD_PAYER_ID_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->payer_id != '' ? $this->item->payer_id : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_order_payer_status')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_ORDERS_FIELD_PAYER_STATUS_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->payer_status != '' ? $this->item->payer_status : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_order_order_calculated_price')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_ORDERS_FIELD_ORDER_CALCULATED_PRICE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->order_calculated_price != '' ? $this->item->order_calculated_price : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_order_order_price')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_ORDERS_FIELD_ORDER_PRICE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->order_price != '' ? $this->item->order_price : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_order_order_currency_code')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_ORDERS_FIELD_ORDER_CURRENCY_CODE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->order_currency_code != '' ? $this->item->order_currency_code : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_order_paypal_paykay')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_ORDERS_FIELD_PAYPAL_PAYKAY_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->paypal_paykay != '' ? $this->item->paypal_paykay : $empty;
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
							($params->get('show_order_admin') AND $this->item->params->get('access-change')) OR							
							$dummy
							);
			?>
			<?php if ($display_fieldset) : ?>				
					<fieldset>
						<legend><?php echo JText::_('COM_REMCA_FIELDSET_PUBLISHING_LABEL'); ?></legend>
			<?php endif; ?>
	
				<?php if ($params->get('show_order_admin')) : ?>
				
				<?php endif; ?>
				
			
			<?php if ($display_fieldset) : ?>				
					</fieldset>	
			<?php endif;?>	
			</form>
		<?php echo $this->item->event->afterDisplayOrder; ?>
	</div>		
</div>