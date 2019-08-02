<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
<div class="container">
  <div class="jumbotron">
  <marquee behavior="alternate"><h1 class="display-1">Admin Login</h1></marquee>
</div>

<form action="process.php " method="POST">
  <div class="imgcontainer">
    <img src="image\Cartoon-Free-PNG-Image.png"  class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Email:</b></label>
    <input type="text" placeholder="Enter Username" name="email" style="width:70%;" required>
</div>
<div class="container">
    <label for="psw"><b>Password:</b></label>
    <input type="password" placeholder="Enter Password" name="password" style="width:70%;"  required>
</div> 
<div class="container">     
    <button type="submit" name="login" id="login">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    <?php if(isset($_GET['err'])){
											echo "<script>alert('Invalid Username or Password')</script>";
											}
										?>
  </div>
  </form>

</body>
</html>
