<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="../bootstrap-4.0.0-dist/js/juqery_latest.js"></script>
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
                <a class="navbar-brand" href="index.php">Library Management System(LMS)</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">ADMIN LOGIN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">USER LOGIN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../signup.php">REGISTER</a>
                </li>
            </ul>
</div>
</nav><br>
<span><marquee>This is library management system. Libray opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
<div class="row">
    <div class="col-md-6" id="side_bar">
        <h5> Library Timing</h5>
        <ul>
            <li>Opening Timing: 8:00 AM</li>
            <li>Closing Timing: 8:00 PM</li>
            <li>Sunday Off</li>
        </ul>
        <h5> What we provide:</h5>
        <ul>
            <li>Free Wi-Fi</li>
            <li>News Papers</li>
            <li>RO Water</li>
        </ul>
    </div>
    <div class="col-md-6" id="main_content">
    <div class="text-center">
    <h3>Admin Login Form</h3></div>
   
    <form action="" method="post">
            <p> EMAIL:* <input type="email" name="email" id="email"  required></p>
            <p> PASSWORD:* <input type="password" name="password" id="password"  required></p>
           <button type="submit" name="login" class="btn btn-primary">Login</button>
           </form>
           <?php
               session_start();
               if(isset($_POST['login'])){
                $connection=mysqli_connect("localhost","root","");
                $db=mysqli_select_db($connection,"lms");
                $query="select * from admins where email='$_POST[email]' ";
                $query_run=mysqli_query($connection,$query);
                  while($row=mysqli_fetch_assoc($query_run))
                  {
                    if($row['email']==$_POST['email'])
                    {
                        if($row['password']==$_POST['password']){
                           $_SESSION['FIRST_NAME']=$row['FISRT_NAME'];
                           $_SESSION['LAST_NAME']=$row['LAST_NAME'];
                           $_SESSION['email']=$row['email'];
                           header("Location:admin_dashboard.php");
                        }
                        else{
                            ?>
                            <br><br><div class="text-center"><span class="alert-danger">Wrong Password</span></div>
                            <?php
                        }
                    }
                   
                  }
               }
           ?>
        </div>
</div>

</body>
</html>