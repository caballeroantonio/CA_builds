<?php 	
$show_calendar = false;
$show_reviews = false;
$show_book = true;
$show_amenities = false;
$show_properties = false;

$this->item->reviews[0] = array(
    'title' => 'Really wonderful stay',
    'comment' => 'The house had plenty of space for our family, a fully equipped kitchen, a charming pool and of course a magnificent view. I would recommend this house to any family that is searching for a nice home.',
    'date' => '2014-12-15 15:59:18',
);
$this->item->contacts = 'Mr. Lawman';
$this->item->owneremail = 'quickstart_j3@mail.com';
?>


<div class="REL-row">
	<div class="REL-collumn-xs-12 REL-collumn-sm-8 REL-collumn-md-9 REL-collumn-lg-9">
		<?php require_once('blocks_galery.php'); ?>

<?php
if($show_properties):
?>
<div id="rem_house_property">
	<div class="row_text">
		<span class="col_text_1">Listing status:</span>
		<span class="col_text_2"><?= JText::_('REMCA_LISTING_STATUS'.$this->item->state) ?></span>
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
<?php
endif;//end show_properties
?>
		

		<?php require_once('blocks_tabs.php'); ?>
	</div>
		<?php 
		if($show_book){
			require_once('blocks_contacts.php'); 
			//require_once('blocks_buying.php'); //@ToDo merge with blocks_contacts
		}			
		?>
</div>
<?php
require_once('blocks_scripts.php'); 
require_once('rem_scripts.php');