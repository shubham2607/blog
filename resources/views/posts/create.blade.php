@extends('main')

@section('title', '|Create New Post')

@section('stylesheets')
<link rel="stylesheet" type="text/css" href="/css/parsley.css">

@endsection

@section('content')

	<div class="row">
          @if (count($errors) > 0)
          <div class="alert alert-danger" role="alert">
               <strong>Errors:</strong>
               <ul>
                    @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                    @endforeach
               </ul>
          </div>


     @endif
		<div class="col-md-8 col-md-offset-2">
			<h1>Create New Post</h1>
			{!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '')) !!}

          		<div class="form-group">
               		<label name="post-title">Title:</label>
               		<input id="title" name="title" class="form-control" required="">
               	</div>
               	<div class="form-group">
               		<label name="post-body">body:</label>
               		<textarea id="body" name="body" class="form-control" rows="15" required=""></textarea>
               	</div>
               	<input type="submit" value="Create Post" class="btn btn-success btn-lg btn-block">

          	{!! Form::close() !!}
			
		</div>
	</div>

@endsection

@section('scripts')
<script src="/js/parsley.min.js"></script>
@endsection