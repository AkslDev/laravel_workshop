@extends('layouts.master')

@section('content')
<section class="home">
	<div class="left-content">
		@foreach ($posts as $posts)
		<div class="item">
			<div class="top-item">
			<img class="image" src="{{url('images', $posts->pictures->link)}}" alt="Image du post {{$posts->titre}}">
				
				<a class="title" href="{{ url('post/' . $posts->id) }}">{{ $posts->titre }}</a>
				<span  class="type">{{ $posts->post_type }}</span >
			</div>
			<div class="bottom-item">
				<p class="description">{{ $posts->description }}</p>		
			</div>
		</div>
		@endforeach
	</div>
	<div class="right-content"></div>
</section>

@endsection