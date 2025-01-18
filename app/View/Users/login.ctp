<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../img/estacioLogo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/loginStyle.css">
    <title>Clínicas</title>
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
                        <h1 class="display-6 mb-3">Login</h1>
                    </div>
                    <div>
                        <div>
                            <div class="form-floating mb-3">
                                <input name="email" id="email"
                                    class="form-control shadow-sm " placeholder="E-mail" required="required" maxlength="50" type="text" />
                                <label for="email">Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input name="senha" id="senha"
                                    class="form-control shadow-sm" placeholder="Senha" required="required" type="password" />
                                <label for="senha">Senha</label>
                            </div>
                            <button class="btn btn-infoPerso w-100 shadow-sm text-light" onclick="validaUser()">Login</button>
                        </div>
                        <div class="mt-3">
                            <p>Não possui uma conta?
                                <a href="http://localhost/PeriogramaEstacio/users/add">Faça seu cadastro</a>
                            </p>
                            <p>Esqueceu a senha?
                                <a href="#">Recuperar senha</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <!--
    <script src="../js/validaFormsAdd.js"></script>
-->
    <script defer>
        function validaUser() {
            var senha = $('#senha').val();
            var email = $('#email').val();
            if (senha != '' && email != '') {
                data = {
                    senha: senha,
                    email: email
                }
                $.ajax({
                    type: 'POST',
                    url: 'http://localhost/PeriogramaEstacio/users/login/',
                    data: data,
                    dataType: 'json', 
                    success: function(response) {
                        if (response.success) {
                            window.location.href = response.redirectUrl;
                        } else {
                            $('#senha').val('');
                            $('#email').val('');
                            novoAlerta("Credenciais incorretas, tente novamente.");
                        }
                    },
                    error: (xhr, status, error) => {
                        $('#senha').val('');
                        $('#email').val('');
                        novoAlerta('Erro ao fazer login!');
                        console.error('Erro no AJAX: ', status, error);
        console.error('Resposta completa: ', xhr.responseText);
                    }
                });

            }
        }


        var alerta = document.querySelector("#alert");

        function novoAlerta(texto) {
            alerta.innerHTML = '';
            const novoAlerta = document.createElement('div');
            novoAlerta.className = 'alert alert-danger d-grid col-6 offset-3';
            novoAlerta.role = 'alert';
            novoAlerta.style.position = 'absolute';
            novoAlerta.style.zIndex = '1000';
            novoAlerta.textContent = texto;
            alerta.appendChild(novoAlerta);
            showAlert();
        }

        function showAlert() {
            $('#alert').fadeIn().delay(3000).fadeOut();
        }
        (function() {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation');
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('erro') && urlParams.get('erro') === 'error') {
                novoAlerta("Usuário ou senha incorretos! Tente novamente.");
                urlParams.delete('erro');
                window.history.replaceState({}, document.title, 'http://localhost/PeriogramaEstacio/');
            }
            Array.prototype.slice.call(forms).forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                        novoAlerta("Usuário ou senha incorretos! Tente novamente.");
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
</body>

</html>