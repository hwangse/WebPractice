<?php

	$config=array(
		"host" => "localhost",
		"duser" => "root",
		"dpw" => "1234",
		"dname" => "opentutorials2"
	);
	function db_init($host,$duser,$dpw,$dname){
		$conn=mysqli_connect($host,$duser,$dpw);
		mysqli_select_db($conn,$dname);
		return $conn;
	}
	$conn=db_init($config["host"],$config["duser"],$config["dpw"],$config["dname"]);
	$result=mysqli_query($conn,'SELECT * FROM topic');


	while($row=mysqli_fetch_assoc($result)){
		echo '<a href="index.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a><br/>';
	}

	$id=$_GET['id'];
	$sql = "SELECT topic.id,topic.title,topic.description,user.name,topic.created  FROM topic LEFT JOIN user ON topic.author=user.id WHERE topic.id=".$id;
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);
	echo htmlspecialchars($row['title']).'<br/>';
	echo htmlspecialchars($row['description']).'<br/>';
	echo $row['created'].'<br/>';
	echo $row['name'].'<br/>';

?>