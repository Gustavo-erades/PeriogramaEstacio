function enviaProntuario() {
   var forms = $('#formularioNovo').serialize();
   var teste = $('#tratOdonto').val;
    $.ajax({
       type:'POST',
       url:'http://localhost/PeriogramaEstacio/novos/add/',
       data:teste,
       success: ()=>{
          console.log(teste)
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