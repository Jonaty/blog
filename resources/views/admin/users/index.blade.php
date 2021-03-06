@extends('admin.template.main')

@section('title', 'Listar Usuarios')

@section('content')

<a href="{{ route('admin.users.create') }}" class="btn btn-info"> Registrar Usuario</a>
<hr>

<table class="table table-striped">
	
	<thead>
		<th>ID</th>
		<th>Nombre</th>
		<th>Correo</th>
		<th>Tipo</th>
		<th>Accion</th>
	</thead>

	<tbody>

	@foreach($users as $user)
		<tr>
			<td>{{ $user->id }}</td>
			<td>{{ $user->name }}</td>
			<td>{{ $user->email }}</td>
			<td>
				@if($user->type == "admin")

				<span class="label label-danger">{{ $user->type }}</span>

				@else

				<span class="label label-primary">{{ $user->type }}</span>

				@endif
			</td>
			<td><a href="" class="btn btn-danger"></a> <a href="" class="btn btn-warning"> </a></td>
		</tr>

    @endforeach
	</tbody>
</table>

{!! $users->render() !!}

@endsection

