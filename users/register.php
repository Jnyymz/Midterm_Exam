<?php  
require_once 'core/models.php'; 
require_once 'core/handleForms.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<div class="userContainer">
		<h1>Register here!</h1>
		<?php if (isset($_SESSION['message'])) { ?>
			<h1 style="color: #ABBA7C;"><?php echo $_SESSION['message']; ?></h1>
		<?php } unset($_SESSION['message']); ?>
		<form action="core/handleForms.php" method="POST">
			<p>
				<label for="username">Username: </label>
				<input type="text" name="username">
			</p>
			<p>
				<label for="password">Password: </label>
				<input type="password" name="password">
				<input type="submit" value="Register" name="registerUserBtn" class="btns">
			</p>
		</form>
	</div>
</body>
</html>