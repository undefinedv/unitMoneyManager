<?php
require("admin.php");
$user=$_SESSION['login'];
if($user==NULL){
	echo "Please login first";
	echo "<script>location.href='login.html'</script>";
}
else{
	echo "Welcome,".$user."!";
	header("Location:user.php");
}
?>
