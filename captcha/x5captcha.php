<?php
include("../res/x5engine.php");
$nameList = array("wsd","grf","hx7","kdl","s87","ehh","n45","r76","vfc","vzd");
$charList = array("H","S","2","8","3","3","5","C","E","N");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
