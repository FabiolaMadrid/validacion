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
            <form action="{{route('Lista.index')}}" method="get">
                <div class="col sm-4">
                    <input type="text" class="form-control" name="texto">
                </div>
                <div class="col auto">
                    <input type="submit" class="btm btn-primary" value="buscar">
                </div>
            </form>
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
                                        <th>{{$estudiantes->Matricula}}</th>
                                        <th>{{$estudiantes->Nombre}}</th>
                                        <th>{{$estudiantes->Domiciliio}}</th>
                                        <th>Editar|Eliminar</th>
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