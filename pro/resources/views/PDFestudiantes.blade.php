<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table table-stripped">
        <thead class="thead-light">
            <tr>
                <th>Matricula</th>
                <th>Nombre</th>
                <th>Domicilio</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($estudiante as $estudiantes)
        <tr>
            <td>{{$estudiantes->Matricula}}</td>
            <td>{{$estudiantes->Nombre}}</td>
            <td>{{$estudiantes->Domicilio}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>