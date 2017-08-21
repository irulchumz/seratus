@extends('layouts.header_menu_admin')
@section('content')
<div class="container">
<h2></h2>
<table class="table table-striped">
  
  <tr>
    <th>ID Brand</th>
    <td>{{ $id_article }}</td>
  </tr>
  <tr>
    <th>Judul Artikel</th>
    <td>{{ $article_detail->title }}</td>
  </tr>
  <tr>
    <th>Tag</th>
    <td>{{ $article_detail->tag }}</td>
  </tr>
  <tr>
    <th>Content</th>
    <td>{{ $article_detail->content }}</td>
  </tr>
  <tr>
    <th>Foto</th>
    <td>
      @if(isset($article_detail->foto))
      <img src="{{ asset('article_photo/' . $article_detail->foto)}}">
      @else
      Tidak Ada Foto
      @endif
    </td>
  </tr>
</table>
<!-- <a href="brands"><button class="btn btn-success btn-sm">Back</button> -->
</div>
@endsection