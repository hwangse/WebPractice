<!DOCTYPE html>
<html>
<head> <!-- document information -->
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
	</div>
	<nav>
		<ol>
			<?php
			echo file_get_contents("list.txt");
			?>
		</ol>
	</nav>
	<script type="text/javascript" src="script.js">
	</script>
<article>
	<?php
		if(empty($_GET['id'])==false)
			echo file_get_contents($_GET['id'].".txt");
	?>
</article>

</body>
</html>