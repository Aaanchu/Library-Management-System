<?php
   $connection =mysqli_connect("localhost","root","");
   $db = mysqli_select_db($connection,"lms");
   $query = "insert into users values(null,'$_POST[FIRST_NAME]','$_POST[LAST_NAME]','$_POST[email]','$_POST[password]',$_POST[mobile],'$_POST[address]',$_POST[pincode])";
   $query_run =mysqli_query($connection,$query);
?>
<script type="text/javascript">
    alert("Registration successfully .... YOU MAY LOGIN NOW.")
    window.location.href="index.php";
    </script>