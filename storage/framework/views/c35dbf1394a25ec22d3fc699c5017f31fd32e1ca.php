<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>

    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .top-left {
        position: absolute;
        left: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {

    }

    .links > a {
        color: #0880CE;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .linksh {
        color: #1187F7;
        padding: 0 25px;
        font-size: 150%;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
        text-shadow:-13px 8px 10px #000000;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
</style>
</head>
<body>
    <div class="flex-center position-ref full-height">
        <div class="top-left links">
            <div class="content">
                <div class="title m-b-md">
                    <table width='100%' border='0'>
                        <tr> 
                            <td>
                                <img src='img/logoupalt.png' width='50%' alt='UPALT'>
                            </td>
                            <td class='linksh'>GENERADOR DE HORARIOS ACADEMICOS UPALT<br>
                                <span class='Servicio'></span>
                            </td>
                        </tr>            
                    </table>
                </div>
            </div>
        </div>


        <div class="top-right links">
            <?php if(Route::has('login')): ?>
            <?php if(auth()->guard()->check()): ?>
            <a href="<?php echo e(url('/home')); ?>">Inicio</a>
            <?php else: ?>
            <a href="<?php echo e(route('login')); ?>">Entrar</a>
            <a href="<?php echo e(route('register')); ?>">Registrarse</a>
            <?php endif; ?>
            <?php endif; ?>
        </div>

        <div class="links">
            <a href="<?php echo e(route('login')); ?>">
                <button class="btn btn-info backk" style="width: auto;">
                    <img src="img/icono.png" width="20%"><br>
                    Servicios para Alumnos.
                </button>
            </a>
        </div>
    </div>
</div>
</body>
</html>
