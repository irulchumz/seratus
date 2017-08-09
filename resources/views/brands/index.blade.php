@extends('layouts.master')

@section('body')
<div class="row">
	<a href="../brands/create"><button class="btn btn-sm btn-success">Create</button></a>
	<button class="btn btn-sm btn-primary">Update</button>

	<table class="table">
		<tr>
			<td>Nama Brand</td>
			<td>Address</td>
			<td>Contact</td>
			<td>City</td>
			<td>Action</td>
		</th>
		@foreach ($brands as $brand)
		<tr>
			<td>{{$brand->name}}</td>
			<td>{{$brand->address}}</td>
			<td>{{$brand->contact}}</td>
			<td>{{$brand->city}}</td>
			<td><label><input type="checkbox" name="live"/> Home Page</label></td>
		</tr>
		@endforeach
	</table>
	
	
</div>

@endsection