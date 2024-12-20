
var alerta = document.querySelector("#alert");
function contemArroba(str) {
    return str.includes('@');
}
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

function cadastrarUser() {
    var email = $('#email').val();
    var senha = $('#senha').val();
    var confsenha = $('#confsenha').val();
    var matricula = $('#matricula').val();
    var nome = $('#nome').val();
    if (email != '' && senha != '') {
        if (senha.length >= 8 && contemArroba(email) && confsenha==senha) {
            data = {
                email: email,
                senha: senha,
                nome: nome,
                matricula: matricula
            }
            $.ajax({
                type: 'POST',
                url: 'http://localhost/PeriogramaEstacio/users/add/',
                contentType: 'json',
                data: data,
                success: (response) => {
                    window.location.href = "/PeriogramaEstacio/"
                },
                error: (response) => {
                    console.log("Erro ao cadastrar!")
                }
            })
        } else {
            var emailCampo = document.querySelector("#email");
            emailCampo.style.borderColor = "red";
            var senhaCampo = document.querySelector("#senha");
            senhaCampo.style.borderColor = "red";
            if (senha.length < 8) {
                novoAlerta("A senha deve conter no mínimo 8 caracteres!");
            }
            if (!contemArroba(email)) {

                novoAlerta("O Email deve ser um email válido! exemplo@email.com")
            }
            if(senha != confsenha){
                novoAlerta("As senhas não batem! Por favor, verifique a senha digitada.")
            }
        }
    } else {
        const campos = [{
            id: '#senha',
            valor: senha
        },
        {
            id: '#confsenha',
            valor: confsenha
        },
        {
            id: '#matricula',
            valor: matricula
        },
        {
            id: '#nome',
            valor: nome
        },
        {
            id: '#email',
            valor: email
        }
        ];
        campos.forEach(function (campo) {
            if (campo.valor === '' || !campo.valor) {
                $(campo.id).css('border-color', 'red');
            }
        });
        novoAlerta("Por favor, preencha todos os campos.");
    }
}