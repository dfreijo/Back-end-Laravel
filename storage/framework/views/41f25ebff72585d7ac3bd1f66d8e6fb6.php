<!-- resources/views/home.blade.php -->


<?php if(request()->has('mensaje')): ?>
    <div class="alert alert-info"><?php echo e(urldecode(request()->get('mensaje'))); ?></div>
<?php endif; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscribify | Inicio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/home.css')); ?>">
</head>

<body>
    <div class="home-container">
        <div class="row">
            <!-- Primera Columna - Nombre de la Aplicación -->
            <div class="col-7 text-center aplication-column">
                <h1 class="name-aplication">Inscribify</h1>
            </div>

            <!-- Segunda Columna - Botones de Logearse y Registrarse -->
            <div class="col-5 text-center column-function">
                <h2 class="login-register">Accede a la aplicación</h2>
                
                
                <?php if(request()->has('action') && request()->get('action') == 'mostrarFormularioLogin'): ?>
                    
                    <?php echo $__env->make('tu_controlador.mostrarFormularioLogin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
                <?php elseif(request()->has('action') && request()->get('action') == 'mostrarFormularioRegistro'): ?>
                    
                    <?php echo $__env->make('tu_controlador.mostrarFormularioRegistro', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
                <?php else: ?>
                    
                    <a class="btn btn-login" href="<?php echo e(route('login')); ?>">Log In</a>
                    <a class="btn btn-register" href="<?php echo e(route('register')); ?>">Sign Up</a>
                <?php endif; ?>
                
            </div>
        </div>
    </div>
</body> 
</html><?php /**PATH /var/www/html/resources/views/home.blade.php ENDPATH**/ ?>