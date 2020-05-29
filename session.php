<?php 
session_start();
?>
<?php 

$_SESSION['username']=$_GET['uname'];
$_SESSION['password']=$_GET['psw'];

?>