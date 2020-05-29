<?php 
if (isset($_POST["id"])) {
	$connect=mysqli_connect("localhost","id8989091_ajay123","12345","id8989091_ajay");
	$query="SELECT * FROM branch_list WHERE id='".$_POST["id"]."'";
	$result=mysqli_query($connect,$query);
	while($row=mysqli_fetch_array($result))
	{
		$data["country"]=$row["country"];
		$data["city"]=$row["city"];
		$data["address"]=$row["address"];
		$data["contact"]=$row["contact_no"];
		$data["fax"]=$row["fax_no"];
	}
	echo json_encode($data);
}
?>