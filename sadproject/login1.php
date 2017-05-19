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

	<script type="text/javascript">		
		$('#myModal').on('shown.bs.modal', function () {
		  $('#myInput').focus()
		})
	</script>

		<div>
			
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-login">
    Modal Login
</button>
                                
<!-- Modal Login -->
<div class="modal fade modal-ext" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="w-100"><i class="fa fa-user"></i> Login</h3>
            </div>
            <!--Body-->
            <div class="modal-body">
                <div class="md-form">
                    <i class="fa fa-envelope prefix"></i>
                    <input type="text" id="form2" class="form-control">
                    <label for="form2">Your email</label>
                </div>

                <div class="md-form">
                    <i class="fa fa-lock prefix"></i>
                    <input type="password" id="form3" class="form-control">
                    <label for="form3">Your password</label>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary btn-lg">Login</button>
                </div>
            </div>
            <!--Footer-->
            <div class="modal-footer">
                <div class="options text-right">
                    <p>Not a member? <a href="#">Sign Up</a></p>
                    <p>Forgot <a href="#">Password?</a></p>
                </div>
                <button type="button" class="btn btn-default ml-auto" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
		</div>
		</div>
	</div>
</body>
</html>