<?php


$conn=mysqli_connect('localhost' ,'root' ,'' , 'employee');

if($conn)
{
    echo "db is connected";
}
else
{
        echo "db is not connected";
}
?>