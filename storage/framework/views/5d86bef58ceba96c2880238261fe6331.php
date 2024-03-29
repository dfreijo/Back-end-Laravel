<!-- admin.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscribify | Panel-Administrador</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/admin.css')); ?>">
</head>

<body>
    <div class="container text-center principal">
        <h1>Panel de Administración
            <a href="<?php echo e(url('userBack')); ?>" class="btn btn-primary button-cerrar">Cerrar sesión</a>
        </h1>
        <div class="buttons-container m-100">

            <!-- Ejemplo de enlace a una ruta definida en Laravel -->
            <a href="<?php echo e(route('adminAddEvent')); ?>" class="btn btn-primary button-crear-evento">AÑADIR EVENTO</a>
            <a href="<?php echo e(route('adminConfigEvent')); ?>" class="btn btn-primary button-configurar-evento">CONFIGURAR EVENTO</a>
        </div>
    </div>
</body><?php /**PATH /var/www/html/resources/views/admin.blade.php ENDPATH**/ ?>