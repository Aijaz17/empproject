<?php

include 'C:\xampp\htdocs\emproject\dbconn.php';

$id=$_GET['id'];

$del="DELETE FROM `employee` WHERE id='$id'";

$run=mysqli_query($conn , $del);

if($run)
{
    header('location:admindashboard.php');

}






?>