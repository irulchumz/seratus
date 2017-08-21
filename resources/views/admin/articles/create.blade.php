@extends('layouts.header_menu_admin')
@section('content')
<div class="container">
  <form method="post" action="/articles" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <div class="form-group">
      <label for="title">Judul Artikel</label>
      <input class="form-control" id="title" type="text" name="title">
    </div>
    <div class="form-group">
      <label for="tag">Tags</label>
      <input class="form-control" id="tag" type="text" name="tag">
    </div>
    <div class="form-group">
      <label for="content">Konten</label>
      <textarea class="form-control" rows="10" id="content" name="content"></textarea>
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