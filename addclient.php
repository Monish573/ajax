<?php
session_start();
if(!isset($_SESSION['id'])){
	echo '<script>windows: location="admin.php"</script>';
	}
		
$session=$_SESSION['id'];
include 'db.php';
$query =("SELECT * FROM `admin1` where id= '$session'");
 $result=mysqli_query($conn,$query);
?>
<?php
include('db.php');
if(isset($_POST['submit']))
{
            $fname=$_POST['fname'];
	        $lname=$_POST['lname'];
            $address=$_POST['address'];
            $city=$_POST['city'];
            $state=$_POST['state']; 
		 	$email=$_POST['email'];
		 	$password=$_POST['password'];
		 	// $password=md5($password);
            $phone=$_POST['phone']; 
            $account=$_POST['account']; 
            $connection=$_POST['connection'];		 	
         
$sql="INSERT into `register`() 
values('','$fname','$lname','$address','$city','$state','$email','$password','$phone','$account','$connection')";
if(mysqli_query($conn,$sql))
                     {

				 		 echo '<script>alert("You Have Been Registered Succesfully!")</script>';
				 		 header('location:index.php');

				 	  }else {
		                     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		 	                }	
}
?>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="client.css">
</head>

<body>

<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <h1 class="well" align="center">Registration Form</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<form action="" method="POST">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>First Name</label>
								<input type="text" name="fname" value="" placeholder="Enter First Name Here.." class="form-control" required>
							</div>
							<div class="col-sm-6 form-group">
								<label>Last Name</label>
								<input type="text" name="lname" value="" placeholder="Enter Last Name Here.." class="form-control" required>
							</div>
						</div>					
						<div class="form-group">
							<label>Address</label>
							<textarea name=" address" value="" placeholder="Enter Address Here.." rows="3" class="form-control"></textarea>
						</div>	
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>City</label>
								<input type="text" name="city" value="" placeholder="Enter City Name Here.." class="form-control" required>
							</div>	
							<div class="col-sm-6 form-group">
								<label>State</label>
								<input type="text" name="state" value="" placeholder="Enter State Name Here.." class="form-control" required>
							</div>		
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Email</label>
								<input type="text" name="email" value="" placeholder="Enter Email Here.." class="form-control" required>
							</div>		
							<div class="col-sm-6 form-group">
								<label>Password</label>
								<input type="Password" name="password" value="" placeholder="Enter Password Here.." class="form-control" required>
							</div>	
						</div>						
					<div class="form-group">
						<label>Phone Number</label>
						<input type="text" name="phone" value="" placeholder="Enter Phone Number Here.." class="form-control" required>
					</div>		
					<div class="form-group">
						<label>Account No.</label>
						<input type="text" name="account" value="" placeholder="xxxx-xxxx-xxxx-xxxx" class="form-control" required>
					</div>	
					<div class="form-group">
						<label>Connection Type:</label>
						<select name="connection" id="" value="">
								    <option value="0" selected="selected">---Select Connection---</option>
									<option value="Commercial">Commercial</option>
									<option value="Personal">Personal</option>
								</select>
					</div>
					<button type="submit" name="submit" class="btn btn-block btn-info">Submit</button><hr>					
					</div>
                    <strong><h6 class="text-warning" align="center">Already Register &nbsp;<a href="login.php" style="text-decoration-line: none; color: red;">Log In</a>&nbsp;Here</h6></strong>
	                   
				</form> 
				</div>
				</div>
	</div>
    </body>
    </html>
