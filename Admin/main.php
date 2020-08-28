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
          <li class="menu-text" style="font-size:50px"><a href="main.php">NOZAMA.in</a></li>
          </div>
        </ul>
      </div>
      <div class="top-bar-right">
        <ul class="menu" style="font-size:30px; padding-top:20px">
            <li ><a href="log_out.php" >Log out</a></li>
        </ul>
      </div>
    </div>

      <!--?php
      header('location:../index.php');
       ?>

    <!-- End Top Bar -->
    <br />
    <br />
    <div class="sticky-footer-css">
  <div class="row expanded flex-dir-column">
    <div class="columns sticky-footer-css-body text-center">
     <p> <a href="product_add.php"><img src="img/addp.png" alt="Add_product" style="border:solid; height:200px; width:300px;padding:10px;margin:30px;"/></a>
      <a href="product_del.php"><img src="img/deletep.png" alt="Delette_product" style="border:solid; height:200px; width:300px;padding:10px;margin:30px;"/></a>

      <p>
        <a href="sub_admin_add.php"><img src="img/adds.png" alt="Add_subadmin" style="border:solid; height:200px; width:300px;padding:10px;margin:30px;"/></a>
        <a href="sub_admin_del.php"><img src="img/deletes.png" alt="Delete_subadmin" style="border:solid; height:200px; width:300px;padding:10px;margin:30px;"/></a>
      </p>
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
