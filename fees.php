 <?php 
require("admin.php");
//adjust
	$id=$_SESSION['id'];
	$message="SELECT * FROM messages ";
	$set=mysql_query($message);
	//$result=mysql_fetch_array($set);
	while($row=mysql_fetch_assoc($set)){
		$res[]=$row;
	}
	mysql_free_result($set);
	$num=count($res);
	$i=0;	
	?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title id="title"></title>
 		<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/undefined.css">
	<link rel="stylesheet" href="./css/styles.css">
 </head>
 <body>
我们的统一支出:
<ul class="list-group" style="background-color: #333">
<?php
foreach($res as $mess){
?>
<li class="list-group-item"><?php echo $mess['message']."at".$mess['time']?></li>

<?php
};
 ?>
<?php 
$smoney="SELECT SUM(money) from messages";
$last=mysql_query($smoney);
$money=mysql_fetch_array($last);
?>
<li class="list-group-item">剩余总金额为:<?php echo $money[0] ?>元</li>
 </ul>
 </body>
 </html>
