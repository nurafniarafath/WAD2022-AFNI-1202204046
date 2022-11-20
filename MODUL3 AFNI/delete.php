<?php
include("config.php");

 $id= $_GET['id'];
 mysqli_query($connect, "DELETE from modul3 where id=$id");
 header("Location:read.php");
?>