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

	<link href="css/style.css" rel="stylesheet" type="text/css">


</head>
	<body >
	  
    <!--Navbar-->
    <nav class="navbar navbar-toggleable-md fixed-top ">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#collapseEx2" aria-controls="collapseEx2" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" class="d-inline-block align-top z-depth-0" alt="logo">
            </a>
            <div class="collapse navbar-collapse" id="collapseEx2">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php" style="color: white">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php" style="color: white">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Academics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Contact</a>
                    </li>
                    
                </ul>
                
            </div>
        </div>
    </nav>
    <!--/.Navbar-->

    <!--Mask-->
    <div class="view">
        <!--Intro content-->
        <div class="full-bg-img flex-center">
            <ul>
                <li>
                    <h2 class="h1-responsive" >ABV-IIITM</h2></li>
                <li>
                    <p class="para"><h2 style="color: white">Student Course Management<h2></p>
                </li>
                <li>
                    <li ><h5 style="color: white">Register as:</h5></li>
                    <!--login-->
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-login" >
                        <a href="register1.php" style="color: white">Student</a>
                    </button>
                                                    
                      
                    <!--login
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-login">
                         <a href="register2.php" style="color: white">Instructor</a>
                    </button>
                    -->
                                                    
  
                 </li>
            </ul>
        </div>
        <!--/Intro content-->
    </div>
    <!--/.Mask-->



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