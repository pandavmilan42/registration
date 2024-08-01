<?php
// Database configuration
$servername="localhost";
$username="root";
$password="";
$dbname="stud1";

$cn=mysqli_connect($servername,$username,$password,$dbname);

if (!$cn) 
{
    echo "connection failed";
}
else
{
    echo "connection successfuly";
}
?>