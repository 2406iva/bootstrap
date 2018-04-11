<?php
include_once '../konfiguracija.php';
provjeraOvlasti();

if (isset($_GET["sifra"])) {
	$greska = array();
	$izraz = $veza -> prepare("select * from citanje where sifra=:sifra");
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
		
		
		<style>
			table {
					width:70%; 
        			margin-left:15%; 
        			height: 150px;
					text-align: center;
					vertical-align:middle;
			}
			table, th, td {
			    border: 1px solid black;
			    vertical-align:middle;
			}
		</style>
	</head>
	<body class="left-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
			<div id="header-wrapper">
				<div id="header" class="container">
					<!-- Logo -->
					<h1 id="logo">Tvoj dnevnik</h1>
					<br />
						<hr>
						<p>
						Sve tvoje bilješke na jednom mjestu!
						</p>
					<?php
						include_once "../include/izbornik.php";
					?>
				</div>
			</div>			
		</div>
	
		<br/>
		<br />
	<table>
	<thead>
		<tr>
			<th style="font-weight: bold;">Naslov</th>
			<th style="font-weight: bold;">Autor</th>
			<th style="font-weight: bold;">Bilješka</th>
			<th style="font-weight: bold;">Akcija</th>
		</tr>
	</thead>
	<tbody>
				<?php 
					$izraz = $veza->prepare("
							select b.sifra, a.naslov as naslov, a.autor as autor, b.biljeska as biljeska
							from knjiga a inner join citanje b
							on a.sifra=b.knjiga;");
					$izraz->execute();
					$rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
						foreach($rezultati as $red):
								
					?>
					<tr>
							<td><?php echo $red -> naslov; ?></td>
							<td><?php echo $red -> autor; ?></td>
							<td width="70%"><?php echo $red -> biljeska; ?></td>
							<td>								
								<a href="brisanjebiljeske.php?sifra=<?php echo $red->sifra; ?>"><i class="far fa-trash-alt fa-1x"></i></a>
								<a href="promjenabiljeske.php?sifra=<?php echo $red->sifra; ?>"><i class="far fa-edit fa-1x"></i></a>
							</td>
					</tr>
				<?php endforeach; ?>						
	</tbody>
</table>
	
			<!-- Scripts -->
			<?php
			include_once '../include/nadzornaskripte.php';
			?>
	</body>
</html>