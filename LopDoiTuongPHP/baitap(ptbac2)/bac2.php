<?php include("index.php"); ?>
<?php

	$myQuadraticEquation = new QuadraticEquation(1,3,1);
	echo $myQuadraticEquation->getRoot1();
	echo "<br>";
	echo $myQuadraticEquation->getRoot2();
?>