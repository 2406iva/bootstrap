<?php include_once '../konfiguracija.php'; 
provjeraOvlasti();
$_SESSION['sifra']=$_GET['sifra'];
if(!isset($_GET["sifra"])){
	$greska=array();
		if(isset($_POST["sifra"])){
		include_once 'kontrole.php';

	if(count($greska)==0){
		$izraz=$veza->prepare("update citanje set biljeska=:biljeska where sifra=:sifra;");
		$izraz->execute($_POST);
		header("location: nadzornaPloca.php");
	}	
	}else{
		header("location: " . $putanjaAPP . "logout.php");
	}	
}else{	
	$izraz=$veza->prepare("select b.sifra, a.naslov as naslov, a.autor as autor, b.biljeska as biljeska
							from knjiga a inner join citanje b
							on a.sifra=b.knjiga;");
	$izraz->execute($_GET);
	$rezultat=$izraz->fetch(PDO::FETCH_OBJ);
}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<?php
		include_once '../include/nadzornahead.php';
		?>
	</head>

	<body class="left-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
			<div id="header-wrapper">
				<div id="header" class="container">

					<!-- Logo -->
					<h1>Promijeni bilješku!</h1>
					<br/>
					<hr/>
					<hr/>
					<br/>

					<?php
					include_once "../include/izbornik.php";
					?>
					<form class="log-in-form" action="<?php echo $putanjaAPP; ?>privatno/promjenbiljeskeaction.php" method="post">
						<div class="form-group">
							<label for="naslov">Naslov knjige</label>
							<input type="text" class="form-control" id="naslov" name="naslov" placeholder="<?php echo $rezultat -> naslov; ?>"
							 ">
						</div>

						<div class="form-group">
							<label for="autor">Naziv autora</label>
							<input type="text" class="form-control" id="autor" name="autor" placeholder="<?php echo $rezultat -> autor; ?>"
							">
						</div>

						<br/
						<div class="form-group">
							<label for="biljeska">Bilješka</label>
							<input type="text" class="form-control" id="autor" name="biljeska" 
							value="<?php echo $rezultat -> biljeska; ?>">
						</div>
							<hr/>
							<hr/>
							<br/>
						<br/>
						<button type="submit" class="btn btn-primary">Unesi</button>
					</form>
					</div>	
				</div>
						
						<!-- Scripts -->
						<?php
							include_once '../include/nadzornaskripte.php';
						?>
</body>
</html>