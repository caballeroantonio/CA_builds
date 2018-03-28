
<div id="rem_house_property">
	<div class="row_text">
		<span class="col_text_1">Listing status:</span>
		<span class="col_text_2">
			<?php if ($this->item->state == true) :?>
				Active
			<?php endif?>
		</span>
	</div>
	<div class="row_text">
		<span class="col_text_1">Property type:</span>
		<span class="col_text_2"><?= $this->item->property_type ?></span>
	</div>
	<div class="row_text">
		<span class="col_text_1">Property ID:</span>
		<span class="col_text_2"><?= $this->item->houseid ?></span>
	</div>
	<div class="row_text">
		<span class="col_text_icon"></span>
		<span class="col_01">Listing type:</span>
		<span class="col_02"><?= $this->item->listing_type ?></span>
	</div>
</div>
		
