<?php
  session_start();
  $connection=mysqli_connect("localhost","root","");
  $db=mysqli_select_db($connection,"lms");
  $FIRST_NAME="";
  $LAST_NAME="";
  $email="";
  $mobile="";
  $query="select * from admins where email='$_SESSION[email]' ";
  $query_run=mysqli_query($connection,$query);
  while($row=mysqli_fetch_assoc($query_run)){
  $FIRST_NAME=$row['FIRST_NAME'];
  $LAST_NAME=$row['LAST_NAME'];
  $email=$row['email'];
  $mobile=$row['mobile'];
 
  }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN DASHBOARD</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="../bootstrap/js/juqery_latest.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
    <style type="text/css">
        #side_bar{
            background-color: lightgrey;
            padding: 50px;
            width: 300px;
            height: 450px;
        }
        </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="admin_dashboard.php">Library Management System(LMS)</a>
            </div>
            <div class="font" style="color:white"><span><strong>Welcome: <?php $str = $_SESSION['FIRST_NAME'];echo $str;echo $_SESSION['LAST_NAME']?></strong></span></div>
           <div class="font" style="color:white"><span><strong>Email: <?php echo $_SESSION['email']?></strong></span></div>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown">MY PRROFILE</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="view_profile.php">View Profile</a>
                        <a class="dropdown-item" href="edit_profile.php">Edit Profile</a>
                        <a class="dropdown-item" href="change_password.php">Change Password</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="../logout.php">Logout</a></li>
            </ul>
</div>
</nav><br>
<span><marquee>This is library management system. Libray opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form>
            <div class="form-group">
                <label>FIRST_NAME:</label>
                <input type="text" class="form-control" value="<?php echo $FIRST_NAME;?>"disabled></div>
                <div class="form-group">
                <label>LAST_NAME:</label>
                <input type="text" class="form-control" value="<?php echo $LAST_NAME;?>"disabled></div>
                <div class="form-group">
                <label>Email:</label>
                <input type="text" class="form-control" value="<?php echo $email;?>"disabled></div>
                <div class="form-group">
                <label>Mobile:</label>
                <input type="text" class="form-control" value="<?php echo $mobile;?>"disabled></div>
                
                
    </form>
            </div>
    <div class="col-md-4"></div>
</div>
</body>
</html>