<!DOCTYPE html>
<html lang="en">
<head>
	<title>Arrays</title>
</head>
<body>
	<?php 
	$numbers = array(4,8,15,16,23,42);
	echo $numbers[0];
	 ?> 
	 <br><br>
	 <?php $mixed = array(6,"fox","dog", array("x", "y", "z")) ?> <br>
	 <?php echo $mixed[2]; ?><br>
	 <?php //echo $mixed[3] ?> <br>
	 <?php // echo $mixed ?> <br>


	<?php echo $mixed[3] [1] ?> <br>

	<?php $mixed[2] = "cat"; ?> 
	<?php $mixed[4] = "mouse"; ?> 
	<?php $mixed[] = "horse"; ?> 
	<?php $mixed[] = "cow"; ?> 
	<pre>
	 <?php echo print_r($mixed); ?>  
	</pre>
</body>
</html>