<!-- Nav -->
<nav id="nav">
	<ul>
		
		<li>
			<a href="nadzornaPloca.php"><span><i class="fas fa-sticky-note"></i>  Moj dnevnik</span></a>
		</li>
					
		<li>
			<a  href="knjiznica.php"><span><i class="fas fa-book"></i>  Knjižnica</span></a>
		</li>
				
		<li>
			<a href="era.php"><span><i class="fas fa-camera"></i>  ERA</span></a>
		</li>
		
		<li>
			<a href="https://github.com/2406iva" target="_blank"><i class="fab fa-github-square"></i> Github</a>
		</li>
		
		<li>
			<?php if(!isset($_SESSION[$appID."autoriziran"])): ?>
	  		<a href="<?php echo $putanjaAPP; ?>login.php" class="button">Prijava</a>
	  	<?php else: ?>
	  		<a href="<?php echo $putanjaAPP; ?>logout.php" class="button"><i class="fas fa-sign-out-alt"></i>  Odjava </a>
	  	<?php endif; ?>
		</li>
	</ul>
</nav>

<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>