<?php 
 
 if (isset($_POST['update']))
 {
 	$id=$_GET['id'];
 	$name=$_POST['name'];
 	$age=$_POST['age'];
 	$city=$_POST['city'];

$query="update table1 set name='".$name."',age='".$age."',city='".$city."';
$result=mysqli_query($link,$query);

}

 



?>