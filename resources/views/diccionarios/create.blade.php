@extends('app')

@section('content')

<div class="panel panel-info">
	<div class="panel panel-heading">
		Registrar Diccionarios
	</div>
	<div class="panel-body">
	{!! Form::open(['route'=>'diccionarios.store']) !!}

		@include('diccionarios.partials.form')
		
	{!! Form::close() !!}
	</div>
</div>
@endsection


