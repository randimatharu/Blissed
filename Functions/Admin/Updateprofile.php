
<?php
	include('../../config/blserver.php');
	//get the current login and the details
		$id="";
		$username="";
		$email="";
		$password="";
		$contact="";
		$address="";
		$subtype="";
		$status="";
		
			
		if (isset($_GET["user"])){

				$searchid=$_GET["user"];
			
			
			$con=mysqli_connect("localhost","root","");
			
			
			$database=mysqli_select_db($con,"blissed");
			
			
			$sql="SELECT * FROM users WHERE id='$searchid' ";
			
			
			$result=mysqli_query($con,$sql);
		
			if($row = mysqli_fetch_array($result)){
				$id=$row[0];
				$username=$row[1];
				$email=$row[2];
				$password=$row[3];
				$contact=$row[4];
				$address=$row[5];
				$subtype=$row[6];
				$status=$row[7];
				
				//echo "Records Updated";
			}else{
				echo "Not  This Record In Database<br/>";	
			}
			
			//CLOSE CONNECTION
			mysqli_close($con);
			
			
		}
?>
<?php
	//update query
		if (isset($_REQUEST["id"])){

			$did=$_POST["id"];

			$con=mysqli_connect("localhost","root","");
			
			
			$database=mysqli_select_db($con,"blissed");
			
			
			$sql="UPDATE users SET id='$_POST[id]' , username='$_POST[username]' , email='$_POST[email]' , password='$_POST[password]' , contact='$_POST[contact]' , address='$_POST[address]' , subtype='$_POST[subtype]' , status='$_POST[status]' WHERE id='$_POST[id]'";
			
			if(strlen($contact)<10){
				$errors['contact'] = "Contact should be atleast 10 characters";
			}
			
				if (mysqli_query($con, $sql)) {
					echo "Record deleted successfully";
				} 
				else {
					echo "Error deleting record: " . mysqli_error($con);
				}		

			mysqli_close($con);
		}
?>


<!DOCTYPE>
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
			
		<!-- Font Awesome -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Bootstrap core CSS -->
			<link href="../../Public/css/css/bootstrap.min.css" rel="stylesheet">
		<!-- Material Design Bootstrap -->
			<link href="../../Public/css/css/mdb.min.css" rel="stylesheet">
		<!-- Your custom styles (optional) -->
			<link href="../../Public/css/style.min.css" rel="stylesheet">
			<link href="../../Public/css/style.css" rel="stylesheet">
		<title>Update Profile</title>
	</head>

	<body>
		<div class="container">
				<div class="row main">
					<div class="main-login main-center">
						<h1>Update Profile</h1>
						<form method="post" action="#" name="searchadmin" style="text-align:center" >
							
						<div class="form-group">
								<label for="id" class="cols-sm-2 control-label">ID :</label>
									<div class="cols-sm-10" style ="color:red;">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
												<input type="text" class="form-control" name="id" id="adminemail" placeholder="Enter ID" value="<?php echo $id; ?>" />
										</div>
									</div>
							</div> 

							<div class="form-group">
								<label for="username" class="cols-sm-2 control-label">Username :</label>
									<div class="cols-sm-10" style ="color:red;">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
												<input type="text" class="form-control" name="username" id="adminemail" placeholder="Enter Username" value="<?php echo $username; ?>" />
										</div>
									</div>
							</div>  
							
							<div class="form-group">
								<label for="email" class="cols-sm-2 control-label">Email :</label>
									<div class="cols-sm-10" style ="color:red;">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
												<input type="email" class="form-control" name="email" id="adminemail" placeholder="Enter Email" value="<?php echo $email; ?>" />
										</div>
									</div>
							</div>   
							
							<div class="form-group">
								<label for="password" class="cols-sm-2 control-label">Password :</label>
									<div class="cols-sm-10" style ="color:red;">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
												<input type="password" class="form-control" name="password" id="adminemail" placeholder="Enter password" value="<?php echo $password; ?>" />
										</div>
									</div>
							</div>
							
							<div class="form-group">
								<label for="contact" class="cols-sm-2 control-label">Contact :</label>
									<div class="cols-sm-10" style ="color:red;">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-phone fa-md" aria-hidden="true"></i></span>
												<input type="text" class="form-control" name="contact" id="admincontact" placeholder="Enter Contact Number" value="<?php echo $contact; ?>" />
										</div>
									</div>
							</div>    
							
							<div class="form-group">
								<label for="contact" class="cols-sm-2 control-label">Address :</label>
									<div class="cols-sm-10" style ="color:red;">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-address-book fa-md" aria-hidden="true"></i></span>
												<input type="text" class="form-control" name="address" id="adminaddress" placeholder="Enter Address" value="<?php echo $address; ?>" />
										</div>
									</div>
							</div>    

							<div class="form-group">
								<label for="subtype" class="cols-sm-2 control-label">Subtype :</label>
									<div class="cols-sm-10" style ="color:red;">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
												<input type="text" class="form-control" name="subtype" id="adminemail" placeholder="Enter Subtype" value="<?php echo $subtype; ?>" />
										</div>
									</div>
							</div>
							
							<div class="form-group">
								<label for="status" class="cols-sm-2 control-label">Status :</label>
									<div class="cols-sm-10" style ="color:red;">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
												<input type="text" class="form-control" name="stauts" id="adminemail" placeholder="Enter status" value="<?php echo $status; ?>" />
										</div>
									</div>
							</div>
							
							<div class="form-group justify-content-center ">
								<button type="submit" id="submit" name = "update" class="btn btn-deep-orange btn-lg">update</button>
							</div>  
						</form>
			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
			<!-- Include all compiled plugins (below), or include individual files as needed -->
				<script src="../Public/js/bootstrap.min.js"></script>
	</body>

</html> 
