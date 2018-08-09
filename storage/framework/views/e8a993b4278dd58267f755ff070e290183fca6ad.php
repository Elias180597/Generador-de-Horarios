<?php
//include url('../include/config.php');
//require_once url('../include/functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Horarios | JHCodes</title>

  <!-- Bootstrap -->
  <link href='https://fonts.googleapis.com/css?family=Maven+Pro' rel='stylesheet' type='text/css'>
  <link href="../css/_css/style.css" rel="stylesheet">
  <style type="text/css">
  @import  url('../css/_css/bootstrap-datetimepicker.css');
  @import  url('../css/_css/font-awesome.min.css');
  @import  url('../css/_css/bootstrap.min.css');
  @import  url('../css/_css/animate.css');

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
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- menu -->
    <div id="menu" class="col-md-12 text-right">
      <div class="container">
        <a class="btn btn-primary" href="<?php echo e(url('/horario/lista')); ?>">
          <i class="fa fa-calendar" aria-hidden="true"></i> Lista de Horarios</a>
        <a class="btn btn-warning" href="<?php echo e(url('/horario/index')); ?>">
          <i class="fa fa-calendar-check-o"></i> Nuevo Horario</a>
      </div>
    </div>
    <!-- menu -->


    <!-- container -->
    <div class="container" >
     <div class="panel panel-info" style="margin-top: 20px;">
       <div class="panel-heading"><i class="fa fa-calendar" aria-hidden="true"></i> Lista de Horarios</div>
       <div class="panel-body nopadding">
       <div class="card-body">
             <table class="table">
            <thead>
             <tr>
             <th scope="col">#</th>
             <th scope="col">Descripción</th>
             <th scope="col">Días</th>
             <th scope="col">Inicio</th>
             <th scope="col">Final</th>
             <th scope="col">Minutos</th>
        </tr>
        </thead>
           <tbody>
           <?php $__currentLoopData = $horarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <th scope="row"><?php echo e($item->idHorario); ?></th>
          <td><?php echo e($item->descripcion); ?></td>
          <td><?php echo e($item->dias); ?></td>
          <td><?php echo e($item->inicio); ?></td>
          <td><?php echo e($item->final); ?></td>
          <td><?php echo e($item->dividir); ?></td>
       </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
       </table>
       </div>
      </div>
    </div>
  </div>
  <!-- container -->

  <!-- apend data -->
  <div id="appenddata"></div>
  <!-- apend data -->


  <!-- append modal set data -->
  <div class="modal fade" id="DataEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close canceltask" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
          <h4 class="modal-title" id="myModalLabel"><i class="fa fa-thumb-tack"></i> Agregar Tarea</h4>
        </div>
        <div class="modal-body">

          <form id="taskfrm">
           <label>Tarea</label>
           <input class="form-control" type="text" id="nametask" >
           <label>Color:</label>
           <select class="form-control" id="idcolortask">
            <option value="purple-label">Purpura</option>
            <option value="red-label">Rojo</option>
            <option value="blue-label">Azul</option>
            <option value="pink-label">Rosa</option>
            <option value="green-label">Verde</option>
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
<script src="../js/_js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/_js/bootstrap.min.js"></script>
<!-- datetimepicker -->
<script src="../js/_js/moment-with-locales.js"></script>
<script src="../js/_js/bootstrap-datetimepicker.js"></script>
<!-- validate -->
<script src="../js/_js/jquery.validate.min.js"></script>
<script src="../js/_js/additional-methods.min.js"></script>
<!-- script -->
<script src="../js/_js/scripts-custom.js"></script>

</body>
</html>