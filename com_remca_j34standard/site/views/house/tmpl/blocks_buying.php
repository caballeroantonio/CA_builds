<div class="REL-collumn-xs-12 REL-collumn-sm-4 REL-collumn-md-3 REL-collumn-lg-3">
  <div class="rem_house_contacts">
    <div id="rem_house_titlebox"> Contact agent </div>
    <span class="col_02">
    <?= $this->item->contacts ?>
    </span> <span class="col_02"></br>
    <?= $this->item->owneremail ?>
    </span> </div>
<div class="rem_buying_house" >
    <div id="rem_house_titlebox"> Send message </div>
    <div id="show_buying">
  <form action="index.php?option=remca&amp;task=save_rent_request&amp;Itemid=112" method="post" name="rent_request_form">
      <input type="hidden" name="bid[]" value="3" />
      <input type="hidden" name="houseid" id="houseid" value="3" maxlength="80" />
      <input type="hidden" name="calculated_price" id="calculated_price" value="" maxlength="80" />
      <input type="hidden" name="price_unit" value="USD" maxlength="80" />
      <div class="row_01">
        <div id="user_name_warning"></div>
        <p>
          <input class="inputbox" id="alert_name" type="text" name="user_name" size="38" 
						maxlength="80" placeholder="Name*" />
        </p>
      </div>
      <div class="row_02">
        <div id="user_email_warning"></div>
        <p>
          <input class="inputbox" id="alert_mail" type="text" name="user_email" size="30" 
						maxlength="80" placeholder="Email*" />
        </p>
      </div>
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
					var date = today.toLocaleFormat("%Y-%m-%d");
				   //fix later //first load date dug.
				   // document.getElementById('rent_from').value = date;
				   // document.getElementById('rent_until').value = date;
				}; 
			</script>
      <div class="row_05">
        <p>
          <textarea name="user_mailing" cols="50" rows="8" placeholder="Description" ></textarea>
        </p>
      </div>
      <div class="row_06">
        <p>Check In:</p>
        <p>
          <input type="text" id="rent_from" name="rent_from">
        </p>
      </div>
      <div class="row_07">
        <p>Check Out:</p>
        <p>
          <input type="text" id="rent_until" name="rent_until">
        </p>
      </div>
    </div>
    <div id="alert_date" name = "alert_date"> <span id="alert_date"> </span> </div>
    <div id="price_1"> <span>Price: </span> <span id="message-here"> </span> <span></span> </div>
    <div id="message-here"> </div>
    <div id="captcha-block">
      <!--*************************   begin add antispam guest   ********************-->
      <!--*********************** end add antispam guest   *************************-->
      <br />
      <input type="button" value=" Book it! " 
				class="button" onclick="rem_rent_request_submitbutton()" />
      <br />
    </div>
  </form>
</div>
<!-- end div class='rem_buying_house' -->
