<!doctype html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="./css/navbarStyle.css">
	<title>Prontuário odontológico</title>
</head>

<body>

	<!-- navbar -->
	<nav class="navbar  corPadrao sticky-top">
		<div class="container-fluid">
			<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<h5>Estácio-Odontologia</h5>
			<a class="navbar-brand" href="#">
				<img src="./img/estacioLogo.png" alt="Estácio" width="50">
			</a>
			
			<div class="offcanvas corPadrao offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
				<div class="offcanvas-header">
					<h5 class="offcanvas-title" id="offcanvasNavbarLabel">Fulano D. Tal</h5>
					<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				</div>
				<div class="offcanvas-body">
					<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">Prontuarios</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Novo</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Sair</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>

	<!-- conteúdo da página -->
	<div class="container-fluid">
		<div class="container">
			<?php echo $this->fetch('content'); ?>
		</div>
	</div>

	<!-- jQuery deve ser carregado antes do Bootstrap -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
		crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</body>

</html>