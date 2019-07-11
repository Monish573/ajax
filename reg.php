<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
// if(isset($_POST['save']))
// {
//     $name=$_POST['Name'];
//     $dob=$_POST['Dob'];
//     $email=$_POST['Email'];
//     $password=$_POST['Password'];
//     $gender=$_POST['Gender'];
//     $a=$_POST['Subject'];
//     $Subject=implode("," , $a);
//     move_uploaded_file($_FILES["Image"]["tmp_name"],"upload/".$_FILES["Image"]["name"]);
//     $location=($_FILES["Image"]["name"]);

//     $sql="INSERT INTO MyGuest2(Name,Dob,Email,Password,Gender,Subject,Image)
//     VALUES('$name','$dob','$email','$password','$gender','$Subject','$location')";

//     if($conn->query($sql)===TRUE)
//     {
//         echo "Insert record successfully";
//     }
//     else
//     {
//         echo "Error: " . $sql . "<br>" . $conn->error;

//     }
// }
$nameError ="";
$dobError ="";
$emailError="";
$genderError="";
if(isset($_POST['save'])){
  if (empty($_POST["Name"])) {
  $nameError = "--Name is required--";
  } else {
  $name = test_input($_POST["Name"]);
  // check name only contains letters and whitespace
  if (!preg_match("/^[a-zA-Z ]*$/",$Name)) {
  $nameError = "Only letters and white space allowed";
  }
  }
  if (empty($_POST["Dob"])) {
    $dobError = "-DOB-is-required-";
    } else {
    $dob = test_input($_POST["Dob"]);
    
    }

      if (empty($_POST["Email"])) {
      $emailError = "--Email is required--";
      } else {
      $email = test_input($_POST["Email"]);
      // check name only contains letters and whitespace
      if (!preg_match("/([w-]+@[w-]+.[w-]+)/",$Email)) {
        $emailError = "Invalid email format";
        }
      }

      if (empty($_POST["Gender"])) {
        $genderError = "Gender is required";
        } else {
        $gender = test_input($_POST["Gender"]);
        }




}

  function test_input($data) 
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>












<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: #000;
}

.active {
  background-color: #4CAF50;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}
</style>
<body>
<div class="navbar">
  <a class="active" href="#"><i class="fa fa-fw fa-home"></i> Home</a> 
  <a href="login.php"><i class="fa fa-fw fa-user"></i> Login</a>
</div>

</body>
</html>











<html>
<head>
<title> Registration Form </title>
<style>
form{
  background-image: url("uploads/rose-blue-flower-rose-blooms-67636.jpeg");
  width:50%;
  margin-left:25%;
  color:white;
  font-weight:bold;
}
body
{
  background: linear-gradient(to right,#0000ff,#661a00,#0000ff,#661a00,#0000ff);
  
}
.heading
{ 
    width:30%;
    margin: auto;
    font-size: 20px;
    font-family: arial;
    color: burlywood;


}
input
{
    padding: 1%;
}
.main
{
    border: 2pxs solid blueviolet;
    width: 40%;
    margin: auto;
    padding: 2%;
    border-radius: 20px;
}
.titles
{
    float: left;
    width: 50%;
    padding: 3%;
    padding-left: 10%;
    font-size: 17px;
}
.image
{
    float: left;
    width: 50%;
    padding: 3%;
    padding-left: 10%;
    font-size: 17px;
}
.input
{
    padding: 3%;
}
.btn
{
    width: 50%;
    padding-left: 23%;
}
.botn
{
    background-color: yellowgreen;
    border: 2px solid;
    font-weight: bold;
    color: blue;
    width: 45%;
    margin-left: 60px;

}

</style>
</head>
<body>
<form action="" method ="POST" enctype="multipart/form-data">
<div class="main">
<div class="jubmotron">
<h1 class=""> RegistrationForm</h1>
</div>
<div class="form-group">Name</div>
<div class="input"><input type ="text" name="Name" placeholder="Name"></div>
<span class="error"> <?php echo $nameError;?></span>

<div class="form-group">DOB</div>
<div class="input"><input type ="date" name="Dob" placeholder="Date Of Birth" ></div>
<span class="error"> <?php echo $dobError;?></span>

<div class="form-group">Email</div>
<div class="input"><input type="text" name ="Email" placeholder="Email" ></div>
<span class="error"> <?php echo $emailError;?></span>

<div class="form-group">Password</div>
<div class="input"><input type="password" name="Password" ></div>

<div class="form-group">Gender</div>
<div class="input">Male<input type="radio" name="Gender" value="male"/>Female<input type="radio" name="Gender" value="female"/></div>
<span class="error"> <?php echo $genderError;?></span>

<div class="form-group">Subject</div>
<div class="input"><input type="checkbox" name="Subject[]" value="maths">Maths
 <input type="checkbox" name="Subject[]" value="hindi">Hindi
 <input type="checkbox" name="Subject[]" value="english">English</div>

 <div class="form-group">Upload Image<input type="file" name="Image" id="image" value="Upload Image"></div>

<div class="form-group"><input type="submit" name="save" value="submit" class="botn"/></div>
<div class="form-group"><input type="reset" value="reset" class="botn"></div>
</div>
</form>
</body>
</html>