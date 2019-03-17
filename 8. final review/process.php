<?php
	//1. 데이터베이스 접속
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

	$author=mysqli_real_escape_string($conn,$_POST['author']);
	$sql="SELECT * FROM `user` WHERE `name` = '".$author."'";
	//아래와 같이도 표현이 가능하다고 한다.!!
	//$sql="SELECT * FROM `user` WHERE `name` = '{$author}'"
	$result=mysqli_query($conn,$sql);
	//var_dump($result->num_rows);

	//var_dump($result);
	if($result->num_rows>0){ 	//저자가 user 테이블에 존재하는지 여부를 체크
		$row=mysqli_fetch_assoc($result);
		$user_id=$row['id'];

	}
	else{
			//존재하지 않는다면 새롭게 추가해야함
		$sql="INSERT INTO `user` (`name`,`password`) 
		VALUES ('{$author}','12345');";
		$result=mysqli_query($conn,$sql);
		//추가된 저자의 id를 받아낸다.
		$user_id=mysqli_insert_id($conn); //바로 직전의 insert문을 통해 추가한 행의 id를 알아내는 query
	}
	//제목, 저자, 본문 등을 topic 테이블에 추가한다. 
	$title=mysqli_real_escape_string($conn,$_POST['title']);
	$description=mysqli_real_escape_string($conn,$_POST['description']);
	$sql="INSERT INTO 
		`topic` 
		(`id`, `title`, `description`, `author`, `created`)
		 VALUES (NULL, '{$title}', '{$description}', '{$user_id}', now());";
	mysqli_query($conn,$sql);

	//사용자를 index.php로 돌려보낸다. 
	header('Location:index.php');

?>