<?php
session_start();
$con=mysqli_connect('localhost','id8989091_ajay123','12345') ;
if(!$con){
echo "not conected to server";
}
if(!mysqli_select_db($con,'id8989091_ajay')){
	echo "database not selected";
}
if (isset($_GET['uname'])&&isset($_GET['psw'])) {
	$username=$_GET['uname'];
	$password=$_GET['psw'];
}
else{
	echo "value not inserted";
}

$sql="SELECT * from register_info where username='$username'and password='$password'";
$result=mysqli_query($con,$sql) or die("failed to insert query");
$row=mysqli_fetch_array($result);
if($row['username']==$username &&$row['password']==$password)
{
	echo "<script>location.href='secondpage.php'</script>";
	
}
else{
	echo "failed to login";
}
$sql1="SELECT name FROM register_info where username='$username'";
$result1=mysqli_query($con,$sql1) or die ("failed to insert query");
$row1=mysqli_fetch_array($result1);
$_SESSION['username']=$row1['name'];
echo "session created";
echo $_SESSION['username'];

?>