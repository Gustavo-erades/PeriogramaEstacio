<!doctype html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="./css/navbarStyle.css">
	<link rel="stylesheet" href="./css/componentesStyle.css">
	<link rel="stylesheet" href="./css/telaPadraoStyle.css">
	<link rel="stylesheet" href="./css/loading.css">
	
	<script type="text/javascript" src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>


	<link rel="shortcut icon" href="img/estacioLogo.png" type="image/x-icon">
	
	<title>Prontuário odontológico</title>
</head>

<body>
	<?php
		echo $this->element('navbar');
	?>
	<!-- conteúdo da página -->
	<div class="container-fluid">
		<div class="container">
			<?php
			echo $this->fetch('content');
			?>
		</div>
		<div class="load">
			<img src="img/estacioLogo.png" class="imgLogin imgLoad">
			<!-- <img src="img/estacioNome.png" class="imgNomeLogin imgLoad"> -->
		</div>
	</div>
	<!-- jQuery deve ser carregado antes do Bootstrap -->
	<script>
		var conteudo = document.querySelector('.container');
		var loading = document.querySelector('.load');
		let i = setInterval(() => {
			clearInterval(i);
			conteudo.style.display = 'block';
			loading.style.display = 'none';
		}, 2000);
	</script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
		crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<script src="js/chamadaNav.js"></script>
	<script src="js/enviaProntuario.js"></script>
	<script src="js/appChamadas.js"></script>
</body>

</html>