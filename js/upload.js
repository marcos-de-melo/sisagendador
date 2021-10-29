$(document).ready(function(){
    var mensagem = $("#mensagem");
    var preloader = $("#preloader");
    var barra = $("#barra");
    $("#editar-foto").hide();
    mensagem.hide();
    preloader.hide();
    
    $("#btn-editar-foto").on('click',function(){
        $("#editar-foto").toggle();
    });
});