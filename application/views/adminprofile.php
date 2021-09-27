 <!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>ADMIN PROFILE</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	 </head>

	<body>

		<div class="container">
			<div class="card my-5 p-4">
				<div class="card-header">
			<h2><?php $name = $this->session->userdata("user")['name']; ?>
				
				Welcome <?php echo $name ?>
				
			</h2>
			</div>

			<div class="card-body">
				<a class = "btn btn-secondary" href="<?php echo base_url()."Login/logout"; ?>">Logout</a>
			</div>
		</div>
		</div>

	</body>
</html>