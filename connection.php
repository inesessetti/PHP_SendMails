<?php
$host= "localhost";
$uname="root";
$psw='';
$db_name="java";

$con = mysqli_connect($host,$uname,$psw,$db_name);
if(mysqli_connect_errno())
{
    die("Failed to connect with MySQL: ".mysqli_connect_error());
}
?>