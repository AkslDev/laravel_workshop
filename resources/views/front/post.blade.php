@extends('layouts.master')

@section('content')
<section class="post gradient">
	<article class="item-open">
		@if(count($posts)>0)
			<div class="top-post gradient">
				<h1 class='title'>{{$posts->titre}}</h1>	
			</div>
			<div class="post-content">
				<div class="left-post">
					<img class="image" src="{{url('images', $posts->pictures->link)}}" alt="Image du post {{$posts->titre}}">
					<div class="post-info">
						<div class="dates">
							<p class="date-start">
								<i class="far fa-calendar-plus"></i>
								Débute le : {{$posts->start}}
							</p> 
							<p class="date-end">
								<i class="far fa-calendar-times"></i>
								Termine le : {{$posts->end}}
							</p> 
						</div>
						<div class="price-user">
							<p class="price">
								<i class="fas fa-money-bill-alt"></i>
								Prix : {{$posts->price}} €
							</p>
							<p class="user">
								<i class="fas fa-users"></i>
								Limité à {{$posts->max_users}} apprenant(s).
							</p>
						</div>
					</div>
				</div>
				<div class="right-post">
					<p class="description">{{$posts->description}}</p> 
				</div>
			</div>
		@endif 
	</article>
</section>
@endsection 