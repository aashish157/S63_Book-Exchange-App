<?php
	session_start();

	if(!isset($_SESSION["user"]))
		header("Location:index.php");
?>

<!--Display submitted form data -->
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="shortcut icon" type="image/png" href="Images/favicon.png">
    <title>Contact Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <h3>Hello <?php echo htmlentities($_SESSION["user"]); ?>,</h3>
    <p>Here is the information you have submitted:</p>
    <ol>
        <li><em>Name:</em> <?php echo $_SESSION["name"]?>
        <li><em>E-Mail:</em> <?php echo $_SESSION["email"]?>
        <li><em>Mobile:</em> <?php echo $_SESSION["mobile"]?>
        <li><em>Points:</em> <?php echo $_SESSION["points"]?>
        <li><em>Username:</em> <?php echo $_SESSION["user"]?>
        <li><em>Password:</em> <?php echo $_SESSION["pass"]?>
    </ol>

    <div class="col-md-2">
    	<form action="logout.php" method="post"><input class="btn btn-block btn-primary" type="submit" name="logout" value="Logout"></form>
    </div>

</body>
</html>
