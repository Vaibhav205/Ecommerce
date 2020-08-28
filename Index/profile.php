<?php
session_start();
			if(isset($_SESSION['id']))
				echo "";
			else
			  header('location:sign_in.php');

?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NOZAMA</title>
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" type="text/css" href="css/a.css">
    <link rel="stylesheet" type="text/css" href="css/topbar-responsive.css" />
     <link rel="stylesheet" type="text/css" href="css/tabbed-search.css">
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <link rel="stylesheet" href="css/marketing-site-footer.css">
    <link rel="stylesheet" type="text/css" href="css/profile-card-action-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/vendor/jquery.js"></script>
        <script src="js/vendor/what-input.js"></script>
        <script src="js/vendor/foundation.js"></script>
        <script src="js/app.js"></script>
        <script src="js/all.js"></script>
        <script src="js/all.min.js"></script>
  </head>
  <body>


    <!-- Start Top Bar -->
    <div class="top-bar">
      <div class="top-bar-left">
        <div class="top-bar-right">
        <ul class="menu">
          <li class="menu-text" style="font-size:50px"><a href="home.php">NOZAMA.in</a></li>

          </div>
        </ul>
      </div>
      <div class="top-bar-right">
        <ul class="menu" style="font-size:30px; padding-top:20px">
          <li ><a href="index.php">Log Out</a></li>
          <li ><a href="orders.php">Orders</a></li>
          <li ><a href="profile.php">Profile</a></li>
        </ul>
      </div>
    </div>



    <style type="text/css">
      .profile-card-action-icons {
        align:center;
        font-size: 1.25em;
        padding: 20px;
        margin: 100px;
        margin-left: 300px;
        margin-right: 300px;
      }</style>
</nonscipt>
</head>
<body>
  <div class="profile" >
  <?php
  include('conn.php');
  $id=$_SESSION['id'];
  $qry="SELECT * FROM `users` WHERE `id`='$id'";
  $run=mysqli_query($con,$qry);
  while($data=mysqli_fetch_assoc($run)){?>
  <p>
    <center>
       <img style="height:100px;width:100px;" src="show.php?id=<?php echo $data['id']?>" />
    </center>
  	<p align="center" style="font-family:sans-serif;font-size:1.5em "><b> PROFILE </b> </p>
  	<b>Name</b> : <?php	echo $data['name'];?><br>
  	<b>Userid</b> : <?php echo $data['id'];?><br>
  	<b>Email</b> : <?php echo $data['email'];?><br>
  	<b>Phone</b> : <?php echo $data['phone_no'];?><br>
  </p>
  	<?php
  }
  ?>
  </div>

</body>
</html>
