function novoAlerta(texto,cor) {
    var alerta = document.querySelector("#alert");
    alerta.innerHTML = '';
    const novoAlerta = document.createElement('div');
    novoAlerta.className = 'alert alert-'+cor+' col-6 offset-3';
    novoAlerta.role = 'alert';
    novoAlerta.style.position = 'absolute';
    novoAlerta.style.zIndex = '1000';
    novoAlerta.textContent = texto;
    alerta.appendChild(novoAlerta);
    $('#alert').fadeIn().delay(3000).fadeOut();
}
function getLogin(){
    $.ajax({
        type: 'GET',
        url: 'users/index/',
        dataType: 'html',
        beforeSend: function () {
        },
        success: (data) => {
            $('#mainContent').html(data);
        },
        error: () => {
            alert('Erro ao carregar página de login');
        }
    })
}
function cadastraPaciente(){
    var nome= $('#nome').val();
    var dataNascimento= $('#dataNascimento').val();
    var telefone= $('#telefone').val();
    var endereco= $('#endereco').val();
    var alunoResponsavel= $('#alunoResponsavel').val();

    if(nome == '' || dataNascimento == '' || telefone == '' || endereco == '' || alunoResponsavel == ''){
        novoAlerta("campos obrigatórios não preenchidos!","danger");
        $('#nome').css('background-color','#f8d7da');
        $('#dataNascimento').css('background-color','#f8d7da');
        $('#telefone').css('background-color','#f8d7da');
        $('#endereco').css('background-color','#f8d7da');
        $('#alunoResponsavel').css('background-color','#f8d7da');
    }else{
        var form=$('#formNovoPaciente').serialize();
        console.log(form);
        $.ajax({
            type:'POST',
            url:'novosPacientes/add',
            data:form,
            success:(data)=>{
                novoAlerta("paciente cadastrado com sucesso","success");
            },
            error:(xhr, status, error)=>{
                novoAlerta("não foi possível cadastrar paciente","danger");
                var errMsg = xhr.responseJSON ? xhr.responseJSON.error : 'Ocorreu um erro.';
            }
        })
    }   
}