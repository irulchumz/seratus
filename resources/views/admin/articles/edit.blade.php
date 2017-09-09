@extends('layouts.header_menu_admin')
@section('content')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
<div class="container">
<form method="POST" action="/articles/{{ $article_detail->id }}">
    {!! method_field('PUT') !!}
    {!! csrf_field() !!}
  <div class="form-group">
      <label for="name">Judul Artikel</label>
      <input class="form-control" id="title" type="text" name="title" value="{{ $article_detail->title }}">
    </div>
    <div class="form-group">
      <label for="tag">Tag</label>
      <input class="form-control" id="tag" type="text" name="tag" value="{{ $article_detail->tag }}">
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
      <textarea class="form-control" rows="5" id="content" name="content">{{ $article_detail->content }}</textarea>
    </div>
    <div>
      <h3>Foto saat ini </h3>
      <h4 style="color:red">[Jika mau menambahkan foto atau mengedit foto, sementara hapus dulu data lama, dan buat data yang baru]</h4>
       @if(isset($article_detail->foto))
      <img src="{{ asset('article_photo/' . $article_detail->foto)}}">
      @else
      Tidak Ada Foto
      @endif
    </div>
    
    <!-- <div class="form-group">
      <label for="1">Ganti Foto</label>
      <input class="form-control" id="foto" type="file" name="foto">
    </div> -->
  <div class="form-group form-inline">
    <input type="hidden" value="patch" name="_method">
      <input type="submit" value="Edit" class="btn btn-lg btn-danger">
    </div>

</form>
</div>

@endsection