<?php
	header('Content-Type: application/json');
	
	$code = -1;
	$day = $_GET["day"];
	if ($day == 1) $code = 761;
	else if ($day == 2) $code = 941;
	else if ($day == 3) $code = 364;
	else if ($day == 4) $code = 995;
	else exit();
	
	echo file_get_contents("https://r3dakt3d.com/check?number=".$_GET["day"]."&code=".$code."&comboCode=");
?>