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
$this->document->addStyleSheet(JUri::root().'media/com_remca/css/site_main_categories.css');

if ($lang->isRTL())
{
	$this->document->addStyleSheet(JUri::root().'media/com_remca/css/site_remca-rtl.css');
	$this->document->addStyleSheet(JUri::root().'media/com_remca/css/site_main_categories-rtl.css');
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

$layout		= $this->params->get('maincategory_layout', 'default');

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
<div class="remca main_categories-list<?php echo $this->params->get('pageclass_sfx');?>">
	<?php if ($this->params->get('show_page_heading')): ?>
		<div class="page-header">
			<h1><?php echo $this->escape($this->params->get('page_heading')); ?></h1>
		</div>
	<?php endif; ?>

	<?php
		$can_edit = 0;$can_delete = 0;
		$show_actions = false;
		if ($this->params->get('show_maincategory_icons',1) >= 0) :
			foreach ($this->items as $i => $item) :
				if ($item->params->get('access-edit',1) OR $item->params->get('access-delete',1)) :
					$show_actions = true;
					continue;
				endif;
			endforeach;
		endif;
	?>
	<form action="<?php echo htmlspecialchars(JUri::getInstance()->toString()); ?>" method="post" name="adminForm" id="adminForm">
		<?php if (($this->params->get('show_maincategory_filter_field') != '' AND $this->params->get('show_maincategory_filter_field') != 'hide')) :?>
			<div class="filter-search">
				<?php if ($this->params->get('show_maincategory_filter_field') != '' AND $this->params->get('show_maincategory_filter_field') != 'hide') :?>
					<input type="text" name="filter_search" id="filter_search" value="<?php echo $this->escape($this->state->get('filter.search')); ?>" onchange="document.adminForm.submit();" title="<?php echo JText::_('COM_REMCA_FILTER_SEARCH_DESC'); ?>" placeholder="<?php echo JText::_('COM_REMCA_'.$this->params->get('show_maincategory_filter_field').'_FILTER_LABEL'); ?>" />
				<?php endif; ?>	
			</div>
		<?php endif; ?>

		<?php if ($this->params->get('show_maincategory_pagination_limit')) : ?>
			<div class="display-limit">
				<?php echo JText::_('JGLOBAL_DISPLAY_NUM'); ?>&#160;
				<?php echo $this->pagination->getLimitBox(); ?>
			</div>
		<?php endif; ?>	
		<div style="clear:both;"></div>				
		<?php if (empty($this->items)) : ?>

			<?php if ($this->params->get('show_no_main_categories',1)) : ?>
			<p><?php echo JText::_('COM_REMCA_MAIN_CATEGORIES_NO_ITEMS'); ?></p>
			<?php endif; ?>

		<?php else : ?>
		<div style="overflow-x:auto;">
			<table class="table table-striped" id="main_categories">
			<?php if ($this->params->get('show_maincategory_headings',1)) :?>
			<thead>
				<tr>
					<th width="1%" style="display:none;">
					</th>				
					<th class="list-name" id="tableOrderingname">
					<?php  echo JHtml::_('grid.sort', 'COM_REMCA_HEADING_NAME', 'a.name', $list_dirn, $list_order) ; ?>
					</th>
					<?php if ($date = $this->params->get('list_show_maincategory_date')) : ?>
						<th class="list-date" id="tableOrderingdate">
							<?php echo JHtml::_('grid.sort', 'COM_REMCA_FIELD_'.JString::strtoupper($date).'_LABEL', 'a.'.$date, $list_dirn, $list_order); ?>
						</th>
					<?php endif; ?>

					<?php if ($this->params->get('list_show_maincategory_parent_id',1)) : ?>
						<th class="list-parent_id" id="tableOrderingparent_id">
							<?php echo JTEXT::_('COM_REMCA_MAIN_CATEGORIES_HEADING_PARENT_ID'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_maincategory_associate_category',1)) : ?>
						<th class="list-associate_category" id="tableOrderingassociate_category">
							<?php echo JTEXT::_('COM_REMCA_MAIN_CATEGORIES_HEADING_ASSOCIATE_CATEGORY'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_maincategory_title',1)) : ?>
						<th class="list-title" id="tableOrderingtitle">
							<?php echo JTEXT::_('COM_REMCA_MAIN_CATEGORIES_HEADING_TITLE'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_maincategory_image',1)) : ?>
						<th class="list-image" id="tableOrderingimage">
							<?php echo JTEXT::_('COM_REMCA_MAIN_CATEGORIES_HEADING_IMAGE'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_maincategory_section',1)) : ?>
						<th class="list-section" id="tableOrderingsection">
							<?php echo JTEXT::_('COM_REMCA_MAIN_CATEGORIES_HEADING_SECTION'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_maincategory_image_position',1)) : ?>
						<th class="list-image_position" id="tableOrderingimage_position">
							<?php echo JTEXT::_('COM_REMCA_MAIN_CATEGORIES_HEADING_IMAGE_POSITION'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_maincategory_editor',1)) : ?>
						<th class="list-editor" id="tableOrderingeditor">
							<?php echo JTEXT::_('COM_REMCA_MAIN_CATEGORIES_HEADING_EDITOR'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_maincategory_count',1)) : ?>
						<th class="list-count" id="tableOrderingcount">
							<?php echo JTEXT::_('COM_REMCA_MAIN_CATEGORIES_HEADING_COUNT'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_maincategory_params2',1)) : ?>
						<th class="list-params2" id="tableOrderingparams2">
							<?php echo JTEXT::_('COM_REMCA_MAIN_CATEGORIES_HEADING_PARAMS2'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_maincategory_ordering',0)) : ?>
						<th width="10%">
							<?php echo JHtml::_('grid.sort',  'COM_REMCA_HEADING_ORDERING', 'a.ordering', $list_dirn, $list_order); ?>
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

					<?php if ($item->state == 0) : ?>
						<tr class="system-unpublished cat-list-row<?php echo $i % 2; ?>">
					<?php else: ?>
						<tr class="cat-list-row<?php echo $i % 2; ?>">
					<?php endif; ?>
					<td class="center" style="display:none;">
						<?php echo JHtml::_('grid.id', $i, $item->id); ?>
					</td>				
					<?php if (in_array($item->access, $user->getAuthorisedViewLevels()) OR $params->get('show_maincategory_noauth')) : ?>
					<td class="list-name">
						<a href="<?php echo JRoute::_(RemcaHelperRoute::getMainCategoryRoute($item->slug, 
																									$item->language,									
																									$layout,									
																									$params->get('keep_maincategory_itemid'))); ?>" 
																									>
								<?php echo $this->escape($item->name); ?>
						</a>
					</td>

					<?php if ($this->params->get('list_show_maincategory_date')) : ?>
						<td class="list-date">
							<time datetime="<?php echo JHtml::_('date', $item->display_date, 'c'); ?>">
								<?php echo JHtml::_('date',$item->display_date, $this->escape($this->params->get('maincategory_date_format', JText::_('DATE_FORMAT_LC3')))); ?>
							</time>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_maincategory_parent_id',1)) : ?>
						<td class="list-parent_id">
							<?php 
								echo $item->parent_id != '' ? $item->parent_id : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_maincategory_associate_category',1)) : ?>
						<td class="list-associate_category">
							<?php 
								echo $item->associate_category != '' ? $item->associate_category : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_maincategory_title',1)) : ?>
						<td class="list-title">
							<?php 
								echo $item->title != '' ? $item->title : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_maincategory_image',1)) : ?>
						<td class="list-image">
							<?php 
								echo $item->image != '' ? $item->image : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_maincategory_section',1)) : ?>
						<td class="list-section">
							<?php 
								echo $item->section != '' ? $item->section : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_maincategory_image_position',1)) : ?>
						<td class="list-image_position">
							<?php 
								echo $item->image_position != '' ? $item->image_position : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_maincategory_editor',1)) : ?>
						<td class="list-editor">
							<?php 
								echo $item->editor != '' ? $item->editor : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_maincategory_count',1)) : ?>
						<td class="list-count">
							<?php 
								echo $item->count != '' ? $item->count : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_maincategory_params2',1)) : ?>
						<td class="list-params2">
							<?php 
								echo $item->params2 != '' ? $item->params2 : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_maincategory_ordering',0)) : ?>
						<td class="list-order">
							<?php echo $item->ordering; ?>
						</td>
					<?php endif; ?>
					
					<?php if ($show_actions) : ?>
						<td class="list-actions">
                        	<div class="btn-group pull-right">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <span class="icon-cog"></span> <span class="caret"></span> </a>
                                <ul class="dropdown-menu">
							<?php if ($params->get('show_maincategory_print_icon')) : ?>
								<li class="print-icon">
										<?php echo JHtml::_('maincategoryicon.print_popup',  $item, $params); ?>
								</li>
							<?php endif; ?>

							<?php if ($params->get('show_maincategory_email_icon')) : ?>
								<li class="email-icon">
										<?php echo JHtml::_('maincategoryicon.email',  $item, $params); ?>
								</li>
							<?php endif; ?>
							<?php if ($can_edit AND $params->get('save_history') AND $params->get('maincategory_save_history')) : ?>
								<li class="version-icon">
									<?php echo JHtml::_('maincategoryicon.versions',$item, $params); ?>
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
			<?php if (($this->params->def('show_maincategory_pagination', 2) == 1  OR ($this->params->get('show_maincategory_pagination') == 2)) AND ($this->pagination->get('pages.total') > 1)) : ?>
			<div class="pagination">

				<?php if ($this->params->def('show_maincategory_pagination_results', 0)) : ?>
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
		<?php // Code to add a link to submit an maincategory. ?>
		<?php if ($this->params->get('show_maincategory_add_link', 1)) : ?>
			<?php echo JHtml::_('maincategoryicon.create', $this->params); ?>
		<?php endif; ?>		
                <?php echo '<button>export</button>'//JHtml::_('maincategoryicon.create', $this->params); ?>
	</form>
</div>

<?php if ($can_edit AND $params->get('save_history') AND $params->get('maincategory_save_history')) : ?>
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
	modalBody.prepend('<iframe class="iframe" src="index.php?option=com_remca&task=maincategory.showHistory&item_id='+item_id+'" name="titulo" height="450"></iframe>');
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