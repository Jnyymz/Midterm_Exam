<?php require_once 'core/models.php'; ?>
<?php require_once 'core/dbConfig.php'; ?>
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
		<a href="viewbooks.php?authorID=<?php echo $_GET['authorID']; ?>" class="link-two">
		View The Books</a>
		<h1>Edit the Book!</h1>
		<?php $getBookByID = getBookByID($pdo, $_GET['bookID']); ?>
		<form action="core/handleForms.php?bookID=<?php echo $_GET['bookID']; ?>
		&authorID=<?php echo $_GET['authorID']; ?>" method="POST">
			<p>
				<label for="title">Book Title: </label> 
				<input type="text" name="title" 
				value="<?php echo $getBookByID['title']; ?>">
			</p>
			<p>
				<label for="genre">Book Genre: </label> 
				<input type="text" name="genre"
				value="<?php echo $getBookByID['genre']; ?>">
			</p>
			<p>
				<label for="price">Price: </label> 
				<input type="number" name="price"
				value="<?php echo $getBookByID['price']; ?>">
				<input type="submit" value="Edit" name="editBookBtn" class="btns">
			</p>
		</form>
	</div>
</body>
</html>