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
		<style>
			table {
				
				width:70%; 
        margin-left:10%; 
        height:200px; 
				text-align: center;
			}
		</style>
		<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	</head>
	
	<body class="left-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
			<div id="header-wrapper">
				<div id="header" class="container">
					<!-- Logo -->
					<h1 id="logo">Knjižnica</h1>
					<p>
						Sve ove knjige čekaju da ih pročitaš!
					</p>

				<hr/>
							<a href="novaKnjiga.php" class="button success expanded"><i class="fas fa-plus-circle fa-2x"></i></a>
				<hr/>

					<?php
					include_once "../include/izbornik.php";
					?>
				</div>
			</div>
</div>
<table>
	<thead>
		<tr>
			<th style="font-weight: bold;">Naslov</th>
			<th style="font-weight: bold;">Autor</th>
			<th style="font-weight: bold;">Akcija</th>
			
		</tr>
	</thead>
	<tbody>
				<?php 
					
					$izraz = $veza->prepare("
						SELECT * 
						FROM knjiga
						ORDER BY  `autor` ASC 
					");
					$izraz->execute();
					$rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
					foreach ($rezultati as $red):
					?>
					<tr>
							<td><?php echo $red -> naslov; ?></td>
							<td><?php echo $red -> autor; ?></td>
							<td>
								<a href="novabiljeska.php?sifra=<?php echo $red->sifra; ?>"><i class="fas fa-pencil-alt fa-1x"></i></a>
								<a href="brisanjeknjige.php?sifra=<?php echo $red->sifra; ?>"><i class="far fa-trash-alt fa-1x"></i></a>
								<a href="promjenaknjige.php?sifra=<?php echo $red->sifra; ?>"><i class="far fa-edit fa-1x"></i></a></td>
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