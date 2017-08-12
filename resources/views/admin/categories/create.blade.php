@extends('layouts.header_menu')
@section('content')
<div class="container">
  <form method="post" action="/categories" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <div class="form-group">
      <label for="name">Nama Brand</label>
      <input class="form-control" id="name" type="text" name="name">
    </div>
    <div class="form-group">
      <label for="address">Lokasi Brand</label>
      <input class="form-control" id="address" type="text" name="address">
    </div>
    <div class="form-group">
      <label for="contact">Kontak Brand</label>
      <textarea class="form-control" rows="5" id="contact" name="contact"></textarea>
    </div>
    <div class="form-group">
      <label for="description">Deskripsi Brand</label>
      <textarea class="form-control" rows="5" id="description" name="description"></textarea>
    </div>
    <div class="form-group">
      <label for="foto">Foto</label>
      <input class="form-control" id="foto" type="file" name="foto">
    </div>
    <div class="form-group form-inline">
      <input type="submit" value="Create" class="btn btn-lg btn-danger">
    </div>
  </form>
</div>
@endsection