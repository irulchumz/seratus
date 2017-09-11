@extends('layouts.header_menu_admin')
@section('content')
<div class="container">
  <form method="post" action="/brands" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <div class="form-group">
      <label for="name">Name</label>
      <input class="form-control" id="name" type="text" name="name">
    </div>
    <div class="form-group">
      <label for="title">Title</label>
      <input class="form-control" id="title" type="text" name="title">
    </div>
    <div class="form-group form-inline">
      <input type="submit" value="Create" class="btn btn-lg btn-danger">
    </div>
  </form>
</div>
@endsection