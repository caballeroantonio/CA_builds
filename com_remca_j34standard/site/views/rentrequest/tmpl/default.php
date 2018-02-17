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
$this->document->addStyleSheet(JUri::root().'media/com_remca/css/site_rent_request.css');

if ($lang->isRTL())
{
	$this->document->addStyleSheet(JUri::root().'media/com_remca/css/site_remca-rtl.css');
	$this->document->addStyleSheet(JUri::root().'media/com_remca/css/site_rent_request-rtl.css');
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

$layout		= $this->params->get('rentrequest_layout', 'default');

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
<div class="remca rent_request-list<?php echo $this->params->get('pageclass_sfx');?>">
	<?php if ($this->params->get('show_page_heading')): ?>
		<div class="page-header">
			<h1><?php echo $this->escape($this->params->get('page_heading')); ?></h1>
		</div>
	<?php endif; ?>

	<?php
		$show_actions = false;
		if ($this->params->get('show_rentrequest_icons',1) >= 0) :
			foreach ($this->items as $i => $item) :
				if ($item->params->get('access-edit',1) OR $item->params->get('access-delete',1)) :
					$show_actions = true;
					continue;
				endif;
			endforeach;
		endif;
	?>
	<form action="<?php echo htmlspecialchars(JUri::getInstance()->toString()); ?>" method="post" name="adminForm" id="adminForm">
		<?php if (($this->params->get('show_rentrequest_filter_field') != '' AND $this->params->get('show_rentrequest_filter_field') != 'hide')) :?>
			<div class="filter-search">
				<?php if ($this->params->get('show_rentrequest_filter_field') != '' AND $this->params->get('show_rentrequest_filter_field') != 'hide') :?>
					<input type="text" name="filter_search" id="filter_search" value="<?php echo $this->escape($this->state->get('filter.search')); ?>" onchange="document.adminForm.submit();" title="<?php echo JText::_('COM_REMCA_FILTER_SEARCH_DESC'); ?>" placeholder="<?php echo JText::_('COM_REMCA_'.$this->params->get('show_rentrequest_filter_field').'_FILTER_LABEL'); ?>" />
				<?php endif; ?>	
			</div>
		<?php endif; ?>

		<?php if ($this->params->get('show_rentrequest_pagination_limit')) : ?>
			<div class="display-limit">
				<?php echo JText::_('JGLOBAL_DISPLAY_NUM'); ?>&#160;
				<?php echo $this->pagination->getLimitBox(); ?>
			</div>
		<?php endif; ?>	
		<div style="clear:both;"></div>				
		<?php if (empty($this->items)) : ?>

			<?php if ($this->params->get('show_no_rent_request',1)) : ?>
			<p><?php echo JText::_('COM_REMCA_RENT_REQUEST_NO_ITEMS'); ?></p>
			<?php endif; ?>

		<?php else : ?>
			<table class="table table-striped" id="rent_request">
			<?php if ($this->params->get('show_rentrequest_headings')) :?>
			<thead>
				<tr>
					<th width="1%" style="display:none;">
					</th>				
					<?php if ($date = $this->params->get('list_show_rentrequest_date')) : ?>
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

					<?php if ($this->params->get('list_show_rentrequest_date')) : ?>
						<td class="list-date">
							<time datetime="<?php echo JHtml::_('date', $item->display_date, 'c'); ?>">
								<?php echo JHtml::_('date',$item->display_date, $this->escape($this->params->get('rentrequest_date_format', JText::_('DATE_FORMAT_LC3')))); ?>
							</time>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_rentrequest_fk_houseid',0)) : ?>
						<td class="list-fk_houseid">
							<?php 
								if ($params->get('list_link_rentrequest_fk_houseid')) :
									echo '<a href="'.JRoute::_(RemcaHelperRoute::getHouseRoute($item->fk_houseid, 0)).'">'.JString::trim($item->h_house_name).'</a>';
								else :
									echo JString::trim($item->h_house_name);
								endif; 
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_rentrequest_fk_userid',0)) : ?>
						<td class="list-fk_userid">
							<?php 
								if ($params->get('list_link_rentrequest_fk_userid')) :
									echo '<a href="'.JRoute::_(RemcaHelperRoute::getUserRoute($item->fk_userid, 0)).'">'.JString::trim($item->u_user_name).'</a>';
								else :
									echo JString::trim($item->u_user_name);
								endif; 
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_rentrequest_rent_from',0)) : ?>
						<td class="list-rent_from">
							<?php 
								echo ($item->rent_from != '' AND $item->rent_from != '0000-00-00 00:00:00') ? JHtml::date($item->rent_from, '%Y-%m-%d', null) : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_rentrequest_rent_until',0)) : ?>
						<td class="list-rent_until">
							<?php 
								echo ($item->rent_until != '' AND $item->rent_until != '0000-00-00 00:00:00') ? JHtml::date($item->rent_until, '%Y-%m-%d', null) : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_rentrequest_rent_request',0)) : ?>
						<td class="list-rent_request">
							<?php 
								echo ($item->rent_request != '' AND $item->rent_request != '0000-00-00 00:00:00') ? JHtml::date($item->rent_request, '%Y-%m-%d', null) : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_rentrequest_user_name',0)) : ?>
						<td class="list-user_name">
							<?php 
								echo $item->user_name != '' ? $item->user_name : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_rentrequest_user_email',0)) : ?>
						<td class="list-user_email">
							<?php 
								echo $item->user_email != '' ? $item->user_email : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_rentrequest_user_mailing',0)) : ?>
						<td class="list-user_mailing">
							<?php 
								echo $item->user_mailing != '' ? $item->user_mailing : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_rentrequest_status',0)) : ?>
						<td class="list-status">
							<?php 
								echo $item->status != '' ? $item->status : $empty;
							?>
						</td>
					<?php endif; ?>
						<td class="list-actions">
								<ul class="actions">
										<li class="edit-icon">
											<?php echo JHtml::_('rentrequesticon.edit',$item, $params); ?>
										</li>
										<li class="delete-icon">
											<?php echo JHtml::_('rentrequesticon.delete',$item, $params); ?>
										</li>
								</ul>
						</td>															
				</tr>
			<?php endforeach; ?>
			</tbody>
			</table>
<!--begin pagination-->
			<?php if (($this->params->def('show_rentrequest_pagination', 2) == 1  OR ($this->params->get('show_rentrequest_pagination') == 2)) AND ($this->pagination->get('pages.total') > 1)) : ?>
			<div class="pagination">

				<?php if ($this->params->def('show_rentrequest_pagination_results', 0)) : ?>
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
		<?php // Code to add a link to submit an rentrequest. ?>
		<?php if ($this->params->get('show_rentrequest_add_link', 1)) : ?>
			<?php echo JHtml::_('rentrequesticon.create', $this->params); ?>
		<?php endif; ?>		
                <?php echo '<button>export</button>'//JHtml::_('rentrequesticon.create', $this->params); ?>
	</form>
</div>