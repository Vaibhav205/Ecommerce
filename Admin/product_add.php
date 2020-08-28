<!DOCTYPE html>
<html>
<head>
	<title>NOZAMA</title>
	<nonscript>
	<meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="assets/css/foundation.css">
	<style>


.translucent-form-overlay {
  max-width: 500px;
  width: 100%;
  background-color: rgba(54, 54, 54, 0.8);
  padding: 20px;
  color: #fefefe;
}

.translucent-form-overlay .columns.row {
  display: block;
}

.translucent-form-overlay h3, .translucent-form-overlay label {
  color: #fefefe;
}

.translucent-form-overlay input, .translucent-form-overlay select {
  color: #8a8a8a;
}

.translucent-form-overlay input::-webkit-input-placeholder {
  color: #8a8a8a;
}

.translucent-form-overlay input:-ms-input-placeholder {
  color: #8a8a8a;
}

.translucent-form-overlay input::placeholder {
  color: #8a8a8a;
}
	</style>
</head>
<body style="padding-left:500px">
<div class="translucent-form-overlay"  >
    <form action="product_add.php" method="POST" enctype="multipart/form-data">
    <h3>Add Products </h3>
    <div class="row columns">
      <label>Name
        <input type="text" name="name" placeholder="Name" required>
      </label>
    </div>
		<div class="row columns">
      <label>Category
        <input type="text" name="category" placeholder="Category" required>
      </label>
    </div>
    <div class="row columns">
      <label>Image
        <input type="file" name="image" placeholder="Image" required>
      </label>
    </div>
    <div class="row columns">
      <label>Description
      <input type="text" name="description" placeholder="Description" required>
      </label>
    </div>
    <div class="row columns">
      <label>Price
        <input type="text" name="amount" placeholder="Price" required>
      </label>
    </div>

    <button type="submit" name="submit" class="primary button expanded search-button">
      Add
    </button>
		<button type="button" name="back" class="primary button expanded search-button" ><a href="main.php">
      Back
    </button></a>
 </form>
</div>
<?php

if(isset($_POST['submit']))
{
	$con = mysqli_connect('localhost','root','','ecommerce') ;
  if($con == false) {
    echo "Connection failed";
  }
  else {
    $name=$_POST['name'];
  	$description=$_POST['description'];
  	$amount=$_POST['amount'];
		$category=$_POST['category'];
    $imageName = mysql_real_escape_string($_FILES["image"]["name"]);
  	$imageData = mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
  	$imageType = mysql_real_escape_string($_FILES["image"]["type"]);

  	if(substr($imageType,0,5) == "image") {
  		$qry = "INSERT INTO `products` VALUES('','$name','$amount','$description','$category','$imageData')";
			$run = mysqli_query($con,$qry);
  		if($run == true)
			{?>
				<script>
					alert("Product added Successfully");
					window.open("product_add.php",_self);
				</script>
				<?php

			}
			else {?>
				<script>
					alert("Failed to add product");
					window.open("product_add.php",_self);
				</script>
				<?php
			}
  	}
  	else
  	{
  		echo " Only images are allowed";
  	}
}
}

?>

</body>
</html>
