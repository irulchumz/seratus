<div class="container">
	<form method="post" action="/post">
		{!! csrf_field() !!}
		<div class="form-group">
			<label for="name">Nama Brand</label>
			<input type="text" name="name">
			
		</div>
		<div class="form-group">
			<label for="brandLocation">email</label>
			<input type="email" name="email">
			
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" name="password">
		</div>
	</div>
	<div class="form-group form-inline">
		<input type="submit" value="Create" class="btn btn-lg">
	</div>
</form>
</div>
<form method="POST" action="/users">
</form>