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
<div class="remca maincategory-view<?php echo $params->get('pageclass_sfx')?>">
	<?php if ($this->params->get('show_page_heading')) : ?>
	<h1>
		<?php echo $this->escape($this->params->get('page_heading')); ?>
	</h1>
	<?php endif; ?>
	<?php if ($params->get('show_maincategory_icons',-1) >= 0) : ?>
		<?php if ($params->get('show_maincategory_print_icon') 
			OR $params->get('show_maincategory_email_icon') 
			): ?>
			<div class="btn-group pull-right">
				<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <span class="icon-cog"></span> <span class="caret"></span> </a>
				<ul class="dropdown-menu">
					<?php if (!$this->print) : ?>
						<?php if ($params->get('access-view')) : ?>
							<?php if ($params->get('show_maincategory_print_icon')) : ?>
								<li class="print-icon">
										<?php echo JHtml::_('maincategoryicon.print_popup',  $this->item, $params); ?>
								</li>
							<?php endif; ?>

							<?php if ($params->get('show_maincategory_email_icon')) : ?>
								<li class="email-icon">
										<?php echo JHtml::_('maincategoryicon.email',  $this->item, $params); ?>
								</li>
							<?php endif; ?>
								<li class="edit-icon">
									<?php echo JHtml::_('maincategoryicon.edit', $this->item, $params); ?>
								</li>
								<li class="delete-icon">
									<?php echo JHtml::_('maincategoryicon.delete',$this->item, $params); ?>
								</li>					
						<?php endif; ?>
					<?php else : ?>
						<li>
							<?php echo JHtml::_('maincategoryicon.print_screen',  $this->item, $params); ?>
						</li>
					<?php endif; ?>
				</ul>
			</div>
		<?php endif; ?>
	<?php endif; ?>

	<?php if ($params->get('show_maincategory_name')) : ?>
		<div style="float: left;">
			<h2>
				<?php if ($params->get('link_maincategory_names') AND !empty($this->item->readmore_link)) : ?>
					<a href="<?php echo $this->item->readmore_link; ?>">
					<?php echo $this->escape($this->item->name); ?></a>
				<?php else : ?>
					<?php echo $this->escape($this->item->name); ?>
				<?php endif; ?>
			</h2>
		</div>
	<?php endif; ?>
	<?php  echo $this->item->event->afterDisplayMainCategoryName;	?>
	
	<?php echo $this->item->event->beforeDisplayMainCategory; ?>
	<div style="clear:both; padding-top: 10px;">

		<?php if ($params->get('access-view')) :?>
				<div>
				<?php echo $this->item->description; ?>
				</div>
			<?php //optional teaser intro text for guests ?>
		<?php elseif ($params->get('show_maincategory_noauth') == true AND  $user->get('guest') ) : ?>
			<?php //Optional link to let them register to see the whole main_category. ?>
			<?php if ($params->get('show_maincategory_readmore')) :
				$menu = JFactory::getApplication()->getMenu();
				$active = $menu->getActive();
				$item_id = $active->id;
				$link_1 = JRoute::_('index.php?option=com_users&view=login&Itemid=' . $item_id);
				
				$return_url = $this->item->readmore_link;
									
				$link = new JUri($link_1);
				$link->setVar('return', base64_encode($return_url));?>
				<p class="readmore">
					<a href="<?php echo $link; ?>">
						<?php
						if ($this->item->maincategory_alternative_readmore == null) :
							if ($params->get('show_maincategory_readmore_name') == 0) :					
								echo JText::_('COM_REMCA_REGISTER_TO_READ_MORE');
							else :
								echo JText::_('COM_REMCA_REGISTER_TO_READMORE_NAME');
								echo JHtml::_('string.truncate', ($this->item->name), $params->get('maincategory_readmore_limit'));
							endif;
						else :
							echo $this->item->maincategory_alternative_readmore;
							if ($params->get('show_maincategory_readmore_name') == 1) :
								echo JHtml::_('string.truncate', ': '.($this->item->name), $params->get('maincategory_readmore_limit'));
							endif;
						endif;
						?>
					</a>
				</p>				
			<?php endif; ?>
		<?php endif; ?>
	</div>
	<div style="padding-top: 10px;">
		<?php if ($params->get('access-view')) : ?>	

			<form action="" name="maincategoryForm" id="maincategoryForm">
			<?php $dummy = false;
					$display_fieldset = (
								($params->get('show_maincategory_parent_id')) OR 
								($params->get('show_maincategory_associate_category')) OR 
								($params->get('show_maincategory_title')) OR 
								($params->get('show_maincategory_image')) OR 
								($params->get('show_maincategory_section')) OR 
								($params->get('show_maincategory_image_position')) OR 
								($params->get('show_maincategory_editor')) OR 
								($params->get('show_maincategory_count')) OR 
								($params->get('show_maincategory_params2')) OR 
								$dummy
								);
			?>
			<?php if ($display_fieldset) : ?>				
				<fieldset>	
					<legend><?php echo JText::_('COM_REMCA_MAIN_CATEGORIES_FIELDSET_JOS_REM_MAIN_CATEGORIES_FS_LABEL'); ?></legend>
			<?php endif; ?>
					<div style="padding-top: 10px;">			
						<?php if ($params->get('show_maincategory_parent_id')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_MAIN_CATEGORIES_FIELD_PARENT_ID_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->parent_id != '' ? $this->item->parent_id : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_maincategory_associate_category')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_MAIN_CATEGORIES_FIELD_ASSOCIATE_CATEGORY_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->associate_category != '' ? $this->item->associate_category : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_maincategory_title')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_MAIN_CATEGORIES_FIELD_TITLE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->title != '' ? $this->item->title : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_maincategory_image')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_MAIN_CATEGORIES_FIELD_IMAGE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->image != '' ? $this->item->image : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_maincategory_section')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_MAIN_CATEGORIES_FIELD_SECTION_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->section != '' ? $this->item->section : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_maincategory_image_position')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_MAIN_CATEGORIES_FIELD_IMAGE_POSITION_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->image_position != '' ? $this->item->image_position : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_maincategory_editor')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_MAIN_CATEGORIES_FIELD_EDITOR_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->editor != '' ? $this->item->editor : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_maincategory_count')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_MAIN_CATEGORIES_FIELD_COUNT_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->count != '' ? $this->item->count : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_maincategory_params2')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_MAIN_CATEGORIES_FIELD_PARAMS2_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->params2 != '' ? $this->item->params2 : $empty;
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
							($params->get('show_maincategory_admin') AND $this->item->params->get('access-change')) OR							
							$dummy
							);
			?>
			<?php if ($display_fieldset) : ?>				
					<fieldset>
						<legend><?php echo JText::_('COM_REMCA_FIELDSET_PUBLISHING_LABEL'); ?></legend>
			<?php endif; ?>
	
				<?php if ($params->get('show_maincategory_admin')) : ?>
				
					<div class="formelm">
						<label>
						<?php echo JText::_('COM_REMCA_FIELD_STATUS_LABEL'); ?>
						</label>
						<span>
							<?php 
								switch ($this->item->state) :
									case '1':
										echo JText::_('JPUBLISHED');
										break;
									case '0':
										echo JText::_('JUNPUBLISHED');
										break;
									case '2':
										echo JText::_('JARCHIVED');
										break;
									case '-2':
										echo JText::_('JTRASH');
										break;
								endswitch;
							?>
						</span>	
					</div>
					<div class="formelm">
						<label>
							<?php echo JText::_('COM_REMCA_FIELD_ACCESS_LABEL'); ?>
						</label>
						<span>
							<?php echo $this->item->access_title; ?>
						</span>
					</div>
					<div class="formelm">
						<label>
							<?php echo JText::_('JFIELD_ORDERING_LABEL'); ?>
						</label>
						<span>
							<?php echo $this->item->ordering; ?>
						</span>
					</div>	
				<?php endif; ?>
				
			
			<?php if ($display_fieldset) : ?>				
					</fieldset>	
			<?php endif;?>	
			</form>
		<?php endif; ?>	
		<?php echo $this->item->event->afterDisplayMainCategory; ?>
	</div>		
</div>