<?php 
require_once("included_functions.php");
require_once("validation_function.php");

$errors = array();
$message = "";

if (isset($_POST['submit'])) {
	//form was submitted
	$username = trim($_POST["username"]);
	$password = trim($_POST["password"]);

// Validations	
	$fields_required = array("username", "password");
	foreach ($fields_required as $field) {
		$value = trim($_POST[$field]);
		if (!has_presence($value)) {
	$errors["$field"] = ucfirst($field) . " can't be blank";
}
	}

if (empty($errors)) {
		//try to login
	if ($username == "jovan" && $password == "secret") {
		//succesfull login
		redirect_to("basic.html");
	} else {
	$message = "Username/password do not match <br />";
	}
}

} else {
		$username = "";
		$message = "Please log in.";
	}

 ?> 

<!DOCTYPE html>
<html lang="en">
<head>
	<title>forms</title>
</head>
<body>

<?php echo $message;?><br>
<?php echo form_errors($errors); ?> 	
<form action="form_with_validation.php" method="post">
Username: <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?> "><br>
Password: <input type="password " name="password" value=""><br>
<br>
<input type="submit" name="submit" value="Submit" style="background-color: red">  

</form>
</body>
</html>