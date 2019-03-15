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
		echo '<li class="list-group-item"><a href="index.php?id='.$row['id'].'">'.$row['title'].'</a></li>';
	}
?>