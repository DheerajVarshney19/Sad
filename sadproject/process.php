<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Profile</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>



    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>



    <?php
    $s_id = $_POST['user'];
    $password = $_POST['pass'];

    //$s_id = stripcslashes($s_id);
    //$password = stripcslashes($password);
    //$s_id = mysql_real_escape_string($s_id);
    //$password = mysql_real_escape_string($password);

    
    $con=mysqli_connect("localhost" , "root" , "");
    mysqli_select_db($con,'finalproject');
    $query="SELECT * FROM userstudent WHERE S_id= '". $s_id . "' AND password = '". $password . "';";
    $result = mysqli_query($con,$query)
        or die("cannot query database".mysqli_error($con));
        //print mysqli_error($con);
    $row = mysqli_fetch_array($result,MYSQLI_BOTH);
    $query1="SELECT * FROM name WHERE S_id= '". $s_id ."';";
    $result1= mysqli_query($con,$query1)
        or die("cannot query database".mysqli_error($con));
    $row2 = mysqli_fetch_array($result1,MYSQLI_BOTH);
    $query2="SELECT * FROM fat_name WHERE s_id= '". $s_id ."';";
    $result2= mysqli_query($con,$query2)
        or die("cannot query database".mysqli_error($con));
    $row3 = mysqli_fetch_array($result2,MYSQLI_BOTH);
    //echo mysqli_num_rows($result);
    if ($row['S_id']==$s_id && $row['password']==$password) {
        //echo "<h1>Login Success!!! Welcome</h1>".$row['s_id'].$row['Name'];
        echo '
        <img src="images/bg9.jpg" style="position:fixed;width:1920px;height:1080px;">
        <div class="container" >
        <div class="row">
            <div class="col-lg-6 col-sm-6 " id="card" style="margin-left: 25%;margin-top:10%;" >
                <h2 style="color:white;">Login Successful!! Welcome '.$row2['F_name'].'</h2>
            <div class="card hovercard">
                <div class="cardheader" style="background-color:;padding:0px;">
                   
                </div>
                <div style="background-color:#5BC0DE;">
                    <img src="images/user.svg" style="height:100px;width:100px;margin-left:38%;">
                </div>
                <div class="info">
                    <div class="title">
<table class="table">
  <thead>
    <tr>
      <th>Id No.</th>
      <td>'.$row['S_id'].'</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Name</th>
      <td>'.$row2['F_name'].' '.$row2['M_name'].' '.$row2['L_name'].'</td>
    </tr>
    <tr>
      <th scope="row">Email</th>
      <td>'.$row['Email'].'</td>
    </tr>
    <tr>
      <th scope="row">Contact</th>
      <td>'.$row['Contact'].'</td>
    </tr>
    <tr>
      <th scope="row">Equipment</th>
      <td>'.$row['equipment'].'</td>
    </tr>
  </tbody>
</table>

                </div>
            </div>

        </div>

    </div>
</div>';
    }
    else{
        echo "$row";
        echo "Failed to Login!";
    }

  ?>



  
</body>

</html>
