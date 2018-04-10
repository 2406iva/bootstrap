<?php
include_once 'konfiguracija.php';
?>
<head>
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>

<section class="bg-primary" id="prijava">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 mx-auto text-center">
				<h2 class="section-heading text-white">PRIJAVI SE!</h2>
				<hr/>
				<div class="panel-body">

					<div class="container">
						<div class="row">
							<div class="col-lg-8 mx-auto text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<form class="log-in-form" action="autoriziraj.php" method="post">
											<fieldset>
												<div class="form-group">
													<i class="fas fa-at"></i>	<input placeholder="E-mail" name="email" type="text"
													value="<?php
													if (isset($_GET["email"])) {
														echo $_GET["email"];
													} else {
														if ($dev) {
															echo "imartinovic97@gmail.com";
														}
													}
													?>">
												</div>

												<div class="form-group">
													<i class="fas fa-key"></i> 	<input placeholder="Lozinka" name="lozinka" type="password"	value="<?php echo $dev ? "im" : ""; ?>">
												</div>

												<input class="btn btn-lg btn-success btn-block" type="submit" value="Prijava">
												</input>
												<?php
												if (isset($_GET["neuspjelo"])) {
													echo "Neispravna kombinacija email/lozinka";
												}
												?>
											</fieldset>

										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
</section>