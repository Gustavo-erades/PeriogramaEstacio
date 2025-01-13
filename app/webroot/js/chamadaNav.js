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
function getNovosPacientes(){
    $.ajax({
        type:'GET',
        url:'novoPaciente/index',
        dataType:'html',
        beforeSend:()=>{
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
$('#navNovoPaciente').on('click',getNovosPacientes);
$(document).ready(function() {
    $('#linkLogo').on('click', function(event) {
        event.preventDefault(); 
        window.location.href = '/PeriogramaEstacio';  
    });
});
getProntuarios();