@extends('layout.base')

@section('pageTitle')
	{{$post->title}}
@endsection

@section('content')
	<p><strong>data:</strong> {{$post->date}}</p>
	<div><strong>tags: </strong>
		@foreach ($post->tags as $tag)
			<span class="badge badge-primary">{{$tag->name}}</span>
		@endforeach
	</div>
	<hr>
	<p>{{$post->content}}</p>
    
	<a href="{{route('admin.posts.index')}}">Torna alla lista degli articoli</a>

	@if (session('message'))
    <div class="alert alert-success" style="position: fixed; bottom: 30px; right: 30px">
        {{ session('message') }}
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
    </div>
	@endif
@endsection