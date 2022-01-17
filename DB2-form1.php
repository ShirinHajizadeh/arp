<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
	#main{width: 600px;height:450px;background: #1FC7E9;padding: 20px 10px 10px 25px;border-radius: 20px;line-height: 30px;text-align: center}
    input{border-radius: 20px 20px 20px 20px}
	
</style>	
</head>

<body>
	<div id="main">
	<form action="" method="post" name="user detail" enctype="multipart/form-data" accept-charset="UTF-8">
	   user name:<input type="text" name="username">	
	   first name:<input type="text" name="firstname">
	   family name:<input type="text" name="familyname">
	   gender:<input type="number" name="name">
	   status:<input type="number" name="status">
	   <input type="submit" value="change" name="submit">
	</form>
	</div>
	
	<?php
	$con=mysqli_connect("localhost","root","") or die(mysqli_error($con));
	mysqli_select_db($con,"database2") or die(mysqli_error($con));
	$result=mysqli_query($con,"INSERT INTO `user_details`(`username`, `first_name`, `last_name`, `gender`, `password`, `status`) VALUES ('shirin10454','shirin','hajizadeh','famale','123456','5')") or die(mysqli_error($con));
	if(isset($_POST['submit'])){
	if(mysqli_num_rows($result)!=0){
	  while ($row=mysqli_fetch_assoc($result)){
		 echo $row ['username'];
		 echo $row ['first_name'];
		 echo $row ['last_name'];
	     echo $row ['last_name'];
		 echo $row ['gender'];
	     echo $row ['status'];
		}
	
	}else echo("this form information not recorded.");
	}
	mysqli_close($con);
	?>
	
</body>
</html>