<?php
include_once '../konfiguracija.php';
provjeraOvlasti();
$stranica = isset($_GET["stranica"]) ? $_GET["stranica"] : 1;
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
					<h1 id="logo">ERA dijagram</h1>

					<?php
					include_once "../include/izbornik.php";
					?>
				</div>
			</div>

			<br/>

			<div class="grid-x grid-padding-x">
				<div class="large-12 cell">
					<div style="width: 100%; text-align: center;">
						<img src="<?php echo $putanjaAPP ?>img/erafinal.png" alt="ERA" />
					</div>

				</div>
			</div>

			<!-- Scripts -->
			<?php
			include_once '../include/nadzornaskripte.php';
			?>
	</body>
</html>