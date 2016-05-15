<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
	<title>{{ $prueba->title }}</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>
   
<h1>{{ $prueba->title }}</h1>
<hr>
<p>{{ $prueba->content }}</p>
<hr>
<p>{{ $prueba->user->name }} | {{ $prueba->user->email }}</p>
<hr>
<p>{{ $prueba->category->name }}</p>
<hr>
@foreach ($prueba->tags as $tag)
{{ $tag->name}}
@endforeach
	
</body>
</html>	

