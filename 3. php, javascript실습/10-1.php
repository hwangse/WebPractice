<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<script type="text/javascript">
		list = new Array("sehyun","is","the","best");
		i=0;
		while(i<list.length){
			document.write(list[i]+" ");
			i=i+1;
		}

	</script>
	<?php
		$list=array("sehyun","is","the","best");
		$i=0;
		while($i<count($list)){
			echo $list[$i]." ";
			$i=$i+1;
		}
	?>
</body>
</html>