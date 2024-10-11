var conteudo=document.querySelector('.container');
var loading=document.querySelector('.load');
let i=setInterval(()=>{
    clearInterval(i);
    conteudo.style.display='block';
    loading.style.display='none';
},2000);