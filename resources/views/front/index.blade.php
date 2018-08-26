@extends('layout.master')

@section('content')
<div class="left-content">
	@foreach ($posts as $posts)
	<div class="item">
		<a class="title" href="post/{{$posts->id}}">{{ $posts->titre }}</a>
		<p class="type">{{ $posts->post_type }}</p>
		<p class="description">{{ $posts->description }}</p>
	</div>
	@endforeach
</div>
<div class="right-content">	
    
</div>
@endsection