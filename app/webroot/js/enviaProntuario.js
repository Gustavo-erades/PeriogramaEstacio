function enviaProntuario() {
   var forms = $("#formularioNovo").serialize();
   $.ajax({
      type: 'POST',
      url: 'http://localhost/PeriogramaEstacio/novos/add/',
      data: forms,
      success: function (response) {
         var alerta = document.querySelector("#alert");
         alerta.innerHTML = '';
         const novoAlerta = document.createElement('div');
         novoAlerta.className = 'alert alert-success d-grid col-6 offset-3';
         novoAlerta.role = 'alert';
         novoAlerta.style.position = 'fixed';
         novoAlerta.style.zIndex = '2000';
         novoAlerta.textContent = 'prontuário enviado com sucesso';
         alerta.appendChild(novoAlerta);
         $('#alert').fadeIn().delay(3000).fadeOut();
      },
      error: function () {
         novoAlerta("Erro ao salvar prontuário.");
      }
   });
}
