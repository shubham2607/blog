@extends('main')

@section('title', '|Blog Post')

@section('content')

	<div class="row">
	{!! Form::model($post, ['route' => ['posts.update', $post->id]]) !!}
	<div class="col-md-8">
		{!! Form::text('title',null, ["class" => 'form-control']) !!}
		{!! Form::textarea('body',null, ["class" => 'form-control']) !!}
		
	</div>
	<div class="col-md-4">
		<div class="well">
			<dl class="dl-horizontal">
				<dt>Created At:</dt>
				<dd>{{ date('M j, Y h:iA', strtotime($post->created_at)) }}</dd>
			</dl>

			<dl class="dl-horizontal">
				<dt>Last Updated:</dt>
				<dd>{{ date('M j, Y h:iA', strtotime($post->updated_at)) }}</dd>
			</dl>
			<hr>
			<div class="row">
				<div class="col-sm-6">
					{!! Html::linkRoute('posts.show', 'Cancle', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
					
				</div>
				<div class="col-sm-6">
					{!! Html::linkRoute('posts.update', 'Update', array($post->id), array('class' => 'btn btn-success btn-block')) !!}
				</div>
			</div>

		</div>
	</div>
	{!! Form::close()!!}
</div>

@endsection