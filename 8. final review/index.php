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
	<title>hi</title>
	<style type="text/css">
	header{
			 border-bottom: 1px solid gray;
	 		 padding-left: 20px;
	   		 padding-bottom: 20px;
	   		 text-align: left;
			padding : 20px;
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

	</style>
</head>
<body>
	<header>
		<h1>생활코딩 JavaScript</h1>
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
		<?php
			$id=mysqli_real_escape_string($conn,$_GET['id']);
			$sql = "SELECT topic.id,topic.title,topic.description,user.name,topic.created  FROM topic LEFT JOIN user ON topic.author=user.id WHERE topic.id=".$id;
			$result=mysqli_query($conn,$sql);
			$row=mysqli_fetch_assoc($result);
		?>
	
		<h2><?=htmlspecialchars($row['title'])?></h2>
		<div><?=$row['created']?> | <?=htmlspecialchars($row['name'])?></div>
		<div><p><?=htmlspecialchars($row['description'])?></p></div>
	</article>
	<input type=button value="white"> 
	<input type=button value="black"> 
	</div>
	
</body>
</html>

