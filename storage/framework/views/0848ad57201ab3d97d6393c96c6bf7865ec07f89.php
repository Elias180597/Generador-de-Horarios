<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Register')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('register')); ?>" aria-label="<?php echo e(__('Registro')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Nombre')); ?></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

                                <?php if($errors->has('name')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="matricula" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Matricula')); ?></label>

                            <div class="col-md-6">
                                <input id="matricula" type="text" class="form-control<?php echo e($errors->has('matricula') ? ' is-invalid' : ''); ?>" name="matricula" value="<?php echo e(old('matricula')); ?>" required>

                                <?php if($errors->has('matricula')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('matricula')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Correo')); ?></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Contraseña')); ?></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Confirmar Contraseña')); ?></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="carrera" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Carrera:')); ?></label>

                            <div class="col-md-6">
                                <select id="carrera" class="form-control<?php echo e($errors->has('carrera') ? ' is-invalid' : ''); ?>" name="carrera" required value="<?php echo e(old('carrera')); ?>">
                                    <option value="1">Ingenieria en Tecnologias de la Informacion</option>
                                    <option value="2">Ingenieria en  Energia</option>
                                    <option value="3">Ingenieria en Telecomunicaciones</option>
                                    <option value="4">Ingenieria en Industrial</option>
                                </select>

                                <?php if($errors->has('carrera')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('carrera')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cuatrimestre" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Cuatrimestre')); ?></label>

                            <div class="col-md-6">
                                <input id="cuatrimestre" type="text" class="form-control" name="cuatrimestre" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Guardar')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>