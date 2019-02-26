<?php
	$conn=mysqli_connect('localhost','root','1234');
	mysqli_select_db($conn,'opentutorials');

//	echo mysqli_real_escape_string($conn,"11''11");
//	exit;
	$name=mysqli_real_escape_string($conn,$_GET['name']);
	$password=mysqli_real_escape_string($conn,$_GET['password']);


	$sql="SELECT * FROM login WHERE username='".$name."' AND password='".$password."'";
	
	$result=mysqli_query($conn,$sql);
	var_dump($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta charset="utf-8">
</head>
<body>
	<?php
		
		if($result->num_rows=="0"){
			echo "누구?";
		}
		else{
			echo "주인님~~";
		}
	?>
</body>
</html>