<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin | Dashboard</title>
	<link rel="stylesheet" href="<?php echo base_url();?>public/suraj/bootstrap.min.css">
	<script type="text/javascript" src="<?php echo base_url();?>public/suraj/jquery.min.css"></script>
	<script type="text/javascript" src="<?php echo base_url();?>public/suraj/popper.min.css"></script>	
	<script type="text/javascript" src="<?php echo base_url();?>public/suraj/bootstrap.min.css"></script>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center mt-5 mb-5 p-5">
			<div class="col-lg-4 col-md-4 col-12">
					<h4 class="text-center mb-5 mt-5">Administrator Login</h4>
					<?php
                    if(!empty($this->session->flashdata('msg'))){
                    	echo "<div class='alert alert-danger text-center mt-2 mb-2'>".$this->session->flashdata('msg')."</div>";
                    }
					?>
				<div class="card shadow bg-light">

					<div class="card-body">
						<form action="<?php echo base_url().'admin/login/authenticate';?>" name="loginForm" id="loginForm" method="POST">
							<!-- <div class="form-group">
								<label>Name</label>
								<input type="text" name="name" class="form-control">
							</div> -->
							<div class="form-group">
								<label>Username/Email</label>
								<input type="text" name="username" id="username" class="form-control">
							</div>
							<?php echo form_error('username');?>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" id="password" class="form-control">
							</div>
							<?php echo form_error('password');?>
							<div class="form-group">
								<input type="submit" name="submit" class="btn btn-outline-primary" value="Submit">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>