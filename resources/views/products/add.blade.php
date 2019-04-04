<form method="post" action="{{route('products.store')}}" enctype="multipart/form-data">
	 {{ csrf_field() }}
	name : <input type="text" name="name"><br><br>
	detail : <input type="text" name="detail"><br><br>
	<input type="submit" value="save" name="btn">
</form>