<?php 
$con=mysqli_connect('localhost','id8989091_ajay123','12345') ;
if(!$con){
echo "not conected to server";
}
if(!mysqli_select_db($con,'id8989091_ajay')){
	echo "database not selected";
}
$name=$_GET['status'].$_GET['fname'];
$username=$_GET['uname'];
$password=$_GET['psw'];
$email=$_GET['email'];
$type=$_GET['account'];
$sql="INSERT INTO register_info (name,username,password,email,type)VALUES('$name','$username','$password','$email','$type')";
if(!mysqli_query($con,$sql))
{
	echo "not inserted";
}
else{
	header("Location:index.php");
}
?>

