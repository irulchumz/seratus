@extends('layouts.header_menu')
@section('content')

<div id="admin_brands" class="container">
	<h2>Brands List</h2>
	@if (!empty($brands_list))
	<table class="table">
		<thead>
			<tr>
				<th>Nama</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($brands_list as $brand)
			<tr>
				<td>{{ $brand->name }}</td>
				<td>
					<a href="categories/{{ $brand->id }}"><button class="btn btn-success btn-sm">Detail</button></a>
					<a href="categories/{{ $brand->id }}/edit"><button class="btn btn-warning btn-sm">Edit</button></a>
					<form method="POST" action="/categories/{{ $brand->id }}">
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
	<p>Tidak ada data brands</p>
	@endif
	<div class="table-bottom">
		<div class='pull-left'>
			<strong>Jumlah Brand : {{ $brands_count}}</strong>
		</div>
		<div class='pull-right'>
			Pagination
		</div>
	</div>
	<div class='bottom-nav'>
		<div>
			<a href="categories/create" class="btn btn-primary"> Add Brand</a>
		</div>
	</div>
</div>
@endsection
