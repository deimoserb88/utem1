@extends('app')

@section('content')

	<h1>Diccionarios registrados</h1>

	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>Campo</th>
				<th>Nombre</th>
				<th>Obs</th>
			</tr>
		</thead>
		<tbody>
			@foreach($diccionarios as $diccionario)
			<tr>
				<td>{{ $diccionario->id }}</td>
				<td>{{ $diccionario->campo }}</td>
				<td>{{ $diccionario->nombre }}</td>
				<td>{{ $diccionario->obs }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	
	{!! $diccionarios->render() !!}

@endsection