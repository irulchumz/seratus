@extends('layouts.header_menu_admin')
@section('content')

<div id="admin_brands" class="container">
	<h2>Brands List {{ $myname}} 


	  <a href="/brands/create" class="btn btn-primary"> Add Brand</a></h2>
	@if (!empty($brands))
	
	<table class="table">
		<thead>
			<tr>
				<th>Nama</th>
				<th>Kontak</th>
				<th>Gambar</th>
				<th>Alamat</th>
				<th>Deskripsi</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($brands as $brand)
			<tr>
				<td>{{ $brand->name }}</td>
				<td>{{ $brand->contact }}</td>
				<td>
					@if(isset($brand->foto))
					<img src="{{ asset('brand_photo/' . $brand->foto)}}" width="300px">
					@else
					Tidak Ada Foto
					@endif
					
					
					
				</td>
				<td>{{ $brand->address }}</td>
				<td>{{ $brand->description }}</td>
				<td>
					<a href="brands/{{ $brand->id }}"><button class="btn btn-success btn-sm">Detail</button></a>
					<a href="brands/{{ $brand->id }}/edit"><button class="btn btn-warning btn-sm">Edit</button></a>
					<form method="POST" action="/brands/{{ $brand->id }}">
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
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			{{ $brands->links()}}
		</div>
	</div>
	<div class='bottom-nav'>
		<div>
			
		</div>
	</div>
</div>
@endsection
