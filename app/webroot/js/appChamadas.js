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