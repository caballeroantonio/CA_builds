<?php
$this->item->reviews[0] = array(
    'title' => 'Really wonderful stay',
    'comment' => 'The house had plenty of space for our family, a fully equipped kitchen, a charming pool and of course a magnificent view. I would recommend this house to any family that is searching for a nice home.',
    'date' => '2014-12-15 15:59:18',
);
?>

<div class="tabs_buttons">
	<!--list of the tabs-->
	<ul id="countrytabs" class="shadetabs">
		<li>
			<a href="#" rel="country1" class="selected">Description</a>
		</li>
		<li>
			<a href="#" rel="country2" onmouseup="setTimeout('initialize()',10)">Location</a>
		</li>
		<li>
			<a href="#" rel="country4">Reviews</a>
		</li>
		<li>
			<a href="#" rel="country5">Calendar</a>
		</li>
	</ul>
</div>



<!--begin tabs-->
<div id="tabs">
	<div id="country1" class="tabcontent">
		<div class="rem_type_house">
			<div class="row_text">
				<i class="fa fa-building-o"></i>
				<span class="col_text_1">Rooms:</span>
				<span class="col_text_2"><?= $this->item->rooms ?></span>
			</div>
			<div class="row_text">
				<i class="fa fa-tint"></i>
				<span class="col_text_1">Bathrooms:</span>
				<span class="col_text_2"><?= $this->item->bathrooms ?></span>
			</div>
			<div class="row_text">
				<i class="fa fa-inbox"></i>
				<span class="col_text_1">Bedrooms:</span>
				<span class="col_text_2"><?= $this->item->bedrooms ?></span>
			</div>
			<div class="row_text">
				<i class="fa fa-calendar"></i>
				<span class="col_text_1">Built year:</span>
				<span class="col_text_2"><?= $this->item->year ?></span>
			</div>
			<div class="row_text">
				<i class="fa fa-truck"></i>
				<span class="col_text_1">Garages:</span>
				<span class="col_text_2"><?= $this->item->garages ?></span>
			</div>
			<div class="row_text">
				<i class="fa fa-arrows-alt"></i>
				<span class="col_text_1">Lot size:</span>
				<span class="col_text_2"><?= $this->item->lot_size ?> Ar</span>
			</div>
			<div class="row_text">
				<i class="fa fa-expand"></i>
				<span class="col_text_1">House size:</span>
				<span class="col_text_2"><?= $this->item->house_size ?> Sqrt</span>
			</div>
			<div class="rem_house_desciption"><?= $this->item->description ?></div>
		</div>
		<div class="table_tab_01 table_03">
			<div class="table_country3 ">
				<div class="row_text">
					<div class="rem_features_title">
						Amenities:
					</div>
					<span class="col_text_2">
						<div class='rem_features_category'> Exterior</div>
						<span class='rem_features_name'><i class='fa  fa-check rem_fa'></i>Garden</span><span class='rem_features_name'><i class='fa  fa-check rem_fa'></i>Patio</span><span class='rem_features_name'><i class='fa  fa-check rem_fa'></i>Garage</span>
						<div class='rem_features_category'> Specific</div>
						<span class='rem_features_name'><i class='fa  fa-check rem_fa'></i>Pool</span><span class='rem_features_name'><i class='fa  fa-check rem_fa'></i>Gym</span>
						<div class='rem_features_category'>Interior</div>
						<span class='rem_features_name'><i class='fa  fa-check rem_fa'></i>Heating</span><span class='rem_features_name'><i class='fa  fa-check rem_fa'></i>Fireplace</span>        
					</span>
				</div>
			</div>
		</div>
	</div>
	<!--end of tab-->
	<div id="country2" class="tabcontent">
		<!--if we are given the coordinates, then display latitude, longitude and a map with a marker -->
		<div class="table_latitude table_04">
			<div id="map_canvas" class="re_map_canvas re_map_canvas_02"></div>
			<div id="map_pano" class="re_map_canvas re_map_canvas_02"></div>
		</div>
	</div>
	<!--tab for reviews-->
	<div id="country4" class="tabcontent">
		<br />
		<div class="componentheading">
			Reviews 
		</div>
		<div class="reviews_table table_06">
			<div class="box_comment">
				<div class="user_name">admin</div>
				<span class="arrow_up_comment"></span>
				<div class="head_comment">
					<div class="title_rating">
						<h4 class="col_title_rev"><?= $this->item->reviews[0]['title'] ?></h4>
						<span class="col_rating_rev">
						<img src="media/com_remca/images/rating-9.png" 
							alt="4.5" border="0" align="right"/>
						</span>
					</div>
					<div class="row_comment"><?= $this->item->reviews[0]['comment'] ?></div>
					<div class="date">
						<span class="date_format"><?= $this->item->reviews[0]['date'] ?></span>
					</div>
				</div>
			</div>
		</div>
		<div id="hidden_review">
			<form action="index.php?option=remca&amp;task=review_house&amp;Itemid=112" method="post" name="review_house">
				<input type="hidden" name="user_name" value="">
				<input type="hidden" name="fk_userid" value="0">
				<input type="hidden" name="user_email" value="">
				<div class="componentheading">
					<hr />
					Add Review                
				</div>
				<div class="add_table_review table_09">
					<div class="row_01">Title</div>
					<div class="row_02">
						<input class="inputbox" type="text" name="title" size="80" 
							value="" /> 
					</div>
					<div class="row_03">Comment</div>
					<div class="row_04">
						<textarea name="comment" cols="50" rows="8" ></textarea>
					</div>
					<!-- #### RATING #### -->
					<script type="text/javascript">
						os_img_path = 'media/com_remca/images/' ;
						jQuery(function(){
							jQuery('#star').raty({
								starHalf: os_img_path+'star-half.png',
								starOff: os_img_path+'star-off.png',
								starOn: os_img_path+'star-on.png' 
							});
						});
					</script>
					<div class="row_rating_j3">
						<span class="lable_rating">Rating</span>
						<span id="star"></span>
					</div>
					<div  class="row_button_review">
						<span class="button_save">
							<!-- save review button-->
							<input class="button" type="button" value=" Save " onclick="review_submitbutton()"/>
						</span>
					</div>
				</div>
				<input type="hidden" name="fk_houseid" value="3" />
				<input type="hidden" name="catid" value="50" />
			</form>
		</div>
		<!-- end <div id="hidden_review"> -->
	</div>
	<div id="country5" class="tabcontent">
		<div style="text-align: center;" >
			<h4>Calendar of availability and rental rates per period</h4>
			<form action="" method="post" id="calendar" name="calendar" >
				<!-- year select list on display -->
				<select id="month" name="month" class="inputbox" onChange="form.submit()">
					<option value="1">January</option>
					<option value="2">February</option>
					<option value="3" selected="selected">March</option>
					<option value="4">April</option>
					<option value="5">May</option>
					<option value="6">June</option>
					<option value="7">July</option>
					<option value="8">August</option>
					<option value="9">September</option>
					<option value="10">October</option>
					<option value="11">November</option>
					<option value="12">December</option>
				</select>
				<select id="year" name="year" class="inputbox" onChange="form.submit()">
					<option value="2016">2016</option>
					<option value="2017">2017</option>
					<option value="2018" selected="selected">2018</option>
				</select>
				<!-- year select list on display -->
			</form>
			<div class="rem_tableC basictable">
				<div class="row_01">
					<span class="col_01">
						<table class="rem_tableC" style="border-collapse: separate; border-spacing: 2px;text-align:center">
							<tr class="year">
								<th colspan = "7">February 2018</th>
							</tr>
							<tr class="days">
								<th>Mon</th>
								<th>Tue</th>
								<th>Wed</th>
								<th>Thu</th>
								<th>Fri</th>
								<th>Sat</th>
								<th>Sun</th>
							</tr>
							<tr>
								<td>&nbsp;  </td>
								<td>&nbsp;  </td>
								<td>&nbsp;  </td>
								<td class="calendar_day_gone_avaible">1</td>
								<td class="calendar_day_gone_avaible">2</td>
								<td class="calendar_day_gone_avaible">3</td>
								<td class="calendar_day_gone_avaible">4</td>
							</tr>
							<tr>
								<td class="calendar_day_gone_avaible">5</td>
								<td class="calendar_day_gone_avaible">6</td>
								<td class="calendar_day_gone_avaible">7</td>
								<td class="calendar_day_gone_avaible">8</td>
								<td class="calendar_day_gone_avaible">9</td>
								<td class="calendar_day_gone_avaible">10</td>
								<td class="calendar_day_gone_avaible">11</td>
							</tr>
							<tr>
								<td class="calendar_day_gone_avaible">12</td>
								<td class="calendar_day_gone_avaible">13</td>
								<td class="calendar_day_gone_avaible">14</td>
								<td class="calendar_day_gone_avaible">15</td>
								<td class="calendar_day_gone_avaible">16</td>
								<td class="calendar_day_gone_avaible">17</td>
								<td class="calendar_day_gone_avaible">18</td>
							</tr>
							<tr>
								<td class="calendar_day_gone_avaible">19</td>
								<td class="calendar_day_gone_avaible">20</td>
								<td class="calendar_day_gone_avaible">21</td>
								<td class="calendar_day_gone_avaible">22</td>
								<td class="calendar_day_gone_avaible">23</td>
								<td class="calendar_day_gone_avaible">24</td>
								<td class="calendar_day_gone_avaible">25</td>
							</tr>
							<tr>
								<td class="calendar_day_gone_avaible">26</td>
								<td class="calendar_day_gone_avaible">27</td>
								<td class="calendar_day_gone_avaible">28</td>
								<td>&nbsp;  </td>
								<td>&nbsp;  </td>
								<td>&nbsp;  </td>
								<td>&nbsp;  </td>
							</tr>
							<tr>
								<td>&nbsp;  </td>
								<td>&nbsp;  </td>
								<td>&nbsp;  </td>
								<td>&nbsp;  </td>
								<td>&nbsp;  </td>
								<td>&nbsp;  </td>
								<td>&nbsp;  </td>
							</tr>
						</table>
					</span>
					<span class="col_02">
						<table class="rem_tableC" style="border-collapse: separate; border-spacing: 2px;text-align:center">
							<tr class="year">
								<th colspan = "7">March 2018</th>
							</tr>
							<tr class="days">
								<th>Mon</th>
								<th>Tue</th>
								<th>Wed</th>
								<th>Thu</th>
								<th>Fri</th>
								<th>Sat</th>
								<th>Sun</th>
							</tr>
							<tr>
								<td>&nbsp;  </td>
								<td>&nbsp;  </td>
								<td>&nbsp;  </td>
								<td class="calendar_day_gone_avaible">1</td>
								<td class="calendar_day_gone_avaible">2</td>
								<td class="calendar_day_gone_avaible">3</td>
								<td class="calendar_day_gone_avaible">4</td>
							</tr>
							<tr>
								<td class="calendar_day_gone_avaible">5</td>
								<td class="calendar_day_gone_avaible">6</td>
								<td class="calendar_day_gone_avaible">7</td>
								<td class="calendar_day_gone_avaible">8</td>
								<td class="calendar_day_gone_avaible">9</td>
								<td class="calendar_day_gone_avaible">10</td>
								<td class="calendar_day_gone_avaible">11</td>
							</tr>
							<tr>
								<td class="calendar_day_gone_avaible">12</td>
								<td class="calendar_day_gone_avaible">13</td>
								<td class="calendar_day_gone_avaible">14</td>
								<td class="calendar_day_gone_avaible">15</td>
								<td class="calendar_day_gone_avaible">16</td>
								<td class="calendar_day_gone_avaible">17</td>
								<td class="calendar_day_gone_avaible">18</td>
							</tr>
							<tr>
								<td class="calendar_day_gone_avaible">19</td>
								<td class="calendar_day_gone_avaible">20</td>
								<td class="calendar_day_gone_avaible">21</td>
								<td class="calendar_day_gone_avaible">22</td>
								<td class="calendar_day_gone_avaible">23</td>
								<td class="calendar_day_gone_avaible">24</td>
								<td class="calendar_day_gone_avaible">25</td>
							</tr>
							<tr>
								<td class="calendar_day_gone_avaible">26</td>
								<td class="calendar_day_gone_avaible">27</td>
								<td class="calendar_available">28</td>
								<td class="calendar_available">29</td>
								<td class="calendar_available">30</td>
								<td class="calendar_available">31</td>
								<td>&nbsp;  </td>
							</tr>
							<tr>
								<td>&nbsp;  </td>
								<td>&nbsp;  </td>
								<td>&nbsp;  </td>
								<td>&nbsp;  </td>
								<td>&nbsp;  </td>
								<td>&nbsp;  </td>
								<td>&nbsp;  </td>
							</tr>
						</table>
					</span>
					<span class="col_03">
						<table class="rem_tableC" style="border-collapse: separate; border-spacing: 2px;text-align:center">
							<tr class="year">
								<th colspan = "7">April 2018</th>
							</tr>
							<tr class="days">
								<th>Mon</th>
								<th>Tue</th>
								<th>Wed</th>
								<th>Thu</th>
								<th>Fri</th>
								<th>Sat</th>
								<th>Sun</th>
							</tr>
							<tr>
								<td>&nbsp;  </td>
								<td>&nbsp;  </td>
								<td>&nbsp;  </td>
								<td>&nbsp;  </td>
								<td>&nbsp;  </td>
								<td>&nbsp;  </td>
								<td class="calendar_available">1</td>
							</tr>
							<tr>
								<td class="calendar_available">2</td>
								<td class="calendar_available">3</td>
								<td class="calendar_available">4</td>
								<td class="calendar_available">5</td>
								<td class="calendar_available">6</td>
								<td class="calendar_available">7</td>
								<td class="calendar_available">8</td>
							</tr>
							<tr>
								<td class="calendar_available">9</td>
								<td class="calendar_available">10</td>
								<td class="calendar_available">11</td>
								<td class="calendar_available">12</td>
								<td class="calendar_available">13</td>
								<td class="calendar_available">14</td>
								<td class="calendar_available">15</td>
							</tr>
							<tr>
								<td class="calendar_available">16</td>
								<td class="calendar_available">17</td>
								<td class="calendar_available">18</td>
								<td class="calendar_available">19</td>
								<td class="calendar_available">20</td>
								<td class="calendar_available">21</td>
								<td class="calendar_available">22</td>
							</tr>
							<tr>
								<td class="calendar_available">23</td>
								<td class="calendar_available">24</td>
								<td class="calendar_available">25</td>
								<td class="calendar_available">26</td>
								<td class="calendar_available">27</td>
								<td class="calendar_available">28</td>
								<td class="calendar_available">29</td>
							</tr>
							<tr>
								<td class="calendar_available">30</td>
								<td>&nbsp;  </td>
								<td>&nbsp;  </td>
								<td>&nbsp;  </td>
								<td>&nbsp;  </td>
								<td>&nbsp;  </td>
								<td>&nbsp;  </td>
							</tr>
						</table>
					</span>
					<span class="col_03">
						<table class="rem_tableC" style="border-collapse: separate; border-spacing: 2px;text-align:center">
							<tr class="year">
								<th colspan = "7">May 2018</th>
							</tr>
							<tr class="days">
								<th>Mon</th>
								<th>Tue</th>
								<th>Wed</th>
								<th>Thu</th>
								<th>Fri</th>
								<th>Sat</th>
								<th>Sun</th>
							</tr>
							<tr>
								<td>&nbsp;  </td>
								<td class="calendar_available">1</td>
								<td class="calendar_available">2</td>
								<td class="calendar_available">3</td>
								<td class="calendar_available">4</td>
								<td class="calendar_available">5</td>
								<td class="calendar_available">6</td>
							</tr>
							<tr>
								<td class="calendar_available">7</td>
								<td class="calendar_available">8</td>
								<td class="calendar_available">9</td>
								<td class="calendar_available">10</td>
								<td class="calendar_available">11</td>
								<td class="calendar_available">12</td>
								<td class="calendar_available">13</td>
							</tr>
							<tr>
								<td class="calendar_available">14</td>
								<td class="calendar_available">15</td>
								<td class="calendar_available">16</td>
								<td class="calendar_available">17</td>
								<td class="calendar_available">18</td>
								<td class="calendar_available">19</td>
								<td class="calendar_available">20</td>
							</tr>
							<tr>
								<td class="calendar_available">21</td>
								<td class="calendar_available">22</td>
								<td class="calendar_available">23</td>
								<td class="calendar_available">24</td>
								<td class="calendar_available">25</td>
								<td class="calendar_available">26</td>
								<td class="calendar_available">27</td>
							</tr>
							<tr>
								<td class="calendar_available">28</td>
								<td class="calendar_available">29</td>
								<td class="calendar_available">30</td>
								<td class="calendar_available">31</td>
								<td>&nbsp;  </td>
								<td>&nbsp;  </td>
								<td>&nbsp;  </td>
							</tr>
							<tr>
								<td>&nbsp;  </td>
								<td>&nbsp;  </td>
								<td>&nbsp;  </td>
								<td>&nbsp;  </td>
								<td>&nbsp;  </td>
								<td>&nbsp;  </td>
								<td>&nbsp;  </td>
							</tr>
						</table>
					</span>
				</div>
				<div class="row_02">
					<span class="col_01"></span>
					<span class="col_02"></span>
					<span class="col_02"></span>
					<span class="col_03"><br /></span>
				</div>
				<div class="calendar_notation row_03">
					<div class="row_calendar">
						<span class="label_calendar_available">
						Available date for rent</span>
						<div class="calendar_available_notation"></div>
					</div>
					<div class="row_calendar">
						<span class="label_calendar_available">
						Not available date for rent</span>
						<div class="calendar_not_available_notation"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--end all tabs -->
<script type="text/javascript">
	var countries=new ddtabcontent("countrytabs")
	countries.setpersist(true)
	countries.setselectedClassTarget("link") //"link" or "linkparent"
	countries.init()
</script>