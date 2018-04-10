<?php
include_once '../konfiguracija.php'; 
provjeraOvlasti();

$izraz=$veza->prepare("insert into citanje (biljeska,knjiga) values (:biljeska,:sifra);");
		$izraz->execute(
array(
	"biljeska" => $_POST["biljeska"],
	"sifra" => $_SESSION['sifra']
)
);
		header("location: nadzornaPloca.php");