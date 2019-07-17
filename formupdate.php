<?php
include('db.php');
// if(isset($_GET['Id']))
// {
$id= isset($_GET['Id']) ? $_GET['Id'] : '';

// }
$sql="SELECT * from task where Id = '".$id."' "; 
	$result=mysqli_query($conn, $sql) or die(mysqli_error());
    $row=mysqli_fetch_assoc($result);


    

?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
body
{
  background:-webkit-linear-gradient(#ff4d4d, #800000,#aaff00,#800000);
}
form
{
color: white;
}
</style>
</head>
<body>
<div class="container" align="center">
  <h2>ADD & UPDATE TASK</h2>
  <form action="" method="POST">
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" 
      id="tit" style="width:50%;" placeholder="Enter Title" 
      name="Title" value="<?php if(isset($row['Title'])) echo $row['Title']; ?>">
    </div>
    <div class="form-group">
      <label for="des">Description:</label>
      <textarea class="form-control" id="des" 
      style="width:50%;" placeholder="Enter Description" 
      name="Description" value=""/><?php if(isset($row['Description'])) echo $row['Description']; ?></textarea>
    </div>
    <div class="form-group">
    <label for="ass">Assiggned:</label>
    <?php
    include('db.php');
    $result=mysqli_query($conn, "SELECT * FROM myguest2 order by Name asc");
    ?>
   <select name="Assignned" id="Assignned" 
   style="width:50%;" class="form-control" value="">
            <option><?php echo $row['Assignned']; ?></option>
            <?php
            while ($row=mysqli_fetch_array($result)) {
                ?>
                <option><?php echo $row['Name']; ?></option>
            <?php } ?>
            </select>
            </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <?php
    if(isset($_GET['Id']))
{
    echo'<button type="submit" class="btn btn-outline-light" name="update">Update</button>';
    
    if(isset($_POST['update']))
{
        
        $title=$_POST['Title'];
        $desc=$_POST['Description'];
        $ace=$_POST['Assignned'];
        $sql="UPDATE task set Title='".$title."', Description='".$desc."',Assignned='".$ace."'WHERE Id='".$id."' ";
        if ($conn->query($sql) === TRUE) 
        {
           header('location:form.php');
        }
              else 
           {
               echo "Error: " . $sql . "<br>" . $conn->error;
           }
}

}
    else
{
        echo '<button type="submit" class="btn btn-outline-light" name="submit">Submit</button>';
        if(isset($_POST['submit']))
{
    $title=$_POST['Title'];
    $desc=$_POST['Description'];
    $ace=$_POST['Assignned'];
    $sql1="INSERT INTO task (Title , Description ,Assignned) VALUES('$title', '$desc', '$ace')";
    if($conn->query($sql1)===TRUE)
    {
        echo "Insert record successfully";
        header('location:form.php');
    }
    else
    {
        echo "Error: " . $sql . "<br>" . $conn->error;

    }
}
}
    ?>
</div>
</form>
</body>
</html>