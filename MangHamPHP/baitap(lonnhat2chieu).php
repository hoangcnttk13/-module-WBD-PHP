<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tìm phần tử lớn nhất trong mảng hai chiều</title>
</head>
<body>
<?php
	$arrayNumber =	array(
		array(1,2,3,4),
		array(5,6,7,8)
	);

	$max = $arrayNumber [0][0];
	for ($i = 0 ; $i < 2 ; $i++){
       for ($j=0; $j < count($arrayNumber[$i]); $j++) { 
	       	if ($max < $arrayNumber[$i][$j]){
	       		$max = $arrayNumber[$i][$j];
	       	}
       }
	}
	echo $max;
?>
</body>
</html>