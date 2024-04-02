<!-- Delete -->
<div class="modal fade" id="delete<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<center>
					<h4 class="modal-title" id="myModalLabel">Delete Member</h4>
				</center>
			</div>
			<div class="modal-body">
				<div class="container-fluid text-center">
					<h5>Are sure you want to delete</h5>
					<h2>Name: <b><?php echo $row['firstname'] . ' ' . $row['lastname']; ?></b></h2>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<a href="delete.php?id=<?php echo $row['id']; ?>&action=delete" class="btn btn-danger">Yes</a>
			</div>
		</div>
	</div>
</div>
<!-- /.modal -->

<!-- Edit -->
<div class="modal fade" id="edit<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<center>
					<h4 class="modal-title" id="myModalLabel">Edit Member</h4>
				</center>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<form method="POST" action="edit.php?id=<?php echo $row['id']; ?>&action=edit">
						<div class="row">
							<div class="col-lg-2">
								<label style="position:relative; top:7px;">Firstname:</label>
							</div>
							<div class="col-lg-10">
								<input type="text" name="firstname" class="form-control" value="<?php echo $row['firstname']; ?>">
							</div>
						</div>
						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-2">
								<label style="position:relative; top:7px;">Lastname:</label>
							</div>
							<div class="col-lg-10">
								<input type="text" name="lastname" class="form-control" value="<?php echo $row['lastname']; ?>">
							</div>
						</div>
						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-2">
								<label style="position:relative; top:7px;">Address:</label>
							</div>
							<div class="col-lg-10">
								<input type="text" name="address" class="form-control" value="<?php echo $row['address']; ?>">
							</div>
						</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="submit" name="edit" class="btn btn-warning">Save</button>
			</div>
			</form>
		</div>
	</div>
</div>
<!-- /.modal -->