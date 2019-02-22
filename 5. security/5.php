<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="index.php">생활코딩</a>
	<?php
		echo htmlspecialchars("<a href = 'index.php'>생활코딩</a>");
		echo "<br>";
		echo htmlspecialchars("<script>alert(1);</script>");
	?>
</body>
</html>