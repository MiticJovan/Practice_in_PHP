<!DOCTYPE html>
<html lang="en">
<head>
	<title>Integers</title>
</head>
<body>
<?php 
 	$var1 = 3;
 	$var2 = 4;
?>
Basic Math: <?php echo ((1 + 2 + $var1) * $var2) / 2 - 5;?> 
<br>
Absolute value: <?php echo abs(0 - 300);?><br>
Exponential: <?php echo pow(2, 8); ?><br>
Square root: <?php echo sqrt(100) ?><br>
Modulo: <?php echo fmod(20, 7) ?><br>
Random: <?php echo rand(); ?><br>
Random (min,max): <?php echo rand(1, 10);?><br> 
<br>
+= : <?php echo 4;  ?> &nbsp<?php $var2 += 4; echo $var2; ?><br>  
-= : <?php echo 4;  ?> &nbsp<?php $var2 -= 4; echo $var2; ?><br>  
*= : <?php echo 3;  ?> &nbsp<?php $var2 *= 3; echo $var2; ?><br>  
/= : <?php echo 4;  ?> &nbsp<?php $var2 /= 4; echo $var2; ?><br>  
</body>
</html>