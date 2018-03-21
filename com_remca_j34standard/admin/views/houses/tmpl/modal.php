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
 * @CAversion		Id: modal.php 571 2016-01-04 15:03:02Z BrianWade $
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

$app = JFactory::getApplication();

JHtml::_('bootstrap.tooltip');
JHtml::_('behavior.framework', true);
JHtml::_('formbehavior.chosen', 'select');

$function	= $app->input->get('function', 'jSelectHouse');
$list_order	= $this->escape($this->state->get('list.ordering'));
$list_dirn	= $this->escape($this->state->get('list.direction'));

$search		= $this->escape($this->state->get('filter.search',''));
// Get from global settings the text to use for an empty field
$component = JComponentHelper::getComponent( 'com_remca' );
$empty = $component->params->get('default_empty_field', '');

?>
<h3><?php echo JText::_('COM_REMCA_HOUSES_SELECT_ITEM_LABEL'); ?></h3>
<form action="<?php echo JRoute::_('index.php?option=com_remca&view=houses&layout=modal&tmpl=component&function='.$function.'&'.JSession::getFormToken().'=1');?>" method="post" name="adminForm" id="adminForm">
	<fieldset class="filter clearfix">
		<div class="btn-toolbar">
			<div class="btn-group pull-left input-append">
				<input type="text" name="filter_search" id="filter_search" value="<?php echo $search; ?>"  placeholder="<?php echo JText::_('JSEARCH_FILTER'); ?>" />
				<button type="submit" class="btn hasTooltip" title="<?php echo JHtml::tooltipText('JSEARCH_FILTER_SUBMIT'); ?>">
					<i class="icon-search"></i>
				</button>
			</div>

			<div class="btn-group pull-left">
				<button type="button" class="btn hasTooltip js-stools-btn-clear" title="<?php echo JHtml::tooltipText('JSEARCH_FILTER_CLEAR'); ?>">
					<?php echo JText::_('JSEARCH_FILTER_CLEAR');?>
				</button>
			</div>						
			<div class="clearfix"></div>				
		</div>
		<hr class="hr-condensed">
		<div class="filters pull-left">
			<select name="filter_id_country" class="input-medium" onchange="this.form.submit()">
				<option value=""><?php echo JText::_('COM_REMCA_HOUSES_SELECT_C1_COUNTRY');?></option>
				<?php echo JHtml::_('select.options', $this->countries, 'value', 'text', $this->state->get('filter.id_country'));?>
			</select>
			<select name="filter_id_lstate" class="input-medium" onchange="this.form.submit()">
				<option value=""><?php echo JText::_('COM_REMCA_HOUSES_SELECT_S_LSTATE');?></option>
				<?php echo JHtml::_('select.options', $this->lstates, 'value', 'text', $this->state->get('filter.id_lstate'));?>
			</select>
			<select name="filter_id_lmunicipality" class="input-medium" onchange="this.form.submit()">
				<option value=""><?php echo JText::_('COM_REMCA_HOUSES_SELECT_M_LMUNICIPALITY');?></option>
				<?php echo JHtml::_('select.options', $this->lmunicipalities, 'value', 'text', $this->state->get('filter.id_lmunicipality'));?>
			</select>

			<select name="filter_state" class="input-medium" onchange="this.form.submit()">
				<option value=""><?php echo JText::_('COM_REMCA_SELECT_STATUS');?></option>
				<?php echo JHtml::_('select.options', JHtml::_('jgrid.publishedOptions'), 'value', 'text', $this->state->get('filter.state'), true);?>
			</select>
			
			<?php if ($this->state->get('filter.forcedLanguage')) : ?>
				<select name="filter_category_id" class="input-medium" onchange="this.form.submit()">
				<option value=""><?php echo JText::_('JOPTION_SELECT_CATEGORY');?></option>
				<?php echo JHtml::_('select.options', JHtml::_('category.options', 'com_remca', array('filter.language' => array('*', $this->state->get('filter.forcedLanguage')))), 'value', 'text', $this->state->get('filter.category_id'));?>
				</select>
				<input type="hidden" name="forcedLanguage" value="<?php echo $this->escape($this->state->get('filter.forcedLanguage')); ?>" />
				<input type="hidden" name="filter_language" value="<?php echo $this->escape($this->state->get('filter.language')); ?>" />
			<?php else : ?>
				<select name="filter_category_id" class="input-medium" onchange="this.form.submit()">
					<option value=""><?php echo JText::_('JOPTION_SELECT_CATEGORY');?></option>
					<?php echo JHtml::_('select.options', JHtml::_('category.options', 'com_remca'), 'value', 'text', $this->state->get('filter.category_id'));?>
				</select>
				<select name="filter_language" class="input-medium" onchange="this.form.submit()">
					<option value=""><?php echo JText::_('JOPTION_SELECT_LANGUAGE');?></option>
					<?php echo JHtml::_('select.options', JHtml::_('contentlanguage.existing', true, true), 'value', 'text', $this->state->get('filter.language'));?>
				</select>
			<?php endif; ?>
		</div>
	</fieldset>

	<table class="table table-striped table-condensed">
		<thead>
			<tr>
				<th class="center nowrap">
					<?php echo JHtml::_('grid.sort',  'COM_REMCA_HEADING_NAME', 'a.name', $list_dirn, $list_order); ?>
				</th>
				<th width="10%" class="center nowrap">
					<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_ID_COUNTRY'); ?>						
				</th>	
				<th width="10%" class="center nowrap">
					<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_ID_LSTATE'); ?>						
				</th>	
				<th width="10%" class="center nowrap">
					<?php echo JTEXT::_('COM_REMCA_HOUSES_HEADING_ID_LMUNICIPALITY'); ?>						
				</th>	
				<th width="20%" class="center nowrap">
					<?php echo JHtml::_('grid.sort', 'JCATEGORY', 'category_title', $list_dirn, $list_order); ?>
				</th>
				<th width="5%" class="center nowrap">
					<?php echo JHtml::_('grid.sort', 'JPUBLISHED', 'a.state', $list_dirn, $list_order); ?>
				</th>
				<th width="5%" class="center nowrap">
					<?php echo JHtml::_('grid.sort', 'JGRID_HEADING_LANGUAGE', 'a.language', $list_dirn, $list_order); ?>
				</th>		
					
				<th width="1%" class="center nowrap">
					<?php echo JHtml::_('grid.sort', 'JGRID_HEADING_ID', 'a.id', $list_dirn, $list_order); ?>
				</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($this->items as $i => $item) : ?>
			<?php 
				if ($item->language) :
					$tag = JString::strlen($item->language);
					if ($tag == 5) :
						$lang = JString::substr($item->language, 0, 2);
					else :
						if ($tag == 6) :
							$lang = JString::substr($item->language, 0, 3);
						else :
							$lang = "";
						endif;
					endif;
				endif;
			?>
			<tr class="row<?php echo $i % 2; ?>">
				<td>
					<a href="javascript:void(0)" onclick="if (window.parent) window.parent.<?php echo $this->escape($function);?>('<?php echo $item->id; ?>', '<?php echo $this->escape(addslashes($item->name)); ?>');">
						<?php echo $this->escape($item->name); ?>
					</a>		
				</td>
				<td class="center">
					<a class="pointer" href="javascript:void(0)" onclick="if (window.parent) window.parent.<?php echo $this->escape($function);?>('<?php echo $item->id; ?>', '<?php echo $this->escape(addslashes($item->name)); ?>');">
						<?php 
							echo JString::trim($item->c1_country_name); 
						?>					
					</a>		
				</td>	
				<td class="center">
					<a class="pointer" href="javascript:void(0)" onclick="if (window.parent) window.parent.<?php echo $this->escape($function);?>('<?php echo $item->id; ?>', '<?php echo $this->escape(addslashes($item->name)); ?>');">
						<?php 
							echo JString::trim($item->s_lstate_name); 
						?>					
					</a>		
				</td>	
				<td class="center">
					<a class="pointer" href="javascript:void(0)" onclick="if (window.parent) window.parent.<?php echo $this->escape($function);?>('<?php echo $item->id; ?>', '<?php echo $this->escape(addslashes($item->name)); ?>');">
						<?php 
							echo JString::trim($item->m_lmunicipality_name); 
						?>					
					</a>		
				</td>	
				<td class="center">
					<a class="pointer" href="javascript:void(0)" onclick="if (window.parent) window.parent.<?php echo $this->escape($function);?>('<?php echo $item->id; ?>', '<?php echo $this->escape(addslashes($item->name)); ?>');">
						<?php echo $this->escape($item->category_title); ?>
					</a>		
				</td>	
				<td class="center">
					<a class="pointer" href="javascript:void(0)" onclick="if (window.parent) window.parent.<?php echo $this->escape($function);?>('<?php echo $item->id; ?>', '<?php echo $this->escape(addslashes($item->name)); ?>');">
						<?php echo JHtml::_('jgrid.published', $item->state, $i, 'houses.', false, 'cb'); ?>
					</a>		
				</td>
				<td class="center">
					<a class="pointer" href="javascript:void(0)" onclick="if (window.parent) window.parent.<?php echo $this->escape($function);?>('<?php echo $item->id; ?>', '<?php echo $this->escape(addslashes($item->name)); ?>');">
					<?php if ($item->language=='*'):?>
						<?php echo JText::alt('JALL', 'language'); ?>
					<?php else:?>
						<?php echo $item->language_title ? $this->escape($item->language_title) : JText::_('JUNDEFINED'); ?>
					<?php endif;?>
					</a>		
				</td>
				<td class="center">
					<a class="pointer" href="javascript:void(0)" onclick="if (window.parent) window.parent.<?php echo $this->escape($function);?>('<?php echo $item->id; ?>', '<?php echo $this->escape(addslashes($item->name)); ?>');">
						<?php echo $item->id; ?>
					</a>		
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="12">
					<?php echo $this->pagination->getListFooter(); ?>
				</td>
			</tr>
		</tfoot>		
	</table>

	<input type="hidden" name="task" value="" />
	<input type="hidden" name="form_id" id="form_id" value="adminForm" />
	<input type="hidden" name="filter_order" value="<?php echo $list_order; ?>" />
	<input type="hidden" name="filter_order_Dir" value="<?php echo $list_dirn; ?>" />
	<?php echo JHtml::_('form.token'); ?>
</form>
