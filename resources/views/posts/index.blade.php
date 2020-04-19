@extends('layouts.app')

@section('content')
	<h3>Posts</h3>
	@if(count($posts) > 0)
		@foreach($posts as $post)
			<div class="card" style="width: 18rem;">
			  <img class="card-img-top" src=".../100px180/" alt="Card image cap">
			  <div class="card-body">
			    <h3 class="card-title"><a href="/posts/{{ $post->id }}"> {{ $post->title }}</a></h3>
			    <small>written on {{ $post->created_at }}</small>
			  </div>
			</div>
		@endforeach
		{{ $posts->links() }}
	@else
		<p>no posts found</p>
	@endif
@endsection