<!doctype html>
<html lang="en">
<?php if (isset($header)) echo $header; ?>
<body>
<header>
	<div class="container-fluid">
		<div class="row mt-3">
			<div class="col-4">
				<div class="logo">
					<img class="logo__img" src="img/logo.png" alt=""">
				</div>
			</div>
			<div class="col-4">
				<div class="campanhaDiv mt-4">
					<label><p class="campanha">Campanhas</p></label>
				</div>
			</div>
			<div class="col-4">
				<div class="user">
					<div class="user__perfil" data-toggle="dropdown">
						<img class="user__img perfil_home" src="img/perfil.jpg"></img>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="container-fluid">
	<div class="row">
		<div class="col-4"><?php if (isset($sidebar)) echo $sidebar; ?></div>
		<div class="col-8">
			<div class="container-fluid videos">
				<div class="row">
					<div class="col-4">
						<img class="card-img capa" src="img/jihokuraku2.jpg" alt="">
						<aside class="card">
							<div class="card-body">
								<h5 class="card-title titulo">Jigokuraku</h5>
								<div class="descrip"><p class="card-text"> Asista esse anime no bettler animes</p>
								</div>
								<a href="#" class="btn btn-primary btnAss">Entrar</a>
							</div>
						</aside>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php if (isset($scripts)) echo $scripts; ?>
</body>
</html>
