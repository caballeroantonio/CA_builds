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
      <form action="http://localhost/rem/index.php?option=com_realestatemanager&amp;task=buying_request&amp;Itemid=112" method="post" name="buying_request">
        <div class="table_08">
          <div class="row_01">
            <div id="customer_name_warning"></div>
            <span class="col_02">
            <input id="alert_name_buy" class="inputbox" type="text" 
                  name="customer_name" size="38" maxlength="80" placeholder="Name*"/>
            </span> </div>
          <div class="row_02">
            <div id="customer_email_warning"></div>
            <span class="col_02">
            <input id="alert_mail_buy" class="inputbox" type="text" 
                  name="customer_email" size="38" maxlength="80" placeholder="Email*"/>
            </span> </div>
          <div class="row_05">
            <div id="customer_phone_warning"></div>
            <span class="col_02">
            <input class="inputbox" type="text" id="customer_phone" name="customer_phone" 
                      size="38" maxlength="80" placeholder="Phone" />
            </span> </div>
          <div class="row_06">
            <textarea name="customer_comment" cols="50" rows="8" placeholder="<?= JText::_('JGLOBAL_DESCRIPTION'); ?>" ></textarea>
            <input type="hidden" name="bid[]" value="2" />
          </div>
          <div class="row_07"> <span class="col_01">
            <input type="button" value="Send message" 
                      class="button" onclick="buying_request_submitbutton()"/>
            </span> </div>
        </div>
      </form>
    </div>
  </div>
</div>
