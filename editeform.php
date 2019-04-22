<?php
	include_once 'cnn.php';
	session_start();
	$_SESSION['id'] = $_GET['id']; 

?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CRUD Task</title>



</head>
<body>
<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action= "edite.inc.php" method="POST">
					<div class="modal-header">						
						<h4 class="modal-title">Edit Employee</h4>
						
					</div>
					<div class="modal-body">			
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" name = "name" method = "POST" required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" name = "email" method = "POST" required>
						</div>
						<div class="form-group">
							<label>Address</label>
							<textarea class="form-control" name = "address" method = "POST" required></textarea>
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input type="text" class="form-control" name = "phone" method = "POST" required>
						</div>					
					</div>
					<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-info" value="Save">					
                    </div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
