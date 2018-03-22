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
$can_order	= $user->authorise('core.edit.state', 'com_remca');

$save_order	= ($list_order=='ordering' OR $list_order=='a.ordering');

if ($save_order)
{
	$save_ordering_url = 'index.php?option=com_remca&task=houses.saveOrderAjax&tmpl=component';
	JHtml::_('sortablelist.sortable', 'house-list', 'adminForm', strtolower($list_dirn), $save_ordering_url);
}

$assoc	= JLanguageAssociations::isEnabled();
?>
<noscript>
<p style="color: red;"><?php echo JText::_('COM_REMCA_WARNING_NOSCRIPT'); ?><p>
</noscript>

<form action="<?php echo JRoute::_('index.php?option=com_remca&view=houses'); ?>" method="post" name="adminForm" id="adminForm">
	<?php if (!empty( $this->sidebar)) : ?>
		<div id="j-sidebar-container" class="span2">
			<?php echo $this->sidebar; ?>
		</div>
		<div id="j-main-container" class="span10">
	<?php else : ?>
		<div id="j-main-container">
	<?php endif;?>

	<?php
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
		<table class="table table-striped" id="house-list">
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
						<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_ID_COUNTRY'); ?>						
					</th>	
					<th width="10%" class="nowrap center hidden-phone">
						<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_ID_LSTATE'); ?>						
					</th>	
					<th width="10%" class="nowrap center hidden-phone">
						<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_ID_LMUNICIPALITY'); ?>						
					</th>	
					<th width="10%" class="center hidden-phone">
						<?php echo JHtml::_('searchtools.sort', 'JCATEGORY', 'category_title', $list_dirn, $list_order); ?>
					</th>
					<?php if ($assoc) : ?>
						<th width="5%" class="nowrap center hidden-phone">
							<?php echo JHtml::_('searchtools.sort', 'COM_REMCA_HEADING_ASSOCIATION', 'association', $list_dirn, $list_order); ?>
						</th>
					<?php endif;?>				
					<th width="5%" class="nowrap center">
						<?php echo JHtml::_('searchtools.sort', 'JGRID_HEADING_LANGUAGE', 'a.language', $list_dirn, $list_order); ?>
					</th>		
					<th width="10%" class="nowrap center hidden-phone">
						<?php echo JHtml::_('searchtools.sort', 'JGLOBAL_HITS', 'a.hits', $list_dirn, $list_order); ?>
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
					$can_checkin	= $user->authorise('core.manage',		'com_checkin') OR $item->checked_out == $user_id OR $item->checked_out == 0;
				$can_edit	= $user->authorise('core.edit',	'com_remca.house.'.$item->id);
		
				$can_edit_own	= $user->authorise('core.edit.own',		'com_remca.house.'.$item->id) 
								;
				$can_change	= $user->authorise('core.edit.state',	'com_remca.house.'.$item->id) 
								AND $can_checkin
								;
				if ($item->language == '*'):
					$language = JText::alt('JALL', 'language');
				else:
					$language = $item->language_title ? $this->escape($item->language_title) : JText::_('JUNDEFINED');
				endif;
							
				?>
				<tr class="row<?php echo $i % 2; ?>" sortable-group-id="<?php echo $item->catid; ?>">
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
							<?php echo JHtml::_('jgrid.published', $item->state, $i, 'houses.', $can_change); ?>
							<?php echo JHtml::_('houseadministrator.featured', $item->featured, $i, $can_change); ?>
							<?php
								if ($archived) :
									JHtml::_('actionsdropdown.unarchive', 'cb' . $i, 'houses');
								else :
									JHtml::_('actionsdropdown.archive', 'cb' . $i, 'houses');
								endif;
								if ($trashed) :
									JHtml::_('actionsdropdown.untrash', 'cb' . $i, 'houses');
								else :
									JHtml::_('actionsdropdown.trash', 'cb' . $i, 'houses');
								endif;

								// Render dropdown list
								echo JHtml::_('actionsdropdown.render', $this->escape($item->name));
							?>
						</div>
					</td>	
					<td class="nowrap has-context">
						<div class="pull-left break-word">
							<?php if ($item->checked_out) : ?>
								<?php echo JHtml::_('jgrid.checkedout', $i, $item->editor, $item->checked_out_time, 'houses.', $can_checkin); ?>
							<?php endif; ?>	
							<?php if ($can_edit OR $can_edit_own) : ?>
								<a class="hasTooltip" href="<?php echo JRoute::_('index.php?option=com_remca&task=house.edit&id='.(int) $item->id); ?>">
								<?php echo $this->escape($item->name); ?></a>
							<?php else : ?>
								<?php echo $this->escape($item->name); ?>
							<?php endif; ?>
						</div>
					</td>
					<td class="nowrap small center hidden-phone">
						<?php 
							echo JString::trim($item->c1_country_name); 
						?>				
					</td>	
					<td class="nowrap small center hidden-phone">
						<?php 
							echo JString::trim($item->s_lstate_name); 
						?>				
					</td>	
					<td class="nowrap small center hidden-phone">
						<?php 
							echo JString::trim($item->m_lmunicipality_name); 
						?>				
					</td>	
					<td class="nowrap small center hidden-phone">
						<?php echo $this->escape($item->category_title); ?>
					</td>	
					<?php if ($assoc) : ?>
						<td class="small hidden-phone">
							<?php if ($item->association) : ?>
								<?php echo JHtml::_('houseadministrator.association', $item->id); ?>
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
					<td class="nowrap hidden-phone">
						<?php echo (int) $item->hits; ?>
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
