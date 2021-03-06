<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">  
    <title>Editar Estudiate</title>
</head>
<body>
    <div class="container">
    <div class="row">
    <div class="col">
    <h2>Editar Estudiate</h2>
    <form method="post" action="{{route ('Lista.update', $estudiante)}}">
    @method('PATCH')
    <div class="form-group">
    <input type="text" name="Matricula" class="form-control" placeholder="Matricula" value="{{$estudiante->Matricula}}">
    </div>
    <br>
    <div class="form-group">
    <input type="text" name="Nombre" class="form-control" placeholder="Nombre" value="{{$estudiante->Nombre}}">
    </div>
    <br>
    <div class="form-group">
    <input type="text" name="Domicilio" class="form-control" placeholder="Domicilio" value="{{$estudiante->Domicilio}}"></textarea>
    </div>
    <br>
    <div class="form-group">
    <input type="submit" value="Enviar" class="btn btn-primary">
    {{csrf_field()}}
    </div>
    </form>
    </div>
    </div>
    </div>
</body>
</html>