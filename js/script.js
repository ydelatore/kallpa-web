$(document).ready(function(){
    
    var fecha = new Date();
    
    var dias = [
        'Domingo',
        'Lunes',
        'Martes',
        'Miercoles',
        'Jueves',
        'Viernes',
        'Sábado'
    ];
    
    var meses = [
        'Enero',
        'Febrero',
        'Marzo',
        'Abril',
        'Mayo',
        'Junio',
        'Julio',
        'Agosto',
        'Setiembre',
        'Octubre',
        'NOviembre',
        'Diciembre'
    ];
    
    $('#fecha-footer').text(fecha.getFullYear());
    
    $('#fecha').text(dias[fecha.getDay()] + ', ' + fecha.getDate() + ' de ' + meses[fecha.getMonth()] + ' de ' + fecha.getFullYear());
});