var colorPrimario = '#3974D8';
var tipoSolicitud = $('.container-tabla-menu nav ul li:nth-child(1)');
var mostrarTipoSolicitudes = $('.container-tabla-menu nav ul li> ul ');

tipoSolicitud.click(function(){ 
    mostrarTipoSolicitudes.slideToggle();  
});
