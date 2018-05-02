
<div id="rem_house_galery">
	<!-- ********************** begin add for show/hiden button "Edit house"___c************* -->
	<!-- ************************* end  add for show/hiden button "Edit house"***************** -->
	<div class="componentheading ">
		<span class="col_text_2"><?= $this->item->name ?></span>
		<div class="rem_house_price">
			<div class="pricemoney">
				<span class="money"><?= $this->item->price ?></span><span class="price">&nbsp;<?= $this->item->id_currency ?></span>
			</div>
			<!--
			<div class="pricemoney"><span class="money">1.958,00</span><span class="price">&nbsp;EUR</span></div>
			<div class="pricemoney"><span class="money">2.640,00</span><span class="price">&nbsp;CAD</span></div>
			-->
		</div>
	</div>
	<div style="clear:both"></div>
	<div class="rem_house_location">
		<i class="fa fa-map-marker"></i>
		<span class="col_text_2"><?= $this->item->c1_country_name ?></span>,
		<span class="col_text_2"><?= $this->item->s_lstate_name ?></span>,
		<span class="col_02"><?= $this->item->hlocation ?></span>.
	</div>
	<div style="clear:both"></div>
	<span class="col_img">
		<div style="position:relative">
			<div class="swiper-container">
				<div class="swiper-wrapper">
				
					<?php foreach ($this->item->photos as $photo) : ?>
					
							<div class="swiper-slide">
								<div class="rem_col_rent view_veh"><?= $this->item->listing_type ?></div>
								<div class="rem_listing_status view_veh">
									<?php if ($this->item->state == true) :?>Active<?php endif?>
								</div>
								<a href="<?= $photo ?>" data-fancybox="slider" title="photo">
									<img alt="" title="" src="<?= $photo ?>" />
								</a>
							</div>
							
					<?php endforeach ?>			
					
				</div>
				<!--end div class="swiper-wrapper"-->
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
			</div>
			<!--end div class="swiper-container"-->
			<!-- add wishlist marker -->
			<span class="fa-stack fa-lg i-wishlist i-wishlist-all"  >
			<i class="fa fa-star-o fa-stack-1x" id="icon3" title="Add to wish list!" onclick="addToWishlist(3, 0)"></i>
			</span>
		</div>
		<!-- end add wishlist marker -->
	</span>
	
	<div class="table_gallery table_07">
		<div class="gallery_img">
			<?php foreach ($this->item->photos as $photo) : ?>
				<div class="thumbnail viewHouses" style="width: 100px; height: 100px;" >
					<a href="<?= $photo ?>" data-fancybox="gallery" title="photo" >
						<img 
							alt="" 
							title="" 
							src="<?= $photo ?>" 
							style="vertical-align:middle;" />
					</a>
				</div>
			<?php endforeach ?>
		</div>
	</div>
	
</div>