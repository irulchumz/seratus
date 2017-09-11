@extends('layouts.header_menu_admin')
@section('content')
<div class="container">
<form method="POST" action="/brands/{{ $brand_detail->id }}">
    {!! method_field('PUT') !!}
    {!! csrf_field() !!}
  <div class="form-group">
      <label for="name">Nama Brand</label>
      <input class="form-control" id="name" type="text" name="name" value="{{ $brand_detail->name }}">
    </div>
    <div class="form-group">
      <label for="address">Lokasi Brand</label>
      <input class="form-control" id="address" type="text" name="address" value="{{ $brand_detail->address }}">
    </div>
    <div class="form-group">
      <label for="contact">Kontak Brand</label>
      <textarea class="form-control" rows="5" id="contact" name="contact">{{ $brand_detail->contact }}</textarea>
    </div>
    <div class="form-group">
      <label for="description">Deskripsi Brand</label>
      <textarea class="form-control" rows="5" id="description" name="description">{{ $brand_detail->description }}</textarea>
    </div>
    <div>
      <h3>Foto saat ini</h3>
       @if(isset($brand_detail->foto))
      <img src="{{ asset('brand_photo/' . $brand_detail->foto)}}">
      @else
      Tidak Ada Foto
      @endif
    </div>
    <div class="form-group">
      <label for="1">Ganti Foto</label>
      <input class="form-control" id="foto" type="file" name="foto">
    </div>
  <div class="form-group form-inline">
    <input type="hidden" value="patch" name="_method">
      <input type="submit" value="Edit" class="btn btn-lg btn-danger">
    </div>

</form>
</div>

<!-- <div class="container">
<h2></h2>
<table class="table table-striped">
  
  <tr>
    <th>ID Brand</th>
    <td>{{ $id_brand }}</td>
  </tr>
  <tr>
    <th>Nama Brand</th>
    <td></td>
  </tr>
  <tr>
    <th>Lokasi Brand</th>
    <td></td>
  </tr>
  <tr>
    <th>Kontak Brand</th>
    <td></td>
  </tr>
  <tr>
    <th>Deskripsi Brand</th>
    <td></td>
  </tr>
</table> -->
<!-- <a href="brands"><button class="btn btn-success btn-sm">Back</button> -->
<!-- </div> -->
@endsection