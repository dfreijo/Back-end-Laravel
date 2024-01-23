<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscribify | Gestión-inscritos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/crear_acto.css') }}">
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-10">
                <div class="card">
                    <h1 class="text-register">Lista de eventos</h1>
                    <div class="card-body lista-actos">
                        <?php
                            use App\Models\acto;
                            $resultados = acto::all();
                            if ($resultados) {
                                foreach ($resultados as $acto) {
                                    $Id_acto = $acto['Id_acto'];
                                    $Titulo = $acto['Titulo'];
                                    $Descripcion_corta = $acto['Descripcion_corta'];
                                    $Descripcion_larga = $acto['Descripcion_larga'];
                                    $Fecha = $acto['Fecha'];
                                    $Hora = $acto['Hora'];
                                    $Id_tipo_acto = $acto['Id_tipo_acto'];
                                    $Num_asistentes = $acto['Num_asistentes'];
                                ?>    
                                    <div class="acto">
                                    <span>ID: {{$Id_acto}} Titulo:  {{$Titulo}}  </span>
                                    <span>Descripcion:  {{$Descripcion_corta}}  </span>
                                    <a href="{{ route('configInscritosGest', ['id_acto' => $Id_acto, 'titulo' => $Titulo])}}" class="btn btn-editar-acto">Inscritos</a>
                                    </div>
                                <?php
                                }
                            }
                        ?>  
                    </div>
                    <a href="{{ route('adminBack') }}" class="btn btn-primary button-atras">Atras</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>