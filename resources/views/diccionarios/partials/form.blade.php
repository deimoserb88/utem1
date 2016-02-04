<div class="col-sm-6">
	<div class="form-group">
		{!! Form::text('campo',null,['class'=>'form-control floating-label','placeholder'=>'Campo:'])!!}
	</div>
	<div class="form-group">
		{!! Form::text('nombre',null,['class'=>'form-control floating-label','placeholder'=>'Nombre:'])!!}
	</div>
	<div class="form-group">
		{!! Form::textarea('obs',null,['class'=>'form-control floating-label','placeholder'=>'Observaciones','rows'=>5])!!}
	</div>
	<div class="form-group">
		{!! Form::button('Guardar',['type'=>'submit','class'=>'btn btn-primary']) !!}
	</div>
</div>
