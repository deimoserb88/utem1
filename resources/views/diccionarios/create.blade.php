@extends('app')

@section('content')


<h1>Registrar Diccionarios</h1>

	{!! Form::open(['route'=>'diccionarios.store']) !!}

            <p>Aqui se verá el formulario</p>
             
            <div class="form-group">
                {!! Form::button('Aceptar', ['type'=>'submit','class'=>'btn btn-primary']) !!}
            </div>
		
			@include('diccionarios.partials.form')
            
		
	{!! Form::close() !!}

@endsection


