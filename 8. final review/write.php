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
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	header{
			 border-bottom: 1px solid gray;
	 		 padding-left: 20px;
	   		 padding-bottom: 20px;
	   		 text-align: left;
		}

	body{
		margin:0;
	}
	body.black{
		background : black;
		color:white;
	}
	body.white{
		background: white;
		color:black;
	}
	nav{
		border-right : 1px solid gray;
		width : 200px;
		float : left;
		height : 600px;

	}
	#content{
		width : 500px;
		padding-left : 20px;
		float : left;

	}
	ol{
		list-style: none;
		line-height: 30px;
	}
	nav ol li a{
		color : pink;
		text-decoration: none;
    	transition: color 0.5s ease-in-out;
	}
	nav ol li a:hover{
		color:#4ff;
	}
	#buttons{
		background:orange;
		width:150px;
	}


	</style>
</head>
<body id="body">
	<header>
		<h1><a href="index.php">생활코딩 JavaScript</a></h1>
	</header>
	<nav>
		<ol>
			<?php

			$result=mysqli_query($conn,'SELECT * FROM topic');


			while($row=mysqli_fetch_assoc($result)){
				echo '<li><a href="index.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a></li>';
		}
			?>
		</ol>
	</nav>

	<div id="content">
		<article>
			<form action="process.php" method="post">
				<p>
				<label for="title">제목 : </label>
				<input type="text" name="title" id="title">
			</p>
			<p>
				<label for="author">작성자 : </label>
				<input type="text" name="author" id="author">
			</p>
			<p>
				<label for="description">본문 : </label>
				<textarea id="description" name="description" rows="8" cols="40"></textarea>
			</p>
			<p>
				<input type="submit" name="" value="submit">
			</p>
			</form>
		</article>

	<div id="buttons">
		<input type=button value="white" onclick="document.getElementById('body').className='white'"> 
		<input type=button value="black" onclick="document.getElementById('body').className='black'"> 
		<a href="write.php">write</a>
	</div>
	</div>
	
</body>
</html>

