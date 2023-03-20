<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-4.0.0-dist/js/juqery_latest.js"></script>
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
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">ADMIN LOGIN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">USER LOGIN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">REGISTER</a>
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
    <h3>User Registration Form</h3></div>
   
    <form action="register.php" method="post">
         <p style="color: red;">FILL ALL REQUIRED FIELD *</p>
         <p>
            FIRST_NAME:*<input type="text" name="FIRST_NAME" id="FIRST_NAME" required> <br><br>
            LAST_NAME: *<input type="text" name="LAST_NAME" id="LAST_NAME" required></p>
            <!-- <fieldset>
                <legend  required>GENDER *</legend>
                <p>
                    FEMALE <input type="radio" name="GENDER" id="FEMALE">
                    MALE <input type="radio" name="GENDER" id="MALE">
                   DO NOT DISCLOSE <input type="radio" name="GENDER" id="  DO NOT DISCLOSE">
                </p>
            </fieldset> -->
            <p> EMAIL:* <input type="email" name="email" id="email"  required></p>
            <p> PASSWORD:* <input type="password" name="password" id="password"  required></p>
            <p>MOBILE_NUMBER: <input type="number" name="mobile" id="mobile"></p>
            
            <p class="word"> ADDRESS <textarea name=" address" id=" address" cols="60" rows="5"></textarea></p>
            <p> PIN_CODE: <input type="number" name=" pincode" id=" pincode"></p>
           <button type="submit" class="btn btn-primary">Register</button>
           </form>
        </div>
</div>

</body>
</html>