<?php
	$name = $_REQUEST['name'] ;
	$phone = $_REQUEST['phone'] ;
	$email = $_REQUEST['email'] ;
	$address1 = $_REQUEST['address1'] ;
	$address2 = $_REQUEST['address2'] ;
	$describe = $_REQUEST['describe'] ;

  	mail( "bjor6n@gmail.com", "Request for a Bid",
    	"This email was generated by the request-a-bid form on the Bond Tile website.\n	
    	Name: $name\n
    	Phone: $phone\n
    	Email: $email\n
    	Address:
    	$address1
    	$address2\n
    	Description of project:
    	$describe",
		"From: $name <$email>" );
		
  	header( "Location: http://bondtile.soundmachinedream.com/" );
?>