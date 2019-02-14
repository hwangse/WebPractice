<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<ul>
	<script type="text/javascript" charset="utf-8">
		i=0;
		while(i<10){
			document.write("<li>"+i+"</li>");
			i += 1;
		}

	</script>
	</ul>
	<?php
		$i=0;
		while($i<10){
			echo $i."</br>";
			$i=$i+1;
		}
	?>
</body>
</html>