<?php session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title></title>

<style type="text/css">
	.mdiv1{
			width:20%;
			height: 60px;
			background-color:url('bg.jpg');
			float: left;
}
.mdiv2{
		width:15%;
		height: 60px;
		background-color:url('bg.jpg');
		float: right;
}
.mdiv3{
	width:65%;
	height: 60px;
	background-color:url('bg.jpg');
	float: left;
	display: inline-block;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:url('bg.jpg');
    height: 100%;
   background-color: inherit;
}

li {
    float:left;
    width: 250px;
    font-size: 20px;


}

li a, .dropbtn {
    display: inline-block;
    color: darkgreen;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    color: inherit;
    
}

li:hover, .dropdown:hover .dropbtn {
    background-color:rgb(140, 255, 42);

}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;

}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
.button{
	width: 125px;
	height: 40px;
	background-color: #ff0000;
	color: white;
	font-size: 17px;
}
.button:hover{
	background-color:pink;
}
</style>
</head>
<body>
<div class="mdiv1"><div style="color: darkgreen;font-size:20px; ">
   <?php 
   echo "<h3>WELCOME</h3><b style='font-size:25px'><i>".$_SESSION['username']."</i></b>";
   ?>
</div></div>
<div class="mdiv3"><ul>
  <li><a href="secondpage.php"><i class="fa fa-home" style="font-size:15px;"></i>Home</a></li>
  <li><a href="#news">Help & Support</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Your Profile&nbsp;&nbsp;<i class="fa fa-sort-desc" style="font-size:15px;height: 100%;"></i></a>
    <div class="dropdown-content">
      <a href="#">Change user Info</a>
    </div>
  </li>
</ul></div>
<div class="mdiv2"><div style="padding: 10px;margin-left: 30px;"><a href="sessiondestroy.php"><input type="submit" class="button" value="Sign out"></a></div></div>





</body>
</html>