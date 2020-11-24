<?php


//coded by stif

$array = array("youtube.com","google.com","212121olmayandomain21212121.com","olmayandomain2222222222222.com","olmayan3333333.com");

$toplam = count($array);

for ($i = 0; $i <= $toplam-1; $i++) {
	if ( checkdnsrr($array[$i], 'ANY') ) {
	}
	else {
		echo $array[$i]."<br>";
	}
}


?>