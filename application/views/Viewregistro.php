<!DOCTYPE html>
<html lang="sp">
<head>
	<?php
	header_assets();
	?>
</head>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="img/logo.jpg" alt="bootstrap 4 login page">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Registro</h4>
							<form method="post" action="guardarUsuario" class="my-login-validation" novalidate="">
								<div class="form-group">
									<label for="name">Mombre</label>
									<input id="name" type="text" class="form-control" name="nom" required autofocus>
									<div class="invalid-feedback">
										Cual es tu nombre
									</div>
								</div>

								<div class="form-group">
									<label for="email">Correo electronico</label>
									<input id="email" type="email" class="form-control" name="corr" required>
									<div class="invalid-feedback">
										Tu correo es invalido
									</div>
								</div>

								<div class="form-group">
									<label for="password">Contraseña</label>
									<input id="password" type="password" class="form-control" name="contra" required data-eye>
									<div class="invalid-feedback">
										La contraseña se requiere
									</div>
								</div>

								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="agree" id="agree" class="custom-control-input" required="">
										<label for="agree" class="custom-control-label">estoy de acuerdo a los<a href="#">Terminos y condiciones</a></label>
										<div class="invalid-feedback">
											Debes estar de acuerdo a los terminos y condiciones
										</div>
									</div>
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Registrar
									</button>
								</div>
								<div class="mt-4 text-center">
									¿Ya tienes una cuenta?<a href="index.html">Login</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2019 &mdash; ITS Motul
					</div>
				</div>
			</div>
		</div>
	</section>


	<?php
footer_assets();

	  ?>



	<script src="js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/my-login.js"></script>
</body>
</html>