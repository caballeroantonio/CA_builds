<?php
/**
 * @version 		$Id:$
 * @name			RealEstateManager
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
 * @CAsubpackage	architectcomp.admin
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
	
// Include custom admin css
$this->document->addStyleSheet(JUri::root().'media/com_remca/css/admin.css');

// Add Javascript functions
JHtml::_('behavior.formvalidation');
JHtml::_('bootstrap.tooltip');
JHtml::_('behavior.multiselect');
JHtml::_('formbehavior.chosen', 'select');

// Set some basic options
$data['options'] = array(
	'filtersHidden'       => false,
	'defaultLimit'        => JFactory::getApplication()->get('list_limit', 20),
	'searchFieldSelector' => '#filter_search',
	'orderFieldName'  => 'list[fullordering]'
	);

// Load search tools
JHtml::_('searchtools.form', '#adminForm', $data['options']);		 
/*
 *	Initialise values for the layout 
 */	
$app		= JFactory::getApplication();
$user		= JFactory::getUser();
$user_id	= $user->get('id');
$list_order	= $this->state->get('list.ordering');
$list_dirn	= $this->state->get('list.direction');
$archived	= $this->state->get('filter.state') == 2 ? true : false;
$trashed	= $this->state->get('filter.state') == -2 ? true : false;
$search		= $this->state->get('filter.search','');

// Get from global settings the text to use for an empty field
$component = JComponentHelper::getComponent( 'com_remca' );
$empty = $component->params->get('default_empty_field', '');

$save_order	= ($list_order=='ordering' OR $list_order=='a.ordering');

if ($save_order)
{
	$save_ordering_url = 'index.php?option=com_remca&task=main_categories.saveOrderAjax&tmpl=component';
	JHtml::_('sortablelist.sortable', 'maincategory-list', 'adminForm', strtolower($list_dirn), $save_ordering_url);
}

$assoc	= JLanguageAssociations::isEnabled();
?>
<noscript>
<p style="color: red;"><?php echo JText::_('COM_REMCA_WARNING_NOSCRIPT'); ?><p>
</noscript>

<form action="<?php echo JRoute::_('index.php?option=com_remca&view=main_categories'); ?>" method="post" name="adminForm" id="adminForm">
	<?php if (!empty( $this->sidebar)) : ?>
		<div id="j-sidebar-container" class="span2">
			<?php echo $this->sidebar; ?>
		</div>
		<div id="j-main-container" class="span10">
	<?php else : ?>
		<div id="j-main-container">
	<?php endif;?>

	<?php
		// Search tools bar,@ToDo evaluar si existen campos de busqueda global
		echo JLayoutHelper::render('joomla.searchtools.default', array(
                        'view' => $this,
                        'options' => array(
                            'searchButton' => 
                            TRUE
                        ),
                    )
                );
?>	
	
	<div class="clearfix"> </div>
	<?php if (empty($this->items)) : ?>
		<div class="alert alert-no-items">
			<?php echo JText::_('JGLOBAL_NO_MATCHING_RESULTS'); ?>
		</div>
	<?php else : ?>
		<table class="table table-striped" id="maincategory-list">
			<thead>
				<tr>
					<th width="1%" class="nowrap center hidden-phone">
						<?php echo JHtml::_('searchtools.sort', '', 'a.ordering', $list_dirn, $list_order, null, 'asc', 'JGRID_HEADING_ORDERING', 'icon-menu-2'); ?>
					</th>	
					<th width="1%" class="center">
						<?php echo JHtml::_('grid.checkall'); ?>
					</th>
					<th width="1%" style="min-width:55px" class="nowrap center">
						<?php echo JHtml::_('searchtools.sort', 'JSTATUS', 'a.state', $list_dirn, $list_order); ?>
					</th>
					<th>
						<?php echo JHtml::_('searchtools.sort',  'COM_REMCA_HEADING_NAME', 'a.name', $list_dirn, $list_order); ?>
					</th>
					<th width="10%" class="nowrap center hidden-phone">
						<?php echo JHtml::_('searchtools.sort',  'JGRID_HEADING_ACCESS', 'a.access', $list_dirn, $list_order); ?>
					</th>
					<?php if ($assoc) : ?>
						<th width="5%" class="nowrap center hidden-phone">
							<?php echo JHtml::_('searchtools.sort', 'COM_REMCA_HEADING_ASSOCIATION', 'association', $list_dirn, $list_order); ?>
						</th>
					<?php endif;?>				
					<th width="5%" class="nowrap center">
						<?php echo JHtml::_('searchtools.sort', 'JGRID_HEADING_LANGUAGE', 'a.language', $list_dirn, $list_order); ?>
					</th>		
					<th width="1%" class="nowrap center">
						<?php echo JHtml::_('searchtools.sort', 'JGRID_HEADING_ID', 'a.id', $list_dirn, $list_order); ?>
					</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($this->items as $i => $item) :

				$item->max_ordering = 0; //??
				$ordering	= ($list_order=='ordering' OR $list_order=='a.ordering');
				$can_change = true;
					$can_checkin	= $item->checked_out == $user_id OR $item->checked_out == 0;
				if ($item->language == '*'):
					$language = JText::alt('JALL', 'language');
				else:
					$language = $item->language_title ? $this->escape($item->language_title) : JText::_('JUNDEFINED');
				endif;
							
				?>
				<tr class="row<?php echo $i % 2; ?>">
					<td class="order nowrap center hidden-phone">
						<?php if ($can_change) :
							$disable_class_name = '';
							$disabled_label	  = '';

							if (!$save_order) :
								$disabled_label    = JText::_('JORDERINGDISABLED');
								$disable_class_name = 'inactive tip-top';
							endif; ?>
							<span class="sortable-handler hasTooltip <?php echo $disable_class_name; ?>" title="<?php echo $disabled_label; ?>">
								<i class="icon-menu"></i>
							</span>
							<input type="text" style="display:none" name="order[]" size="5" value="<?php echo $item->ordering; ?>" class="width-20 text-area-order " />
						<?php else : ?>
							<span class="sortable-handler inactive" >
								<i class="icon-menu"></i>
							</span>
						<?php endif; ?>
					</td>
					<td class="center">
						<?php echo JHtml::_('grid.id', $i, $item->id); ?>
					</td>
					<td class="center">
						<div class="btn-group">
							<?php echo JHtml::_('jgrid.published', $item->state, $i, 'main_categories.', $can_change); ?>
							<?php
								if ($archived) :
									JHtml::_('actionsdropdown.unarchive', 'cb' . $i, 'main_categories');
								else :
									JHtml::_('actionsdropdown.archive', 'cb' . $i, 'main_categories');
								endif;
								if ($trashed) :
									JHtml::_('actionsdropdown.untrash', 'cb' . $i, 'main_categories');
								else :
									JHtml::_('actionsdropdown.trash', 'cb' . $i, 'main_categories');
								endif;

								// Render dropdown list
								echo JHtml::_('actionsdropdown.render', $this->escape($item->name));
							?>
						</div>
					</td>	
					<td class="nowrap has-context">
						<div class="pull-left break-word">
							<?php if ($item->checked_out) : ?>
								<?php echo JHtml::_('jgrid.checkedout', $i, $item->editor, $item->checked_out_time, 'main_categories.', $can_checkin); ?>
							<?php endif; ?>	
								<a class="hasTooltip" href="<?php echo JRoute::_('index.php?option=com_remca&task=maincategory.edit&id='.(int) $item->id); ?>">
								<?php echo $this->escape($item->name); ?></a>
							<p class="small break-word">
								<?php echo JText::sprintf('JGLOBAL_LIST_ALIAS', $this->escape($item->alias));?>
							</p>
						</div>
					</td>
					<td class="nowrap small center hidden-phone">
						<?php echo $this->escape($item->access_level); ?>
					</td>
					<?php if ($assoc) : ?>
						<td class="small hidden-phone">
							<?php if ($item->association) : ?>
								<?php echo JHtml::_('maincategoryadministrator.association', $item->id); ?>
							<?php endif; ?>
						</td>
					<?php endif;?>				
					<td class="small center hidden-phone">
						<?php if ($item->language=='*'):?>
							<?php echo JText::alt('JALL', 'language'); ?>
						<?php else:?>
							<?php echo $item->language_title ? $this->escape($item->language_title) : JText::_('JUNDEFINED'); ?>
						<?php endif;?>
					</td>	
					<td class="center">
						<?php echo $item->id; ?>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="12">
						<?php echo $this->pagination->getListFooter();?>
					</td>
				</tr>
			</tfoot>		
		</table>
		<?php echo $this->loadTemplate('batch'); ?>
	<?php endif; ?>
	<div>
		<input type="hidden" name="task" value="" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="form_id" id="form_id" value="adminForm" />
		<?php echo JHtml::_('form.token'); ?>
	</div>
</form>
