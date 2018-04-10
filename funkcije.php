<?php

function provjeraOvlasti() {
	if (!isset($_SESSION[$GLOBALS["appID"] . "autoriziran"])) {
		header("location: " . $GLOBALS["putanjaAPP"]);
	}
}


function stavkaIzbornika($putanja,$opis){
	?>
	<li<?php echo $_SERVER["PHP_SELF"] === $putanja /*prvi parametar*/ ? " class=\"active\"" : "";?>>
		<a href="<?php echo $putanja; /*prvi parametar*/?>"><?php echo $opis; /*drugi parametar*/?></a>
	</li>
	<?php
}


function vrijednostGET($kljuc){
	return isset($_GET[$kljuc]) ? $_GET[$kljuc] : "";
}

