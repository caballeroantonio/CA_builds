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
				<div class="input-append">
					<input type="text" name="filter_search" id="filter_search" value="<?php echo $this->escape($this->state->get('filter.search')); ?>" onchange="document.adminForm.submit();" title="<?php echo JText::_('COM_REMCA_FILTER_SEARCH_DESC'); ?>" placeholder="<?php echo JText::_('COM_REMCA_'.$this->params->get('show_house_filter_field').'_FILTER_LABEL'); ?>" />
                    <button type="submit" class="btn hasTooltip" title="" data-original-title="<?= JText::_('JSEARCH_FILTER_SUBMIT') ?>"> <i class="icon-search"></i> </button>
				</div>
                <!--<button type="button" class="btn hasTooltip js-stools-btn-clear" title="" data-original-title="<?= JText::_('JSEARCH_FILTER_CLEAR') ?>"><?= JText::_('JSEARCH_FILTER_CLEAR') ?></button>-->
				<?php endif; ?>	
				<?php if ($this->params->get('show_house_category',1)) : ?>
				<select name="filter_category_id" onchange="this.form.submit()">
					<option value=""><?php echo JText::_('JOPTION_SELECT_CATEGORY');?></option>
					<?php echo JHtml::_('select.options', JHtml::_('category.options', 'com_remca'), 'value', 'text', $this->state->get('filter.category_id'));?>
				</select>
				<?php endif; ?>	
				<?php if ($this->params->get('list_show_house_site',1)) : ?>
					<select name="filter_site" onchange="this.form.submit()">
					<option value=""><?php echo JText::_('COM_REMCA_HOUSES_SELECT_SITE');?></option>
					<?php echo JHtml::_('select.options', $this->site_values, 'value', 'text', $this->state->get('filter.site'));?>
					</select>
				<?php endif; ?>	
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
				<?php if ($this->params->get('list_show_house_price',1)) : ?>
					<input name="filter_price_lt" id="filter_price_lt" value="<?= $this->state->get('filter.price_lt') ?>" title="<?php echo JText::_('COM_REMCA_HOUSES_SELECT_PRICE');?>" placeholder="min" type="number">
					<input name="filter_price_gt" id="filter_price_gt" value="<?= $this->state->get('filter.price_gt') ?>" title="<?php echo JText::_('COM_REMCA_HOUSES_SELECT_PRICE');?>" placeholder="max" type="number">
				<?php endif; ?>	
				<?php if ($this->params->get('list_show_house_bathrooms',1)) : ?>
					<select name="filter_bathrooms" onchange="this.form.submit()">
					<option value=""><?php echo JText::_('COM_REMCA_HOUSES_SELECT_BATHROOMS');?></option>
					<?php echo JHtml::_('select.options', $this->bathrooms_values, 'value', 'text', $this->state->get('filter.bathrooms'));?>
					</select>
				<?php endif; ?>	
				<?php if ($this->params->get('list_show_house_bedrooms',1)) : ?>
					<select name="filter_bedrooms" onchange="this.form.submit()">
					<option value=""><?php echo JText::_('COM_REMCA_HOUSES_SELECT_BEDROOMS');?></option>
					<?php echo JHtml::_('select.options', $this->bedrooms_values, 'value', 'text', $this->state->get('filter.bedrooms'));?>
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
        if ( $this->params->get('location_map',1)){
            RemcaHelper::add_google_map($this->params, $this->items);
        }
?>

<div class="page-header">
    <h2 itemprop="headline"><a href="index.php?option=com_remca&view=wisheslist" target="_blank"><?php echo JText::_('COM_REMCA_WISHESLIST'); ?></a></h2>
</div>  
<div data-collumn-lg="3" data-collumn-md="3" data-collumn-sm="2" data-collumn-xs="2" class="regular slider" >

</div>
      
<div class="page-header">
    <h2 itemprop="headline">Resultados</h2>
</div>  
<div class="REL-row">
  <div class="REL-collumn-xs-12 REL-collumn-sm-12 REL-collumn-md-12 REL-collumn-lg-12">
    <div id="gallery_rem" data-collumn-lg="3" data-collumn-md="3" data-collumn-sm="2" data-collumn-xs="2" >
      <?php foreach($this->items as $item): ?>
      <?php 
        $link = JRoute::_(RemcaHelperRoute::getHouseRoute($item->slug, 
                $item->catid, 
                $item->language,
                $layout,									
                $item->params->get('keep_house_itemid')));
		
        if($item->images['image_url'] == '')
            $item->images['image_url'] = JText::_('_REALESTATE_MANAGER_NO_PICTURE_BIG');
      ?>
      <div class="okno_R" id="block<?php echo $item->id ?>"  data-id="<?= $item->id ?>">
        <div id="divamage" style = "position: relative; text-align:center;"> 
            <a href="<?= $link ?>" style="text-decoration: none">
                <img alt="<?php echo $item->name ?>" title="<?php echo $item->name ?>" src="<?= $item->images['image_url'] ?>" border="0" class="little" /> 
            </a>
          <i class="fa fa-heart-o ui-item__bookmark"></i>

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
            <?php if($item->lot_size):?>
            <div class="row_text"> <i class="fa fa-expand"></i> <span class="col_text_2"><?php echo $item->lot_size ?> m2</span> </div>
            <?php endif; ?>
            <?php if($item->rooms):?>
            <div class="row_text"> <i class="fa fa-building-o"></i> <span class="col_text_1"><?=JText::_('COM_REMCA_HOUSES_FIELD_ROOMS_LABEL')?>:</span> <span class="col_text_2"><?php echo $item->rooms ?></span> </div>
            <?php endif; ?>
            <?php if($item->year):?>
            <div class="row_text"> <i class="fa fa-calendar"></i> <span class="col_text_1"><?=JText::_('COM_REMCA_HOUSES_FIELD_YEAR_LABEL')?>:</span> <span class="col_text_2"><?php echo $item->year ?></span> </div>
            <?php endif; ?>
            <?php if($item->bedrooms):?>
            <div class="row_text"> <i class="fa fa-inbox"></i> <span class="col_text_1"><?=JText::_('COM_REMCA_HOUSES_FIELD_BEDROOMS_LABEL')?>:</span> <span class="col_text_2"><?php echo $item->bedrooms ?></span> </div>
            <?php endif; ?>
          </div>
        </div>
        <div class="rem_house_viewlist"> <a href="<?= $link ?>" style="display: block">
          <div class="price"><?php echo number_format($item->price, 2, '.', ',') ?> <?= $item->id_currency ?></div>
          <span><?=JText::_('JDETAILS')?></span> </a>
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
		<?php 
			if(true){
				//JHtml::_('houseicon.create', $this->params); 
	            echo '<span class="hasTooltip tip" title="Export"><a href="index.php?task=houses.export" class="btn btn-primary"><span class="icon-download"></span>Export</a></span>';
			}
        ?>
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

<?php
//slick
$doc = JFactory::getDocument();//@bug se que se repite pero sin él aveces marca error.
$doc->addStyleSheet('media/com_remca/slick/slick.css');
$doc->addStyleSheet('media/com_remca/slick/slick-theme.css');
$doc->addScript('media/com_remca/slick/slick.min.js');
?>
<script type="text/javascript">
    jQuery(function ($) {
        $(".regular").slick({
            dots: true,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3
        });
		  
        $('.ui-item__bookmark').on('click', function(evnt) {
            target = evnt.target;
            parent = target.closest('.okno_R');

            in_gallery = $(target).hasClass('fa-heart-o');
            $(target).toggleClass( "fa-heart-o", !in_gallery ).toggleClass( "fa-times-circle", in_gallery );
            if(in_gallery){
                //$(target).toggleClass( "fa-heart-o", false ).toggleClass( "fa-times-circle", true );

                $('.slider').slick('slickAdd',parent);
            }else{
                //$(target).toggleClass( "fa-heart-o", true ).toggleClass( "fa-times-circle", false );

                $(parent).removeAttr('data-slick-index').appendTo('#gallery_rem');
                index = $(parent).attr('data-slick-index');
                $('.slider').slick('slickRemove',index);//return slider
            }
            
            //set wishlist
            jQuery.ajax({
                url: "index.php",
                method: 'POST',
                data : { 
                    'task' : 'remca.wish_request', 
                    'jform[id_house]' : $(parent).data("id"),
                    'jform[state]': in_gallery & 1,
                },
            });
        });
    });
</script>