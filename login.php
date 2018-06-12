<?php
require("admin.php");


//connect to the sqlserver;
$username=addslashes($_POST['username']);
$password=md5($_POST['password']);
$sql="SELECT * FROM login WHERE user='$username' and password='$password'";
$set=mysql_query($sql);
$result=mysql_fetch_array($set);
//print_r($result);
if($result){
	$_SESSION['login']=$username;
	$check="SELECT id FROM login WHERE user='$username'";
	$cset=mysql_query($check);
	$cresult=mysql_fetch_array($cset);
	$id=$cresult['id'];
	$_SESSION['id']=$id;
	echo "$username login success!";
	echo "<script>alert('welcome!');location.href='user.php'</script>";
}
else{
 echo "<script>alert('something wrong');location.href='login.html'</script>";

 }
?>
