<?php
	session_start();
	            //create connection
	          include('db.php');

$login = mysqli_query($conn,"SELECT * FROM admin1 WHERE  ( email= '" .($_POST['email']) . "') and 
   (password = '" .($_POST['password']) . "')"); 
                  
  $row=mysqli_fetch_array($login);
  print_r($row);

					if($row){
					 $_SESSION['id'] = $row['id'];
					 	header("location:index.php");
						}
						else {
							echo '<script>alert("login failed")</script>';
							header ("location:admin.php?err");
							}
				?>