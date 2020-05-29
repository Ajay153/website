<?php 
$connect=mysqli_connect("localhost","root","123456","register");
$query="SELECT * FROM branch_list ORDER BY country ASC";
$result=mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
	#result{
		position: absolute;
		width: 100%;
		max-width: 870px;
		cursor: pointer;
		overflow-y: auto;
		max-height: 400px;
		box-sizing: border-box;
		z-index: 1001;
	}
	.link-class:hover{
		background-color: #f1f1f1f1;
	}
</style>
</head>
<body>
<?php 
include 'top.php';
?>
<div style="width: 100%;height: 200px;background-color: url(bg.jpg);"><div style="background-color:url(bg.jpg);padding: 60px 40px;padding-left:70px;width:300px;font-size: 40px;text-shadow: 5px 2px lightblue">CONTACT</div></div>
<br><br>
<div class="container" style="width: 900px;">
	<h3 align="center">Now you can know where our branches are all over the world from your International Bank's Website</h3>
<h2 align="center" style="color: red;">SEARCH THE BRANCH</h2><br>
<div class="row">
	<div class="col-md-4">
		<select name="branch_list" id="branch_list" class="form-control">
			<option value="">Select Branch</option>
			<?php 
			while($row= mysqli_fetch_array($result)) {
				echo'<option value="'.$row["id"].'">'.$row["country"].'</option>';
			}
			?>
		</select>
	</div>
	<div class="col-md-4">
		<button type="button" name="SEARCH" id="SEARCH" class="btn-btn-info">SEARCH </button>
	</div>
</div><br>
<div class="table-responsive" id="branch_details" style="display: none;">
<table class="table table-bordered" style="border: 2px solid black">
	<tr>
		<td width="10%" align="right" style="border: 2px solid black"><b>Country</b></td>
		<td width="90%" style="border: 2px solid black"><span id="branch_country"></span></td>
	</tr>

	<tr>
		<td width="10%" align="right" style="border: 2px solid black"><b>City</b></td>
		<td width="90%" style="border: 2px solid black"><span id="branch_city"></span></td>
	</tr>

	<tr>
		<td width="10%" align="right" style="border: 2px solid black"><b>Address</b></td>
		<td width="90%" style="border: 2px solid black"><span id="branch_address"></span></td>
	</tr>
	
	<tr>
		<td width="10%" align="right" style="border: 2px solid black"><b>Contact NO</b></td>
		<td width="90%" style="border: 2px solid black"><span id="branch_contactno"></span></td>
	</tr>

	<tr>
		<td width="10%" align="right" style="border: 2px solid black"><b>Fax NO</b></td>
		<td width="90%" style="border: 2px solid black"><span id="branch_faxno"></span></td>
	</tr>
</table>

</div>
</div>
</body>
</html>
<script>
	$(document).ready(function(){
		$('#SEARCH').click(function(){
		var id=$('#branch_list').val();
		if(id !=''){
			$.ajax({
				url:"fetch.php",
				method:"POST",
				data:{id:id},
				dataType:"JSON",
				success:function(data){
					$('#branch_details').css("display","block");
					$('#branch_country').text(data.country);
					$('#branch_city').text(data.city);
					$('#branch_address').text(data.address);
					$('#branch_contactno').text(data.contact);
					$('#branch_faxno').text(data.fax);
				}
			})
		}
		else{
			alert("please select branch");
			$('#branch_details').css("display","none");
		}
		});
	});
</script>