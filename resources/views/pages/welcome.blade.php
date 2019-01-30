@extends('main')

@section('title','|Homepage')

@section('content')
      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron">
            <h1>Welcome To Billfree Blog</h1>
            <p>Thank you for visiting. This is my test website built with Laravel. Please read my popular post</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
          </div>
        </div>
      </div><!--End of the .row-->

      <div class="row">
        <div class="col-md-8">

          @foreach($posts as $post)
          <div class="post">
            <h2> {{ $post->title }}</h2>
            <p> {{ substr($post->body, 0, 200) }}{{ strlen($post->body) > 200 ? "..." : ""}}</p>
            <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Read More</a>
          </div>
          <hr>
          @endforeach
        </div>

        <div class="col-md-3 col-md-offset-1">
          <h2>Sidebar</h2>
        </div>
      </div>
@endsection

