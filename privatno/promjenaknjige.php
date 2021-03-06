<?php include_once '../konfiguracija.php'; 
provjeraOvlasti();
$_SESSION['sifra']=$_GET['sifra'];
if(!isset($_GET["sifra"])){
	$greska=array();
		if(isset($_POST["sifra"])){
		include_once 'kontrole.php';

	if(count($greska)==0){
		$izraz=$veza->prepare("update knjiga set naslov=:naslov, autor=:autor where sifra=:sifra;");
		$izraz->execute($_POST);
		header("location: knjiznica.php");
	}	
	}else{
		header("location: " . $putanjaAPP . "logout.php");
	}	
}else{	
	$izraz=$veza->prepare("select * from knjiga where sifra=:sifra");
	$izraz->execute($_GET);
	$_POST=$izraz->fetch(PDO::FETCH_ASSOC);
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
					<h1>Promijeni podatke knjige!</h1>
					<br/>
					<hr/>
					<hr/>
					<br/>

					<?php
					include_once "../include/izbornik.php";
					?>

					<form class="log-in-form" action="<?php echo $putanjaAPP; ?>privatno/promjena.php" method="post">
						<div class="form-group">
							<label for="naslov">Naslov knjige</label>
							<input type="text" class="form-control" id="naslov" name="naslov"
							value="<?php echo isset($_POST["naslov"]) ? $_POST["naslov"] : ""; ?> ">
						</div>

						<div class="form-group">
							<label for="autor">Naziv autora</label>
							<input type="text" class="form-control" id="autor" name="autor"
							value="<?php echo isset($_POST["autor"]) ? $_POST["autor"] : ""; ?> ">
						</div>

						<br/
						<hr/>
						<hr/>
						<hr/>
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
