<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
	.mdiv1{
		width:20%;
		height: 80px;
		background-color: red;
		float: left;

	}
	.mdiv2{
			width:65%;
		height: 80px;
		background-color:blue;
		display: inline-block;

	}
	.mdiv3{
			width:15%;
		height: 80px;
		background-color:yellow;
		float: right;
	}
</style>
</head>
<body>
<div class="mdiv1"> <?php 
    session_start();
    echo "<h4>WELCOME</h4>";
    echo "<p style='font-size:20px'>";
    echo $_SESSION['username'];
    echo "</p>";
    ?></div>
<div class="mdiv2">hello world</div>
<div class="mdiv3">hello world</div>
</body>
</html>