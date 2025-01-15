function enviaProntuario() {
   var forms = $('#formularioNovo').serialize();
    $.ajax({
       type:'POST',
       url:'http://localhost/PeriogramaEstacio/novos/add/',
       data:forms,
       success: ()=>{
          
       },
       error:()=>{
          novoAlerta("Erro ao salvar prontuário.");
       }
    })

}
var btn = $('#salvarNovoPront');
btn.on("click", function (e) {
   e.preventDefault();
   enviaProntuario();
});