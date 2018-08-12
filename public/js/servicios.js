$(document).ready(function () {

    //var idCuatrimestre = parseInt($("#nametask").val());
    var currentLocation = this.location.origin + this.location.pathname.replace('horario/index', 'getMateriasbyCuatri/');
    $('#idcolortask').html('');
    $('#atencionalist').html('');
    
    $("#atencionalist").on('keyup', function (e) {
        $.ajax({
            type: 'GET',
            url: currentLocation+parseInt($("#nametask").val()),
            success:function(data){
                $('#idcolortask').html('');
                $('#atencionalist').html('');
                $.each(data, function(i,item){
                    $("#idcolortask").append('<option>'+item.nombre+'</option>');
                  });
            }
        });

    });

});