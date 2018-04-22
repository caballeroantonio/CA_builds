<?php 
	$photos = json_decode($this->item->photos);
	
$show_calendar = false;
$show_reviews = false;
$show_book = false;
$show_amenities = false;

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
		<?php require_once('blocks_properties.php'); ?>
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