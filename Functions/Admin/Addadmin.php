<?php
include('../../config/blserver.php');


$keys = array_keys($errors);
$desired_keys = array('euname','eemail','psdlen','uname', 'email', 'psd', 'dpsd','con','add','img');

foreach($desired_keys as $desired_key){
   if(in_array($desired_key, $keys)) continue;  // already set
   $errors[$desired_key] = '';
}


?>
<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<!-- Website CSS style -->
		<link href="../../Public/css/css/bootstrap.min.css" rel="stylesheet">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Blissed</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="../../Public/css/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../../Public/css/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="../../Public/css/style.min.css" rel="stylesheet">
  <link href="../../Public/css/style.css" rel="stylesheet">







		<title>Add admin</title>
		
	</head>
	<body>
		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h1>Sign Up</h1>
					<form class="" name = "adminsignupform" method="post" action="Addadmin.php">
					<div style = "color:red;">	
						<?php 
							echo $errors['euname']; echo"<br>";
							echo $errors['eemail'];echo"<br>";
							echo $errors['psdlen'];
							?>
					</div>
					
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Name</label>
							<div class="cols-sm-10" style ="color:red;">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="adminname" id="adminname"  placeholder="Enter Admin Name"/>
									 
								</div>
								<?php 
							echo $errors['uname']?>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Email</label>
							<div class="cols-sm-10" style ="color:red;">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="adminemail" id="adminemail"  placeholder="Enter Admin Email "/>
									
								</div>
								<?php 
							echo $errors['email']?>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10" style ="color:red;">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password_1" id="password_1"  placeholder="Enter Admin Password(min 8 charcters)"/>
								</div>
								<?php 
							echo $errors['psd']?>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label"> Confirm Password</label>
							<div class="cols-sm-10" style ="color:red;">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password_2" id="password_2"  placeholder="Confirm Password"/>
								</div>
								<?php 
							echo $errors['dpsd']?>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Contact</label>
							<div class="cols-sm-10" style ="color:red;">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone fa-md" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="admincontact" id="admincontact"  placeholder="Contact"/>
								</div>
								<?php 
							echo $errors['con']?>
							</div>
                        </div>
                        
                        <div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Address</label>
							<div class="cols-sm-10" style ="color:red;">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-address-book fa-md" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="adminaddress" id="adminaddress"  placeholder="Address"/>
								</div>
								<?php 
							echo $errors['add']?>
							</div>
                        </div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Image</label>
							<div class="cols-sm-10" style ="color:red;">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-address-book fa-md" aria-hidden="true"></i></span>
									<input type="file" class="form-control" name="img" id="img"  placeholder="Address"/>
								</div>
								<?php 
							echo $errors['im']?>
							</div>
                        </div>
                        
                        <select class="mdb-select colorful-select dropdown-primary" name = "subtype">
                    <option value="" disabled selected>Role</option>
                    <option value="Admin">Admin</option>
                    
                </select>

						<div class="form-group justify-content-center ">
							<button type="submit" id="submit" name = "reg_admin" class="btn btn-deep-orange btn-lg">Register</button>
						</div>
						
					</form>
				</div>
			</div>
		</div>

		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../Public/js/bootstrap.min.js"></script>
	</body>
</html>