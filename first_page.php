<!DOCTYPE html>
<html lang="en">
<head>
	<title>First page</title>
</head>
<body>
	<h1 style="color: red">This is first page</h1>
	<?php $link_name = "Go to Second Page " ?>
	<?php $id = 5; ?>
	<?php $company = "Jonson & Jonson" ?>   
	<a href="second_page.php?id=<?php echo $id;?>&company=<?php echo urlencode($company); ?>"><?php echo $link_name;?><a/>

</body>
</html>