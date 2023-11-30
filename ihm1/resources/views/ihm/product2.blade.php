<!DOCTYPE html>
<html>
<head>

<title>Product 1</title>

</head>
<body>

<form method="POST" action="{{ route('ihm.store') }}">
	@csrf
	<input type="text" value="Product2" name="product"><br>
	<input type="number" value=2000 name="price"><br>
	<input type="number" name="quantity"><br>
	<input type="text" name="customer"><br>
	<input type="text" name="contact"><br>
	<input type="text" name="address"><br>
	
	<button type="submit">Submit</button>
	
</form>
</body>
</html>