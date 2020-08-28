<?php
$con = mysqli_connect('localhost','root','','ecommerce');
if($con == false)
{
  echo "Failed";
}
else {
  echo "";
}

if(isset($_GET['id']))
{
  $id = mysql_real_escape_string($_GET['id']);
  $qry = mysqli_query($con,"SELECT * FROM `users` WHERE `id` = '$id'");
  while($row = mysqli_fetch_assoc($qry))
  {
    $imageData = $row['image'];
  }
  header("content-type:image/jpeg");
  echo $imageData;
}
else
{
  echo "ERROR";
}

 ?>
