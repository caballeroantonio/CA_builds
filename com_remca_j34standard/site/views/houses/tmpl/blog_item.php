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
 * @CAversion		Id: blog_item.php 571 2016-01-04 15:03:02Z BrianWade $
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

use Joomla\Registry\Registry;

/*
 *	Initialise values for the layout 
 */	
 
// Create a shortcut for params.
$params = &$this->item->params;
$user		= JFactory::getUser();
$layout		= $params->get('house_layout', 'default');
$info		= $this->item->params->get('house_info_block_position', 0);
$can_edit	= $params->get('access-edit');
$can_delete = $params->get('access-delete');
// Get from global settings the text to use for an empty field
$component = JComponentHelper::getComponent( 'com_remca' );
$empty = $component->params->get('default_empty_field', '');
$images = $this->item->images;

/*
 *	Layout HTML
 */
?>

<?php if ($this->item->state == 0) : ?>
	<div class="system-unpublished">
<?php endif; ?>
<?php if ($params->get('show_house_icons',-1) >= 0) : ?>
	<?php if (($params->get('show_house_print_icon') 
		OR $params->get('show_house_email_icon') 
		OR $can_edit
		OR $can_delete
			)
		) : ?>
		<ul class="actions">
			<?php if ($params->get('show_house_print_icon')) : ?>
			<li class="print-icon">
				<?php echo JHtml::_('houseicon.print_popup', $this->item, $params); ?>
			</li>
			<?php endif; ?>
			<?php if ($params->get('show_house_email_icon')) : ?>
			<li class="email-icon">
				<?php echo JHtml::_('houseicon.email', $this->item, $params); ?>
			</li>
			<?php endif; ?>

			<?php if ($can_edit) : ?>
				<li class="edit-icon">
					<?php echo JHtml::_('houseicon.edit', $this->item, $params); ?>
				</li>
			<?php endif; ?>
			<?php if ($can_delete) : ?>
				<li class="delete-icon">
					<?php echo JHtml::_('houseicon.delete',$this->item, $params); ?>
				</li>		
			<?php endif; ?>
		</ul>
	<?php endif; ?>
<?php endif; ?>
<?php if ($params->get('show_house_name')) : ?>
<h2>
		<?php if ($params->get('link_house_names') ) : ?>
			<a href="<?php echo JRoute::_(RemcaHelperRoute::getHouseRoute($this->item->slug, 
											$this->item->catid, 
											$this->item->language,
											$layout,									
											$params->get('keep_house_itemid'))); ?>">
			<?php echo $this->escape($this->item->name); ?></a>
		<?php else : ?>
			<?php echo $this->escape($this->item->name); ?>
		<?php endif; ?>
</h2>
<?php endif; ?>

<?php  echo $this->item->event->afterDisplayHouseName;
?>
<?php echo $this->item->event->beforeDisplayHouse; ?>
<?php if (($params->get('show_house_image', '0') == '1' AND isset($images['image_url'])  AND $images['image_url'] <> "")): ?>	
 <div style="float: right;">
		<?php 
					$image = $images['image_url'];
					
					list($img_width, $img_height) = getimagesize($image);
					
					$display_width = (int) $params->get('show_house_intro_image_width','100');
					$display_height = (int) $params->get('show_house_intro_image_height','0');
					
					if ($display_width > $img_width) :
						if ($display_height < $img_height AND $display_height > 0) :
							$display_width = 0;
						endif;
					else :
						$display_height = 0;
					endif;
		?>
		<img src="<?php echo $image; ?>"
			<?php if ($display_width > 0) : ?>
				<?php echo 'width="'.$display_width.'"'; ?>"
			<?php endif; ?>	
			<?php if ($display_height > 0) : ?>
				<?php echo 'height="'.$display_height.'"'; ?>
			<?php endif; ?>	
			<?php if ($images['image_caption']): ?>
				<?php echo 'class="caption"'.' title="' .htmlspecialchars($images['image_caption']) . '"'; ?>
			<?php endif; ?>				
			<?php echo  $images['image_alt_text'] != '' ?'alt="'.$this->escape($images['image_alt_text']).'"':'alt="'.$this->escape($this->item->name).'"';?>
		/>
	</div>
<?php endif; ?>	
<?php // to do not that elegant would be nice to group the params ?>

<?php 
	$dummy = false;
	$use_def_list = (
		($params->get('show_house_category')) OR 
		($params->get('show_house_parent_category') AND $this->item->parent_slug != '1:root') OR 
		($params->get('show_house_modified')) OR 
		($params->get('show_house_hits')) OR
		$dummy
	);
?>

<?php if (!$params->get('show_house_readmore') 
		):?>
	<?php
		if ($use_def_list AND $info == 0) :
			echo $this->loadTemplate('item_info');
		endif;
	?>
		
	<?php echo $this->item->description; ?>
	
	<?php
		if ($use_def_list AND $info == 1) :
			echo $this->loadTemplate('item_info');
		endif;
	?>
<?php else : ?>
	<?php
		if ($use_def_list AND $info == 0) :
			echo $this->loadTemplate('item_info');
		endif;
	?>	
	<?php
		if ($use_def_list AND $info == 1) :
			echo $this->loadTemplate('item_info');
		endif;
	?>			
	<?php //Optional link to let them register to see the whole house. ?>
	<?php if ($params->get('show_house_readmore')) :
				$link = JRoute::_(RemcaHelperRoute::getHouseRoute($this->item->slug, 
																							$this->item->catid, 
																							$this->item->language,
																							$layout,									
																							$params->get('keep_house_itemid')));
			?>
			<p class="readmore">
				<a href="<?php echo $link; ?>">
			<?php
				$item_params = new Registry;				
				$item_params->loadString($this->item->params);
				if ($item_params->get('house_alternative_readmore') == null) :
						if ($params->get('show_house_readmore_name') == 0) :
							echo JText::sprintf('COM_REMCA_READ_MORE');
						else :
							echo JText::_('COM_REMCA_READMORE_NAME');
							echo JHtml::_('string.truncate', ($this->item->name), $params->get('house_readmore_limit'));
						endif;
				else :
					echo $this->item->house_alternative_readmore;
					if ($params->get('show_house_readmore_name') == 1) :
						echo JHtml::_('string.truncate', ': '.($this->item->name), $params->get('house_readmore_limit'));
					endif;	
				endif;?>
			</a>
		</p>
	<?php endif; ?>
<?php endif; ?>

<?php if ($this->item->state == 0) : ?>
	</div>
<?php endif; ?>

<div class="item-separator"></div>
<?php echo $this->item->event->afterDisplayHouse; ?>
