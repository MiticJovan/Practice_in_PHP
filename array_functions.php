<!DOCTYPE html>
<html lang="en">
<head>
	<title>Array functions</title>
</head>
<body>
<?php $numbers = array(8,23,15,42,16,4); ?>

Count:  		<?php echo count($numbers); ?><br>
Max value: 		<?php echo max($numbers); ?><br>
Min value:  	<?php echo min($numbers); ?><br>
<br>
<pre>
Sort:		 	<?php sort($numbers); print_r($numbers); ?><br>
Reverse sort: 	<?php rsort($numbers); print_r($numbers); ?><br>   
Implode:		<?php echo $num_string = implode(" * ", $numbers) ?><br>  
Explode: 		<?php print_r(explode(" * ", $num_string)) ?><br> 
15 is in array: <?php echo in_array(42, $numbers);// return true or false ?><br>
22 is in array: <?php echo in_array(22, $numbers); // return true or false ?>
</pre>
</body>
</html>