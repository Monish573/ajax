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
require('db.php');
if(isset($_REQUEST['id'])){
$id=$_REQUEST['id'];
print_r($id);
$query = "SELECT * from register where id='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$new = mysqli_fetch_assoc($result);
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
<?php 
		    if(isset($_POST['update']))
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
            
            $update="UPDATE register set fname='".$fname."', lname='".$lname."', address='".$address."',
            city='".$city."',state='".$state."',email ='".$email."',password ='".$password."',phone ='".$phone."',account ='".$account."',connection ='".$connection."' WHERE id='".$id."'";


						   if (mysqli_query($conn, $update))
						      {
						         echo '<script type="text/javascript">alert("Task Updated Succesfully")</script>';
						         header('location:view.php');
						      }
						      else
						      {
						        echo "Error: " . $update . "<br>" . mysqli_error($conn);

						      }
			     } ?>
<div class="container">
    <h1 class="well" align="center">Update Customer Form</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<form action="" method="POST">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>First Name</label>
								<input type="text" name="fname" value="<?php echo $new['fname'] ?>" placeholder="Enter First Name Here.." class="form-control" required>
							</div>
							<div class="col-sm-6 form-group">
								<label>Last Name</label>
								<input type="text" name="lname" value="<?php echo $new['lname'] ?>" placeholder="Enter Last Name Here.." class="form-control" required>
							</div>
						</div>					
						<div class="form-group">
							<label>Address</label>
							<textarea name=" address" value="" placeholder="Enter Address Here.." rows="3" class="form-control"><?php echo $new['address'] ?></textarea>
						</div>	
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>City</label>
								<input type="text" name="city" value="<?php echo $new['city'] ?>" placeholder="Enter City Name Here.." class="form-control" required>
							</div>	
							<div class="col-sm-6 form-group">
								<label>State</label>
								<input type="text" name="state" value="<?php echo $new['state'] ?>" placeholder="Enter State Name Here.." class="form-control" required>
							</div>		
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Email</label>
								<input type="text" name="email" value="<?php echo $new['email'] ?>" placeholder="Enter Email Here.." class="form-control" required>
							</div>		
							<div class="col-sm-6 form-group">
								<label>Password</label>
								<input type="Password" name="password" value="" placeholder="Enter Password Here.." class="form-control" required>
							</div>	
						</div>						
					<div class="form-group">
						<label>Phone Number</label>
						<input type="text" name="phone" value="<?php echo $new['phone'] ?>" placeholder="Enter Phone Number Here.." class="form-control" required>
					</div>		
					<div class="form-group">
						<label>Account No.</label>
						<input type="text" name="account" value="<?php echo $new['account'] ?>" placeholder="xxxx-xxxx-xxxx-xxxx" class="form-control" required>
					</div>	
					<div class="form-group">
						<label>Connection Type:</label>
						<select name="connection" id="">
										<option value="<?php echo $new['connection'] ?>" selected="selected"><?php echo $new['connection'] ?></option>
										<option value="Commercial">Commercial</option>
										<option value="Personal">Personal</option>
									</select>
								
					</div>
					<button type="submit" name="update" class="btn btn-block btn-info">Update</button><hr>					
					</div>
                   </form> 
				</div>
				</div>
	</div>
    </body>
    </html>
