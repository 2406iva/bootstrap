<?php

include_once "funkcije.php";

session_start();

$putanjaAPP = "/bootstrap/";
$naslovAPP = "DnevnikČitanja";
$appID = "EDUNOVAAPP";


if ($_SERVER["HTTP_HOST"] === "ivamartinovicz.byethost10.com") {
	$host = "sql312.byethost10.com";
	$dbname = "b10_21048053_mydatabase";
	$dbuser = "b10_21048053";
	$dbpass = "ivadiva.123";
	$dev = false;
} else {
	$host = "localhost";
	$dbname = "dnevnikcitanja";
	$dbuser = "edunova";
	$dbpass = "edunova";
	$dev = true;
}


try{
	$veza = new PDO("mysql:host=" . $host . ";dbname=" . $dbname,$dbuser,$dbpass);
	$veza->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$veza->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8';");
	$veza->exec("SET NAMES 'utf8';");
}catch(PDOException $e){
	
	switch($e->getCode()){
		case 1049:
			header("location: " . $putanjaAPP . "greske/kriviNazivBaze.html");
			exit;
			break;
		default:
			header("location: " . $putanjaAPP . "greske/greska.php?code=" . $e->getCode());
			exit;
			break;
	}
	

}