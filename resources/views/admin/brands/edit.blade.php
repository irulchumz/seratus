@extends('layouts.header_menu_admin')
@section('content')
<div class="container">
  <form method="POST" action="/brands/{{ $brand_detail->id }}">
    {!! method_field('PUT') !!}
    {!! csrf_field() !!}
    <div class="form-group">
      <label for="name">Nama Brand</label>
      <input class="form-control" id="name" type="text" name="name" value="{{ $brand_detail->name }}">
    </div>
    <div class="form-group">
      <label for="category">Category:</label>
      <input name="category" type="text" class="form-control" id="category" value="{{ $brand_detail->category }}">
    </div>
    <div class="form-group">
      <label for="city">City:</label>
      <input name="city" type="text" class="form-control" id="city" value="{{ $brand_detail->city }}">
    </div>
    <div class="form-group">
      <label for="address">Alamat Brand</label>
      <textarea class="form-control" rows="5" id="address" name="address">{{ $brand_detail->address }}</textarea>
    </div>
    <div class="form-group">
      <label for="contact">Kontak Brand</label>
      <textarea class="form-control" rows="5" id="contact" name="contact">{{ $brand_detail->contact }}</textarea>
    </div>
    <div class="form-group">
      <label for="description">Deskripsi Brand</label>
      <textarea class="form-control" rows="5" id="description" name="description">{{ $brand_detail->description }}</textarea>
    </div>
    <div class="form-group">
      <label for="operation_hour">Operational Hour</label>
      <textarea class="form-control" rows="5" id="operation_hour" name="operation_hour">{{ $brand_detail->operation_hour }}</textarea>
    </div>
    <div class="form-group">
      <label for="comment">Comment:</label>
      <textarea class="form-control" rows="3" name="comment" id="comment">{{ $brand_detail->comment }}</textarea>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="toko" {{ $brand_detail->toko == 1 ? 'checked' : ''}}/>Toko</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="brand" {{ $brand_detail->brand == 1 ? 'checked' : ''}}/>Brand</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="online" {{ $brand_detail->online == 1 ? 'checked' : ''}}/>Online</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="offline" {{ $brand_detail->offline == 1 ? 'checked' : ''}}/>Offline</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="local" {{ $brand_detail->local == 1 ? 'checked' : ''}}/>Local</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="international" {{ $brand_detail->international == 1 ? 'checked' : ''}}/>International</label>
    </div>
    <div class="form-group">
      <label for="telphone_number">Telphone:</label>
      <input name="telphone_number" type="text" class="form-control" id="telphone_number" value="{{ $brand_detail->telphone_number }}">
    </div>
    <div class="form-group">
      <label for="email_sales">Email Sales:</label>
      <input name="email_sales" type="text" class="form-control" id="email_sales" value="{{ $brand_detail->email_sales }}">
    </div>
    <div class="form-group">
      <label for="email_media">Email Media:</label>
      <input name="email_media" type="text" class="form-control" id="email_media" value="{{ $brand_detail->email_media }}">
    </div>
    <div class="form-group">
      <label for="website">Website:</label>
      <input name="website" type="text" class="form-control" id="website" value="{{ $brand_detail->website }}">
    </div>
    <div class="form-group">
      <label for="tags">Tags:</label>
      <input name="tags" type="text" class="form-control" id="tags" value="{{ $brand_detail->tags }}">
    </div>
    <div>
      <h3>Foto saat ini</h3>
      @if(isset($brand_detail->foto))
      <img src="{{ asset('brand_photo/' . $brand_detail->foto)}}">
      @else
      Tidak Ada Foto
      @endif
    </div>
    <div class="form-group">
      <label for="1">Ganti Foto</label>
      <input class="form-control" id="foto" type="file" name="foto">
    </div>
    <div class="form-group form-inline">
      <input type="hidden" value="patch" name="_method">
      <input type="submit" value="Edit" class="btn btn-lg btn-danger">
    </div>

  </form>
</div>

<!-- <div class="container">
<h2></h2>
<table class="table table-striped">
  
  <tr>
    <th>ID Brand</th>
    <td>{{ $id_brand }}</td>
  </tr>
  <tr>
    <th>Nama Brand</th>
    <td></td>
  </tr>
  <tr>
    <th>Lokasi Brand</th>
    <td></td>
  </tr>
  <tr>
    <th>Kontak Brand</th>
    <td></td>
  </tr>
  <tr>
    <th>Deskripsi Brand</th>
    <td></td>
  </tr>
</table> -->
<!-- <a href="brands"><button class="btn btn-success btn-sm">Back</button> -->
<!-- </div> -->
@endsection