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
$this->document->addStyleSheet(JUri::root().'media/com_remca/css/site_orders_details.css');

if ($lang->isRTL())
{
	$this->document->addStyleSheet(JUri::root().'media/com_remca/css/site_remca-rtl.css');
	$this->document->addStyleSheet(JUri::root().'media/com_remca/css/site_orders_details-rtl.css');
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

$layout		= $this->params->get('ordersdetail_layout', 'default');

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
<div class="remca orders_details-list<?php echo $this->params->get('pageclass_sfx');?>">
	<?php if ($this->params->get('show_page_heading')): ?>
		<div class="page-header">
			<h1><?php echo $this->escape($this->params->get('page_heading')); ?></h1>
		</div>
	<?php endif; ?>

	<?php
		$show_actions = false;
		if ($this->params->get('show_ordersdetail_icons',1) >= 0) :
			foreach ($this->items as $i => $item) :
				if ($item->params->get('access-edit',1) OR $item->params->get('access-delete',1)) :
					$show_actions = true;
					continue;
				endif;
			endforeach;
		endif;
	?>
	<form action="<?php echo htmlspecialchars(JUri::getInstance()->toString()); ?>" method="post" name="adminForm" id="adminForm">
		<?php if (($this->params->get('show_ordersdetail_filter_field') != '' AND $this->params->get('show_ordersdetail_filter_field') != 'hide')) :?>
			<div class="filter-search">
				<?php if ($this->params->get('show_ordersdetail_filter_field') != '' AND $this->params->get('show_ordersdetail_filter_field') != 'hide') :?>
					<input type="text" name="filter_search" id="filter_search" value="<?php echo $this->escape($this->state->get('filter.search')); ?>" onchange="document.adminForm.submit();" title="<?php echo JText::_('COM_REMCA_FILTER_SEARCH_DESC'); ?>" placeholder="<?php echo JText::_('COM_REMCA_'.$this->params->get('show_ordersdetail_filter_field').'_FILTER_LABEL'); ?>" />
				<?php endif; ?>	
			</div>
		<?php endif; ?>

		<?php if ($this->params->get('show_ordersdetail_pagination_limit')) : ?>
			<div class="display-limit">
				<?php echo JText::_('JGLOBAL_DISPLAY_NUM'); ?>&#160;
				<?php echo $this->pagination->getLimitBox(); ?>
			</div>
		<?php endif; ?>	
		<div style="clear:both;"></div>				
		<?php if (empty($this->items)) : ?>

			<?php if ($this->params->get('show_no_orders_details',1)) : ?>
			<p><?php echo JText::_('COM_REMCA_ORDERS_DETAILS_NO_ITEMS'); ?></p>
			<?php endif; ?>

		<?php else : ?>
			<table class="table table-striped" id="orders_details">
			<?php if ($this->params->get('show_ordersdetail_headings')) :?>
			<thead>
				<tr>
					<th width="1%" style="display:none;">
					</th>				
					<th class="list-name" id="tableOrderingname">
					<?php  echo JHtml::_('grid.sort', 'COM_REMCA_HEADING_NAME', 'a.name', $list_dirn, $list_order) ; ?>
					</th>
					<?php if ($date = $this->params->get('list_show_ordersdetail_date')) : ?>
						<th class="list-date" id="tableOrderingdate">
							<?php echo JHtml::_('grid.sort', 'COM_REMCA_FIELD_'.JString::strtoupper($date).'_LABEL', 'a.'.$date, $list_dirn, $list_order); ?>
						</th>
					<?php endif; ?>

						<th width="12%" class="list-actions">
							<?php echo JText::_('COM_REMCA_HEADING_ACTIONS'); ?>						
						</th> 					
				</tr>
			</thead>
			<?php endif; ?>

			<tbody>

				<?php foreach ($this->items as $i => $item) :
				
							
				?>			
					<?php $params = $item->params; ?>		

						<tr class="cat-list-row<?php echo $i % 2; ?>">
					<td class="center" style="display:none;">
						<?php echo JHtml::_('grid.id', $i, $item->id); ?>
					</td>				
					<td class="list-name">
						<a href="<?php echo JRoute::_(RemcaHelperRoute::getOrdersDetailRoute($item->slug, 
																									$layout,									
																									$params->get('keep_ordersdetail_itemid'))); ?>" 
																									>
								<?php echo $this->escape($item->name); ?>
						</a>
					</td>

					<?php if ($this->params->get('list_show_ordersdetail_date')) : ?>
						<td class="list-date">
							<time datetime="<?php echo JHtml::_('date', $item->display_date, 'c'); ?>">
								<?php echo JHtml::_('date',$item->display_date, $this->escape($this->params->get('ordersdetail_date_format', JText::_('DATE_FORMAT_LC3')))); ?>
							</time>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_ordersdetail_fk_order_id',0)) : ?>
						<td class="list-fk_order_id">
							<?php 
								if ($params->get('list_link_ordersdetail_fk_order_id')) :
									echo '<a href="'.JRoute::_(RemcaHelperRoute::getOrderRoute($item->fk_order_id, 0)).'">'.JString::trim($item->o_order_name).'</a>';
								else :
									echo JString::trim($item->o_order_name);
								endif; 
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_ordersdetail_fk_user_id',0)) : ?>
						<td class="list-fk_user_id">
							<?php 
								if ($params->get('list_link_ordersdetail_fk_user_id')) :
									echo '<a href="'.JRoute::_(RemcaHelperRoute::getUserRoute($item->fk_user_id, 0)).'">'.JString::trim($item->u_user_name).'</a>';
								else :
									echo JString::trim($item->u_user_name);
								endif; 
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_ordersdetail_fk_houses_htitle',0)) : ?>
						<td class="list-fk_houses_htitle">
							<?php 
								echo $item->fk_houses_htitle != '' ? $item->fk_houses_htitle : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_ordersdetail_email',0)) : ?>
						<td class="list-email">
							<?php 
								echo $item->email != '' ? $item->email : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_ordersdetail_status',0)) : ?>
						<td class="list-status">
							<?php 
								echo $item->status != '' ? $item->status : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_ordersdetail_order_date',0)) : ?>
						<td class="list-order_date">
							<?php 
								echo ($item->order_date != '' AND $item->order_date != '0000-00-00 00:00:00') ? JHtml::date($item->order_date, '%Y-%m-%d', null) : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_ordersdetail_fk_house_id',0)) : ?>
						<td class="list-fk_house_id">
							<?php 
								if ($params->get('list_link_ordersdetail_fk_house_id')) :
									echo '<a href="'.JRoute::_(RemcaHelperRoute::getHouseRoute($item->fk_house_id, 0)).'">'.JString::trim($item->h_house_name).'</a>';
								else :
									echo JString::trim($item->h_house_name);
								endif; 
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_ordersdetail_txn_type',0)) : ?>
						<td class="list-txn_type">
							<?php 
								echo $item->txn_type != '' ? $item->txn_type : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_ordersdetail_txn_id',0)) : ?>
						<td class="list-txn_id">
							<?php 
								echo $item->txn_id != '' ? $item->txn_id : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_ordersdetail_payer_id',0)) : ?>
						<td class="list-payer_id">
							<?php 
								echo $item->payer_id != '' ? $item->payer_id : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_ordersdetail_payer_status',0)) : ?>
						<td class="list-payer_status">
							<?php 
								echo $item->payer_status != '' ? $item->payer_status : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_ordersdetail_order_calculated_price',0)) : ?>
						<td class="list-order_calculated_price">
							<?php 
								echo $item->order_calculated_price != '' ? $item->order_calculated_price : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_ordersdetail_order_price',0)) : ?>
						<td class="list-order_price">
							<?php 
								echo $item->order_price != '' ? $item->order_price : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_ordersdetail_order_currency_code',0)) : ?>
						<td class="list-order_currency_code">
							<?php 
								echo $item->order_currency_code != '' ? $item->order_currency_code : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_ordersdetail_payment_details',0)) : ?>
						<td class="list-payment_details">
							<?php 
								echo $item->payment_details != '' ? $item->payment_details : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_ordersdetail_paypal_paykay',0)) : ?>
						<td class="list-paypal_paykay">
							<?php 
								echo $item->paypal_paykay != '' ? $item->paypal_paykay : $empty;
							?>
						</td>
					<?php endif; ?>
						<td class="list-actions">
								<ul class="actions">
										<li class="edit-icon">
											<?php echo JHtml::_('ordersdetailicon.edit',$item, $params); ?>
										</li>
										<li class="delete-icon">
											<?php echo JHtml::_('ordersdetailicon.delete',$item, $params); ?>
										</li>
								</ul>
						</td>															
				</tr>
			<?php endforeach; ?>
			</tbody>
			</table>
<!--begin pagination-->
			<?php if (($this->params->def('show_ordersdetail_pagination', 2) == 1  OR ($this->params->get('show_ordersdetail_pagination') == 2)) AND ($this->pagination->get('pages.total') > 1)) : ?>
			<div class="pagination">

				<?php if ($this->params->def('show_ordersdetail_pagination_results', 0)) : ?>
				<p class="counter">
						<?php echo $this->pagination->getPagesCounter(); ?>
				</p>
				<?php endif; ?>

				<?php echo $this->pagination->getPagesLinks(); ?>
			</div>
			<?php endif; ?>
<!--end pagination-->
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
		<?php // Code to add a link to submit an ordersdetail. ?>
		<?php if ($this->params->get('show_ordersdetail_add_link', 1)) : ?>
			<?php echo JHtml::_('ordersdetailicon.create', $this->params); ?>
		<?php endif; ?>		
                <?php echo '<button>export</button>'//JHtml::_('ordersdetailicon.create', $this->params); ?>
	</form>
</div>