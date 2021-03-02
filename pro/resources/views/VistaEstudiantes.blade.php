<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">  
    <title>Lista de Estudiate</title>
</head>
<body>
    <div class="container">
        <h4>Lista de Estudiantes</h4>
        <div class="col.xl.12">
            <!--<form action="{{route('Lista.index')}}" method="get">
            <div class="form row">
                <div class="col sm-4">
                    <input type="text" class="form-control" name="texto">
                </div>
                <div class="col auto">
                    <input type="submit" class="btm btn-primary" value="buscar">
                </div>
                </div>
            </form>-->
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="thead-light">
                            <tr>
                                <th>Matricula</th>
                                <th>Nombre</th>
                                <th>Domicilio</th>
                                <th>Acciones</th>
                                
                            </tr>
                        </thead>
                            <tbody>
                                @foreach ($estudiante as $estudiantes)
                                    <tr>
                                        <td>{{$estudiantes->Matricula}}</td>
                                        <td>{{$estudiantes->Nombre}}</td>
                                        <td>{{$estudiantes->Domicilio}}</td>
                                        <td>Editar|
                                        <form method="POSTY" action="{{ url("Lista/{$estudiantes->id}") }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm ('¿Deseas borrar?');">Eliminar</button>
                                        </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>