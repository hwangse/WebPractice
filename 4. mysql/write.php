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
	<form action="process.php" method="post">
		<p>
			제목 : <input type="text" name="title">
		</p>
		<p>
			작성자 : <input type="text" name="author">
		</p>
		<p>
			본문 : <textarea name="description" id="description" cols="50" rows="4"></textarea>
		</p>
		
	
	<p>
		<script>
	  UPLOADCARE_PUBLIC_KEY = 'd4bbf73f96ca8a8f1902';
	  UPLOADCARE_IMAGES_ONLY = true;
	</script>

	<script src="https://ucarecdn.com/libs/widget/3.x/uploadcare.full.min.js"></script>

	<input
	  type="hidden"
	  role="uploadcare-uploader"
	  name="content"
	  data-image-shrink="null" />
	  <input type="submit">
	</p>
	</form>
</article>
	<script>
		var singleWidget=uploadcare.SingleWidget('[role=uploadcare-uploader]');
		singleWidget.onUploadComplete(function(info){
			document.getElementById('description').value = document.getElementById('description').value+'<img src="'+info.cdnUrl+'">';
		});
	</script>


</body>
</html>