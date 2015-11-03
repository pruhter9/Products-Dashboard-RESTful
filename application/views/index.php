<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>All Products</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<style>
		ul 
		{
			list-style: none;
			padding-left: 0px;
		}
		ul li 
		{
			display: inline-block;
			padding-right: 10px;
			padding-left: 10px;
			border-right: 1px solid black;
		}
		ul li:last-child 
		{
			border-right: none;
		}
		ul li:first-child
		{
			padding-left: none;
		}
	</style>
</head>
<body>
	<div class="container">
		<h3>Products</h3>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>
						Name
					</th>
					<th>
						Description
					</th>
					<th>
						Price
					</th>
					<th>
						Actions
					</th>
				</tr>
			</thead>
			<tbody>
<?php 
if(!empty($products))
{ 
	foreach($products as $product)
	{ ?>
				<tr>
					<td>
						<?= $product['name'] ?>
					</td>
					<td>
						<?= $product['description'] ?>
					</td>
					<td>
						<?= $product['price'] ?>
					</td>
					<td>
						<ul>
							<li>
								<a href="/show/<?= $product['id'] ?>">Show</a>
							</li>
							<li>
								<a href="/edit/<?= $product['id'] ?>">Edit</a>
							</li>
							<li>
								<a class="btn btn-default" href="/delete/<?= $product['id'] ?>">Remove</a>
							</li>
						</ul>
					</td>
				</tr>
<?php
	}
}
 ?>
			</tbody>
		</table>
		<a href="/new">Add a new product</a>
	</div>
</body>
</html>