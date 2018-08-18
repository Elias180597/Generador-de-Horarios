

// funcion no valid
function novalid(){
    $('#alert-error').addClass('animated bounce').fadeIn(500);
    setTimeout(function(){$('#alert-error').removeClass('animated bounce').fadeOut(500);},1500);
}


$(document).ready(function() {
  $(window).load(function() {
//=============================================================================


$('#time1').datetimepicker({
  format:'LT'
});

$('#time2').datetimepicker({
  format:'LT'
});

$('#days-list a').on('click', function(){
     var dias = $(this).attr('data-day');
     var dataset = $('#days-chose');
     var addday = dataset.val();
     var removeday = dataset.val().replace(dias+',', '');
     var dum = $(this); 
     if (dum.hasClass('active-day')){
         dum.removeClass('active-day');
         dataset.val(removeday);
         dataset.click();
     }else{
         dum.addClass('active-day');
         dataset.val(addday+dias+',');
         dataset.click();
     }
});


$('.cancel-new').on('click', function(){
      var dum = $('#days-list a');
      var chose = $('#days-chose');
      dum.removeClass('active-day');
      chose.val('');
      $('#horariofrm')[0].reset();

});




$('.create-horario').on('click', function(){
jQuery.validator.setDefaults({
  debug: true,
  success: "valid",
  ignore: []
});
var horariofrm = $('#horariofrm');
horariofrm.validate({
  rules: {
    nombre: "required",
    days: "required",
    descripcion: "required",
    tiempo1: "required",
    tiempo2: "required",
    minutos: "required"
  }
});
var dado = horariofrm.valid();
if (dado == true){

      var getdatos = horariofrm.serialize();
      var sender = 'process=1&'+getdatos;
      var currentLocation = location.origin + location.pathname.replace('horario/index', 'horariov');
      var _token = $("input[name='_token']").val();
      var process = '1';
      var days = $('#days-chose').val();
      var nombre = $('#nombre').val();
      var tiempo1 = $('#time1').val();
      var tiempo2 = $('#time2').val();
      var minutos = $('#minutos').val();


      $.ajax({

         type: 'POST',
         url: currentLocation,
         data: {process:process,days:days,nombre:nombre,tiempo1:tiempo1,tiempo2:tiempo2,minutos:minutos,_token: _token},
         beforeSend: function(){
             $('#mynew').html('');
             $('#MyModal').modal('toggle');
             $('.cancel-new').click();
         },
         success: function(data){
             $('#clockindex').hide();
             $('#mynew').append(data);
             $('#mynew').addClass('animated zoomIn').fadeIn();
             setTimeout(function(){$('#mynew').removeClass('animated zoomIn');},1500);
         //----------------------------------------------------------------------------
               
                
                // Mostrar Boton Add
                $(".td-line").hover(
                  function() {
                    $(this).find('button').show();
                 },
                  function() {
                    $(this).find('button').hide();
                  }
                );

                // Agregar Informacion
                $('.addinfo').on('click', function(){
                     var dum = $(this).attr('data-row');
                     $('#DataEdit').modal('show');
                     $('#tede').val(dum);
                });


                // Borrar la tarea
                $('.delinfo').on('click', function(){
                     var dum = $(this).attr('data-row');
                     $('#'+dum).text('').removeClass('purple-label red-label blue-label pink-label').hide();
                });


                // Guardar Tarea
                $('.savetask').on('click', function(){
                     var tede = $('#tede').val();
                     var tasker = $('#nametask').val();
                     var materia = $('#atencionalist').val();
                     var tagColor = "red-label";
                     $('#DataEdit').modal('toggle');
                     $('#'+tede).append('<label class="label-desc '+tagColor+'">'+materia+' <a class="deltasker"><i class="fa fa-times"></i></a></label>');
                     //$('#'+tede).text(tasker).addClass(color).show();
                     $('#taskfrm')[0].reset();


                     $('.deltasker').on('click', function(){
                         var element = $(this).parent();
                         element.addClass('animated bounceOut');
                         setTimeout(function(){element.remove();},1000);
                     });

                });



                $('.changethetime').on('click', function(){
                     var theparent = $(this).attr('data-time');
                     $('.hideedittime').hide();
                     $('.timeblock').show();
                     $('#parent'+theparent).hide();
                     $('#edit'+theparent).show();
                });

                $('.savetime').on('click', function(){
                     var savetime = $(this).attr('data-save');
                     var datasavetime = $('#input'+savetime).val();
                     $('#edit'+savetime).hide();
                     $('#parent'+savetime).show();
                     $('#data'+savetime).text(datasavetime);
                     $('#data'+savetime).addClass('animated flash');
                     setTimeout(function(){$('#data'+savetime).removeClass('flash');},1000);
                });

                $('.deleteblock').on('click', function(){
                     var block = $(this).attr('data-block');
                     $('#tr'+block).addClass('animated bounceOutLeft');
                     setTimeout(function(){$('#tr'+block).remove();},1000);
                });

                $('.canceledit').on('click', function(){
                     $('.hideedittime').hide();
                     $('.timeblock').show();   
                });


                $('.guardarhorario').on('click', function(){
                    
                    var btnsave = $(this);
                    var descripcion = $('#descripcion').val();
                    var nombre = $('#nombreinput').val();
                    var horario = $('#mynew').html();
                    //var horariodata = 'process=2&nombre='+nombre+'&descripcion='+descripcion+'&horario='+horario;
                    //var nombre = $('#nombre').val();
                    var currentLocation = location.origin + location.pathname.replace('horario/index', 'horariov');
                    var _token = $("input[name='_token']").val();
                    var process = '2';
                    $.ajax({

                        type: 'POST',
                        url: currentLocation,
                        data: {process:process,descripcion:descripcion,nombre:nombre,horario:horario,_token: _token},
                        beforeSend: function(){
                            btnsave.prop('disabled', true);
                            $('#horario-name').addClass('opacityelement');
                            $('#thetable').addClass('opacityelement');
                        },
                        success: function(){
                            $('#thetable').addClass('animated bounceOut');
                            btnsave.prop('disabled', false);
                            setTimeout(function(){window.location='index'});

                        },
                        error: function(){
                            novalid();
                        }

                    });

                });
         //----------------------------------------------------------------------------
         },
         error: function(){
            novalid();
         }
      });

}else{
novalid();
}
});
//=============================================================================
    });
});




