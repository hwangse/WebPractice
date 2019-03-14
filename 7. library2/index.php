<?php
	require("lib/db.php");
	require("config/config.php");
	$conn=db_init($config["host"],$config["duser"],$config["dpw"],$config["dname"]);
	$result=mysqli_query($conn,'SELECT * FROM topic');
?>
<!DOCTYPE html>
<html>
<head> <!-- document information -->
	<meta charset = "utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>생활코딩</title>
	<link rel="stylesheet" type="text/css" href="sehyun.css"/>
	<link href="bootstrap-3.3.4/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body id='target'> <!-- document content -->
	<div class='container'>
		<header class="jumbotron text-center">
		<img src="https://t1.daumcdn.net/cfile/tistory/990A06505C5032700E" alt='황세로고' class="img-circle" id="logo">
		<h1><a href="index.php">JavaScript</a></h1>
		
	</header>
	<div class="row">
		<nav class="col-md-3">
			<ol class="list-group">
				<?php
				while($row=mysqli_fetch_assoc($result)){
						echo '<li class="list-group-item"><a href="index.php?id='.$row['id'].'">'.$row['title'].'</a></li>';
					}
				?>
			</ol>
		</nav>

		<div class="col-md-9">
	
		<article>
			<?php
			 if(empty($_GET['id'])===false){

			 	$sql_sentence='SELECT * FROM topic WHERE id='.$_GET['id'];
			 	$result=mysqli_query($conn,$sql_sentence);
			 	
			 	$row=mysqli_fetch_assoc($result);
			 	echo '<h2>'.$row['title'].'</h2>';
			 	echo $row['description'];
			 	 }
			?>
		</article>
		<hr>
			<div id="just_4_prac">
			<div class="btn-group" role="group" aria-label="Basic example">
			<input type = "button" value = "white" id='wbtn' class="btn btn-primary btn-lg">
			<input type = "button" value = "black" id='bbtn' class="btn btn-primary btn-lg">
			</div>
			<a href="write.php" class="btn btn-success btn-lg">write!</a>
		</div>	

		</div>
	</div>
	</div>
	

	

 <!-- jQuery (부트스트랩의 자바스크립트 플러그인을 위해 필요합니다) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- 모든 컴파일된 플러그인을 포함합니다 (아래), 원하지 않는다면 필요한 각각의 파일을 포함하세요 -->
    <script src="bootstrap-3.3.4/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="script.js">
	</script>

</body>
</html>