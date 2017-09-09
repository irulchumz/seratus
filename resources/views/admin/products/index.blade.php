@extends('layouts.header_menu_admin')
@section('content')

<div id="admin_products" class="container">
	<h2>Products List</h2>
	@if (!empty($products_list))
	<table class="table">
		<thead>
			<tr>
				<th>Nama</th>
				<th>Kontak</th>
				<th>Alamat</th>
				<th>Deskripsi</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($products_list as $product)
			<tr>
				<td>{{ $product->name }}</td>
				<td>{{ $product->contact }}</td>
				<td>{{ $product->address }}</td>
				<td>{{ $product->description }}</td>
				<td>
					<a href="products/{{ $product->id }}"><button class="btn btn-success btn-sm">Detail</button></a>
					<a href="products/{{ $product->id }}/edit"><button class="btn btn-warning btn-sm">Edit</button></a>
					<form method="POST" action="/products/{{ $product->id }}">
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
	<p>Tidak ada data products</p>
	@endif
	<div class="table-bottom">
		<div class='pull-left'>
			<strong>Jumlah Brand : {{ $products_count}}</strong>
		</div>
		<div class='pull-right'>
			Pagination
		</div>
	</div>
	<div class='bottom-nav'>
		<div>
			<a href="products/create" class="btn btn-primary"> Add Brand</a>
		</div>
	</div>
</div>
@endsection
