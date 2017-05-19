<!DOCTYPE html>
<html>
<head>
	<title>Student Login</title>
	<!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

	<link href="css/login.css" rel="stylesheet" type="text/css">


</head>
	<body >
	<div class="view" style="">
	<div class="full-bg-img flex-center">
		<div id="frm">
			<form action="process.php" method="POST">
				<p style="margin-bottom: 10px;display: inline;">
					<label>Student ID:</label>
					<input type="text" id="user" name="user">
				</p>

				<p style="margin-bottom: 10px;display: inline;">
					<label>Password : </label>
					<input type="password" id="pass" name="pass">
				</p>

				<p style="margin-top: 10px;">
					<input type="submit" id="btn" value="Login">
				</p>
			</form>
		</div>
		</div>
	</div>
</body>
</html>