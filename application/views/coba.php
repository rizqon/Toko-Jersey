<!DOCTYPE html>
<html>
<head>
	<title>Jajal</title>
</head>
<body>
<?php

foreach ($isi as $p) {
	echo url_title(strtolower($p['category_name'])).'<br>';
}
 ?>

</body>
</html>