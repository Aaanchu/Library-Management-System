<?php
   require('function.php');
  session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS</title>
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
                <li class="nav-item"><a class="nav-link" href="../logout.php">Logout</a></li>
            </ul>
</div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd">
  <div class="container-fluid">
    <ul class="nav navbar-nav navbar-center">
        <li class="nav-item">
            <a href="admin_dashboard.php" class="nav-link">Dasboard</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown">Book</a>
            <div class="dropdown-menu">
                <a href="add_book.php" class="dropdown-item">Add New Book</a>
                <a href="manage_book.php" class="dropdown-item">Manage Book</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown">Category</a>
            <div class="dropdown-menu">
                <a href="add_cat.php" class="dropdown-item">Add New Category</a>
                <a href="manage_cat.php" class="dropdown-item">Manage Category</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown">Author</a>
            <div class="dropdown-menu">
                <a href="add_author.php" class="dropdown-item">Add New Author</a>
                <a href="manage_author.php" class="dropdown-item">Manage Author</a>
            </div>
        </li>
        <li class="nav-item">
            <a href="issuebook.php" class="nav-link">Issue Book</a>
        </li>
    </ul>
  </div>
</nav>
 
<span><marquee>This is library management system. Libray opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
<div class="row">
    <div class="col-md-3">
        <div class="card bg-light" style="width: 300px">
         <div class="card-header">Registered Users:</div>
         <div class="card-body">
            <p class="card-text">NO. of total users:<?php echo get_user_count();?></p>
            <a href="regusers.php" class="btn btn-danger" target="_blank">View Registered Users</a>
         </div>
    </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-light" style="width: 300px">
         <div class="card-header">Registered Books:</div>
         <div class="card-body">
            <p class="card-text">NO. of available books:<?php echo get_book_count();?> </p>
            <a href="regbook.php" class="btn btn-primary" target="_blank">View Registered Books</a>
         </div>
    </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-light" style="width: 300px">
         <div class="card-header">Registered Category:</div>
         <div class="card-body">
            <p class="card-text">NO. of book's category: <?php echo get_category_count();?></p>
            <a href="regcat.php" class="btn btn-info" target="_blank">View Categories</a>
         </div>
    </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-light" style="width: 300px">
         <div class="card-header">Registered Authors:</div>
         <div class="card-body">
            <p class="card-text">NO. of Author's books:<?php echo get_author_count();?></p>
            <a href="regauthor.php" class="btn btn-primary" target="_blank">View Registered Author's Book</a>
         </div>
    </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-light" style="width: 300px">
         <div class="card-header">Issued Books:</div>
         <div class="card-body">
            <p class="card-text">NO. of Issued Books: <?php echo get_issued_books_count();?></p>
            <a href="issuedbook.php" class="btn btn-success" target="_blank">View Issued Book</a>
         </div>
    </div>
    </div>
</div>
</body>
</html>