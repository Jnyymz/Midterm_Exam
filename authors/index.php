<?php 
require_once 'core/models.php'; 
require_once 'core/handleForms.php'; 

if (!isset($_SESSION['username'])) {
	header("Location: login.php");
}
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
	<div class="container-one">
    	<?php if (isset($_SESSION['message'])) { ?>
			<h1 style="color: #ABBA7C;"><?php echo $_SESSION['message']; ?></h1>
		<?php } unset($_SESSION['message']); ?>



		<?php if (isset($_SESSION['username'])) { ?>
			<h1>Welcome <?php echo $_SESSION['username']; ?> To Book Store Management System.</h1>
			<a href="core/handleForms.php?logoutAUser=1" class="link-two">Logout</a>
		<?php } else { echo "<h1>No user logged in</h1>";}?>
		
		<h3>Add new Authors!</h3>
		<form action="core/handleForms.php" method="POST">
			<p>
				<label for="firstname">First Name: </label> 
				<input type="text" name="firstname">
			</p>
			<p>
				<label for="lastname">Last Name: </label> 
				<input type="text" name="lastname">
			</p>
			<p>
				<label for="nationality">Nationality: </label> 
				<input type="text" name="nationality">
			</p>
			<p>
				<label for="contactInfo">Contact Info: </label> 
				<input type="text" name="contactInfo">
				<input type="submit" name="insertAuthorBtn" class="btns">
			</p>
		</form>
	</div>
	<?php $getAllAuthors = getAllAuthors($pdo); ?>
	<?php foreach ($getAllAuthors as $row) { ?>
	<div class="container" >
	    <h3>Author ID: <?php echo $row['authorID']; ?></h3>
	    <h3>First Name: <?php echo $row['firstname']; ?></h3>
		<h3>Last Name: <?php echo $row['lastname']; ?></h3>
		<h3>Nationality: <?php echo $row['nationality']; ?></h3>
		<h3>Contact Info: <?php echo $row['contactInfo']; ?></h3>
		<h3>Last Updated: <?php echo $row['dateAdded']; ?></h3>




		<div class="editAndDelete" style="float: right; margin-right: 20px;">
			<a href="viewbooks.php?authorID=<?php echo $row['authorID']; ?>" class="link">View Books</a>
			<a href="editauthor.php?authorID=<?php echo $row['authorID']; ?>" class="link">Edit</a>
			<a href="deleteauthor.php?authorID=<?php echo $row['authorID']; ?>" class="link">Delete</a>
		</div>


	</div> 
	<?php } ?>
</body>
</html>
