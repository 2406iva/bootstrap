<?php
include_once '../konfiguracija.php';
provjeraOvlasti();

$_SESSION['sifra']=$_GET['sifra'];

if (isset($_GET["sifra"])) {
	$greska = array();
	$izraz = $veza -> prepare("select * from knjiga where sifra=:sifra");
	$izraz -> execute($_GET);
	$rezultat = $izraz -> fetch(PDO::FETCH_OBJ);
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
					<h1>Unesi novu bilješku!</h1>
					<br/>
					<hr/>
					<hr/>
					<br/>

					<?php
					include_once "../include/izbornik.php";
					?>
					<form method="post" action="unesibiljesku.php">
						<div class="form-group">
							<label for="autor">Autor</label>
							<input type="text" class="form-control" id="auto" name="autor" placeholder="<?php echo $rezultat -> autor; ?>" >
						</div>
							<br/>
						<div class="form-group">
							<label for="naslov">Naslov</label>
							<input type="text" class="form-control" id="knjiga" name="knjiga" placeholder="<?php echo $rezultat -> naslov; ?>" >
						</div>
							<hr/>
						<div class="form-group">
							<label for="biljeska">Bilješka</label	<?php echo isset($_POST["biljeska"]) ? $_POST["biljeska"] : ""; ?>>
							<textarea class="form-control" id="biljeska" name="biljeska" rows="3"></textarea>
						</div>
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