
<!-- 
TODO: 
Colocar cada script en el contexto (template) en que se utilice
-->
<script type="text/javascript">  
	jQuery( initialize );
	var map;
	var myLatlng=new google.maps.LatLng(<?= $this->item->hlatitude ?>,<?= $this->item->hlongitude ?>);
	var sv = new google.maps.StreetViewService();
	
	var panorama;
	function initialize(){
	  var myOptions = {
	      zoom: 14,
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
	  var imgCatalogPath = "media/com_remca/";
	    var srcForPic = "/images/marker-11.png";
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
	        alert( "Please enter a Title for your review!" );
	    } else if (form.comment == "") {
	        alert( "Please enter a Text for your review!" );
	    } else if (! form.rating.value) {                
	        alert( "Please enter a Rating for your review!" );
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
	         "Please enter name!";
	        document.getElementById('customer_name_warning').style.color = "red";
	        document.getElementById('alert_name_buy').style.borderColor = "red";
	        document.getElementById('alert_name_buy').style.color = "red";
	    } else if (form.customer_email.value == ""|| !isValidEmail(form.customer_email.value)) {
	        document.getElementById('customer_email_warning').innerHTML =
	         "Please enter e-mail!";
	        document.getElementById('customer_email_warning').style.color = "red";
	        document.getElementById('alert_mail_buy').style.borderColor = "red";
	        document.getElementById('alert_mail_buy').style.color = "red";
	    } else if (!isValidPhoneNumber(form.customer_phone.value)){
	        document.getElementById('customer_phone_warning').innerHTML =
	         "Phone";
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
<script language="javascript" type="text/javascript">  
	var unavailableDates = Array();
	
	jQuery(function() {
	    var k=0;
	    
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
	          "-" + ('0'+(date.getDate()-("1"))).slice(-2);
	        if (jQuerREL.inArray(dmy, unavailableDates) == -1) {
	            return [true, ""];
	        } else {
	            return [false, "", "Unavailable"];
	        }
	    }
	
	
	
/*	    jQuery( "#rent_from" ).datepicker(
	    {
	      minDate: "+0",
	      dateFormat: "yy-mm-dd",
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
	                +"&bid=3&rent_from="+
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
	      dateFormat: "yy-mm-dd",
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
	                +"&bid=3&rent_from="+
	                rent_from+"&rent_until="+rent_until,
	              data: { " #do " : " #1 " },
	              update: jQuery(" #message-here "),
	              success: function( data ) {
	                  jQuery("#message-here").html(data);
	                  jQuery("#calculated_price").val(data);
	              }
	          });
	      }
	    }); */
	
	});
	
	<!--///////////////////////////////////////////////////////////////////////////-->
	
	function rem_rent_request_submitbutton() {
	    var form = document.rent_request_form;
	    var datef = form.rent_from.value;
	    var dateu = form.rent_until.value;
	    var dayornight = "0";
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
	         "Please enter name!";
	        document.getElementById('user_name_warning').style.color = "red";
	        document.getElementById('alert_name').style.borderColor = "red";
	        document.getElementById('alert_name').style.color = "red";
	    } else if (form.user_email.value == "" || !isValidEmail(form.user_email.value)) {
	        document.getElementById('user_email_warning').innerHTML =
	         "Please enter e-mail!";
	        document.getElementById('user_email_warning').style.color = "red";
	        document.getElementById('alert_mail').style.borderColor = "red";
	        document.getElementById('alert_mail').style.color = "red";
	    } else if (dmax<dmin) {
	         document.getElementById('alert_date').innerHTML =
	          "Check out must be more Check in";
	         document.getElementById('alert_date').style.borderColor = "red";
	         document.getElementById('alert_date').style.color = "red";
	    } else if (unavailableDates.indexOf(form.rent_until.value) >= 0
	     || unavailableDates.indexOf(form.rent_from.value) >= 0) {
	        document.getElementById('alert_date').innerHTML =
	         "Wrong date!";
	        document.getElementById('alert_date').style.borderColor = "red";
	        document.getElementById('alert_date').style.color = "red";
	    } else if (dmax==dmin && dayornight == 0) {
	         document.getElementById('alert_date').innerHTML =
	          "Check out must be more Check in";
	         document.getElementById('alert_date').style.borderColor = "red";
	         document.getElementById('alert_date').style.color = "red";
	    }else {
	        form.submit();
	    }
	}
	
</script>
<script  type="text/javascript" charset="utf-8" async defer>
	jQuery(function () {
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
	jQuery('#rem_house_galery .swiper-container .swiper-slide img').height(width*0.56);
	jQuery('#rem_house_galery .swiper-container .swiper-slide img').css('object-fit','cover');
	
	jQuery(window).resize(function(){
	var width = jQuery('#rem_house_galery .swiper-container').width();
	jQuery('#rem_house_galery .swiper-container .swiper-slide img').height(width*0.56);
	})
	
	
</script>
