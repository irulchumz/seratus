@extends('layouts.master')

@section('body')
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">Create a new brand</div>

			<div class="panel-body">
				<form method="POST" action="/brands">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="name">Brand Name:</label>
						<input name="name" type="text" class="form-control" id="name">
					</div>
					<div class="form-group">
						<label for="">Category:</label>
						<input name="category" type="text" class="form-control" id="category">
						<!-- <div class="checkbox">
							<label><input type="checkbox" name="furniture"> Furniture</label>
							<label><input type="checkbox" name="lighting" value="1"> Lighting</label>
							<label><input type="checkbox" name="accessories" value="1"> Accessories</label>
							<label><input type="checkbox" name="tableware" value="1"> Tableware</label>
							<label><input type="checkbox" name="gifts" value="1"> Gifts</label>
							<label><input type="checkbox" name="outdoor" value="1"> Outdoor</label>
							<label><input type="checkbox" name="kids" value="1"> Kids</label>
							<label><input type="checkbox" name="furnishing" value="1"> Furnishing</label>
							<label><input type="checkbox" name="kitchen" value="1"> Kitchen</label>
							<label><input type="checkbox" name="bedding" value="1"> Bedding</label>
							<label><input type="checkbox" name="storage_system" value="1"> Storage System</label>
							<label><input type="checkbox" name="tiles_flooring" value="1"> Tiles & Flooring</label>
							<label><input type="checkbox" name="bathroom" value="1"> Bathroom</label>
							<label><input type="checkbox" name="local_craft" value="1"> Local Craft</label>
						</div> -->
					</div>
					<div class="form-group">
						<label for="description">Description:</label>
						<textarea class="form-control" rows="3" name="description" id="description"></textarea>
					</div>
					<div class="form-group">
						<label for="address">Address:</label>
						<textarea class="form-control" rows="3" name="address" id="address"></textarea>
					</div>
					<div class="form-group">
						<label for="contact">Contact:</label>
						<input name="contact" type="text" class="form-control" id="contact">
					</div>
					<!-- <div class="form-group">
						<label for="pwd">Password:</label>
						<input name="" type="password" class="form-control" id="pwd">
					</div> -->
					<div class="form-group">
						<label for="comment">Comment:</label>
						<textarea class="form-control" rows="3" id="comment"></textarea>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="toko" value="0"> Toko</label>
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
						<label for="city">City:</label>
						<input name="city" type="text" class="form-control" id="city">
					</div>
					<!-- <div class="form-group">
						<label for="operation_hour">Operational Hour:</label>
						<textarea class="form-control" rows="3" name="operational_hour" id="operational_hour"></textarea>
					</div> -->
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
					<div class="checkbox">
						<label><input type="checkbox" name="photo_white"> Photo White Background</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="photo_still"> Photo Still Life</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="photo_3d_model"> 3D Model</label>
					</div>
					<button type="submit" class="btn btn-default btn-danger pull-right">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection

