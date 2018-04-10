<?php

if (!isset($_POST["email"]) || !isset($_POST["lozinka"])) {
	exit ;
}

include_once 'konfiguracija.php';


$izraz=$veza->prepare("select * from korisnik where email=:email and lozinka=md5(:lozinka)");
$izraz->execute($_POST);
$o = $izraz->fetch(PDO::FETCH_OBJ);
print_r($o);


if($o==null){
	header("location: index.php?neuspjelo&email=" . $_POST["email"]);
	exit;
}

$_SESSION[$appID."autoriziran"]=$o;
header("location: privatno/nadzornaPloca.php");

