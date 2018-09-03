@extends('layouts.master')

@section('content')
<section class="home">
	<div class="left-content">
		{{ $posts->links() }}
		@foreach ($posts as $posts)
		<div class="item">
			<div class="top-item">
				<!-- <img src="{{ $posts->picture }}" alt=""> -->
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