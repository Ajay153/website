<?php 
session_start();
?>
<?php 
if(isset($_SESSION['username'])){
	session_unset();
	session_destroy();
	echo "<script>location.href='mainpage.php'</script>";
}
else{
	echo "session not ended";
}
?>