@extends('layouts.header_menu_admin')
@section('content')

<div id="article_brands" class="container">
	<h2>Articles List <a href="articles/create" class="btn btn-primary"> Add Article</a></h2>
	@if (!empty($articles_list))
	<table class="table">
		<thead>
			<tr>
				<th>Title</th>
				<th>Tags</th>
				<th>Content</th>
				<th>Foto</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($articles_list as $article)
			<tr>
				<td>{{ $article->title }}</td>
				<td>{{ $article->tag }}</td>
				<td>{{ $article->content }}</td>
				<td>
					@if(isset($article->foto))
					<img src="{{ asset('article_photo/' . $article->foto)}}" width="300px">
					@else
					Tidak Ada Foto
					@endif
				</td>
				<td>
					<a href="articles/{{ $article->id }}"><button class="btn btn-success btn-sm">Detail</button></a>
					<a href="articles/{{ $article->id }}/edit"><button class="btn btn-warning btn-sm">Edit</button></a>
					<form method="POST" action="/articles/{{ $article->id }}">
						{!! method_field('DELETE') !!}
						{!! csrf_field() !!}
						<button class="btn btn-default btn-sm">Delete</button>
					</form>

				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	@else
	<p>Tidak ada data Artikel</p>
	@endif
	<div class="table-bottom">
		<div class='pull-left'>
			<strong>Jumlah Arikel : {{ $articles_count}}</strong>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			{{ $articles->links()}}
		</div>
	</div>
	<div class='bottom-nav'>
		<div>
		</div>
	</div>
</div>
@endsection
