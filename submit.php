<?php
require("admin.php");
$message=addslashes($_POST['message']);
$money=addslashes($_POST['money']);
$user=$_SESSION['login'];
if($user==NULL){
	echo "Please login first";
	echo "<script>location.href='login.html'</script>";
}
//
$message=$_POST['message'];
$sql="INSERT messages(message,money) VALUES('$message','$money')";
$set=mysql_query($sql);
if($set){
	echo "success!";
	header("Location:user.php");
}
else{
	echo $message."<br/>";
	echo "something wrong";
}
?>

