@extends('layouts.master')

@section('content')
<section class="post">
	<article class="item-open">
		@if(count($posts)>0)
			<img class="image" src="{{url('images', $posts->pictures->link)}}" alt="Image du post {{$posts->titre}}">
			<h1 class='title'>{{$posts->titre}}</h1>
			<p class="description">{{$posts->description}}</p> 
		@endif 
	</article>
</section>
@endsection 