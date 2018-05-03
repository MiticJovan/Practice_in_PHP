<!DOCTYPE html>
<html lang="en">
<head>
	<title>Variables</title>
</head>
<body>
<?php 
$first = "jovan mitic is car of counter strike";
$second = " and all others are funny.";
$third = $first;
$third .=$second;
echo $third;
?> 
<br>
Lowercase: <?php echo strtolower($third); ?><br>
Uppercase: <?php echo strtoupper($third); ?><br>
Uppercase first: <?php echo ucfirst($third); ?><br>
Uppercase words: <?php echo ucwords($third); ?><br>
<br>
Length: <?php echo strlen($third); ?><br> 
Trim: <?php echo "A" . trim("B C D") . "E" ; ?><br> 
Find: <?php echo strstr($third, "car"); ?><br> 
Replace by string: <?php echo str_replace("funny", "noobs", $third); ?><br> 
<br>
Repeat: <?php echo str_repeat($third, 3); ?><br>
Make substring: <?php echo substr($third, 10, 20);?><br>
Find position: <?php echo strchr($third, "y"); ?><br>  

</body>
</html>