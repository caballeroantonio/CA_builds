<?php 
if (!defined('_VALID_MOS') && !defined('_JEXEC')) 
  die('Direct Access to ' . basename(__FILE__) . ' is not allowed.');
/**
 *
 * @package  RealestateManager
 * @copyright 2012 Andrey Kvasnevskiy-OrdaSoft(akbet@mail.ru); Rob de Cleen(rob@decleen.com);
 * Homepage: http://www.ordasoft.com
  * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version: 3.9 PRO
 *
 *
 */

global $hide_js, $mainframe, $Itemid, $realestatemanager_configuration, 
  $mosConfig_live_site, $mosConfig_absolute_path, $my, $doc, $arr, $acl,$langContent;


$watermark_path = ($realestatemanager_configuration['watermark']['show'] == 1) ? 'watermark/' : '';
$watermark = ($realestatemanager_configuration['watermark']['show'] == 1) ? true : false;  

JHtml::_('behavior.framework', true);

if (!JFactory::getApplication()->get('os_lightbox')) 
  JFactory::getApplication()->set('os_lightbox', true);
// add os_lightbox
////////////Adding google map
$realestatemanager_configuration = $GLOBALS['realestatemanager_configuration'];
if ($realestatemanager_configuration['location_tab']['show'] 
    || $realestatemanager_configuration['street_view']['show']) {
  $api_key = $realestatemanager_configuration['api_key'] ? "key=" . $realestatemanager_configuration['api_key'] : JFactory::getApplication()->enqueueMessage("<a target='_blank' href='//developers.google.com/maps/documentation/geocoding/get-api-key'>" . _REALESTATE_MANAGER_GOOGLEMAP_API_KEY_LINK_MESSAGE . "</a>", _REALESTATE_MANAGER_GOOGLEMAP_API_KEY_ERROR); 
  $doc->addScript("//maps.googleapis.com/maps/api/js?{$api_key}");
  if($realestatemanager_configuration['street_view']['show']){
    ?>
    <script type="text/javascript">  
      window.addEvent('domready', function() {
        initialize();
      });
      var map;
      var myLatlng=new google.maps.LatLng(<?php
        if ($house->hlatitude && $house->hlatitude != '')
          echo $house->hlatitude;
        else
          echo 0;
        ?>,<?php
        if ($house->hlongitude && $house->hlongitude != '')
          echo $house->hlongitude;
        else
          echo 0;
        ?>);
      var sv = new google.maps.StreetViewService();

      var panorama;
      function initialize(){
        var myOptions = {
            zoom: <?php if ($house->map_zoom)
                            echo $house->map_zoom;
                        else
                            echo 1;
                        ?>,
            center: myLatlng,
            scrollwheel: false,
            zoomControlOptions: {
                style: google.maps.ZoomControlStyle.LARGE
            },
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        if(document.getElementById("map_canvas") != undefined){
          map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
        }
        var imgCatalogPath = "<?php echo $mosConfig_live_site;
         ?>/components/remca/";
  <?php
        $newArr = explode(",", _REALESTATE_MANAGER_HOUSE_MARKER);
        $numPick = '';
        if (isset($newArr[$house->property_type])) {
            $numPick = $newArr[$house->property_type];
        }
  ?>
        var srcForPic = "<?php echo $numPick; ?>";
        var image = '';
        if(srcForPic.length){
          var image = new google.maps.MarkerImage(imgCatalogPath + srcForPic,
          new google.maps.Size(32, 32),
          new google.maps.Point(0,0),
          new google.maps.Point(16, 32));
        }
        var marker = new google.maps.Marker({ icon: image,position: myLatlng });
        marker.setMap(map);
        var panoramaOptions = {
          position: myLatlng,
          pov: {
            heading: 34,
            pitch: 10
          }
        };
        var streetViewService = new google.maps.StreetViewService();
        var STREETVIEW_MAX_DISTANCE = 50;
        streetViewService.getPanoramaByLocation(myLatlng, STREETVIEW_MAX_DISTANCE, function (streetViewPanoramaData, status) {
          if (status === google.maps.StreetViewStatus.OK) {
            // ok
            var panorama = new google.maps.StreetViewPanorama(document.getElementById('map_pano'), panoramaOptions);
            map.setStreetView(panorama);
          } else {
            document.getElementById('map_pano').style.display = "none";
            // no street view available in this range, or some error occurred
          }
        });

      }
    </script>
    <?php

  }else{

    ?>
    <script type="text/javascript">  
      window.addEvent('domready', function() {
        initialize();
      });
      var map;
      var myLatlng=new google.maps.LatLng(<?php
        if ($house->hlatitude && $house->hlatitude != '')
          echo $house->hlatitude;
        else
          echo 0;
        ?>,<?php
        if ($house->hlongitude && $house->hlongitude != '')
          echo $house->hlongitude;
        else
          echo 0;
        ?>); 
      function initialize(){
        var myOptions = {
            zoom: <?php if ($house->map_zoom)
                            echo $house->map_zoom;
                        else
                            echo 1;
                        ?>,
            center: myLatlng,
            scrollwheel: false,
            zoomControlOptions: {
                style: google.maps.ZoomControlStyle.LARGE
            },
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
        var imgCatalogPath = "<?php echo $mosConfig_live_site;
         ?>/components/remca/";
  <?php
        $newArr = explode(",", _REALESTATE_MANAGER_HOUSE_MARKER);
        $numPick = '';
        if (isset($newArr[$house->property_type])) {
            $numPick = $newArr[$house->property_type];
        }
  ?>
        var srcForPic = "<?php echo $numPick; ?>";
        var image = '';
        if(srcForPic.length){
          var image = new google.maps.MarkerImage(imgCatalogPath + srcForPic,
          new google.maps.Size(32, 32),
          new google.maps.Point(0,0),
          new google.maps.Point(16, 32));
        }
        var marker = new google.maps.Marker({ icon: image,position: myLatlng });
        marker.setMap(map);
      }
    </script>
    <?php }

  }

?>
<div id="overDiv" ></div>

<?php
JPluginHelper::importPlugin('content');
$dispatcher = JDispatcher::getInstance();

?>  
<script language="javascript" type="text/javascript">

function review_submitbutton() {
    var form = document.review_house;
    // do field validation
    var rating_checked = false; 
    for (c = 0;  c < form.rating.length; c++){
        if (form.rating[c].checked){
            rating_checked = true;
            form.rating.value = c ;
        } 
    }
    if (form.title.value == "") {
        alert( "<?php echo _REALESTATE_MANAGER_INFOTEXT_JS_REVIEW_TITLE; ?>" );
    } else if (form.comment == "") {
        alert( "<?php echo _REALESTATE_MANAGER_INFOTEXT_JS_REVIEW_COMMENT; ?>" );
    } else if (! form.rating.value) {                
        alert( "<?php echo _REALESTATE_MANAGER_INFOTEXT_JS_REVIEW_RATING; ?>" );
    } else {
        form.submit();
    }
}
//*****************   begin add for show/hiden button "Add review" ********************
function button_hidden( is_hide ) {
    var el = document.getElementById('button_hidden_review');
    var el2 = document.getElementById('hidden_review');
    if(is_hide){
        el.style.display = 'none';
        el2.style.display = 'block';
    } else {
        el.style.display = 'block';
        el2.style.display = 'none';
    }
}

function buying_request_submitbutton() {
    var form = document.buying_request;
    if (form.customer_name.value == "") {
        document.getElementById('customer_name_warning').innerHTML =
         "<?php echo _REALESTATE_MANAGER_INFOTEXT_JS_RENT_REQ_NAME; ?>";
        document.getElementById('customer_name_warning').style.color = "red";
        document.getElementById('alert_name_buy').style.borderColor = "red";
        document.getElementById('alert_name_buy').style.color = "red";
    } else if (form.customer_email.value == ""|| !isValidEmail(form.customer_email.value)) {
        document.getElementById('customer_email_warning').innerHTML =
         "<?php echo _REALESTATE_MANAGER_INFOTEXT_JS_RENT_REQ_EMAIL; ?>";
        document.getElementById('customer_email_warning').style.color = "red";
        document.getElementById('alert_mail_buy').style.borderColor = "red";
        document.getElementById('alert_mail_buy').style.color = "red";
    } else if (!isValidPhoneNumber(form.customer_phone.value)){
        document.getElementById('customer_phone_warning').innerHTML =
         "<?php echo _REALESTATE_MANAGER_REQUEST_PHONE; ?>";
        document.getElementById('customer_phone_warning').style.color = "red";
        document.getElementById('customer_phone').style.borderColor = "red";
        document.getElementById('customer_phone').style.color = "red";
    } else {
        form.submit();
    }
}
function isValidPhoneNumber(str){
    myregexp = new RegExp("^([_0-9() -;,]*)$");
    mymatch = myregexp.exec(str);
    if(str == "")
        return true;
    if(mymatch != null)
        return true;
    return false;
}
function isValidEmail(str){
    myregexp = new RegExp("^([a-zA-Z0-9_-]+\.)*[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)*\.[a-zA-Z]{2,6}$");
    mymatch = myregexp.exec(str);
    if(str == "")
        return false;
    if(mymatch != null)
        return true;
    return false;
}        
</script>

<?php

    if ($params->get('show_rentstatus') && $params->get('show_rentrequest') 
          && !$params->get('rent_save') && !$params->get('search_request')) {
?>

<!--///////////////////////////////calendar///////////////////////////////////////-->
<script language="javascript" type="text/javascript">  

<?php
    $house_id_fordate =  $house->id;
    $date_NA = available_dates($house_id_fordate);    
?>

    var unavailableDates = Array();
    
    jQuery(document).ready(function() {
        var k=0;
        <?php if(!empty($date_NA)){?>
            <?php foreach ($date_NA as $N_A){ ?>
                 unavailableDates[k]= '<?php echo $N_A; ?>';
                k++;
            <?php } ?>
        <?php } ?>

        function unavailableFrom(date) {
            dmy = date.getFullYear() + "-" + ('0'+(date.getMonth() + 1)).slice(-2) + 
              "-" + ('0'+date.getDate()).slice(-2);
            if (jQuerREL.inArray(dmy, unavailableDates) == -1) {
                return [true, ""];
            } else {
                return [false, "", "Unavailable"];
            }
        }

        function unavailableUntil(date) {
            dmy = date.getFullYear() + "-" + ('0'+(date.getMonth() + 1)).slice(-2) + 
              "-" + ('0'+(date.getDate()-("<?php  if(!$realestatemanager_configuration['special_price']['show']) echo '1';?>"))).slice(-2);
            if (jQuerREL.inArray(dmy, unavailableDates) == -1) {
                return [true, ""];
            } else {
                return [false, "", "Unavailable"];
            }
        }



        jQuery( "#rent_from" ).datepicker(
        {
          minDate: "+0",
          dateFormat: "<?php echo transforDateFromPhpToJquery();?>",
          beforeShowDay: unavailableFrom,
          onClose: function () {
              jQuerREL.ajax({ 
                  type: "POST",
                  update: jQuery(" #alert_date "),
                  success: function( data ) {
                      jQuery("#alert_date").html("");
                  }
              });

              var rent_from = jQuery(" #rent_from ").val();
              var rent_until = jQuery(" #rent_until ").val();
              jQuerREL.ajax({ 
                  type: "POST",
                  url: "index.php?option=remca&task=ajax_rent_calcualete"
                    +"&bid=<?php echo $house->id; ?>&rent_from="+
                    rent_from+"&rent_until="+rent_until,
                  data: { " #do " : " #1 " },
                  update: jQuery(" #message-here "),
                  success: function( data ) {
                      jQuery("#message-here").html(data);
                      jQuery("#calculated_price").val(data);
                  }
              });
          }
        });          
        
        jQuery( "#rent_until" ).datepicker(
        {

          minDate: "+0",
          dateFormat: "<?php echo transforDateFromPhpToJquery();?>",
          beforeShowDay: unavailableUntil,
          onClose: function () {
              jQuerREL.ajax({ 
                  type: "POST",
                  update: jQuery(" #alert_date "),
                  success: function( data ) {
                      jQuery("#alert_date").html("");
                  }
              });

              var rent_from = jQuery(" #rent_from ").val();
              var rent_until = jQuery(" #rent_until ").val();
              jQuerREL.ajax({ 
                  type: "POST",
                  url: "index.php?option=remca&task=ajax_rent_calcualete"
                    +"&bid=<?php echo $house->id; ?>&rent_from="+
                    rent_from+"&rent_until="+rent_until,
                  data: { " #do " : " #1 " },
                  update: jQuery(" #message-here "),
                  success: function( data ) {
                      jQuery("#message-here").html(data);
                      jQuery("#calculated_price").val(data);
                  }
              });
          }
        }); 

    });

    <!--///////////////////////////////////////////////////////////////////////////-->

    function rem_rent_request_submitbutton() {
        var form = document.rent_request_form;
        var datef = form.rent_from.value;
        var dateu = form.rent_until.value;
        var dayornight = "<?php echo $realestatemanager_configuration['special_price']['show']?>";
        var frep = datef.replace(/\//gi,"-").replace(/\s/gi,"-").replace(/\*/gi,"-");
        var urep = dateu.replace(/\//gi,"-").replace(/\s/gi,"-").replace(/\*/gi,"-");
        var re = /\n*\-\d\d\d\d/;
        var found = urep.match(re);
        if(found){
            var dfrom = (frep.split ('-').reverse ());
            var duntil = (urep.split ('-').reverse ());
        } else {
            var dfrom = (frep.split ('-'));
            var duntil = (urep.split ('-'));
        }
       
        var dmin=dfrom[0]*10000+dfrom[1]*100+dfrom[2]*1;
        var dmax=duntil[0]*10000+duntil[1]*100+duntil[2]*1;
        if (form.user_name.value == "") {
            document.getElementById('user_name_warning').innerHTML =
             "<?php echo _REALESTATE_MANAGER_INFOTEXT_JS_RENT_REQ_NAME; ?>";
            document.getElementById('user_name_warning').style.color = "red";
            document.getElementById('alert_name').style.borderColor = "red";
            document.getElementById('alert_name').style.color = "red";
        } else if (form.user_email.value == "" || !isValidEmail(form.user_email.value)) {
            document.getElementById('user_email_warning').innerHTML =
             "<?php echo _REALESTATE_MANAGER_INFOTEXT_JS_RENT_REQ_EMAIL; ?>";
            document.getElementById('user_email_warning').style.color = "red";
            document.getElementById('alert_mail').style.borderColor = "red";
            document.getElementById('alert_mail').style.color = "red";
        } else if (dmax<dmin) {
             document.getElementById('alert_date').innerHTML =
              "<?php echo _REALESTATE_MANAGER_INFOTEXT_JS_RENT_REQ_ALERT; ?>";
             document.getElementById('alert_date').style.borderColor = "red";
             document.getElementById('alert_date').style.color = "red";
        } else if (unavailableDates.indexOf(form.rent_until.value) >= 0
         || unavailableDates.indexOf(form.rent_from.value) >= 0) {
            document.getElementById('alert_date').innerHTML =
             "<?php echo _REALESTATE_MANAGER_INFOTEXT_JS_RENT_REQ_DATE; ?>";
            document.getElementById('alert_date').style.borderColor = "red";
            document.getElementById('alert_date').style.color = "red";
        } else if (dmax==dmin && dayornight == 0) {
             document.getElementById('alert_date').innerHTML =
              "<?php echo _REALESTATE_MANAGER_INFOTEXT_JS_RENT_REQ_ALERT; ?>";
             document.getElementById('alert_date').style.borderColor = "red";
             document.getElementById('alert_date').style.color = "red";
        }else {
            form.submit();
        }
    }

</script>
<?php
    } 
?>  
<script  type="text/javascript" charset="utf-8" async defer>
    jQuery(document).ready(function () {
      jQuery('input,textarea').focus(function(){
        jQuery(this).data('placeholder',jQuery(this).attr('placeholder'))
        jQuery(this).attr('placeholder','')
        jQuery(this).css('color','#a3a3a3');
        jQuery(this).css('border-color','#ddd');
      });
      jQuery('input,textarea').blur(function(){
        jQuery(this).attr('placeholder',jQuery(this).data('placeholder'));
      });
    });



    function allreordering(){
        if(document.orderForm.order_direction.value=='asc')
            document.orderForm.order_direction.value='desc';
        else document.orderForm.order_direction.value='asc';

        document.orderForm.submit();
    }

</script>


    <?php

     positions_rem($params->get('view01')); ?>

<div class="REL-row">
<div class="REL-collumn-xs-12 REL-collumn-sm-8 REL-collumn-md-9 REL-collumn-lg-9">
<div id="rem_house_galery">
    <!-- ********************** begin add for show/hiden button "Edit house"___c************* -->

<?php

        $is_edit_all_houses = false ;
        if (checkAccess_REM($realestatemanager_configuration['option_edit']['registrationlevel'], 'RECURSE', userGID_REM($my->id), $acl)) {
            $is_edit_all_houses = true ;
        }

$user = JFactory::getUser();
$isroot = $user->authorise('core.admin');

if ($my->id == $house->owner_id && $my->id != '' || $isroot):

    global $option;

    if ($option != 'remca') {
        $form_action = "index.php?option=" . $option .
         "&task=edit_house&Itemid=" . $Itemid ;

    }

    else

      $form_action = "index.php?option=remca&task=edit_house&Itemid=" . $Itemid;
    ?>

<?php endif;?>
<!-- ************************* end  add for show/hiden button "Edit house"***************** -->
<div class="componentheading<?php echo $params->get('pageclass_sfx'); ?> ">
    
<?php if (trim($house->name)) { ?>
                <span class="col_text_2"><?php echo $house->name; ?></span>
<?php } ?> 
<?php if($params->get('show_pricerequest')){ ?>
    <div class="rem_house_price">
<?php


if(!incorrect_price($house->price)){

    if ($realestatemanager_configuration['price_unit_show'] == '1') {
        if ($params->get('show_sale_separator')) {
            echo "<div class=\"pricemoney\">
                    <span class=\"money\">" 
                    . formatMoney($house->price, $realestatemanager_configuration['sale_fraction'], $realestatemanager_configuration['price_format']) . 
                    "</span>";
            echo "<span class=\"price\">&nbsp;" . $house->priceunit . "</span></div>";
        } else {
            echo "<div class=\"pricemoney\"><span class=\"money\">" . $house->price . "</span>";
            echo "<span class=\"price\">&nbsp;" . $house->priceunit . "</span></div>";    
        }
    } else {
        if ($params->get('show_sale_separator')) {
            echo "<div class=\"pricemoney\"><span class=\"price\">" . $house->priceunit . "</span>";
            echo "&nbsp;<span class=\"money\">"
                 . formatMoney($house->price, $realestatemanager_configuration['sale_fraction'], $realestatemanager_configuration['price_format']) 
                 . "</span></div>";
        } else {
            echo "<div class=\"pricemoney\"><span class=\"price\">" . $house->priceunit . "</span>";
            echo "&nbsp;<span class=\"money\">" . $house->price . "</span></div>";
        }
    }    
    if($currencys_price){
      foreach ($currencys_price as $key => $row) {
        if ($house->priceunit != $key) {
          if ($realestatemanager_configuration['price_unit_show'] == '1') {
            if ($params->get('show_sale_separator')) {
              echo "<div class=\"pricemoney\"><span class=\"money\">" 
                  . formatMoney($row, $realestatemanager_configuration['sale_fraction'], $realestatemanager_configuration['price_format']) . "</span>";
              echo "<span class=\"price\">&nbsp;" . $key . "</span></div>";
            } else {
              echo "<div class=\"pricemoney\"><span class=\"money\">" . $row . "</span>";
              echo "<span class=\"price\">&nbsp;" . $key . "</span></div>";    
            }
          } else {
            if ($params->get('show_sale_separator')) {
              echo "<div class=\"pricemoney\"><span class=\"price\">" . $key . "</span>";
              echo "&nbsp;<span class=\"money\">" 
                  . formatMoney($row, $realestatemanager_configuration['sale_fraction'], $realestatemanager_configuration['price_format']) . 
                  "</span></div>";
            } else {
              echo "<div class=\"pricemoney\"><span class=\"price\">" . $key . "</span>";
              echo "&nbsp;<span class=\"money\">" . $row . "</span></div>";
            }
          }
        }
      }
    }

}else{
   echo "<div class=\"pricemoney\"><span class=\"money\">" . $house->price . "</span>";
   echo "&nbsp;<span class=\"money\"></span></div>";
}
    ?>

    </div>
<?php 
      } ?>
</div>
<div style="clear:both"></div>

        
    <div class="rem_house_location">
                <i class="fa fa-map-marker"></i>
    <?php if (isset($house->hcountry) && trim($house->hcountry)) { ?>
                <span class="col_text_2"><?php echo $house->hcountry; ?></span>,

<?php     } if (isset($house->hregion) && trim($house->hregion)) { ?>
                <span class="col_text_2"><?php echo $house->hregion; ?></span>,

<?php     } if (isset($house->hcity) && trim($house->hcity)) { ?>
                <span class="col_text_2"><?php echo $house->hcity; ?></span>,

    <?php } if (isset($house->hzipcode) && trim($house->hzipcode)) { ?>
                <span class="col_text_2"><?php echo $house->hzipcode; ?></span>,

    <?php }  if (isset($house->hlocation) && trim($house->hlocation)) { ?>
                <span class="col_02"><?php echo $house->hlocation; ?></span>.
    <?php } ?>

    </div>
    <div style="clear:both"></div>

    <span class="col_img">
    
    <?php

    //for local images
$imageURL = ($house->image_link);
if ($imageURL == '') $imageURL = JText::_('_REALESTATE_MANAGER_NO_PICTURE_BIG');;

    // $file_name = rem_picture_thumbnail($imageURL,
    //    $realestatemanager_configuration['fotomain']['width'],
    //    $realestatemanager_configuration['fotomain']['high']);

     $file_name = $imageURL;
    $file = $mosConfig_live_site . '/components/remca/photos/' . $file_name;
echo '<div style="position:relative">';
if($realestatemanager_configuration['show_house_slider']=='1') {
  $stdClassImage = new stdClass();
  $stdClassImage->main_img = $file_name;
  // $house_photos[] = $stdClassImage;

  array_unshift($house_photos, $stdClassImage);

  if(count($house_photos) > 0) { ?>
      <div class="swiper-container">
        <div class="swiper-wrapper">
    <?php for ($i = 0; $i < count($house_photos); $i++) : ?>
          <div class="swiper-slide">

            <?php  
          if ($house->listing_type){
            if ($house->listing_type != 1){
              echo '<div class="rem_col_sale view_veh" >'._REALESTATE_MANAGER_OPTION_FOR_SALE.'</div>';
            } else{
              echo '<div class="rem_col_rent view_veh">'._REALESTATE_MANAGER_OPTION_FOR_RENT.'</div>';
            }
          }

          if ($house->listing_status){
            if ($house->listing_status != 0){
              $listing_status1 = explode(',', _REALESTATE_MANAGER_OPTION_LISTING_STATUS);

              $ls = 1;
              foreach ($listing_status1 as $listing_status2) {
                  $listing_status[$ls] = $listing_status2;
                  $ls++;
              }

              echo '<div class="rem_listing_status view_veh">'.$listing_status[$house->listing_status].'</div>';
            }
          }

        ?>
 
        <?php 


        $house_photos[$i]->main_img = str_ireplace('watermark/', '', $house_photos[$i]->main_img);


         ?> 

            <a href="components/remca/photos/<?php 
               echo rem_picture_thumbnail($house_photos[$i]->main_img,
               $realestatemanager_configuration['fotomain']['width'],
               $realestatemanager_configuration['fotomain']['high'], $watermark); ?>" data-fancybox="slider" title="photo">
              <img alt="<?php echo $house->name; ?>" title="<?php echo $house->name; ?>" 
              src="components/remca/photos/<?php 
               echo rem_picture_thumbnail($house_photos[$i]->main_img,
               $realestatemanager_configuration['fotomain']['width'],
               $realestatemanager_configuration['fotomain']['high'], $watermark); ?>"
 />
            </a>
    
          </div><!--end div class="swiper-slide"-->
<?php endfor;?>
      </div><!--end div class="swiper-wrapper"-->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div><!--end div class="swiper-container"-->
<?php
  }
}
else {
  echo '<img alt="' . $house->name . '" title="' . $house->name . '" src="' . $file . '"  >';
}
?>  
<!-- add wishlist marker -->
      <?php if ($params->get('show_add_to_wishlist')) { ?>
      <span class="fa-stack fa-lg i-wishlist i-wishlist-all"  >
      <?php if (in_array($house->id, $params->get('wishlist'))) { ?>
       <i class="fa fa-star fa-stack-1x" id="icon<?php echo $house->id ?>" title="<?php echo _REALESTATE_MANAGER_LABEL_WISHLIST_REMOVE ?>" onclick="addToWishlist(<?php echo $house->id ?>, <?php echo $my->id ?>)"> </i> 
      <?php } else { ?> 
      <i class="fa fa-star-o fa-stack-1x" id="icon<?php echo $house->id ?>" title="<?php echo _REALESTATE_MANAGER_LABEL_WISHLIST_ADD ?>" onclick="addToWishlist(<?php echo $house->id ?>, <?php echo $my->id ?>)"></i>
      <?php } ?>
      </span>
      <?php } 
      echo '</div>';?> 
      <!-- end add wishlist marker -->

    </span>

    <div class="table_gallery table_07">
<?php if (count($house_photos) > 0) { ?>
    <div class="gallery_img">
    <?php for ($i = 0;$i < count($house_photos);$i++) { ?>
        <div class="thumbnail viewHouses" 
              style="width: <?php echo $realestatemanager_configuration['fotogal']['width'];?>px; height: <?php 
              echo $realestatemanager_configuration['fotogal']['high'];?>px;" >

         <?php $house_photos[$i]->main_img = str_ireplace('watermark/', '', $house_photos[$i]->main_img) ?>

              <a href="components/remca/photos/<?php 
               echo rem_picture_thumbnail($house_photos[$i]->main_img,
               $realestatemanager_configuration['fotomain']['width'],
               $realestatemanager_configuration['fotomain']['high'], $watermark); ?>" data-fancybox="gallery" title="photo" >
               <img alt="<?php echo $house->name; ?>" title="<?php echo $house->name; ?>" 
               src="components/remca/photos/<?php 
               echo rem_picture_thumbnail($house_photos[$i]->main_img,
               $realestatemanager_configuration['fotogal']['width'],
               $realestatemanager_configuration['fotogal']['high'], $watermark); ?>" style = "vertical-align:middle;" />
              </a>
          </div>
           <?php
    }
    ?>
            </div>
    <?php }
?>
    </div>
</div>
<!--<form action="<?php //echo sefRelToAbs($form_action);
?>" method="post" name="house">-->
        <?php positions_rem($params->get('view02')); ?>

        <div id="rem_house_property">
                 <?php
            $listing_status[0] = _REALESTATE_MANAGER_OPTION_SELECT;
            $listing_status1 = explode(',', _REALESTATE_MANAGER_OPTION_LISTING_STATUS);
            $i = 1;
            foreach ($listing_status1 as $listing_status2) {
                $listing_status[$i] = $listing_status2;
                $i++;
            }
            if ($house->listing_status != 0) {
                ?>
                <div class="row_text">
                    <span class="col_text_1"><?php echo _REALESTATE_MANAGER_LABEL_LISTING_STATUS; ?>:</span>
                    <span class="col_text_2"><?php echo $listing_status[$house->listing_status]; ?></span>
                </div>
                        <?php
                    }
            ?>

            <?php
            $property_type[0] = _REALESTATE_MANAGER_OPTION_SELECT;
            $property_type1 = explode(',', _REALESTATE_MANAGER_OPTION_PROPERTY_TYPE);
            $i = 1;
            foreach ($property_type1 as $property_type2) {
                $property_type[$i] = $property_type2;
                $i++;
            }
            if ($house->property_type != 0) {
                ?>
                <div class="row_text">
                    <span class="col_text_1"><?php echo _REALESTATE_MANAGER_LABEL_PROPERTY_TYPE; ?>:</span>
                    <span class="col_text_2"><?php echo $property_type[$house->property_type]; ?></span>
                </div>
                <?php
            }
                ?>

                <?php if (trim($house->houseid)) { ?>
                <div class="row_text">
                    <span class="col_text_1"><?php echo _REALESTATE_MANAGER_LABEL_PROPERTYID; ?>:</span>
                    <span class="col_text_2"><?php echo $house->houseid; ?></span>
                </div>
                <?php
                }
                ?>
                <?php
                $listing_type[0] = _REALESTATE_MANAGER_OPTION_SELECT;
                $listing_type[1] = _REALESTATE_MANAGER_OPTION_FOR_RENT;
                $listing_type[2] = _REALESTATE_MANAGER_OPTION_FOR_SALE;
                if ($house->listing_type != 0) {
                    ?>
                <div class="row_text">
                <span class="col_text_icon"></span>
                <span class="col_01"><?php echo _REALESTATE_MANAGER_LABEL_LISTING_TYPE; ?>:</span>
                <span class="col_02"><?php echo $listing_type[$house->listing_type]; ?></span>
                </div>
                <?php
            }
            ?>
            <?php if ($realestatemanager_configuration['extra1'] == 1 && $house->extra1 != "") {
    ?>
            <div class="row_text">
                <span class="col_text_1"><?php echo _REALESTATE_MANAGER_LABEL_EXTRA1; ?>:</span>
                <span class="col_text_2"><?php echo $house->extra1; ?></span>
            </div>
                <?php
            }
            if ($realestatemanager_configuration['extra2'] == 1 && $house->extra2 != "") {
                ?>
            <div class="row_text">
                <span class="col_text_1"><?php echo _REALESTATE_MANAGER_LABEL_EXTRA2; ?>:</span>
                <span class="col_text_2"><?php echo $house->extra2; ?></span>
            </div>
                <?php
            }
            if ($realestatemanager_configuration['extra3'] == 1 && $house->extra3 != "") {
                ?>
            <div class="row_text">
                <span class="col_text_1"><?php echo _REALESTATE_MANAGER_LABEL_EXTRA3; ?>:</span>
                <span class="col_text_2"><?php echo $house->extra3; ?></span>
            </div>
    <?php
}
if ($realestatemanager_configuration['extra4'] == 1 && $house->extra4 != "") {
    ?>
            <div class="row_text">
                <span class="col_text_1"><?php echo _REALESTATE_MANAGER_LABEL_EXTRA4; ?>:</span>
                <span class="col_text_2"><?php echo $house->extra4; ?></span>
            </div>
                <?php
            }
            if ($realestatemanager_configuration['extra5'] == 1 && $house->extra5 != "") {
                ?>
            <div class="row_text">
                <span class="col_text_1"><?php echo _REALESTATE_MANAGER_LABEL_EXTRA5; ?>:</span>
                <span class="col_text_2"><?php echo $house->extra5; ?></span>
            </div>
    <?php
}
if ($realestatemanager_configuration['extra6'] == 1 && $house->extra6 > 0) {
    $extra1 = explode(',', _REALESTATE_MANAGER_EXTRA6_SELECTLIST);
    $i = 1;
    foreach ($extra1 as $extra2) {
        $extra[$i] = $extra2;
        $i++;
    }
    ?>
            <div class="row_text">
                <span class="col_text_1"><?php echo _REALESTATE_MANAGER_LABEL_EXTRA6; ?>:</span>
                <span class="col_text_2"><?php echo $extra[$house->extra6]; ?></span>
            </div>
    <?php
}
if ($realestatemanager_configuration['extra7'] == 1 && $house->extra7 > 0) {
    $extra1 = explode(',', _REALESTATE_MANAGER_EXTRA7_SELECTLIST);
    $i = 1;
    foreach ($extra1 as $extra2) {
        $extra[$i] = $extra2;
        $i++;
    }
    ?>
            <div class="row_text">
                <span class="col_text_1"><?php echo _REALESTATE_MANAGER_LABEL_EXTRA7; ?>:</span>
                <span class="col_text_2"><?php echo $extra[$house->extra7]; ?></span>
            </div>
    <?php
}
if ($realestatemanager_configuration['extra8'] == 1 && $house->extra8 > 0) {
    $extra1 = explode(',', _REALESTATE_MANAGER_EXTRA8_SELECTLIST);
    $i = 1;
    foreach ($extra1 as $extra2) {
        $extra[$i] = $extra2;
        $i++;
    }
    ?>
            <div class="row_text">
                <span class="col_text_1"><?php echo _REALESTATE_MANAGER_LABEL_EXTRA8; ?>:</span>
                <span class="col_text_2"><?php echo $extra[$house->extra8]; ?></span>
            </div>
    <?php
}
if ($realestatemanager_configuration['extra9'] == 1 && $house->extra9 > 0) {
    $extra1 = explode(',', _REALESTATE_MANAGER_EXTRA9_SELECTLIST);
    $i = 1;
    foreach ($extra1 as $extra2) {
        $extra[$i] = $extra2;
        $i++;
    }
    ?>
            <div class="row_text">
                <span class="col_text_1"><?php echo _REALESTATE_MANAGER_LABEL_EXTRA9; ?>:</span>
                <span class="col_text_2"><?php echo $extra[$house->extra9]; ?></span>
            </div>
            <?php
        }
        if ($realestatemanager_configuration['extra10'] == 1 && $house->extra10 > 0) {
            $extra1 = explode(',', _REALESTATE_MANAGER_EXTRA10_SELECTLIST);
            $i = 1;
            foreach ($extra1 as $extra2) {
                $extra[$i] = $extra2;
                $i++;
            }
            ?>
            <div class="row_text">
                <span class="col_text_1"><?php echo _REALESTATE_MANAGER_LABEL_EXTRA10; ?>:</span>
                <span class="col_text_2"><?php echo $extra[$house->extra10]; ?></span>
            </div>
            <?php }
        ?>
        <!--add edocument -->
        <?php
        if ($params->get('show_edocsrequest') && $house->edok_link != null) {
            $session = JFactory::getSession();
            $sid = $session->getId();
            $session->set("ssmid", $sid);
            setcookie('ssd', $sid, time() + 60 * 60 * 24, "/");
            ?>
            <div class="row_text">
                <span class="col_text_1"><?php echo _REALESTATE_MANAGER_LABEL_EDOCUMENT; ?>:</span>
                <span class="col_text_2">
                    <a href="<?php echo $house->edok_link; ?>" target="blank">
            <?php echo _REALESTATE_MANAGER_LABEL_EDOCUMENT_DOWNLOAD; ?>
                    </a>
                </span>
            </div>
    <?php
} //end if
?>
        </div>
        <?php
        if($realestatemanager_configuration['energy_field_show']) {
          $result = $params->get('diagramma');
          if($result){ ?>
        <!-- <div class="diagramm"> -->
        <div class="diagramm">
          <?php echo $params->get('diagramma'); ?>
        </div>
      <?php
        }
      }
      ?>
<div class="tabs_buttons">
    <!--list of the tabs-->
    <ul id="countrytabs" class="shadetabs">
        <li>
            <a href="#" rel="country1" class="selected"><?php echo _REALESTATE_MANAGER_TAB_DESCRIPTION; ?>
            </a>
        </li>
        <?php
        if (($params->get('show_location') && $params->get('show_locationtab_registrationlevel'))
            || ($params->get('street_view') && $params->get('street_view_registrationlevel'))) {
            ?>
            <li>
              <a href="#" rel="country2" onmouseup="setTimeout('initialize()',10)">
                  <?php echo _REALESTATE_MANAGER_TAB_LOCATION; ?>
              </a>
            </li>
            <?php
        }
        ?>
        <?php
        if ($params->get('show_reviews_tab')) {
          if ($params->get('show_reviewstab_registrationlevel')) {
            ?>
            <li>
              <a href="#" rel="country4"><?php echo _REALESTATE_MANAGER_TAB_REVIEWS; ?></a>
            </li>
            <?php
          }
        }
        ?>
        <?php
        if ($params->get('calendar_show') && $house->listing_type == 1) {
            if ($params->get('calendar_option_registrationlevel','')) {
                ?>
                <li>
                    <a href="#" rel="country5"><?php echo _REALESTATE_MANAGER_LABEL_CALENDAR_CALENDAR; ?></a>
                </li>
                <?php
            }
        }
        ?>
    </ul>
</div>
                <?php positions_rem($params->get('view03')); ?>

<!--begin tabs-->
<div id="tabs">
    <div id="country1" class="tabcontent">
        <div class="rem_type_house">
            <?php if (isset($house->rooms) && trim($house->rooms)) { ?>
                <div class="row_text">
                    <i class="fa fa-building-o"></i>
                    <span class="col_text_1"><?php echo _REALESTATE_MANAGER_LABEL_ROOMS; ?>:</span>
                    <span class="col_text_2"><?php echo $house->rooms; ?></span>
                </div>
            <?php } if (isset($house->bathrooms) && trim($house->bathrooms)) { ?>
                <div class="row_text">
                    <i class="fa fa-tint"></i>
                    <span class="col_text_1"><?php echo _REALESTATE_MANAGER_LABEL_BATHROOMS; ?>:</span>
                    <span class="col_text_2"><?php echo $house->bathrooms; ?></span>
                </div>
            <?php } if (isset($house->bedrooms) && trim($house->bedrooms)) { ?>
                <div class="row_text">
                    <i class="fa fa-inbox"></i>
                    <span class="col_text_1"><?php echo _REALESTATE_MANAGER_LABEL_BEDROOMS; ?>:</span>
                    <span class="col_text_2"><?php echo $house->bedrooms; ?></span>
                </div>
                        <?php
                    }
            ?>
            <?php if (isset($house->year) && trim($house->year)) { ?>
                <div class="row_text">
                    <i class="fa fa-calendar"></i>
                    <span class="col_text_1"><?php echo _REALESTATE_MANAGER_LABEL_BUILD_YEAR; ?>:</span>
                    <span class="col_text_2"><?php echo $house->year; ?></span>
                </div>
                <?php }   ?>
            <?php if (isset($house->garages) && trim($house->garages)) { ?>
                <div class="row_text">
                    <i class="fa fa-truck"></i>
                    <span class="col_text_1"><?php echo _REALESTATE_MANAGER_LABEL_GARAGES; ?>:</span>
                    <span class="col_text_2"><?php echo $house->garages; ?></span>
                </div>
                        <?php }
            if (isset($house->lot_size) && trim($house->lot_size)) {
                ?>
                <div class="row_text">
                    <i class="fa fa-arrows-alt"></i>
                    <span class="col_text_1"><?php echo _REALESTATE_MANAGER_LABEL_LOT_SIZE; ?>:</span>
                    <span class="col_text_2">
                        <?php echo $house->lot_size; ?> <?php echo _REALESTATE_MANAGER_LABEL_SIZE_SUFFIX_AR; ?>
                    </span>
                </div>
                <?php }
            if (isset($house->house_size) && trim($house->house_size)) {
                ?>
                <div class="row_text">
                    <i class="fa fa-expand"></i>
                    <span class="col_text_1"><?php echo _REALESTATE_MANAGER_LABEL_HOUSE_SIZE; ?>:</span>
                    <span class="col_text_2">
                        <?php echo $house->house_size; ?> <?php echo _REALESTATE_MANAGER_LABEL_SIZE_SUFFIX; ?>
                    </span>
                </div>
                <?php }
////////////////////////////////////START show video\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
                      if (!empty($videos)) {
                        $youtubeCode = "";
                        $videoSrc = array();
                        $videoSrcHttp = "";
                        $videoType = array();
                        foreach($videos as $video) {
                            if ($video->youtube) {
                              $youtubeCode = $video->youtube;
                            } else if ($video->src) {
                              $videoSrc[] = $video->src;
                              if($video->type)
                                $videoType[] = $video->type;
                            }
                        }?>
                        <div class="row_06">
                          <span class="realestate_video">
                            <strong class="col_01"><?php echo _REALESTATE_MANAGER_LABEL_VIDEO; ?>:</strong>
                        <?php 
                        if (!empty($youtubeCode)) { ?>
                          <iframe width="420" height="315" frameborder="0" 
                            src="//www.youtube.com/embed/<?php echo $youtubeCode ?>"></iframe> 
                          <?php
                        } else if (!empty($videoSrc) && empty($youtubeCode)) { ?>
                          <video width="320" height="240" controls>
                            <?php
                            for ($i = 0;$i < count($videoSrc);$i++) {
                              if(!strstr($videoSrc[$i], "http") && $videoType) {
                              echo '<source src="' . $mosConfig_live_site . $videoSrc[$i] .'"'.
                                    ' type="' . $videoType[$i] .'">';
                              }else{
                               echo '<source src="' . $videoSrc[$i] .'"'.
                                    ' type="' . $videoType[$i] .'">';
                             }
                            }
                            if (!empty($tracks)) {
                              for ($i = 0;$i < count($tracks);$i++) {
                                ($i==0)?$default='default="default"':$default='';
                                if (!strstr($tracks[$i]->src, "http")) {
                                  echo '<track src="' . $mosConfig_live_site.$tracks[$i]->src . '"'.
                                      ' kind="' . $tracks[$i]->kind .'"'. 
                                      ' srclang="' . $tracks[$i]->scrlang .'"'.
                                      ' label="' . $tracks[$i]->label . '" '.$default.'>';
                                }else{
                                  echo '<track src="' .$src . '"'.
                                      ' kind="' . $tracks[$i]->kind .'"'. 
                                      ' srclang="' . $tracks[$i]->scrlang .'"'.
                                      ' label="'.$tracks[$i]->label.'" '.$default.'>';
                                }
                              }
                            } ?>
                          </video>
                            </span>
                          
                        <?php
                      } ?>
                      </div>
                      <?php
                    }
////////////////////////////////////END show video\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
            if (isset($house->description) && trim($house->description)) {
                ?>
                    <div class="rem_house_desciption"><?php echo $house->description; ?></div>
                <?php
            }
            ?>
        </div>
<div class="table_tab_01 table_03">
    
    <!--       *******************************************************************         -->
    <?php 
    global $database, $realestatemanager_configuration;
    if($realestatemanager_configuration['special_price']['show']){
        $switchTranslateDayNight = _REALESTATE_MANAGER_RENT_SPECIAL_PRICE_PER_DAY;       
    }else{
        $switchTranslateDayNight = _REALESTATE_MANAGER_RENT_SPECIAL_PRICE_PER_NIGHT;    
    }
    $query = "select * from #__rem_rent_sal WHERE fk_houseid='$house->id'";
    $database->setQuery($query);
    $rentTerm = $database->loadObjectList();
        if(isset($rentTerm[0]->special_price)) { ?>
            <div class = "row_17">
            <span class="col_01"><?php echo _REALESTATE_MANAGER_RENT_SPECIAL_PRICE; ?>:</span> </br>

                <table class="adminlist adminlist_04">
                    <tr>
                        <th class="title" width = "15%" align ='center' ><?php 
                          echo _REALESTATE_MANAGER_FROM; ?></th>
                        <th class="title" width = "15%" align ='center' ><?php 
                          echo _REALESTATE_MANAGER_TO; ?></th>
                        <th class="title" width = "15%" align ='center'><?php 
                          echo $switchTranslateDayNight; ?></th>
                        <th class="title" width = "20%" align ='center' ><?php 
                          echo _REALESTATE_MANAGER_LABEL_REVIEW_COMMENT; ?></th>
                    </tr>
                    <?php                                                
                        $DateToFormat = str_replace("D",'d',
                          (str_replace("M",'m',(str_replace('%','',
                          $realestatemanager_configuration['date_format'])))));
                        for ($i = 0; $i < count($rentTerm); $i++) {   
                        $date_from = new DateTime($rentTerm[$i]->price_from);
                        $date_to = new DateTime($rentTerm[$i]->price_to);
                    ?>
                    <tr>
                        <td align ='center'><?php echo date_format($date_from, "$DateToFormat"); ?></td>
                        <td align ='center'><?php echo date_format($date_to, "$DateToFormat"); ?></td>
                        <?php
                                if ($realestatemanager_configuration['sale_separator'] == '1') { ?>
                                    <td align ='center'><?php 
                                      echo formatMoney($rentTerm[$i]->special_price, $realestatemanager_configuration['sale_fraction'],
                                         $realestatemanager_configuration['price_format']); ?></td>
                        <?php   } else { ?>
                                    <td align ='center'><?php echo $rentTerm[$i]->special_price; ?></td>
                        <?php   }
                            ?>

                        <td align ='center'><?php echo $rentTerm[$i]->comment_price; ?></td> 
                    </tr>
                    <?php } ?>  
                </table>
            </div>
<?php   } ?>

<!--       *******************************************************************         -->
<?php if($realestatemanager_configuration['manager_feature_category'] == 1) { ?>
<div class="table_country3 ">
  <?php 
    if (count($house_feature)) {
  ?>
    <div class="row_text">
        <div class="rem_features_title">
        <?php echo _REALESTATE_MANAGER_LABEL_FEATURED_MANAGER_FEATURE; ?>:
        </div>
        <span class="col_text_2">
        <?php 
        for ($i = 0; $i < count($house_feature); $i++) {
          if ($i != 0) {
            if ($house_feature[$i]->categories !== $house_feature[$i - 1]->categories)
              echo "<div class='rem_features_category'>" . $house_feature[$i]->categories . "</div>";
          }
          else {
            echo "<div class='rem_features_category'>" . $house_feature[$i]->categories . "</div>";
          }
          echo "<span class='rem_features_name'><i class='fa  fa-check rem_fa'></i>"
             . $house_feature[$i]->name . "</span>";
          if ($i != count($house_feature)-1) {
            if ($house_feature[$i]->categories == $house_feature[$i + 1]->categories);            
          }
        }
        ?>
        </span>
    </div>

        <?php }
    ?>
</div>
<?php } ?>
        </div>
    </div><!--end of tab-->
<div id="country2" class="tabcontent">
        <!--if we are given the coordinates, then display latitude, longitude and a map with a marker -->
<?php if ($house->hlatitude && $house->hlongitude) {?> 
          <div class="table_latitude table_04">
            <?php
            if(($params->get('show_location') && $params->get('show_locationtab_registrationlevel'))){ ?>
              <div id="map_canvas" class="re_map_canvas re_map_canvas_02"></div>
            <?php
            }
            if($params->get('street_view') && $params->get('street_view_registrationlevel')){ ?>
              <div id="map_pano" class="re_map_canvas re_map_canvas_02"></div>
              <?php
            } ?>
          </div>
          <?php 
      } else
        echo _REALESTATE_MANAGER_LABEL_NO_LOCATION_AVAILIBLE;
        ?>
    </div>
   <!--tab for reviews-->
    <div id="country4" class="tabcontent">
<?php
//show the reviews
    if ($reviews = $house->getReviews()) {
        ?>
        <br />
        <div class="componentheading<?php echo $params->get('pageclass_sfx'); ?>">
            <?php echo _REALESTATE_MANAGER_LABEL_REVIEWS; ?> 
        </div>

        <div class="reviews_table table_06">
            <?php
            if ($reviews != null && count($reviews) > 0) {
                for ($m = 0, $n = count($reviews); $m < $n; $m++) {
                    $review = $reviews[$m];
                    if ($review->state != 0) {
                        ?>
                        <div class="box_comment">
                            <div class="user_name"><?php echo $review->user_name; ?></div>
                            <span class="arrow_up_comment"></span>
                            <div class="head_comment">
                                <div class="title_rating">
                                    <h4 class="col_title_rev"><?php echo $review->title; ?></h4>
                                    <span class="col_rating_rev">
                                        <img src="components/remca/images/rating-<?php
                                             echo $review->rating; ?>.png" 
                                             alt="<?php echo ($review->rating) / 2; ?>" border="0" align="right"/>
                                    </span>
                                </div>
                                <div class="row_comment">
                                    <?php echo $review->comment; ?>
                                </div>
                                <div class="date">
                                    <span class="date_format">
                                        <?php echo data_transform_rem($review->date); ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
            }
            ?>
        </div>

        <?php
    } else{
      echo "<p>No reviews for house</p>";
    }

if ($params->get('show_reviews')) {
    $reviews = $house->getReviews();
    ?><?php
    if ($params->get('show_inputreviews')) {
        ?><?php positions_rem($params->get('view07')); ?><div id="hidden_review">
            <form action="<?php echo sefRelToAbs("index.php?option="
                 . $option . "&amp;task=review_house&amp;Itemid=" .
                   $Itemid); ?>" method="post" name="review_house"> 
                <input type="hidden" name="user_name" value="<?php echo $my->username ?>">
                <input type="hidden" name="fk_userid" value="<?php echo $my->id ?>">
                <input type="hidden" name="user_email" value="<?php echo $my->email ?>">
                <div class="componentheading<?php echo $params->get('pageclass_sfx'); ?>">
                    <hr />
                    <?php echo _REALESTATE_MANAGER_LABEL_ADDREVIEW; ?>
                </div>

                <div class="add_table_review table_09">
                    <div class="row_01"><?php echo _REALESTATE_MANAGER_LABEL_REVIEW_TITLE; ?></div>
                    <div class="row_02">
                        <input class="inputbox" type="text" name="title" size="80" 
                        value="<?php if (isset($_REQUEST["title"])) {
                        echo $_REQUEST["title"]; } ?>" /> 
                    </div>
                    <div class="row_03"><?php echo _REALESTATE_MANAGER_LABEL_REVIEW_COMMENT; ?></div>
                    <div class="row_04">
                            <?php
                            $comm_val = "";
                            if (isset($_REQUEST["comment"])) {
                                $comm_val = protectInjectionWithoutQuote("comment",'','STRING');
                            }
                            //editorArea( 'editor1',  $comm_val, 'comment', '410', '200', '60', '10' );
                            ?>
                        <textarea name="comment" cols="50" rows="8" ><?php echo $comm_val; ?></textarea>
                    </div>

                    <!-- #### RATING #### -->
                    <?php if (version_compare(JVERSION, "3.0", "ge")): ?>
                    <script type="text/javascript">
                        os_img_path = '<?php echo $mosConfig_live_site . '/components/remca/images/'; ?>' ;
                        jQuery(document).ready(function(){
                            jQuery('#star').raty({
                                starHalf: os_img_path+'star-half.png',
                                starOff: os_img_path+'star-off.png',
                                starOn: os_img_path+'star-on.png' 
                            });
                        });
                    </script>

                        <div class="row_rating_j3">
                            <span class="lable_rating"><?php echo _REALESTATE_MANAGER_LABEL_REVIEW_RATING; ?></span>
                            <span id="star"></span>
                        </div>

                            <?php else:
                            ?>
                        <div class="row_rating_j2">
                            <span class="col_01"><?php echo _REALESTATE_MANAGER_LABEL_REVIEW_RATING; ?></span>
                            <br />
                            <span>  
                            <?php
                            $k = 0;
                            while ($k < 11) {
                                ?>
                            <input type="radio" name="rating" value="<?php echo $k; ?>" <?php
                            if (isset($_REQUEST["rating"]) && $_REQUEST["rating"] == $k) {
                                echo "CHECKED";
                            }
                            ?> alt="Rating" />
                            <img src="components/remca/images/rating-<?php echo $k; ?>.png" 
                              alt="<?php echo ($k) / 2; ?>" border="0" /><br />
                                <?php
                                $k++;
                            }
                            ?>
                            </span>
                        </div>

                        <?php endif; ?>

            <div  class="row_button_review">
                <span class="button_save"> 
                    <!-- save review button-->
                    <input class="button" type="button" value="<?php 
                      echo _REALESTATE_MANAGER_LABEL_BUTTON_SAVE; ?>" onclick="review_submitbutton()"/>
                </span>
            </div>

        </div>

        <input type="hidden" name="fk_houseid" value="<?php echo $house->id; ?>" />
        <input type="hidden" name="catid" value="<?php $temp = $house->catid;
        echo $temp[0]; ?>" />
            </form>
        </div> 
        <!-- end <div id="hidden_review"> -->
        <?php
    } //end if($params->get('show_inputreviews'))
} // end if( $params->get('show_reviews'))
?>
    </div>
<?php
/////////////////////////////////////////////START CALENDAR\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
if ($house->listing_type == 1) {
  if ($params->get('show_rentrequest') && $params->get('show_rentstatus') && $params->get('calendar_show')) {
?>
    <div id="country5" class="tabcontent">
      <div style="text-align: center;" >
        <h4><?php echo _REALESTATE_MANAGER_LABEL_CALENDAR_TITLE; ?></h4>
        <form action="" method="post" id="calendar" name="calendar" >    
        <!-- year select list on display -->
        <?php
        echo $params->get('months_list');
        echo $params->get('years_list');
        $calendar = $params->get('calendar');
        ?>
        <!-- year select list on display -->
        </form>
        <div class="rem_tableC basictable">
          <div class="row_01">
              <span class="col_01"><?php echo $calendar->tab1; ?></span>
              <span class="col_02"><?php echo $calendar->tab2; ?></span>
              <span class="col_03"><?php echo $calendar->tab3; ?></span>
              <span class="col_03"><?php echo $calendar->tab4; ?></span>
          </div>
          <div class="row_02">
              <span class="col_01"><?php echo $calendar->tab21; ?></span>
              <span class="col_02"><?php echo $calendar->tab22; ?></span>
              <span class="col_02"><?php echo $calendar->tab23; ?></span>
              <span class="col_03"><?php echo $calendar->tab24; ?><br /></span>
          </div>
          <div class="calendar_notation row_03">
            <div class="row_calendar">
              <span class="label_calendar_available">
              <?php echo _REALESTATE_MANAGER_LABEL_CALENDAR_AVAILABLE; ?></span>
              <div class="calendar_available_notation"></div>
            </div>
            <div class="row_calendar">
              <span class="label_calendar_available">
                <?php echo _REALESTATE_MANAGER_LABEL_CALENDAR_NOT_AVAILABLE; ?></span>
              <div class="calendar_not_available_notation"></div>
            </div>
          </div>
        </div>
      </div>
    </div>   
    <?php
  }
} 
/////////////////////////////////////////////END CALENDAR\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\   
?>
</div> <!--end all tabs -->

<script type="text/javascript">
    var countries=new ddtabcontent("countrytabs")
    countries.setpersist(true)
    countries.setselectedClassTarget("link") //"link" or "linkparent"
    countries.init()
</script>

</div>

<div class="REL-collumn-xs-12 REL-collumn-sm-4 REL-collumn-md-3 REL-collumn-lg-3">
<?php  positions_rem($params->get('view05')); ?>
<?php    if ($params->get('show_owner_line') ==1 && $params->get('show_owner_line') ==1) {
                ?>
   <div class="rem_house_contacts">
        <div id="rem_house_titlebox">
            <?php echo _REALESTATE_MANAGER_LABEL_CONTACT_AGENT ; ?>
        </div>    
                    <?php if (isset($house->agent) && trim($house->agent)) { ?>
                    <span class="col_02"><?php echo $house->agent; ?></span>
            <?php
            }
            ?>

            <?php
            if ($params->get('show_owner_line') && $house->ownername != '' || $house->owneremail != '') {
              if ($params->get('show_owner_registrationlevel')) {
            ?>
                    <span class="col_02"><?php echo $house->ownername, '</br>', $house->owneremail; ?></span>
            <?php
              }
            }
            ?>

            <?php
            if ($params->get('show_contacts_line')) {
              if ($params->get('show_contacts_registrationlevel')) {
                if (isset($house->contacts) && trim($house->contacts)) {
            ?>
                    <span class="col_02"><?php echo $house->contacts; ?></span>
            <?php
                }
              }
            }
            ?>
    </div>
            <?php
            }
            ?>
    <?php
    if($house->listing_type != 0 && ($params->get('show_buystatus') && $params->get('show_buyrequest'))) {?>
    <?php
    $hide_block = false;
    if(($house->listing_type == 1 && $params->get('show_rentrequest') && $params->get('show_rentstatus')) || 
      ($house->listing_type == 2 && $params->get('show_buystatus') && $params->get('show_buyrequest'))){
        $hide_block = true;
    }
    ?>
    <div class="rem_buying_house" <?php echo $hide_block ? '' : ' style="display: none;"'; ?>>
    <?php
     if ($house->listing_type == 1) {
      if ($params->get('show_rentrequest') && $params->get('show_rentstatus')) {
        if ($option != 'remca') {
          $form_action = "index.php?option=" . $option . "&task=save_rent_request&Itemid=" . $Itemid ;
        }
        else {
          $form_action = "index.php?option=remca&amp;task=save_rent_request&amp;Itemid=" . $Itemid;
        }
    ?>
      <div id="rem_house_titlebox">
    <?php echo _REALESTATE_MANAGER_LABEL_BOOK_NOW ; ?>
      </div>

      <form action="<?php echo sefRelToAbs($form_action); ?>" method="post" name="rent_request_form">  
        <div id="show_buying"> 
          <input type="hidden" name="bid[]" value="<?php echo $house->id; ?>" />
          <input type="hidden" name="houseid" id="houseid" value="<?php echo $house->id ?>" maxlength="80" />
          <input type="hidden" name="calculated_price" id="calculated_price" value="" maxlength="80" />
          <input type="hidden" name="price_unit" value="<?php echo $house->priceunit;?>" maxlength="80" />
    <?php 
        global $my;
        if($my->guest) {
    ?>
          <div class="row_01">
            <div id="user_name_warning"></div>
            <p>
              <input class="inputbox" id="alert_name" type="text" name="user_name" size="38" 
                        maxlength="80" placeholder="<?php echo _REALESTATE_MANAGER_LABEL_RENT_REQUEST_NAME ; ?>*" />
            </p>
          </div>
                    
          <div class="row_02">
            <div id="user_email_warning"></div>
            <p>
              <input class="inputbox" id="alert_mail" type="text" name="user_email" size="30" 
                       maxlength="80" placeholder="<?php echo _REALESTATE_MANAGER_LABEL_RENT_REQUEST_EMAIL; ?>*" />
            </p>
          </div>
    <?php
        }
        else {
    ?>
          <div class="row_03">
            <div id="user_name_warning"></div>
              <p>
                <input class="inputbox" id="alert_name"  type="text" name="user_name" size="38" 
                  maxlength="80" value="<?php echo $my->name; ?>" 
                  placeholder="<?php echo _REALESTATE_MANAGER_LABEL_RENT_REQUEST_NAME; ?>*" />
              </p>
          </div>
          <div class="row_04">
            <div id="user_email_warning"></div>
              <p>
                <input id="alert_mail" class="inputbox" type="text" name="user_email" size="30" 
                  maxlength="80" value="<?php echo $my->email; ?>" 
                  placeholder="<?php echo _REALESTATE_MANAGER_LABEL_RENT_REQUEST_EMAIL; ?>*" />
              </p>
          </div>
    <?php
        }
    ?>

    <script type="text/javascript">
        Date.prototype.toLocaleFormat = function(format) {
            var f = {Y : this.getYear() + 1900,m : this.getMonth() + 1,d : this.getDate(),
              H : this.getHours(),M : this.getMinutes(),S : this.getSeconds()}
            for(k in f)
                format = format.replace('%' + k, f[k] < 10 ? "0" + f[k] : f[k]);
            return format;
        };
        window.onload = function ()
        {
            var today = new Date();
            var date = today.toLocaleFormat("<?php echo $realestatemanager_configuration['date_format'] ?>");
           //fix later //first load date dug.
           // document.getElementById('rent_from').value = date;
           // document.getElementById('rent_until').value = date;
        }; 
    </script>

          <div class="row_05">
            <p>
              <textarea name="user_mailing" cols="50" rows="8" placeholder="<?php 
                echo _REALESTATE_MANAGER_TAB_DESCRIPTION; ?>" ></textarea>
            </p>
          </div>

          <div class="row_06">
            <p><?php echo _REALESTATE_MANAGER_LABEL_RENT_REQUEST_FROM; ?>:</p>
    <?php global $realestatemanager_configuration;?>
            <p><input type="text" id="rent_from" name="rent_from"></p>
          </div>
          <div class="row_07">
            <p><?php echo _REALESTATE_MANAGER_LABEL_RENT_REQUEST_UNTIL; ?>:</p>
            <p><input type="text" id="rent_until" name="rent_until"></p>
          </div>
        </div>
        <div id="alert_date" name = "alert_date"> <span id="alert_date"> </span>  </div>
  
      <?php if ($params->get('show_pricerequest')): ?> 

        <div id="price_1">
            <span><?php echo    _REALESTATE_MANAGER_LABEL_PRICE. ': '; ?></span>
            <span id="message-here"> </span> 
            <span><?php //echo $house->priceunit; ?></span>
        </div>
  
      <?php endif; ?> 

        <div id="message-here"> </div>
        
  <div id="captcha-block">   
<!--*************************   begin add antispam guest   ********************-->

<!--*********************** end add antispam guest   *************************-->
        <?php
        if ($params->get('show_rentstatus') && $params->get('show_rentrequest') 
              && !$params->get('rent_save') && !$params->get('search_request')) {
            ?>
            <br />
            <input type="button" value="<?php echo _REALESTATE_MANAGER_LABEL_BUTTON_RENT_REQU ; ?>" 
              class="button" onclick="rem_rent_request_submitbutton()" />
            <br />
    <?php
} else if ($params->get('show_rentstatus') && $params->get('show_rentrequest') && $params->get('rent_save') 
          && !$params->get('search_request')) {
    ?>
            <input type="button" class="button" value="<?php echo _REALESTATE_MANAGER_LABEL_BUTTON_RENT_REQU_SAVE; ?>" 
              onclick="rem_rent_request_submitbutton()" />
    <?php } else {
        ?>
            &nbsp;
        <?php
    }
    ?>
    </div>
  
  

        </form>
                    <?php
                } else
                    echo "</form>";
            } else if ($house->listing_type == 2) {
                ?>
    </form>
    <?php
    if ($params->get('show_buyrequest') && $params->get('show_buystatus')) {
        global $option;
        if ($option != 'remca') {
            $form_action = "index.php?option=" . $option 
            . "&task=buying_request&Itemid=" 
              . $Itemid ;
        } else
            $form_action = "index.php?option=remca&amp;task=buying_request&amp;Itemid=" . $Itemid;
        ?>
    <div id="rem_house_titlebox">
        <?php echo _REALESTATE_MANAGER_LABEL_BUTTON_SEND_MESSAGE; ?>
    </div>
    <div id="show_buying">
        <form action="<?php echo sefRelToAbs($form_action); ?>" method="post" name="buying_request">
            <div class="table_08">
    <?php
    global $my;
    if ($my->guest) {
        ?>      
            <div class="row_01">
              <div id="customer_name_warning"></div>
                <span class="col_02"><input id="alert_name_buy" class="inputbox" type="text" 
                  name="customer_name" size="38" maxlength="80" placeholder="<?php 
                  echo _REALESTATE_MANAGER_LABEL_RENT_REQUEST_NAME ; ?>*"/></span>
            </div>
            <div class="row_02">
              <div id="customer_email_warning"></div>
                <span class="col_02"><input id="alert_mail_buy" class="inputbox" type="text" 
                  name="customer_email" size="38" maxlength="80" placeholder="<?php 
                  echo _REALESTATE_MANAGER_LABEL_RENT_REQUEST_EMAIL; ?>*"/></span>
            </div>

        <?php
    } else {
        ?>
            <div class="row_03">
              <div id="customer_name_warning"></div>
                <span class="col_02">
                    <input id="alert_name_buy"  class="inputbox" type="text" name="customer_name" size="38" 
                  maxlength="80" placeholder="<?php echo _REALESTATE_MANAGER_LABEL_RENT_REQUEST_NAME; ?>" 
                  value="<?php echo $my->name; ?> " /></span>
            </div>
            <div class="row_04">
              <div id="customer_email_warning"></div>
                <span class="col_02">
                    <input id="alert_mail_buy"  class="inputbox" type="text" name="customer_email" size="38" 
                  maxlength="80" placeholder="<?php echo _REALESTATE_MANAGER_LABEL_RENT_REQUEST_EMAIL; ?>" 
                  value="<?php echo $my->email; ?>"/></span>
            </div>
            <?php
        }
        ?>
            <div class="row_05">
              <div id="customer_phone_warning"></div>
                <span class="col_02">
                    <input class="inputbox" type="text" id="customer_phone" name="customer_phone" 
                      size="38" maxlength="80" placeholder="<?php echo _REALESTATE_MANAGER_REQUEST_PHONE; ?>" />
                </span>
            </div>
            <div class="row_06">
                <textarea name="customer_comment" cols="50" rows="8" placeholder="<?php 
                  echo _REALESTATE_MANAGER_TAB_DESCRIPTION; ?>" ></textarea>        
                <input type="hidden" name="bid[]" value="<?php echo $house->id; ?>" />
            </div>

     
            <div class="row_07">
              <span class="col_01">
                <input type="button" value="<?php echo _REALESTATE_MANAGER_LABEL_BUTTON_SEND_MESSAGE; ?>" 
                      class="button" onclick="buying_request_submitbutton()"/>
              </span> 
            </div>
          </div>
        </form>
      </div>
        <?php
    }
} else
    echo "</form>";
?>
                
</div><!-- end div class='rem_buying_house' -->
<?php
}
?>
</div> <!-- end span3-->
</div>

 <?php positions_rem($params->get('similaires')); ?>
 
<div>
    <?php
    mosHTML::BackButton($params, $hide_js);
    ?>
</div>
<!-- Modal -->
<a href="#aboutus" class="rem-button-about"></a>
                    
<a href="#rem-modal-css" class="rem-overlay" id="rem-aboutus" style="display: none;"></a>
<div class="rem-popup">
    <div class="rem-modal-text">
        Please past text to modal
    </div>
     
    <a class="rem-close" title="Close" href="#rem-close"></a>
</div>

<?php 
  $slider_object_fit = $realestatemanager_configuration['slider']['object_fit'];
  $slider_height = $realestatemanager_configuration['slider']['height']/100;
?>

<script type="text/javascript">
  var mySwiper = new Swiper ('#rem_house_galery .swiper-container', {
    nextButton: '#rem_house_galery .swiper-button-next',
    prevButton: '#rem_house_galery .swiper-button-prev'
  })
// fancybox
 jQuery('[data-fancybox]').fancybox({
  thumbs : {
    autoStart : true
  }
})


var width = jQuery('#rem_house_galery .swiper-container').width();
jQuery('#rem_house_galery .swiper-container .swiper-slide img').height(width*<?php echo $slider_height; ?>);
jQuery('#rem_house_galery .swiper-container .swiper-slide img').css('object-fit','<?php echo $slider_object_fit; ?>');

jQuery(window).resize(function(){
  var width = jQuery('#rem_house_galery .swiper-container').width();
  jQuery('#rem_house_galery .swiper-container .swiper-slide img').height(width*<?php echo $slider_height; ?>);
})


</script>


