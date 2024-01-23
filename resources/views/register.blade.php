<!-- registro.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscribify | Registro de Usuario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}"> 
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-register">Registro</h1>

                        <!-- Formulario de registro -->
                        <form class="border p-3" action="{{ route('register') }}" method="post">
                            @csrf

                            <!-- Campos de la información de la persona -->
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="apellido1">Primer Apellido</label>
                                <input type="text" name="apellido1" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="apellido2">Segundo Apellido</label>
                                <input type="text" name="apellido2" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="Username">Nombre de usuario</label>
                                <input type="text" name="Username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="Password">Contraseña</label>
                                <input type="password" name="Password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="Id_tipo_usuario">Tipo de usuario</label>
                                <select name="Id_tipo_usuario" class="form-control" required>
                                    <option value="1">Usuario</option>
                                    <option value="2">Ponente</option>
                                    <option value="3">Administrador</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Email">Correo electrónico</label>
                                <input type="text" name="Email" class="form-control" required>
                            </div>
                            <button type="submit" name="createPerson" class="btn btn-primary btn-block">Crear Usuario</button>
                        </form>     
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>