<?php


//coded by stif
//usage : checkApi.php?site=youtube.com

$site = $_GET["site"];



	if ( checkdnsrr($site, 'ANY') ) {
	echo "1";
	} 
	else {
		echo "0";
	}



?>