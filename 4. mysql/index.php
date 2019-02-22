<?php
	$conn=mysqli_connect('localhost','root','1234');
	mysqli_select_db($conn,'opentutorials');
	$result=mysqli_query($conn,'SELECT * FROM topic');
?>
<!DOCTYPE html>
<html>
<head> <!-- document information -->
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset = "utf-8">
	<title>생활코딩</title>
	<link rel="stylesheet" type="text/css" href="sehyun.css"/>
</head>
<body id='target'> <!-- document content -->
	<header>
		<img src="https://t1.daumcdn.net/cfile/tistory/990A06505C5032700E" alt='황세로고'>
		<h1><a href="index.php">JavaScript</a></h1>
		
	</header>

	<div id="just_4_prac">
	<input type = "button" value = "white" id='wbtn'/>
	<input type = "button" value = "black" id='bbtn'/>
	<a href="write.php">write!</a>
	</div>
	<nav>
		<ol>
			<?php
			while($row=mysqli_fetch_assoc($result)){
					echo '<li><a href="index.php?id='.$row['id'].'">'.$row['title'].'</a></li>';
				}
			?>
		</ol>
	</nav>
	<script type="text/javascript" src="script.js">
	</script>

	
	  
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

</body>
</html>