@extends('adminlte::page')

@section('title', $title)

@section('content')
	@if($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	<div class="panel panel-default">
		<div class="panel-heading">
			<h2>{{ $title }}</h2>
		</div>
		<div class="panel-body">
			{!! Form::open(['route' => 'provider-credits.store', 'method' => 'POST', 'autocomplete' => 'off', 'files' => true]) !!}
				<div class="form-group">
					<label for="provider">Conductor</label>
					<input type="text" id="provider" name="provider" value="{{ @$data->provider }}"  class="form-control" />
				</div>
				<div class="form-group">
					<label for="credit">Credito</label>
					<input type="text" id="credit" name="credit" value="{{ @$data->credit }}"  class="form-control" />
				</div>
				<button class="btn btn-success"><i class="fas fa-save"></i> Guardar</button>
				<a class="btn btn-danger" href="{{ route('provider-credits.index') }}"><i class="fas fa-times-circle"></i> Cancelar</a>
			{!! Form::close() !!}
		</div>
	</div>
@stop