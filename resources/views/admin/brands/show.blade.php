@extends('layouts.header_menu')
@section('content')
<div class="container">
<h2></h2>
<table class="table table-striped">
  
  <tr>
    <th>ID Brand</th>
    <td>{{ $id_brand }}</td>
  </tr>
  <tr>
    <th>Nama Brand</th>
    <td>{{ $brand_detail->name }}</td>
  </tr>
  <tr>
    <th>Lokasi Brand</th>
    <td>{{ $brand_detail->address }}</td>
  </tr>
  <tr>
    <th>Kontak Brand</th>
    <td>{{ $brand_detail->contact }}</td>
  </tr>
  <tr>
    <th>Deskripsi Brand</th>
    <td>{{ $brand_detail->description }}</td>
  </tr>
  <tr>
    <th>Foto</th>
    <td>
      @if(isset($brand_detail->foto))
      <img src="{{ asset('brand_photo/' . $brand_detail->foto)}}">
      @else
      Tidak Ada Foto
      @endif
      
    </td>
  </tr>
</table>
<!-- <a href="brands"><button class="btn btn-success btn-sm">Back</button> -->
</div>
@endsection