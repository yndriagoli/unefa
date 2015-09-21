//******
var anchoVentana = $(window).width();
var altoContainer = $(window).height();
//*****

//******
var activarDesactivarMenu = true;
var activarDesactivarMenu = function () {    
    
    if (activarDesactivarMenu ) {
        activarDesactivarMenu = false;
        $('.menu-opciones').show('slow');
        $('.menu-bar').css('borderBottom', 'solid 1px #fff');
    } else {
        activarDesactivarMenu = true;
        $('.menu-opciones').hide('slow');
        $('.menu-bar').css('borderBottom', 'none');
    }
};
//******
//******
//******


//******
$('document').ready(function(){
$('.menu-bar span').click( activarDesactivarMenu );
    if(anchoVentana >= 1024) {
        $('.container').css('minHeight', altoContainer);
    }
    $('.bxslider').bxSlider({  auto: true, captions: true, autoControls: true});
    /*funciones
    Ocultar sections V
    enseñar los sections pertenecientes a cada item del menu 
    falta mostrar notificaciones y cerrarralas
    */
    var MostrarOcultarSecciones = function () 
    {
        objeto = this;
        objeto.requisitos = $('#menu-opciones li:nth-child(2)');
        objeto.solicitud  = $('#menu-opciones li:nth-child(3)');
        objeto.mensajes   = $('#menu-opciones li:nth-child(4)');
        objeto.notificaciones = $('.notificacion');
        
        //Usado para mostrar los requisitos
        objeto.contenedorRequisitos = $('.contenedor-requisitos');
        //Set usado para mostrar solicitudes
        objeto.contenedorSolicitudes = $('.contenedor-solicitudes');
        //Usado para mostrar sección de mensajes
        objeto.contenedorMensajes = $('.contenedor-mensajes');

        objeto.ocultarSections = function () {
            $('.container section, .controles').slideUp();
        };
        objeto.ocultarContainer = function () {
            $('.container').slideUp();
        };
        
        objeto.mostrarOcultar = function (item) {
            var item = item;
            switch (item) {
                case objeto.requisitos:
                    objeto.ocultarSections();
                    objeto.contenedorRequisitos.slideDown().appendTo('.container');
                break;
                case objeto.solicitud:
                    objeto.ocultarSections();
                    $('.contenedor-solicitudes, .contenedor-becas, .contenedor-fames, .contenedor-programa-orientacion').slideDown().appendTo('.container');
                break;
                case objeto.mensajes: 
                    objeto.ocultarSections();
                    objeto.contenedorMensajes.slideDown().appendTo('.container');
                break;
            }
        };
    }
    
    var mOItemsMenu = new MostrarOcultarSecciones();
    mOItemsMenu.requisitos.click( function() {
        mOItemsMenu.mostrarOcultar(mOItemsMenu.requisitos);
    }); 
    mOItemsMenu.solicitud.click(function () {
        mOItemsMenu.mostrarOcultar(mOItemsMenu.solicitud);
    });
    mOItemsMenu.mensajes.click(function () {
        mOItemsMenu.mostrarOcultar(mOItemsMenu.mensajes);
    });
    mOItemsMenu.notificaciones.click(function () {
       mOItemsMenu.mostrarOcultar(mOItemsMenu.notificaciones); 
    });
        
});
//******




