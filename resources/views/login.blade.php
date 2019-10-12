@extends('layouts.app')

@section('content')
<div class="col-md-4 col-md-offset-4">
	<div class="panel panel-default">
	<h1 class="panel-title">Acceso a la aplicación</h1>
	</div>
	<div class="panel-body">
		<form>
			<div class="form-group">
				<label for="password">Contraseña</label>
				<input class="form-control" 
				type="email"
				name="email" 
				placeholder="Ingresa tu email">
			</div>
			<div class="form-group">
				<label for="password">Contraseña</label>
				<input class="form-control" 
				type="password"
				name="password" 
				placeholder="Ingresa tu password">
			</div>
			<button class="btn btn-primary btn-block">Acceder</button>
		</form>
	</div>
</div>
@endsection
