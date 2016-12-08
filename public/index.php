<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Richard Grey Shopify Product Submitter</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" href="/assets/dropzone.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
	<div class="container">
		<h1 class="text-center">Richard Grey Shopify Product Submitter</h1>

		<form action="/loadproduct.php" method="POST" role="form" enctype="multipart/form-data">
			<legend>New Product</legend>
		
			<div class="form-group">
				<label for="title">Product Title</label>
				<input type="text" class="form-control" placeholder="Product Title" name="title">
			</div>
<div class="form-group">
				<label for="description">Product Description</label>
			<textarea name="description" id="input" class="form-control" rows="3" required="required"></textarea>
			</div>
			<div class="form-group">
				<label for="product_type">Product Type</label>
				<input type="text" class="form-control" placeholder="Product type e.g. Snowboard" name="product_type">
			</div>
		<div class="form-group">
			<label for="title">Image(s)</label>
			<input type="file" name="images[]" class="dropzone form-control" multiple/>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
		

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="/assets/dropzone.js"></script>
	</body>
</html>