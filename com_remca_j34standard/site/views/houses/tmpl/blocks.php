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
$this->document->addStyleSheet(JUri::root().'media/com_remca/css/site_houses.css');

if ($lang->isRTL())
{
	$this->document->addStyleSheet(JUri::root().'media/com_remca/css/site_remca-rtl.css');
	$this->document->addStyleSheet(JUri::root().'media/com_remca/css/site_houses-rtl.css');
}

// Add Javscript functions for field display
JHtml::_('behavior.caption');
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

$layout		= $this->params->get('house_layout', 'default');

$can_create	= $user->authorise('core.create', 'com_remca');
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
<div class="remca houses-list<?php echo $this->params->get('pageclass_sfx');?>">
	<?php if ($this->params->get('show_page_heading')): ?>
		<div class="page-header">
			<h1><?php echo $this->escape($this->params->get('page_heading')); ?></h1>
		</div>
	<?php endif; ?>

	<?php
		$can_edit = 0;$can_delete = 0;
		$show_actions = false;
		if ($this->params->get('show_house_icons',1) >= 0) :
			foreach ($this->items as $i => $item) :
				if ($item->params->get('access-edit',1) OR $item->params->get('access-delete',1)) :
					$show_actions = true;
					continue;
				endif;
			endforeach;
		endif;
	?>
	<form action="<?php echo htmlspecialchars(JUri::getInstance()->toString()); ?>" method="post" name="adminForm" id="adminForm">
		<?php if (($this->params->get('show_house_filter_field') != '' AND $this->params->get('show_house_filter_field') != 'hide')) :?>
			<div class="filter-search">
				<?php if ($this->params->get('show_house_filter_field') != '' AND $this->params->get('show_house_filter_field') != 'hide') :?>
					<input type="text" name="filter_search" id="filter_search" value="<?php echo $this->escape($this->state->get('filter.search')); ?>" onchange="document.adminForm.submit();" title="<?php echo JText::_('COM_REMCA_FILTER_SEARCH_DESC'); ?>" placeholder="<?php echo JText::_('COM_REMCA_'.$this->params->get('show_house_filter_field').'_FILTER_LABEL'); ?>" />
				<?php endif; ?>	
				<select name="filter_category_id" onchange="this.form.submit()">
					<option value=""><?php echo JText::_('JOPTION_SELECT_CATEGORY');?></option>
					<?php echo JHtml::_('select.options', JHtml::_('category.options', 'com_remca'), 'value', 'text', $this->state->get('filter.category_id'));?>
				</select>
				<?php if ($this->params->get('list_show_house_id_country',1)) : ?>
					<select name="filter_id_country" onchange="this.form.submit()">
					<option value=""><?php echo JText::_('COM_REMCA_HOUSES_SELECT_C1_COUNTRY');?></option>
					<?php echo JHtml::_('select.options', $this->countries, 'value', 'text', $this->state->get('filter.id_country'));?>
					</select>
				<?php endif; ?>	
				<?php if ($this->params->get('list_show_house_id_lstate',1)) : ?>
					<select name="filter_id_lstate" onchange="this.form.submit()">
					<option value=""><?php echo JText::_('COM_REMCA_HOUSES_SELECT_S_LSTATE');?></option>
					<?php echo JHtml::_('select.options', $this->lstates, 'value', 'text', $this->state->get('filter.id_lstate'));?>
					</select>
				<?php endif; ?>	
				<?php if ($this->params->get('list_show_house_id_lmunicipality',1)) : ?>
					<select name="filter_id_lmunicipality" onchange="this.form.submit()">
					<option value=""><?php echo JText::_('COM_REMCA_HOUSES_SELECT_M_LMUNICIPALITY');?></option>
					<?php echo JHtml::_('select.options', $this->lmunicipalities, 'value', 'text', $this->state->get('filter.id_lmunicipality'));?>
					</select>
				<?php endif; ?>	
			</div>
		<?php endif; ?>

		<?php if ($this->params->get('show_house_pagination_limit')) : ?>
			<div class="display-limit">
				<?php echo JText::_('JGLOBAL_DISPLAY_NUM'); ?>&#160;
				<?php echo $this->pagination->getLimitBox(); ?>
			</div>
		<?php endif; ?>	
		<div style="clear:both;"></div>				
		<?php if (empty($this->items)) : ?>

			<?php if ($this->params->get('show_no_houses',1)) : ?>
			<p><?php echo JText::_('COM_REMCA_HOUSES_NO_ITEMS'); ?></p>
			<?php endif; ?>

		<?php else : ?>
		
        <!-- begin blocks -->
	<?php        
	$doc = JFactory::getDocument();

	$doc->addStyleSheet('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
	$doc->addStyleSheet('//maxcdn.bootstrapcdn.com/bootstrap/2.3.2/css/bootstrap.min.css');
	$doc->addStyleSheet('media/com_remca/includes/animate.css');
	$doc->addStyleSheet('media/com_remca/includes/jquery-ui.css');
	$doc->addStyleSheet('media/com_remca/includes/bootstrapREL.css');
	$doc->addStyleSheet('media/com_remca/includes/realestatemanager.css');
	$doc->addStyleSheet('media/com_remca/TABS/tabcontent.css');
	$doc->addStyleSheet('media/com_remca/includes/swiper.css');
/**
* fancyBox is licensed under the GPLv3 license for all open source applications. A commercial license is required for all commercial applications (including sites, themes and apps you plan to sell).
*/
$doc->addStyleSheet('media/com_remca/fancybox/jquery.fancybox-1.3.4.css');
$doc->addScript('media/com_remca/fancybox/jquery.fancybox-1.3.4.pack.js');
//	$doc->addStyleSheet('/rem/templates/protostar/css/template.css?3b38ba053f7be5a0cc29ca30b92f283f');
	$doc->addStyleSheet('//fonts.googleapis.com/css?family=Open+Sans');	
	$doc->addStyleDeclaration("h1, h2, h3, h4, h5, h6, .site-title { font-family: 'Open Sans', sans-serif; }");

        $remca_helper = new RemcaHelper();
        
        //draw maps
//        if ( $this->params->get('location_map',1)){
//            RemcaHelper::add_google_map($this->params, $this->items);
//        }
?>

<div class="REL-row">
  <div class="REL-collumn-xs-12 REL-collumn-sm-12 REL-collumn-md-12 REL-collumn-lg-12">
    <div id="gallery_rem" data-collumn-lg="3" data-collumn-md="3" data-collumn-sm="2" data-collumn-xs="2" >
      <?php foreach($this->items as $item): ?>
      <?php 
        $item->photos = json_decode($item->photos); 
        $link = JRoute::_(RemcaHelperRoute::getHouseRoute($item->slug, 
                $item->catid, 
                $item->language,
                $layout,									
                $item->params->get('keep_house_itemid')));
      ?>
      <div class="okno_R" id="block<?php echo $item->id ?>">
        <div id="divamage" style = "position: relative; text-align:center;"> <a href="<?= $link ?>" style="text-decoration: none"> <img alt="<?php echo $item->name ?>" title="<?php echo $item->name ?>" src="<?= $item->photos[0]->thumbnail_img ?>" border="0" class="little"> </a>
          <?php if ($item->state == true) :?>
          <div class="rem_listing_status">Active</div>
          <?php endif?>
          <div class="col_rent">
            <?php echo $item->category_title; ?>
          </div>
          <!-- col_rent -->
        </div>
        <div class="texthouse">
          <div class="titlehouse">
              <a href="<?= $link ?>" >
                  <?php echo $this->escape($item->name); ?>
              </a>
            <div style="clear: both;"></div>
          </div>
          <div style="clear: both;"></div>
          <div class="rem_type_Allhouses">
            <div class="row_text"> <i class="fa fa-expand"></i> <span class="col_text_2"><?php echo $item->lot_size ?> Sqrt</span> </div>
            <div class="row_text"> <i class="fa fa-building-o"></i> <span class="col_text_1">Rooms:</span> <span class="col_text_2"><?php echo $item->rooms ?></span> </div>
            <div class="row_text"> <i class="fa fa-calendar"></i> <span class="col_text_1">Built year:</span> <span class="col_text_2"><?php echo $item->year ?></span> </div>
            <div class="row_text"> <i class="fa fa-inbox"></i> <span class="col_text_1">Bedrooms:</span> <span class="col_text_2"><?php echo $item->bedrooms ?></span> </div>
          </div>
        </div>
        <div class="rem_house_viewlist"> <a href="<?= $link ?>" style="display: block">
          <div class="price"><?php echo $item->price ?> <?= $item->id_currency ?></div>
          <span>View listing</span> </a>
          <div style="clear: both;"></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
        <!-- end blocks -->
        
        
			<?php if (($this->params->def('show_house_pagination', 2) == 1  OR ($this->params->get('show_house_pagination') == 2)) AND ($this->pagination->get('pages.total') > 1)) : ?>
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
				<input type="hidden" name="boxchecked" value="0" />			
				<input type="hidden" name="filter_order" value="" />
				<input type="hidden" name="filter_order_Dir" value="" />
				<input type="hidden" name="limitstart" value="" />
				<?php echo JHtml::_('form.token'); ?>
			</div>
		<?php endif; ?>
		<?php // Code to add a link to submit an house. ?>
		<?php if ($this->params->get('show_house_add_link', 1)) : ?>
			<?php if ($can_create) : ?>
				<?php echo JHtml::_('houseicon.create', $this->params); ?>
			<?php  endif; ?>
		<?php endif; ?>		
                <?php echo '<button>export</button>'//JHtml::_('houseicon.create', $this->params); ?>
	</form>
</div>

<?php if ($can_edit AND $params->get('save_history') AND $params->get('house_save_history')) : ?>
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
	modalBody.prepend('<iframe class="iframe" src="index.php?option=com_remca&task=house.showHistory&item_id='+item_id+'" name="titulo" height="450"></iframe>');
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