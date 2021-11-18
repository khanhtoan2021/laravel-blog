@extends('layouts.main')

@section('content')
	<div class="leftContent my-4">
		@php ($flag = true)
		@foreach($posts as $post)
			<hr class="featurette-divider">
			<div class="row featurette">
			<div class="col-md-7 {{ ($flag)? '':'order-md-2' }}">
				<h2 class="featurette-heading text-dark">{{$post->title}}</h2>
				<div class="titleInfor border-bottom mb-3">
					<ul class="nav">
						<li class="nav-item"><a class="nav-link active" aria-current="page" href="#"><i class="fas fa-user-tie me-1"></i>{{$post->uPost_fullName}}</a></li>
						<li class="nav-item"><p class="nav-link"><i class="fas fa-clock me-1"></i><span class="date">{{$post->created_at}}</span></p></li>
						<li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-comments me-1"></i><span class="commentSum mx-1">8 </span>comments</a></li>
					</ul>
				</div>
				<div class="contentPost">
					<p><?php echo $post->content ?></p>
				</div>
				<a href="/posts/detail/{{$post->id}}">More Read	</a>
			</div>
			<div class="col-md-5 {{ ($flag)? '':'order-md-1' }}">
				<img src="/storage/thumbnails/{{$post->thumbnail}}" style="width:300px;height:300px" alt="thumbnail">
			</div>
		</div>
		@php ($flag = !$flag)
		@endforeach

		
	</div>
@endsection