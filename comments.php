<?php
session_start();
require_once "config.php";


// Create connection



/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$username= $_SESSION["username"];
if(isset($_POST['submit']))
{
	$textareaValue = trim($_POST['content']);
	
	$sql = "INSERT INTO `comments`(`username`, `Comment`) VALUES ('$username', '$textareaValue')";
	$rs = mysqli_query($link, $sql);
	$affectedRows = mysqli_affected_rows($link);
	
	if($affectedRows == 1)
	{
		$successMsg = "Record has been saved successfully";
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>One Page Wonder - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="files/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="files/css/one-page-wonder.min.css" rel="stylesheet">
  
</head>
<body>
	<?php 
		if(isset($successMsg))
		{
			echo "<div class='success-msg'>";
			print_r($successMsg);
			echo "</div>";
		}
	?>
	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		
		<label>Textarea:</label>
		
		<div>
			<textarea rows="10" cols="60" name="content" required></textarea>
		</div>
		
		<input type="submit" name="submit" value="Submit">
		
	</form>
</body>
</html>
 