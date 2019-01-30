@extends('main')


@section('title', '| Login')

@section('content')

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			{!! Form::open() !!}
			{!! Form::label('email', 'Email:') !!}
			{!! Form::email('email', null, ['class' => 'form-control']) !!}

			{!! Form::label('password', 'Password:') !!}
			{!! Form::password('password', ['class' => 'form-control']) !!}
			<br>
			{!! Form::checkbox('remember') !!}{!! Form::label('remember', "Remember Me") !!}
			<br>
			{!! Form::submit('Login', ['class' => 'btn btn-primary btn-block form-spacing-top']) !!}






			{!! Form::close() !!}
		</div>
	</div>


@endsection




@extends('main')


@section('title', '| Register')

@section('content')

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			{!! Form::open() !!}
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name', null, ['class' => 'form-control']) !!}

			{!! Form::label('email', 'Eamil:') !!}
			{!! Form::email('email', null, ['class' => 'form-control']) !!}

			{!! Form::label('password', 'Password:') !!}
			{!! Form::password('password', ['class' => 'form-control']) !!}

			{!! Form::label('password_confermation', 'Confirm Password:') !!}
			{!! Form::password('password_confermation', ['class' => 'form-control']) !!}
			
			<br>
			{!! Form::submit('Register', ['class' => 'btn btn-primary btn-block form-spacing-top']) !!}


			{!! Form::close() !!}
		</div>
	</div>


@endsection