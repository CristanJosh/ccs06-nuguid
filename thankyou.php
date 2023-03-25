<!DOCTYPE html>
<html>
<head>
	<title>Thank You</title>
</head>
<body>
	<h1>Thank You</h1>
	<p>Thank you for your feedback, <?php echo $_POST["complete_name"]; ?>!</p>
	<p>We appreciate your comments:</p>
	<p><?php echo $_POST["message"]; ?></p>
	<p><?php echo $_POST["satisfaction_level"]; ?></p>
</body>
</html>