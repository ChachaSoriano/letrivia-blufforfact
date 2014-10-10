<?php
error_reporting(E_ALL ^ E_DEPRECATED);
	$host = "mysql.hostinger.ph";
	$user = "u733533413_gec";
	$password = "Aa1234567";
	$db = "u733533413_gec";
	
	$con = mysql_connect($host,$user,$password) or die(mysql_error());
	mysql_select_db($db);
?>