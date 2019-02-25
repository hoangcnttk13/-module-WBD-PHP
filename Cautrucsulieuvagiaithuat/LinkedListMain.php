<?php
	include_once ('LinkList.php');

	$linkedList = new LinkList();

	$linkedList->insertFirst(12);
	$linkedList->insertFirst(33);
	$linkedList->insertLast(22);
	$linkedList->insertLast(55);
	$totalNodes = $linkedList->totalNodes();
	$linkData = $linkedList->readList();

	echo $totalNodes;
	echo implode ('-' , $linkData);
?>