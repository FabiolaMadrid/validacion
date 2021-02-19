<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">  
<title>Página de contacto</title>
</head>
<body>
<div clas="container">
<div class="row">
<div class="col">
<h2>Enviar mensaje</h2>
<form method="POST" action="{{route ('datos.store')}}">
@if (count($errors) > 0)
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }} </li>
@endforeach
</ul>
</div>
@endif
<div class="form-group">
<input type="text" name="nombre" class="form-control" placeholder="Escribe tu nombre" value="{{old('nombre')}}">
</div>
<br>
<div class="form-group">
<input type="email" name="email" class="form-control"placeholder="Escribe tu email" value="{{old('email')}}">
</div>
<br>
<div class="form-group">
<textarea name="mensaje" class="form-control"placeholder="Escribe tus comentarios" value="{{old('mensaje')}}"></textarea>
</div>
<br>
<div class="form-group">
<input type="submit" value="Enviar" class="btn btn-primary">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
</div>
</form>
</div>
</div>
</div>
</body>
</html>