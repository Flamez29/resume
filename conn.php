<?php
$conn=mysqli_connect("localhost", "root", "", "flameztech");
if(!$conn)
{
    die("Connection failed".mysqli_connect_Error());
}
else{
    $msg='Connection successful';
}
?>