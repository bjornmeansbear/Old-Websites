<?php
	$name = $_REQUEST['name'] ;
	$email = $_REQUEST['email'] ;
	$pr = $_REQUEST['roast_radio'] ;
	$prp = $_REQUEST['roast_peeps'] ;
	$tru = $_REQUEST['tru_radio'] ;
	$trup = $_REQUEST['tru_peeps'] ;
	$td = $_REQUEST['td_radio'] ;
	$tdp = $_REQUEST['td_peeps'] ;
  	$message = $_REQUEST['comment'] ;

  	mail( "weddingthrowdown@gmail.com", "RSVP From the Wedding Website",
    	"RSVP Information from $name\n\nPig Roast: $pr\nNumber Attending: $prp\n\nTRU: $tru\nNumber Attending: $trup\n\nThrowdown: $td\nNumber Attending: $tdp\n\n$message",
		"From: $name <$email>" );
		
  	header( "Location: thankyou.html" );
?>