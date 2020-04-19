@extends('layouts.app')

@section('content')
	<a href="/posts" class="btn btn-light">Go Back</a>
	<h3>{{ $post->title }}</h3>
	<div> {{ $post->body }} </div>
	<hr>
	<small>written on {{ $post->created_at }}</small>

@endsection