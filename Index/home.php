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
    <style>

.button-badge {
background-color: #1779ba;
text-decoration: none;
padding: 1rem 1.5rem;
position: relative;
display: inline-block;
border-radius: .2rem;
transition: all ease 0.4s;
}

.button-badge:hover {
box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
}

.badge {
position: absolute;
top: -10px;
right: -10px;
font-size: .8em;
}

.fa {
color: white;
}


    </style>
  </head>
  <body>


    <!-- Start Top Bar -->
    <div class="top-bar">
      <div class="top-bar-left">
        <div class="top-bar-right">
        <ul class="menu">
          <li class="menu-text" style="font-size:50px"><a href="home.php">NOZAMA.in</a></li>
              <li><input type="search" placeholder="Search" style="width:470px"></li>
              <li><button type="button" class="button">Search</button></li>
          </div>
        </ul>
      </div>
      <div class="top-bar-right">
        <ul class="menu" style="font-size:30px; padding-top:20px">
          <li ><a href="index.php">Log Out</a></li>
          <li ><a href="sign_in.php">Orders</a></li>
          <!--li ><a href="admin.php">Admin</a></li-->
          <li>
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">


<a href="#" class="button-badge">
  <i class="fa fa-envelope"></i>
  <!--span class="badge alert"></span-->
</a>


          </li>
          <li ><a href="profile.php">Profile</a></li>
        </ul>
      </div>
    </div>

    <!-- End Top Bar -->


    <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
      <ul class="orbit-container">
        <button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
        <button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
        <li class="orbit-slide is-active">
          <img src="https://placehold.it/2000x750">
        </li>
        <li class="orbit-slide">
          <img src="https://placehold.it/2000x750">
        </li>
        <li class="orbit-slide">
          <img src="https://placehold.it/2000x750">
        </li>
        <li class="orbit-slide">
          <img src="https://placehold.it/2000x750">
        </li>
      </ul>
    </div>

    <div class="row column text-center">
      <h2>Our Newest Products</h2>
      <hr>
    </div>

    <div class="row small-up-2 large-up-4">
      <div class="column">
        <img class="thumbnail" src="https://placehold.it/300x400">
        <h5>Nulla At Nulla Justo, Eget</h5>
        <p>$400</p>
        <a href="#" class="button expanded">Buy</a>
      </div>
      <div class="column">
        <img class="thumbnail" src="https://placehold.it/300x400">
        <h5>Nulla At Nulla Justo, Eget</h5>
        <p>$400</p>
        <a href="#" class="button expanded">Buy</a>
      </div>
      <div class="column">
        <img class="thumbnail" src="https://placehold.it/300x400">
        <h5>Nulla At Nulla Justo, Eget</h5>
        <p>$400</p>
        <a href="#" class="button expanded">Buy</a>
      </div>
      <div class="column">
        <img class="thumbnail" src="https://placehold.it/300x400">
        <h5>Nulla At Nulla Justo, Eget</h5>
        <p>$400</p>
        <a href="#" class="button expanded">Buy</a>
      </div>
    </div>

    <hr>



    <div class="callout large secondary">
      <div class="row">
        <div class="large-4 columns">
          <h5>NOZAMA.in</h5>
          <p>Take Any Thing You Want</p>
        </div>

        <div class="large-3 columns">
          <ul class="menu vertical">
            <li><a href="#">About</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </div>

    <script src="min.js"></script>
    <script src="foundation.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
