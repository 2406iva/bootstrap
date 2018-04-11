<?php
include_once '../konfiguracija.php'; 
provjeraOvlasti();

$izraz=$veza->prepare("update citanje set biljeska=:biljeska where sifra=:sifra;");
		$izraz->execute(
array(
	"biljeska" => $_POST["biljeska"],
	"sifra" => $_SESSION['sifra']
));
		header("location: nadzornaPloca.php");