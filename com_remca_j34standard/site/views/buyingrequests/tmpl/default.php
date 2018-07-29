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
$this->document->addStyleSheet(JUri::root().'media/com_remca/css/site_buying_requests.css');

if ($lang->isRTL())
{
	$this->document->addStyleSheet(JUri::root().'media/com_remca/css/site_remca-rtl.css');
	$this->document->addStyleSheet(JUri::root().'media/com_remca/css/site_buying_requests-rtl.css');
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

$layout		= $this->params->get('buyingrequest_layout', 'default');

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
<div class="remca buying_requests-list<?php echo $this->params->get('pageclass_sfx');?>">
	<?php if ($this->params->get('show_page_heading')): ?>
		<div class="page-header">
			<h1><?php echo $this->escape($this->params->get('page_heading')); ?></h1>
		</div>
	<?php endif; ?>

	<?php
		$can_edit = 0;$can_delete = 0;
		$show_actions = false;
		if ($this->params->get('show_buyingrequest_icons',1) >= 0) :
			foreach ($this->items as $i => $item) :
				if ($item->params->get('access-edit',1) OR $item->params->get('access-delete',1)) :
					$show_actions = true;
					continue;
				endif;
			endforeach;
		endif;
	?>
	<form action="<?php echo htmlspecialchars(JUri::getInstance()->toString()); ?>" method="post" name="adminForm" id="adminForm">
		<?php if (($this->params->get('show_buyingrequest_filter_field') != '' AND $this->params->get('show_buyingrequest_filter_field') != 'hide')) :?>
			<div class="filter-search">
				<?php if ($this->params->get('show_buyingrequest_filter_field') != '' AND $this->params->get('show_buyingrequest_filter_field') != 'hide') :?>
                <div class="input-append">
					<input type="text" name="filter_search" id="filter_search" value="<?php echo $this->escape($this->state->get('filter.search')); ?>" onchange="document.adminForm.submit();" title="<?php echo JText::_('COM_REMCA_FILTER_SEARCH_DESC'); ?>" placeholder="<?php echo JText::_('COM_REMCA_'.$this->params->get('show_buyingrequest_filter_field').'_FILTER_LABEL'); ?>" />
                    <button type="submit" class="btn hasTooltip" title="" data-original-title="<?= JText::_('JSEARCH_FILTER_SUBMIT') ?>"> <i class="icon-search"></i> </button>
				</div>
                <!--<button type="button" class="btn hasTooltip js-stools-btn-clear" title="" data-original-title="<?= JText::_('JSEARCH_FILTER_CLEAR') ?>"><?= JText::_('JSEARCH_FILTER_CLEAR') ?></button>-->
				<?php endif; ?>	
			</div>
		<?php endif; ?>

		<?php if ($this->params->get('show_buyingrequest_pagination_limit')) : ?>
			<div class="display-limit">
				<?php echo JText::_('JGLOBAL_DISPLAY_NUM'); ?>&#160;
				<?php echo $this->pagination->getLimitBox(); ?>
			</div>
		<?php endif; ?>	
		<div style="clear:both;"></div>				
		<?php if (empty($this->items)) : ?>

			<?php if ($this->params->get('show_no_buying_requests',1)) : ?>
			<p><?php echo JText::_('COM_REMCA_BUYING_REQUESTS_NO_ITEMS'); ?></p>
			<?php endif; ?>

		<?php else : ?>
		<div style="overflow-x:auto;">
			<table class="table table-striped" id="buying_requests" style="margin-bottom: 200px;">
			<?php if ($this->params->get('show_buyingrequest_headings',1)) :?>
			<thead>
				<tr>
					<th width="1%" style="display:none;">
					</th>				
					<?php if ($date = $this->params->get('list_show_buyingrequest_date')) : ?>
						<th class="list-date" id="tableOrderingdate">
							<?php echo JHtml::_('grid.sort', 'COM_REMCA_FIELD_'.JString::strtoupper($date).'_LABEL', 'a.'.$date, $list_dirn, $list_order); ?>
						</th>
					<?php endif; ?>

					<?php if ($this->params->get('list_show_buyingrequest_id_house',1)) : ?>
						<th class="list-id_house" id="tableOrderingid_house">
							<?php echo JTEXT::_('COM_REMCA_BUYING_REQUESTS_HEADING_ID_HOUSE'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_buyingrequest_id_user',1)) : ?>
						<th class="list-id_user" id="tableOrderingid_user">
							<?php echo JTEXT::_('COM_REMCA_BUYING_REQUESTS_HEADING_ID_USER'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_buyingrequest_buying_request',1)) : ?>
						<th class="list-buying_request" id="tableOrderingbuying_request">
							<?php echo JTEXT::_('COM_REMCA_BUYING_REQUESTS_HEADING_BUYING_REQUEST'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_buyingrequest_customer_name',1)) : ?>
						<th class="list-customer_name" id="tableOrderingcustomer_name">
							<?php echo JTEXT::_('COM_REMCA_BUYING_REQUESTS_HEADING_CUSTOMER_NAME'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_buyingrequest_customer_email',1)) : ?>
						<th class="list-customer_email" id="tableOrderingcustomer_email">
							<?php echo JTEXT::_('COM_REMCA_BUYING_REQUESTS_HEADING_CUSTOMER_EMAIL'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_buyingrequest_customer_phone',1)) : ?>
						<th class="list-customer_phone" id="tableOrderingcustomer_phone">
							<?php echo JTEXT::_('COM_REMCA_BUYING_REQUESTS_HEADING_CUSTOMER_PHONE'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_buyingrequest_customer_comment',1)) : ?>
						<th class="list-customer_comment" id="tableOrderingcustomer_comment">
							<?php echo JTEXT::_('COM_REMCA_BUYING_REQUESTS_HEADING_CUSTOMER_COMMENT'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_buyingrequest_status',1)) : ?>
						<th class="list-status" id="tableOrderingstatus">
							<?php echo JTEXT::_('COM_REMCA_BUYING_REQUESTS_HEADING_STATUS'); ?>
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
				
							
				?>			
					<?php $params = $item->params; ?>		

						<tr class="cat-list-row<?php echo $i % 2; ?>">
					<td class="center" style="display:none;">
						<?php echo JHtml::_('grid.id', $i, $item->id); ?>
					</td>				

					<?php if ($this->params->get('list_show_buyingrequest_date')) : ?>
						<td class="list-date">
							<time datetime="<?php echo JHtml::_('date', $item->display_date, 'c'); ?>">
								<?php echo JHtml::_('date',$item->display_date, $this->escape($this->params->get('buyingrequest_date_format', JText::_('DATE_FORMAT_LC3')))); ?>
							</time>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_buyingrequest_id_house',1)) : ?>
						<td class="list-id_house">
							<?php 
								if ($params->get('list_link_buyingrequest_id_house')) :
									echo '<a href="'.JRoute::_(RemcaHelperRoute::getHouseRoute($item->id_house, 0)).'">'.JString::trim($item->i_house_name).'</a>';
								else :
									echo JString::trim($item->i_house_name);
								endif; 
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_buyingrequest_id_user',1)) : ?>
						<td class="list-id_user">
							<?php 
								if ($params->get('list_link_buyingrequest_id_user')) :
									echo '<a href="'.JRoute::_(RemcaHelperRoute::getUserRoute($item->id_user, 0)).'">'.JString::trim($item->u_user_name).'</a>';
								else :
									echo JString::trim($item->u_user_name);
								endif; 
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_buyingrequest_buying_request',1)) : ?>
						<td class="list-buying_request">
							<?php 
								echo ($item->buying_request != '' AND $item->buying_request != '0000-00-00 00:00:00') ? JHtml::date($item->buying_request, '%Y-%m-%d', null) : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_buyingrequest_customer_name',1)) : ?>
						<td class="list-customer_name">
							<?php 
								echo $item->customer_name != '' ? $item->customer_name : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_buyingrequest_customer_email',1)) : ?>
						<td class="list-customer_email">
							<?php 
								echo $item->customer_email != '' ? $item->customer_email : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_buyingrequest_customer_phone',1)) : ?>
						<td class="list-customer_phone">
							<?php 
								echo $item->customer_phone != '' ? $item->customer_phone : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_buyingrequest_customer_comment',1)) : ?>
						<td class="list-customer_comment">
							<?php 
								echo $item->customer_comment != '' ? $item->customer_comment : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_buyingrequest_status',1)) : ?>
						<td class="list-status">
							<?php 
								echo $item->status != '' ? $item->status : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($show_actions) : ?>
						<td class="list-actions">
                        	<div class="btn-group pull-right">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <span class="icon-cog"></span> <span class="caret"></span> </a>
                                <ul class="dropdown-menu">
							<?php if ($params->get('show_buyingrequest_print_icon')) : ?>
								<li class="print-icon">
										<?php echo JHtml::_('buyingrequesticon.print_popup',  $item, $params); ?>
								</li>
							<?php endif; ?>

							<?php if ($params->get('show_buyingrequest_email_icon')) : ?>
								<li class="email-icon">
										<?php echo JHtml::_('buyingrequesticon.email',  $item, $params); ?>
								</li>
							<?php endif; ?>
							<?php if ($can_edit AND $params->get('save_history') AND $params->get('buyingrequest_save_history')) : ?>
								<li class="version-icon">
									<?php echo JHtml::_('buyingrequesticon.versions',$item, $params); ?>
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
			<?php if (($this->params->def('show_buyingrequest_pagination', 2) == 1  OR ($this->params->get('show_buyingrequest_pagination') == 2)) AND ($this->pagination->get('pages.total') > 1)) : ?>
			<div class="pagination">

				<?php if ($this->params->def('show_buyingrequest_pagination_results', 0)) : ?>
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
		<?php // Code to add a link to submit an buyingrequest. ?>
		<?php if ($this->params->get('show_buyingrequest_add_link', 1)) : ?>
			<?php echo JHtml::_('buyingrequesticon.create', $this->params); ?>
		<?php endif; ?>		
		<?php 
			if($user->id == 1){
				//JHtml::_('buyingrequesticon.create', $this->params); 
	            echo '<span class="hasTooltip tip" title="Export"><a href="index.php?task=buying_requests.export" class="btn btn-primary"><span class="icon-download"></span>Export</a></span>';
			}
        ?>
	</form>
</div>

<?php if ($can_edit AND $params->get('save_history') AND $params->get('buyingrequest_save_history')) : ?>
<script>
jQuery(document).ready(function($) {
   $('#collapsibleModal')
   .on('hide.bs.modal', function () {
        $(this).removeData('modal');
   });
});

function show_collapsibleModal(item_id){
	jQuery('#collapsibleModal').modal('show');
	var modalBody = jQuery(document).find('.modal-body');
	modalBody.find('iframe').remove();
	modalBody.prepend('<iframe class="iframe" src="index.php?option=com_remca&task=buyingrequest.showHistory&item_id='+item_id+'" name="titulo" height="450"></iframe>');
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