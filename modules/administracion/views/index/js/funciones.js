    (function() {
    $(".nav").css("display","none")
    $("h1").css({display:"block",margin:"0 auto",width:220,padding:0})
    $("#menuMovil").css({display:"none !important"})
    var url = '/administracion' ;
   
    $("form").submit(function(event) {
        event.preventDefault();
        login();
    });
    function respuesta(r){
        $('#notificaciones').css("display", "none");
        
        if(r.success==true){
            cargarPagina(r.url); 
           
        }else{
            $('.errorForm').remove();
            $('#'+r.label).append( '<span class="errorForm">'+r.errors+'</span>');
            $('#'+r.label).focus();
            $('#inicio').addClass('classError').on('animationend mozanimationend webkitAnimationEnd oAnimationEnd msanimationend', 
                function() {
                    $('#inicio').removeClass('classError');
                });
        }       
 
        
    }
    function respuestaPag(r){
        $('#container').html(r);
    }
    function login() {
        $('#notificaciones').css("display", "block");
        var str = $("form").serialize();
        $.post(url, str, respuesta, 'json');
    }
    
    function cargarPagina(url){
        $(location).attr('href',url);
        
    }
   
})();