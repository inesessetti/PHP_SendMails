<?php
include('connection.php');
$uname= $_POST['uname'];
$psw = $_POST['psw'];

$uname= stripcslashes($uname);
$psw = stripcslashes($psw);
$uname= mysqli_real_escape_string($con, $uname);
$psw = mysqli_real_escape_string($con, $psw);

$sql = "select *from login where uname = '$uname' and psw = '$psw'";  
$result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  
  
if($count == 1){  
  //  echo "<h1><center> Login successful </center></h1>";  
  header("Location: http://localhost/email/welcome.html");

}  
else{  
    echo "<h1> Login failed. Invalid username or password.</h1>";  
}     
?>  