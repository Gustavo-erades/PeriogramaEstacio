<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../img/estacioLogo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/loginStyle.css">
    <title>Prontuário Estácio Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div id="alert"></div>
        <div class="d-flex justify-content-center align-items-center vh-100">
            <div>
                <div style="width:30em;padding:20px" class="card shadow-lg">
                    <div>
                        <h1 class="display-6 mb-3">Cadastro de Usuário</h1>
                    </div>
                    <div>
                        <form id="formularioAdd">
                            <div class="form-floating mb-3">
                                <input type="text" id="matricula" name="matricula" class="form-control shadow-sm"
                                    placeholder="" required>
                                <label for="matricula">Matrícula</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" id="nome" name="nome" class="form-control shadow-sm"
                                    placeholder="" required>
                                <label for="nome">Nome de Usuário</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" id="email" name="login" class="form-control shadow-sm" placeholder=""
                                    required>
                                <label for="email">Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" id="senha" name="senha" class="form-control shadow-sm"
                                    placeholder="" minlength="8" required>
                                <label for="senha">Senha</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" id="confsenha" name="senha" class="form-control shadow-sm"
                                    placeholder="" minlength="8" required>
                                <label for="senha">Confirme a senha Senha</label>
                            </div>
                            <button type="button" onclick="cadastrarUser()" class="btn btn-infoPerso shadow-sm w-100 text-light">
                                cadastrar
                            </button>
                        </form>
                        <div class="mt-3">
                            <p>Já possui cadastro?
                                <a href="<?=$_SERVER['HTTP_REFERER']?>">Faça seu login</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../js/validaFormsAdd.js"></script>
</body>