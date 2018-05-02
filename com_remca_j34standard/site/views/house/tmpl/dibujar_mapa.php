
    <script type="text/javascript">  
      jQuery( initialize );
      var map;
	var myLatlng=new google.maps.LatLng(<?= $this->item->hlatitude ?>,<?= $this->item->hlongitude ?>);
      function initialize(){
        var myOptions = {
            zoom: <?= $this->item->map_zoom ?>,
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
        var imgCatalogPath = "components/remca/";
  <?php
        $newArr = explode(",", JText::_('_REALESTATE_MANAGER_HOUSE_MARKER'));
        $numPick = '';
        if (isset($newArr[$this->item->property_type])) {
            $numPick = $newArr[$this->item->property_type];

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
    <?php endif; ?>
