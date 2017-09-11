@extends('layouts.header_menu_admin')
@section('content')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
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
      <label for="rubric">Rubrik</label>
      <select class="form-control" id="rubric" name="rubric">
        <option value="astory">A Story</option>
        <option value="journal">Journal</option>
        <option value="personality">Personality</option>
        <option value="visual">Visual</option>
        <option value="curation">Curation</option>
        <option value="news">News</option>
      </select>
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