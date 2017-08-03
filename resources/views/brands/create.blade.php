@extends('layouts.master')

@section('body')
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">Create a new brand</div>

			<div class="panel-body">
				<form>
					<div class="form-group">
						<label for="name">Brand Name:</label>
						<input name="name" type="text" class="form-control" id="name">
					</div>
					<div class="form-group">
						<label for="">Category:</label>
						<div class="checkbox">
							<label><input type="checkbox" name="" value="1"> Furniture</label>
							<label><input type="checkbox" name="" value="1"> Lighting</label>
							<label><input type="checkbox" name="" value="1"> Accessories</label>
							<label><input type="checkbox" name="" value="1"> Tableware</label>
							<label><input type="checkbox" name="" value="1"> Gifts</label>
							<label><input type="checkbox" name="" value="1"> Outdoor</label>
							<label><input type="checkbox" name="" value="1"> Kids</label>
							<label><input type="checkbox" name="" value="1"> Furnishing</label>
							<label><input type="checkbox" name="" value="1"> Kitchen</label>
							<label><input type="checkbox" name="" value="1"> Bedding</label>
							<label><input type="checkbox" name="" value="1"> Storage System</label>
							<label><input type="checkbox" name="" value="1"> Tiles & Flooring</label>
							<label><input type="checkbox" name="" value="1"> Bathroom</label>
							<label><input type="checkbox" name="" value="1"> Local Craft</label>


						</div>
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
						<label><input type="checkbox" name="" value="1"> Toko</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="" value="1"> Brand</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="" value="1"> Online</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="" value="1"> Offline</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="" value="1"> Local</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="" value="1"> International</label>
					</div>
					<div class="form-group">
						<label for="city">City:</label>
						<input name="city" type="text" class="form-control" id="city">
					</div>
					<div class="form-group">
						<label for="address">Operational Hour:</label>
						<textarea class="form-control" rows="3" name="address" id="address"></textarea>
					</div>
					<div class="form-group">
						<label for="city">City:</label>
						<input name="city" type="text" class="form-control" id="city">
					</div>
					<div class="form-group">
						<label for="city">Telphone:</label>
						<input name="city" type="text" class="form-control" id="city">
					</div>
					<div class="form-group">
						<label for="city">Email Sales:</label>
						<input name="city" type="text" class="form-control" id="city">
					</div>
					<div class="form-group">
						<label for="city">Email Media:</label>
						<input name="city" type="text" class="form-control" id="city">
					</div>
					<div class="form-group">
						<label for="city">Website:</label>
						<input name="city" type="text" class="form-control" id="city">
					</div>
					<div class="form-group">
						<label for="city">Tags:</label>
						<input name="city" type="text" class="form-control" id="city">
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="" value="1"> Photo White Background</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="" value="1"> Photo Still Life</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="" value="1"> 3D Model</label>
					</div>
					<button type="submit" class="btn btn-default btn-danger pull-right">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection

