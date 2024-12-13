<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./css/styleLogin.css">
    <title>Periograma - Estácio - Login</title>
</head>

<body>
    <div class="container">
        <div class="login-Form">
            <h1 class="titulo mb-3">Periograma<br> Digital</h1>
            <div class="mb-3">
                <img src="./assets/imgs/estacioLogo.png" class="imgLogin">
                <img src="./assets/imgs/estacioNome.png" class="imgNomeLogin">
            </div>
            <form class="mb-3">
                <div class="form-group mb-3">
                    <input type="text" class="form-control mb-2" placeholder="Login">
                    <input type="password" class="form-control" placeholder="Senha">
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-dark" onclick="carregaCont('home')">
                        Entrar
                    </button>
                </div>
            </form>
            <div>
                <a href="#" class="rodapeLogin link d-flex justify-content-center mb-4">Esqueceu a senha?</a>
                <p class="rodapeLogin d-flex justify-content-center">Developed by Davi and Gustavo</p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>