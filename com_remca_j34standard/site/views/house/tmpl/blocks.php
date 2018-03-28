<?php 
	$photos = json_decode($this->item->photos);
?>


<div class="REL-row">
	<div class="REL-collumn-xs-12 REL-collumn-sm-8 REL-collumn-md-9 REL-collumn-lg-9">
		<?php require_once('blocks_galery.php'); ?>
		<?php require_once('blocks_properties.php'); ?>
		<?php require_once('blocks_tabs.php'); ?>
	</div>
	<div class="REL-collumn-xs-12 REL-collumn-sm-4 REL-collumn-md-3 REL-collumn-lg-3">
		<?php require_once('blocks_contacts.php'); ?>
		<?php require_once('blocks_buying.php'); ?>
	</div>
</div>
<?php
require_once('blocks_scripts.php'); 
require_once('rem_scripts.php');