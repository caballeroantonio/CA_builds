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
 * @CAversion		Id: default_items.php 571 2016-01-04 15:03:02Z BrianWade $
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
 *	Initialise values for the layout 
 */	
 
// Create some shortcuts.
$params		= &$this->params;
$user		= JFactory::getUser();

$n			= count($this->houses);
$list_order	= $this->state->get('list.ordering');
$list_dirn	= $this->state->get('list.direction');
$layout		= str_replace('_:','',$params->get('house_layout'));
$can_create	= $user->authorise('core.create', 'com_remca');
// Get from global settings the text to use for an empty field
$component = JComponentHelper::getComponent( 'com_remca' );
$empty = $component->params->get('default_empty_field', '');	

/*
 *	Layout HTML
 */
?>

<?php if (empty($this->houses)) : ?>

	<?php if ($this->params->get('show_no_houses',1)) : ?>
	<p><?php echo JText::_('COM_REMCA_HOUSES_CATEGORY_NO_ITEMS'); ?></p>
	<?php endif; ?>

<?php else : ?>
<div class="houses-list">
	<form action="<?php echo htmlspecialchars(JUri::getInstance()->toString()); ?>" method="post" name="adminForm" id="adminForm">
		<?php if (($this->params->get('show_house_filter_field') != '' AND $this->params->get('show_house_filter_field') != 'hide') OR $this->params->get('show_house_pagination_limit')) :?>
			<div class="filter-search">
				<?php if ($this->params->get('show_house_filter_field') != '' AND $this->params->get('show_house_filter_field') != 'hide') :?>
					<input type="text" name="filter-search" id="filter-search" value="<?php echo $this->escape($this->state->get('filter.search')); ?>" onchange="document.adminForm.submit();" title="<?php echo JText::_('COM_REMCA_FILTER_SEARCH_DESC'); ?>" placeholder="<?php echo JText::_('COM_REMCA_'.$this->params->get('show_house_filter_field').'_FILTER_LABEL'); ?>" />
				<?php endif; ?>						
				<?php if ($this->params->get('show_house_pagination_limit')) : ?>
					<div class="display-limit">
						<?php echo $this->pagination->getLimitBox(); ?>
					</div>
				<?php endif; ?>
			</div>						
		<?php endif; ?>


		<table class="houses">
			<?php if ($this->params->get('show_house_headings')) :?>
				<thead>
					<tr>
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
						<?php if ($this->params->get('list_show_house_price',0)) : ?>
							<th class="list-price" id="tableOrderingprice">
							<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_PRICE'); ?>
							</th>
						<?php endif; ?>	
						<?php $show_actions = false;
							foreach ($this->houses as $item) : ?>
							<?php if ($item->params->get('access-edit') 
									OR $item->params->get('access-delete')) : ?>
									<?php $show_actions = true;
										  continue; ?>
							<?php endif;?>
							
						<?php endforeach; ?>
						<?php if ($show_actions) : ?>
							<th width="12%" class="list-actions">
								<?php echo JText::_('COM_REMCA_HEADING_ACTIONS'); ?>						
							</th> 				
						<?php endif; ?>
					</tr>
				</thead>
			<?php endif; ?>

			<tbody>

			<?php foreach ($this->houses as $i => $item) : ?>
				<?php
					$can_edit	= $item->params->get('access-edit');
					$can_delete	= $item->params->get('access-delete');
				?>

				<?php if ($item->state == 0) : ?>
					<tr class="system-unpublished cat-list-row<?php echo $i % 2; ?>">
				<?php else: ?>
					<tr class="cat-list-row<?php echo $i % 2; ?>" >
				<?php endif; ?>
						<td class="list-name">
							<a href="<?php echo JRoute::_(RemcaHelperRoute::getHouseRoute($item->slug, 
																									$item->catid, 
																									$item->language,
																									$layout,									
																									$this->params->get('keep_house_itemid'))); ?>">
						
							<?php echo $this->escape($item->name); ?></a>
						</td>

						<?php if ($this->params->get('list_show_house_date')) : ?>
						<td class="list-date">
							<?php echo JHtml::_('date',$item->display_date, $this->escape(
							$this->params->get('house_date_format', JText::_('DATE_FORMAT_LC3')))); ?>
						</td>
						<?php endif; ?>

						<?php if ($this->params->get('list_show_house_hits',0)) : ?>
						<td class="list-hits">
							<span class="badge badge-info">
								<?php echo JText::sprintf('JGLOBAL_HITS_COUNT', $item->hits); ?>
							</span>
						</td>
						<?php endif; ?>
						<?php if ($this->params->get('list_show_house_price',0)) : ?>
							<td class="list-price">
								<?php 
									echo $item->price != '' ? $item->price : $empty; 
								?>
							</td>
						<?php endif; ?>

					<?php if ($show_actions) : ?>
						<td class="list-actions">
							<?php if ($can_edit OR $can_delete) : ?>
								<ul class="actions">
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
								</ul>
							<?php endif; ?>
						</td>	
					<?php endif; ?>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>

		<?php if (($this->params->def('show_house_pagination', 2) == 1  OR 
				   ($this->params->get('show_house_pagination') == 2)) AND ($this->pagination->get('pages.total') > 1)) : ?>
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
			<input type="hidden" name="filter_order" value="" />
			<input type="hidden" name="filter_order_Dir" value="" />
			<input type="hidden" name="limitstart" value="" />
			<?php echo JHtml::_('form.token'); ?>		
		</div>
	</form>
</div>
<?php endif; ?>
<?php // Code to add a link to submit an house. ?>
<?php if ($this->params->get('show_house_add_link',1)) : ?>
	<?php if ($this->category->getParams()->get('access-create')) : ?>
		<?php echo JHtml::_('houseicon.create', $params); ?>
	<?php  endif; ?>
<?php  endif; ?>