<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

	<link href="css/login.css" rel="stylesheet" type="text/css">


</head>
	<body style="background-image: url('images/bg5.jpg');">
<!--Form with header-->
<div class="card col-md-4 " style="margin-top: 10%;margin-left: 35%;">
    <div class="card-block">

        <!--Header-->
        <div class="form-header blue-gradient">
            <h3><i class="fa fa-user"></i> Register:</h3>
        </div>

        <!--Body-->
        <div class="md-form">
            <i class="fa fa-user prefix"></i>
            <input type="text" id="form3" class="form-control">
            <label for="form3">Your name</label>
        </div>
        <div class="md-form">
            <i class="fa fa-envelope prefix"></i>
            <input type="text" id="form2" class="form-control">
            <label for="form2">Your email</label>
        </div>

        <div class="md-form">
            <i class="fa fa-lock prefix"></i>
            <input type="password" id="form4" class="form-control">
            <label for="form4">Your password</label>
        </div>

        <div class="text-center">
            <button 
            type="button" class="btn btn-indigo" data-toggle="modal" data-target="#centralModalSuccess" 
            style="border-radius: 100px;">
        		Sign UP
    		</button>
        </div>
<!-- modal success -->

		                                            

<!-- Central Modal Medium Success -->
<div class="modal fade" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-info modal-lg" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <p class="heading lead">Registration Success</p>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body">
                <div class="text-center">
                    <i class="fa fa-check fa-4x mb-1 animated rotateIn"></i>
                    <p>Registered Successfully<br>Thank you</p>
                </div>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- Central Modal Medium Success-->

                                            



    </div>
</div>
<!--/Form with header-->

<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>


    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

</body>
</html>