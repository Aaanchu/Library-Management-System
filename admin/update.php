<?php
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,"lms");
$query="update admins set FIRST_NAME='$_POST[FIRST_NAME]',LAST_NAME='$_POST[LAST_NAME]',email='$_POST[email]',mobile='$_POST[mobile]'";
$query_run=mysqli_query($connection,$query);
?>
<script type="text/javascript">
    alert("Updated Successfully...");
    window.location.href="admin_dashboard.php";
    </script>