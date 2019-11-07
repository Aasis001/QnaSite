@extends('layouts.app')


@section('content')

<h1>Upload you status</h1>
{{ Form::open(['url'=> $route, 'method' => 'POST']) }}

		<div class="form-group">

			{{Form::label('title','Title')}}
			{{Form::text('title','',['class' => 'form-control','placeholder' => 'Title'])}}
		</div>

		<div class="form-group">

			{{Form::label('content','Content')}}
			{{Form::textarea('content','',['class' => 'form-control','placeholder' => 'content'])}}
		</div>
		@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
		{{Form::submit('Submit',['class'=>'btn btn-primary'])}}


	

	{{ Form::close() }}

	


@endsection