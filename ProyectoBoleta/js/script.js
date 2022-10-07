$(document).ready(function(){

    $('#enviar').click(function(){

        var errores = '';

        // Validado Nombre ==============================
        if( $('#user').val() == '' ){
            errores += '<p>Ingresar correctamente el usuario</p>';
            $('#user').css("border-bottom-color", "#F14B4B")
        } else{
            $('#user').css("border-bottom-color", "#d1d1d1")
        }

        // Validado Correo ==============================
        if( $('#pass').val() == '' ){
            errores += '<p>Ingresar correctamente la contraseña</p>';
            $('#pass').css("border-bottom-color", "#F14B4B")
        } else{
            $('#pass').css("border-bottom-color", "#d1d1d1")
        }

        // ENVIANDO MENSAJE ============================
        if( errores == '' == false){
            var mensajeModal = '<div class="modal_wrap">'+
                                    '<div class="mensaje_modal">'+
                                        '<h3 class="error">Errores encontrados</h3>'+
                                        errores+
                                        '<span id="btnClose">Cerrar</span>'+
                                    '</div>'+
                                '</div>'

            $('body').append(mensajeModal);
        }

        // CERRANDO MODAL ==============================
        $('#btnClose').click(function(){
            $('.modal_wrap').remove();
        });
    });

});
