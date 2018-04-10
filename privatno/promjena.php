<?php
include_once '../konfiguracija.php'; 
provjeraOvlasti();

$izraz=$veza->prepare("update knjiga set naslov=:naslov, autor=:autor where sifra=:sifra;");
		$izraz->execute(
array(
	"naslov" => $_POST["naslov"],
	"autor" => $_POST["autor"],
	"sifra" => $_SESSION['sifra']
)
);
		header("location: knjiznica.php");