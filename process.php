<?php
include 'database.php';

if(isset($_POST['register']));
{
    $name=$_POST['uname'];
    $htno=$_POST['htno'];
    $event=$_POST['event'];
    $year=$_POST['year'];

    $sql= "insert into student (name,htno,event,year) values('$name','$htno','$event','$year')";

    if(mysqli_query($con,$sql))
    {
        echo "<script> alert('new record inserted')</script>";
    }
    else
    {
        echo "error:" .mysqli_error($con);
    }
    mysqli_close($con);
}
?>