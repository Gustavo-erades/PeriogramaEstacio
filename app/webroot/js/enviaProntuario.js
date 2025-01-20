

function enviaProntuario() {
   var forms = $("#formularioNovo").serialize();
   console.log(implante)

   if(diagnostico!=''){
      /*forms += '&diagnostico=' + encodeURIComponent(diagnostico);*/
      console.log(diagnostico);
   }
   if(implante!=''){
    /*  forms += '&implante=' + encodeURIComponent(implante);*/
    console.log(implante)
   }
   if(tratOdonto!=''){
    /*  forms += '&tratOdonto=' + encodeURIComponent(tratOdonto);*/
      console.log(tratOdonto)
   }
   if(sorriso!=''){
     /* forms += '&sorriso=' + encodeURIComponent(sorriso);*/
     console.log(sorriso)
   }
   if(doencaContagiosa!=''){
     /* forms += '&doencaContagiosa=' + encodeURIComponent(doencaContagiosa);*/
     console.log(doencaContagiosa)
   }
   if(alergia!=''){
     /* forms += '&alergia=' + encodeURIComponent(alergia);*/
     console.log(alergia)
   }
   if(bebida!=''){
    /*  forms += '&bebida=' + encodeURIComponent(bebida);*/
    console.log(bebida)
   }
   if(drogas!=''){
     /* forms += '&drogas=' + encodeURIComponent(drogas);*/
     console.log(drogas)
   }
   if(medicamento!=''){
      /*forms += '&medicamento=' + encodeURIComponent(medicamento);*/
      console.log(medicamento)
   }
   if(fumar!=''){
     /* forms += '&fumar=' + encodeURIComponent(fumar);*/
     console.log(fumar)
   }

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
