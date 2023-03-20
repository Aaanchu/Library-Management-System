<?php
  session_start();
   function get_user_issue_book_count(){
    $connection=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($connection,"lms");
    $user_issue_book_count=0;
    $query="select count(*) as user_issue_book_count from issued_books where student_id=$_SESSION[id] ";
    $query_run=mysqli_query($connection,$query);
      while($row=mysqli_fetch_assoc($query_run)){
            $user_issue_book_count=$row['user_issue_book_count'];
      }
      return($user_issue_book_count);
   }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap/js/juqery_latest.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
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
                <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
            </ul>
</div>
</nav><br>
<span><marquee>This is library management system. Libray opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
<div class="row">
    <div class="col-md-3">
    <div class="card bg-light" style="width: 300px">
         <div class="card-header">Issued Books:</div>
         <div class="card-body">
            <p class="card-text">NO. of Issued Books: <?php echo get_user_issue_book_count(); ?> </p>
            <a href="view_issuedbook.php" class="btn btn-success" target="_blank">View Issued Books</a>
         </div>
    </div>
    </div>
    <div class="col-md-3">

    <div class="col-md-3"></div>
</div>
</body>
</html>