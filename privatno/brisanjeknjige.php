<?php
		include_once '../konfiguracija.php';
		provjeraOvlasti();
		
		$izraz = $veza -> prepare("delete from knjiga where sifra=:sifra;");
		$izraz -> execute($_GET);
		header("location: knjiznica.php");
		
?>

