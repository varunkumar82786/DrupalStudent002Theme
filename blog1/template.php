<?php 

function blog1_preprocess_html(&$variables){
	drupal_add_css('http://www.w3schools.com/lib/w3.css', array( 'type' => 'external'));
}

?>