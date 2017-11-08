<?php 
$state=$_GET['st'];
$c1=array('patna');
$c2=array('bhopal','indore','jabalpur','bhopal','indore','jabalpur','bhopal','indore','jabalpur','bhopal','indore','jabalpur','bhopal','indore','jabalpur');

$c3=array('kanpur','agra','lucknow');

if($state=="bihar")
{

foreach ($c1 as $c) {
	echo "<option>$c</option>";
}
}

else if($state=="MP"){
foreach ($c2 as $c) {
	echo "<option>$c</option>";
}

}

else if($state=="UP"){


foreach ($c3 as $c) {
	echo "<option>$c</option>";
}
}
  

  else {
  	echo "<option>First Select State</option> ";
  }
  ?>