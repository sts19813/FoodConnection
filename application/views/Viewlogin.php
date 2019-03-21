<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>


	<?php
	header_assets();
	?>


	<title>Iniciar sesión</title>

</head>

<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src=<?php echo base_url("assets/Loginxdd/img/logo.jpg"); ?> alt="logo">>
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Iniciar sesión</h4>
							<?php echo validation_errors(); ?>
							<?php echo form_open('Ctrlogin');?>
								<div class="form-group">
									<label for="email">Correo</label>
									<input id="email" type="email" class="form-control" name="email" value="" autofocus>
								</div>

								<div class="form-group">
									<label for="password">Contraseña
										<a href="forgot.html" class="float-right">
											Has olvidado tu contraseña?
										</a>
									</label>
									<input id="password" type="password" class="form-control" name="password" data-eye>
								</div>

								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="remember" id="remember" class="custom-control-input">
										<label for="remember" class="custom-control-label">Recordar</label>
									</div>
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Entrar
									</button>
								</div>
								<div class="mt-4 text-center">
									¿No tienes una cuenta? <a href="register.html">Crear una</a>
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
</body>
</html>
