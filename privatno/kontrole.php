<?php

if(trim($_POST["naslov"])===""){
		$greska["naslov"]="Naslov knjige obavezan";
	}
	
	if(!isset($_POST["sifra"])){
		$_POST["sifra"]=0;
	}
	$izraz=$veza->prepare("select sifra from procitao where naslov=:naslov and sifra!=:sifra");
	$izraz->execute();
	$sifra = $izraz->fetchColumn();
	if($sifra>0){
		$greska["naslov"]="Naslov postoji u bazi, odabrati drugi";
	}

	if(trim($_POST["autor"])===""){
		$greska["autor"]="Naziv autora obavezan";
	}