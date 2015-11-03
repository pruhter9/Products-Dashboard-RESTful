<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Show Product</title>
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
		}
		ul li {
			display: inline-block;
		}
		ul li:first-child 
		{
			border-right: 1px solid black;
			padding-right: 10px;
		}
		ul li:last-child 
		{
			padding-left: 10px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h3>Product <?= $id ?></h3>
		<table class="table">
			<tr>
				<td>
					Name:
				</td>
				<td>
					<?= $name ?>
				</td>
			</tr>
			<tr>
				<td>
					Description:
				</td>
				<td>
					<?= $description ?>
				</td>
			</tr>
			<tr>
				<td>
					Price:
				</td>
				<td>
					$<?= $price ?>
				</td>
			</tr>
		</table>
		<ul>
			<li>
				<a href="/edit/<?= $id ?>">Edit</a>
			</li>
			<li>
				<a href="/">Back</a>
			</li>
		</ul>
	</div>
</body>
</html>