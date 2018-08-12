

<?php $__env->startSection('content'); ?>
<head>
  <meta charset="utf-8">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <style type="text/css">
  @import  url('../css/_css/bootstrap-datetimepicker.css');
  @import  url('../css/_css/font-awesome.min.css');
  @import  url('../css/_css/bootstrap.min.css');
  @import  url('../css/_css/animate.css');
  @import  url('../css/_css/style.css');


  @font-face {
    font-family: 'FontAwesome';
    src: url('../fonts/fontawesome-webfont.eot?v=4.5.0');
    src: url('../fonts/fontawesome-webfont.eot?#iefix&v=4.5.0') format('embedded-opentype'), url('../fonts/fontawesome-webfont.woff2?v=4.5.0') format('woff2'), url('../fonts/fontawesome-webfont.woff?v=4.5.0') format('woff'), url('../fonts/fontawesome-webfont.ttf?v=4.5.0') format('truetype'), url('../fonts/fontawesome-webfont.svg?v=4.5.0#fontawesomeregular') format('svg');
    font-weight: normal;
    font-style: normal;
  }

  body
  {
    background-image: linear-gradient(-60deg, #16a085 0%, #f4d03f 100%);
    background-repeat: no-repeat;
    background-size: 100%;
    background-position: center;
    background-attachment: fixed;
  }
</style>
<!-- Bootstrap -->
<link href='https://fonts.googleapis.com/css?family=Maven+Pro' rel='stylesheet' type='text/css'>
<link href="../css/_css/style.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <div class="card-body">
    <?php if(session('status')): ?>
    <div class="alert alert-success" role="alert">
      <?php echo e(session('status')); ?>

    </div>
    <?php endif; ?>
    

      <!-- menu -->
      <div id="menu" class="col-md-12 text-right">
        <div class="container" style="position: relative;top: 32px;">
        <a class="btn btn-info" href="<?php echo URL::to('/home'); ?>">
          <i class="fa fa-backward"></i> Regresar</a>
          <a class="btn btn-primary" href="<?php echo e(url('/horario/lista')); ?>"><i class="fa fa-calendar" aria-hidden="true"></i> Lista de Horarios</a>
          <button class="btn btn-warning" data-toggle="modal" data-target="#myModal"><i class="fa fa-calendar-check-o"></i> Nuevo Horario</button>
          <a class="btn btn-danger" href="<?php echo URL::to('/logout'); ?>">
          <i class="fa fa-sign-out"></i> Salir</a>
        </div>
      </div>
      <!-- menu -->


      <!-- container -->
      <div class="container">
       <div id="clockindex" class="col-sm-12 text-center" style="position: relative;top: 40px;">
         <i class="fa fa-calendar-plus-o icon-clock-index animated infinite pulse" aria-hidden="true"></i>
       </div>
       <div id="mynew" class="col-sm-12">

       </div>
     </div>
     <!-- container -->



    <!-- modal nuevo horario -->
<div class="modal fade animated bounceInLeft" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close cancel-new" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-calendar"></i> Nuevo Horario</h4>
      </div>
      <div class="modal-body">
        
         <form id="horariofrm">
            <label>Nombre:</label>
            <input class="form-control" type="text" name="nombre" value="<?php echo e(Auth::user()->name); ?>" >
            <label>Descripción:</label>
            <textarea class="form-control" name="descripcion" rows="3" >
            Ingenieria Cursando:
            <?php echo e(Auth::user()->carrera); ?>

            Matricula:
            <?php echo e(Auth::user()->matricula); ?>

            Correo Estudiantil:
            <?php echo e(Auth::user()->email); ?>

            </textarea>
            <label>Dias:</label>
            <div id="days-list" class="col-sm-12">
               <a data-day="1" class="day-option">Lunes</a>
               <a data-day="2" class="day-option">Martes</a>
               <a data-day="3" class="day-option">Miercoles</a>
               <a data-day="4" class="day-option">Jueves</a>
               <a data-day="5" class="day-option">Viernes</a>
               <a data-day="6" class="day-option">Sabado</a>
               <a data-day="7" class="day-option">Domingo</a>
            </div>
            <input id="days-chose" class="form-control" type="text" name="days" >
            <label>Inicio:</label>
            <input class="form-control" type="text" id="time1" name="tiempo1">
            <label>Final:</label>
            <input class="form-control" type="text" id="time2" name="tiempo2">
            <label>Dividir Entre:</label>
            <select class="form-control" name="minutos">
                <option></option>
                <option value="35">35 Minutos</option>
                <option value="45">45 minutos</option>
                <option value="60">1 Hora</option>
            </select>
         </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="create-horario btn btn-success"><i class="fa fa-calendar-check-o"></i> Crear</button>
        <button type="button" class="cancel-new btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button>
      </div>
    </div>
  </div>
</div>
<!-- modal nuevo horario -->

    
<!-- append modal set data -->
<div class="modal fade" id="DataEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close canceltask" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-thumb-tack"></i> Agregar Cuatrimestre</h4>
      </div>
      <div class="modal-body">
        
        <form id="taskfrm">
           <label>Cuatrimestre</label>
           <input class="form-control" type="text" id="nametask" value="<?php echo e(Auth::user()->cuatrimestre); ?>">
           <label>Materia:</label>
           <select class="form-control" id="idcolortask">
           <option value=""  selected="" required> Elija</option>
                    <?php $__currentLoopData = $materias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $materia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($materia->id); ?>">
                      <?php echo e($materia->nombre); ?>

                    </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
          <input id="tede" type="hidden" name="tede" >
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="savetask btn btn-success"><i class="fa fa-floppy-o"></i> Guardar</button>
        <button type="button" class="canceltask btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button>
      </div>
    </div>
  </div>
</div>
<!-- append modal set data -->




<!-- alert danger -->
<div id="alert-error"><i class="fa fa-times fa-2x"></i></div>
<!-- alert danger -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- datetimepicker -->
    <script src="../js/moment-with-locales.js"></script>
    <script src="../js/bootstrap-datetimepicker.js"></script>
    <!-- validate -->
    <script src="../js/jquery.validate.min.js"></script>
    <script src="../js/additional-methods.min.js"></script>
    <!-- script -->
    <script src="../js/script.js"></script>

  </body>
</html>