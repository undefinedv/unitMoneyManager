<?php
require("admin.php");
$username=$_POST['username'];
$password=md5($_POST['password']);
$sql="SELECT * FROM login WHERE user='$username'";
$set=mysql_query($sql);
$result=mysql_fetch_array($set);
if($result){
	echo "<script>alert('The username is already used!');</script>";
}
else{
	$register="INSERT login(user,password) VALUES('$username','$password')";
$set=mysql_query($register);
$result=mysql_fetch_array($set);
echo "register succeed!";
sleep(3);
header("Location:login.html");
}
?>
