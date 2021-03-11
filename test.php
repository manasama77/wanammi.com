<?php 
$address = "Jl. Cikerti Cikoneng Perum VI Kec. Ciomas";
echo $address."<br>";
echo urlencode($address)."<br>";
?>
<img src="https://maps.googleapis.com/maps/api/staticmap?center=<?=urlencode($address);?>&zoom=13&size=600x300&maptype=roadmap
&markers=color:blue&key=AIzaSyDXMEWMFoWJkDx7hLCjV7rNjRpYwBpybsk">