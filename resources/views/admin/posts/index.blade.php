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
			<th scope="col">Azioni</th>
		</tr>
	</thead>
	<tbody>
        @foreach ($posts as $post)
		<tr>
			<td><img src="{{asset('storage/'. $post->image)}}" style="height:100px"></td>
			<td>{{$post->title}}</td>
			<td>{{$post->date}}</td>
			<td>
				<a href="{{route('admin.posts.show', [ 'post' => $post->id ])}}"><button type="button" class="btn btn-primary">Visualizza</button></a>
				<a href="{{route('admin.posts.edit', [ 'post' => $post->id ])}}"><button type="button" class="btn btn-success">Modifica</button></a>
				{{-- <form action="{{route('admin.posts.destroy', [ 'post' => $post->id ])}}" method="POST">
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">Elimina</button>
				</form> --}}
			</td>
		</tr>
        @endforeach
	</tbody>
</table>
@endsection