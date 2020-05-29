
<?php
$con1=mysqli_connect('localhost','id8989091_ajay123','12345') ;
if(!$con1){
echo "not conected to server";
}
if(!mysqli_select_db($con1,'register')){
	echo "database not selected";
}
$username1=isset($_GET['uname']);
$sql1="SELECT name FROM register_info where username='$username1' ";
$result1=mysqli_query($con1,$sql1) or die('failed to insert query');
$row1=mysqli_fetch_array($result1);
echo $row1['name'];
?>