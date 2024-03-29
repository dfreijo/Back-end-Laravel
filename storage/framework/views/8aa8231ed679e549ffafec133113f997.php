<!-- gestio_acto.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscribify | Configurar-Evento</title>
    
    <!-- Incluir Bootstrap desde tu carpeta local -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Incluir tu archivo de estilos personalizado -->
    <link rel="stylesheet" href="<?php echo e(asset('css/gestio_acto.css')); ?>">
</head>

<div class="container text-center principal">
        <h1>Configuración Evento</h1>
        <div class="buttons-container">
            <div class="button-group">
                    <a href="<?php echo e(route('editEvent')); ?>" class="btn btn-primary button-editar-evento">EDITAR EVENTO</a>
                    <a href="<?php echo e(route('adminPonente')); ?>" class="btn btn-primary button-ponente">GESTIÓN PONENTES</a>
            </div>
            <div class="button-group">
                    <a href="<?php echo e(route('adminTypeEvent')); ?>" class="btn btn-primary button-crear-tipoActo">GESTIÓN TIPOS EVENTO</a>
                    <a href="<?php echo e(route('configInscritos')); ?>" class="btn button-configurar-inscritos">GESTIÓN INSCRITOS</a>
            </div>
        </div>
        <a href="<?php echo e(route('adminBack')); ?>" class="btn button-atras">Atras</a>
    </div>
</body>
</html><?php /**PATH /var/www/html/resources/views/adminConfigEvent.blade.php ENDPATH**/ ?>