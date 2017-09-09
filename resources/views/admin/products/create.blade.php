@extends('layouts.header_menu_admin')
@section('content')
<div class="container">
  <form method="post" action="/brands" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <div class="form-group">
      <label for="name">Nama Produk</label>
      <input class="form-control" id="name" type="text" name="name">
    </div>
    <div class="form-group">
      <label for="category">Category</label>
      <input class="form-control" id="category" type="text" name="category">
    </div>
    <div class="form-group">
      <label for="brand">Brand</label>
      <input class="form-control" id="brands" type="text" name="brand">
    </div>
    <div class="form-group">
      <label for="tag">Tags</label>
      <input class="form-control" id="address" type="text" name="tag">
    </div>
   
    <div class="form-group">
      <label for="comment">Comment</label>
      <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <textarea class="form-control" rows="5" id="description" name="description"></textarea>
    </div>
    <div class="form-group">
      <label for="foto">Foto 1</label>
      <input class="form-control" id="foto" type="file" name="foto">
    </div>
    <div class="form-group">
      <label for="foto_2">Foto 2</label>
      <input class="form-control" id="foto_2" type="file" name="foto_2">
    </div>
    <div class="form-group">
      <label for="foto_3">Foto 3</label>
      <input class="form-control" id="foto_3" type="file" name="foto_3">
    </div>
    <div class="form-group">
      <label for="file_1">File 1</label>
      <input class="form-control" id="file_1" type="file" name="file_1">
    </div>
    <div class="form-group">
      <label for="file_2">File 2</label>
      <input class="form-control" id="file_2" type="file" name="file_2">
    </div>
    <div class="form-group">
      <label for="file_3">File 3</label>
      <input class="form-control" id="file_3" type="file" name="file_3">
    </div>
    <div class="form-group">
      <label for="file_4">File 4</label>
      <input class="form-control" id="file_4" type="file" name="file_4">
    </div>
    <div class="form-group form-inline">
      <input type="submit" value="Create" class="btn btn-lg btn-danger">
    </div>
  </form>
</div>
@endsection