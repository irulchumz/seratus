@extends('layouts.header_menu_admin')
@section('content')

<div id="category" class="container">
	<h2>Categories List <a href="categories/create" class="btn btn-primary"> Add Category</a></h2>
	@if (!empty($categories))
	<table class="table">
		<thead>
			<tr>
				<th>Name</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($categories as $category)
			<tr>
				<td>{{ $category->name }}</td>
				<td>
					<a href="categories/{{ $category->id }}"><button class="btn btn-success btn-sm">Detail</button></a>
					<a href="categories/{{ $category->id }}/edit"><button class="btn btn-warning btn-sm">Edit</button></a>
					<form method="POST" action="/categories/{{ $category->id }}">
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
	<p>Tidak ada data Kategori</p>
	@endif
	<div class="table-bottom">
		<div class='pull-left'>
			<strong>Jumlah Kategori : {{ $categories_count}}</strong>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			{{ $categories->links()}}
		</div>
	</div>
	<div class='bottom-nav'>
		<div>
		</div>
	</div>
</div>
@endsection
