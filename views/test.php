<?php
  // Create database connection
  $db = mysqli_connect("127.0.0.1", "root", "", "ngoc");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$title = mysqli_real_escape_string($db, $_POST['title']);
    $des = mysqli_real_escape_string($db, $_POST['description']);
	  // image file directory
	$status = $_POST['status'] ;
  	$target = "/home/ngoc/Documents/phpbyme/upload/".basename($image);

  	$sql = "INSERT INTO image (title, description, image, status) VALUES ('$title', '$des', '$image', $status)";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM images");
?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<style type="text/css">
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
</style>
</head>
<body>
<div id="content">
  
  <form method="POST" action="add" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
    <div>
      <input type="text" name="title">
    </div>
  	<div>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="description" 
      	placeholder="Say something about this image..."></textarea>
	  </div>
	  <div>
	  <select name="status" id="statusid" style="margin-top: -5px; width:100px">
                <option value="Enabled">Enabled</option>
                <option value="Disabled">Disabled</option>
            </select>
	  </div>
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
  </form>
</div>
</body>
</html>