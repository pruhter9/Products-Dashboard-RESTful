<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>New Product</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<style>
	form {
		margin-bottom: 10px;
	}
	p 
	{
		color: red;
	}
	</style>
</head>
<body>
	<div class="container">
		<h3>Add a new product</h3>
		<form action="/create" method="post">
			<div class="form-group">
				<label>Name</label>
<?php
	if($this->session->flashdata('error["name"]'))
	{ ?>
				<p><?= $this->session->flashdata('error["name"]') ?></p>
<?php
	}
?>
				<input type="text" name="name" class="form-control" />
			</div>
			<div class="form-group">
				<label>Description</label>
				<input type="text" name="desc" class="form-control" />
			</div>
			<div class="form-group">
				<label>Price</label>
				<input type="text" name="price" class="form-control" />
			</div>
			<button type="submit" class="btn btn-default">Create</button>
		</form>
		<a href="/">Go back</a>
	</div>
</body>
</html>