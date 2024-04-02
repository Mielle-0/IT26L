<?php
//start session
session_start();

//crud with database connection
include_once('Crud.php');

$crud = new Crud();

//fetch data
$sql = "SELECT * FROM member";
$result = $crud->read($sql);
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>PHP CRUD using OOP Approach</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	<div class="container">
		<h1 class="page-header text-center">PHP CRUD using OOP Approach</h1>
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<?php
				if (isset($_SESSION['message'])) {
				?>
					<div class="alert alert-info text-center">
						<?php echo $_SESSION['message']; ?>
					</div>
				<?php

					unset($_SESSION['message']);
				}

				?>
				<a href="#add" data-toggle="modal" class="btn btn-primary">Add New</a><br><br>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Firstname</th>
							<th>Lastname</th>
							<th>Address</th>
							<th>Age</th>
							<th>Gender</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						if ($result)
							foreach ($result as $key => $row) {
						?>
							<tr>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['firstname']; ?></td>
								<td><?php echo $row['lastname']; ?></td>
								<td><?php echo $row['address']; ?></td>
								<td><?php echo $row['age']; ?></td>
								<td><?php echo $row['gender']; ?></td>
								<td><a href="#edit<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-success">Edit</a> |
									<a href="#delete<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-danger">Delete</a>
								</td>
								<?php include('action_modal.php'); ?>
							</tr>
						<?php
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<?php include('add_modal.php'); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" rel="stylesheet"></script>
</body>

</html>