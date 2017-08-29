@extends('layouts.header_menu_admin')
@section('content')
<div class="container">
  <form method="post" action="/categories" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <div class="form-group">
      <label for="name">Nama Kategori</label>
      <input class="form-control" id="name" type="text" name="name">
    </div>
    <div class="form-group form-inline">
      <input type="submit" value="Create" class="btn btn-lg btn-danger">
    </div>
  </form>
</div>
@endsection