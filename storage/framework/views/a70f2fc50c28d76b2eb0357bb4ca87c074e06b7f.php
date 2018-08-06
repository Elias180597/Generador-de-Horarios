<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Datos del Alumno.</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('status')); ?>

                    </div>
                    <?php endif; ?>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                Nombre del Alumno:
                                <b><?php echo e(Auth::user()->name); ?></b>
                            </div>
                            <div class="col-md-6">
                                Ingenieria Cursando:
                                <b><?php echo e(Auth::user()->carrera); ?></b>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                Matricula:
                                <b><?php echo e(Auth::user()->id); ?></b>
                            </div>
                            <div class="col-md-6">
                                Correo Estudiantil:
                                <b><?php echo e(Auth::user()->email); ?></b>
                            </div>

                        </div>
                    </div>
                    <div>
                        <center>
                            <a href="<?php echo e(url('/horario/index')); ?>">
                               <button class="btn btn-info backk" style="width: auto;">
                                <img src="img/registro.png" width="20%"><br>
                                Cargar Horario.
                            </button>
                        </a>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>