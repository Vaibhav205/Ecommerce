<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.body:before{
  content: ' ';
  position: fixed;
  width: 50vw;
  height: 50vw;
  background-image: url(Screenshot_2019-11-03-02-14-41-634_com.android.chrome.png);//just put the image here
  background-position : center center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  -webkit-background-size:cover;
  -webkit-filter:blur(10px);
  filter:
}

.input-container {
  display: -ms-flexbox;
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: #173f5f;
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
  border: 2px #173f5f;
}

/* Set a style for the submit button */
.btn {
  background-color:#173f53;
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

<form action="sign_in.php" method="post" style="max-width:500px;margin:auto">
  <h2><center> Sign In </center></h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="email" placeholder="Email" name="email" required>
  </div>

  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="password" required>
  </div>
  <div>
    <button type="submit" class="btn" name="login">Sign In</button>
  </div>
  <br />
  <div class="input-container">
    <button class="btn" ><a href="index.php" style="color: white;text-decoration: none;"> Back </button></a>
  </div>
<br>
<strong><a href="sign_up.php">Create New Account</a></strong>
</form>
<?php
include('conn.php');
     session_start();
if(isset($_POST['login']))
{
  $email=$_POST['email'];
  $password=$_POST['password'];
  $qry="SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password';";
  $run=mysqli_query($con,$qry);
  $row=mysqli_num_rows($run);
  if($row<1)
  {
?>
   <script>
    alert('email or password not match !!');
    window.open('sign_in.php','_self');
    </script>

<?php
}
  else
  {
    $data=mysqli_fetch_assoc($run);
      $id=$data['id'];
      $name=$data['name'];
      $name2=$data['email'];
      session_start();
      $_SESSION['id']=$id;
      $_SESSION['name']=$name;
      $_SESSION['email']=$name2;
      header('location:home.php');

  }
}
?>

</body>
</html>
