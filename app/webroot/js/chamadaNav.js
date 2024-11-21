function getProntuarios(){
    $.ajax({
        type:'GET',
        url:'prontuarios/index',
        dataType:'html',
        beforeSend: ()=>{
        },
        success:(data)=>{
            $('#mainContent').html(data);
        },
        error:()=>{
            console.log("erro ao carregar prontuários");
        }
    })
}
function getNovos(){
    $.ajax({
        type:'GET',
        url:'novos/index',
        dataType:'html',
        beforeSend: ()=>{
        },
        success:(data)=>{
            $("#mainContent").html(data);
        },
        error:()=>{
            console.log("erro ao carregar novos prontuários");
        }
    })
}
$('#navProntuario').on('click',getProntuarios);
$('#navNovo').on('click',getNovos);
getProntuarios();