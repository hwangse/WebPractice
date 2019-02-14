<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<h1>JavaScript</h1>
	<ul>
	<script type="text/javascript" charset="utf-8">
		list=new Array("one","two","three","four","jdqfk","qdf");
		i=0;
		while(i<list.length){
			document.write("<li>"+list[i]+"</li>");
			i++;
		}
	</script>
</ul>
	
	<ul>
	<h1>PHP</h1>
	<?php
		$list=array("one","two","three","i love you","babe");
		$i=0;
		while($i<count($list)){
			echo "<li>".$list[$i]."</li>";
			$i = $i +1;
		}

	?>
</ul>
</body>
</html>