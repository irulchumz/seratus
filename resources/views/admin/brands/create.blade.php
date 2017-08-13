@extends('layouts.header_menu_admin')
@section('content')
<div class="container">
  <form method="post" action="/brands" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <div class="form-group">
      <label for="name">Nama Brand</label>
      <input class="form-control" id="name" type="text" name="name">
    </div>
    <div class="form-group">
      <label for="category">Category:</label>
      <input name="category" type="text" class="form-control" id="category">
    </div>
     <div class="form-group">
      <label for="city">City:</label>
      <input name="city" type="text" class="form-control" id="city">
    </div>
    <div class="form-group">
      <label for="address">Alamat Brand</label>
      <textarea class="form-control" rows="4" id="address" name="address"></textarea>
    </div>
    <div class="form-group">
      <label for="contact">Kontak Brand</label>
      <textarea class="form-control" rows="2" id="contact" name="contact"></textarea>
    </div>
    <div class="form-group">
      <label for="description">Deskripsi Brand</label>
      <textarea class="form-control" rows="4" id="description" name="description"></textarea>
    </div>
    <div class="form-group">
      <label for="operation_hour">Operational Hour</label>
      <textarea class="form-control" rows="5" id="operation_hour" name="operation_hour"></textarea>
    </div>
    <div class="form-group">
      <label for="foto">Foto</label>
      <input class="form-control" id="foto" type="file" name="foto">
    </div>
    <div class="form-group">
      <label for="comment">Comment:</label>
      <textarea class="form-control" rows="3" name="comment" id="comment"></textarea>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="toko"> Toko</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="brand">Brand</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="online">Online</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="offline">Offline</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="local">Local</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="international">International</label>
    </div>
   
    <div class="form-group">
      <label for="telphone_number">Telphone:</label>
      <input name="telphone_number" type="text" class="form-control" id="telphone_number">
    </div>
    <div class="form-group">
      <label for="email_sales">Email Sales:</label>
      <input name="email_sales" type="text" class="form-control" id="email_sales">
    </div>
    <div class="form-group">
      <label for="email_media">Email Media:</label>
      <input name="email_media" type="text" class="form-control" id="email_media">
    </div>
    <div class="form-group">
      <label for="website">Website:</label>
      <input name="website" type="text" class="form-control" id="website">
    </div>
    <div class="form-group">
      <label for="tags">Tags:</label>
      <input name="tags" type="text" class="form-control" id="tags">
    </div>

    <div class="form-group form-inline">
      <input type="submit" value="Create" class="btn btn-lg btn-danger">
    </div>
  </form>
</div>
@endsection