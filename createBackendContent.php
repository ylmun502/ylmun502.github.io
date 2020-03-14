<?php 
  $dogSize = $_GET["name"];
  $dogList;
  if (strtolower($dogSize) == "small")
	$dogList = fopen("smallDogs.txt", "r");
  elseif (strtolower($dogSize) == "medium")
	$dogList = fopen("mediumDogs.txt", "r");
  elseif (strtolower($dogSize) == "large")
	$dogList = fopen("largeDogs.txt", "r");
  else
	exit("Error! Invalid input!");
  while(!feof($dogList))
	echo fgets($dogList);
  fclose($dogList);
?>