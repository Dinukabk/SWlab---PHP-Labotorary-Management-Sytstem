<?php
include('Connect.php');
$get_id=$_GET['id'];

mysqli_query($conn,"delete from online  where id='$get_id'")or die(mysqli_error());
header('location:online.php');

?>