<?php
include_once '../konfiguracija.php';
provjeraOvlasti();

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
					<h1>Unesi novu knjigu!</h1>
					<br/>
					<hr/>
					<hr/>
					<br/>

					<?php
					include_once "../include/izbornik.php";
					?>

					<?php

					if ($_POST) {
				
							$izraz = $veza -> prepare("insert into knjiga (naslov, autor)
									values (:naslov, :autor)");
							$izraz->bindParam(":naslov",$_POST["naslov"],PDO::PARAM_INT);
							$izraz->bindParam(":autor",$_POST["autor"],PDO::PARAM_INT);
							$izraz -> execute($_POST);
							header("location: knjiznica.php");
						}
				
					?>


					<form class="log-in-form" action="" method="post">
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