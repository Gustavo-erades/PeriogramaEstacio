var conteudo=document.querySelector('.container');
var loading=document.querySelector('.load');
carregaCont('login');
let i=setInterval(()=>{
    clearInterval(i);
    conteudo.style.display='block';
    loading.style.display='none';
},2000);
