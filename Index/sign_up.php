<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif-pro;}
* {box-sizing: border-box;}

.body:before{
  content: ' ';
  position: fixed;
  width: 100vw;
  height: 100vb;
  background-image: url();//just put the image here
  background-position : center center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  -webkit-background-size:cover;
  -webkit-filter:blur(10px);
  filter:
}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: blue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px blue;
}

/* Set a style for the submit button */
.btn {
  background-color:blue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>

<form action="sign_up.php" method="POST" style="max-width:500px;margin:auto" enctype="multipart/form-data" autocomplete="on">
  <h2><center>Registration Form </center></h2>

  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Fullname" name="name" required>
  </div>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="email" placeholder="Email" name="email" required>
  </div>

  <div class="input-container">
    <i class="fa fa-map-marker icon" ></i>
    <input class="input-field" type="text" placeholder="Location" name="location" required>
  </div>

  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="pass1" required>
  </div>

  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Repeat Password" name="pass2" required>
  </div>

  <div class="input-container">
    <i class="fa fa-phone icon"></i>
    <input class="input-field" type="phone" placeholder="Phone" name="phone" required>
  </div>
<label style="color:grey"><h3>Photo</h3></label>
  <div class="input-container">

    <input class="input-field" type="file"  name="image" required>
  </div>

  <button type="submit" class="btn" name="submit" >Register</button><br>

  <h4><right>Already have an account <a href="sign_in.php"> Sign In </a></right></h4>
</form>
<?php

if(isset($_POST['submit']))
{
	$con = mysqli_connect('localhost','root','','ecommerce') ;
  if($con == false) {
    echo "Connection failed";
  }
  else {
    $name=$_POST['name'];
  	$pass1=$_POST['pass1'];
  	$pass2=$_POST['pass2'];
  	$loc=$_POST['location'];
  	$phone=$_POST['phone'];
  	$email=$_POST['email'];
    $imageName = mysql_real_escape_string($_FILES["image"]["name"]);
  	$imageData = mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
  	$imageType = mysql_real_escape_string($_FILES["image"]["type"]);
    if($pass1!=$pass2){
  ?>  <script>
    alert(' password and confirmed password must same !!');
    window.open('sign_up.php','_self');
    </script>
  <?php
}else {
  	if(substr($imageType,0,5) == "image") {
  		mysqli_query($con,"INSERT INTO `users` VALUES('','$name','$imageData','$loc','$email','$phone','$pass1')");
  		echo "image uploaded";
  	}
  	else
  	{
  		echo " Only images are allowed";
  	}
}
}
}
?>


</body>
</html>
