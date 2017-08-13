@extends('layouts.header_menu')
@section('content')
<div class="container">
  <form method="POST" action="/brands/{{ $brand_detail->id }}">
    {!! method_field('PUT') !!}
    {!! csrf_field() !!}
    <div class="form-group">
      <label for="name">Kategori</label>
      <input class="form-control" id="name" type="text" name="name" value="{{ $brand_detail->name }}">
    </div>
    
    <div class="form-group form-inline">
      <input type="hidden" value="patch" name="_method">
      <input type="submit" value="Edit" class="btn btn-lg btn-danger">
    </div>

  </form>
</div>

@endsection