@extends('layout.base')

@section('pageTitle')
	Lista Articoli
@endsection

@section('content')

<div class="mb-3 text-right">
	<a href="{{route('admin.posts.create')}}"><button type="button" class="btn btn-success">Aggiungi Post</button></a>
</div>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Immagine</th>
			<th scope="col">Titolo</th>
			<th scope="col">Data</th>
		</tr>
	</thead>
	<tbody>
        @foreach ($posts as $post)
		<tr>
			<td><img src="{{$post->image ? $post->image : 'https://via.placeholder.com/200'}}" alt="{{$post->title}}" style="width: 100px"></td>
			<td>{{$post->title}}</td>
			<td>{{$post->date}}</td>
		</tr>
        @endforeach
	</tbody>
</table>
@endsection