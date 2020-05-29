
<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title></title>
	<style type="text/css">
	body{
		background-image: url('bg.jpg');
	}
		.div1{
			width: 388px;
			height: 100px;
			background-color:darkgreen;
			float: left;
		}
		.div2{
			width: 945px;
			height: 100px;
			background-color:darkgreen;
			float: right;
		}
		ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: darkgreen;


}

li {
    float: left;


 
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;

}

li a:hover, .dropdown:hover .dropbtn {
    background-color: rgb(140, 255, 42);

    
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
    color:white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
		.div3{
	width: 350px;
	height: 600px;
	
	float: left;
	margin-left: 75px;
	margin-top: 75px;
	padding: 10px;
}
.ibutton{
	width: 150px;
	height: 45px;
	background-color: #b3b3ff;
}	
.obutton{
	width: 150px;
	height: 45px;
	background-color: lightgreen;
}
.div4{
	width: 600px;
	height: 500px;
	float:right; 
}
</style>

</head>
<body>
<div class="div1"><img style="width: 70%;height: 75%;padding: 10px"src="int.jpg"></div>
<div class="div2"><div style="float: left; padding: 30px;"><ul><div class="dropdown">
    <div class="dropbtn" style="color: white;font-size: 20px;">Our Products And Services&nbsp;&nbsp;<i class="fa fa-sort-desc" style="font-size:20px"></i></div>
    <div class="dropdown-content">
      <a href="credit card.php">Apply for Credit Card</a>
      <a href="debit card.php">Apply for Debit Card</a>
      <a href="#">LOAN</a>
      <a href="">Insurance</a>
    </div>
  </div></ul></div><div style="float: right;padding: 30px;color: white"><b style="font-size: 20px;">Safe and secure</b>&nbsp;<i class="fa fa-expeditedssl" style="font-size:20px;color:white"></i><br><i>internet banking guaranteed</i></div></div>
<?php
include 'menulist.php'; ?>
<div class="div3"><center><div style="width: 300px;height: 150px;background-color: #000080"><i class="fa fa-envelope-o" style="font-size:36px;color: white;"></i><br><br><b style="font-size: 20px;color: white;">You Have 2 New Messages</b><br><button type=button class="ibutton">View Inbox</button></div></center>


<center><br><br><div style="width: 300px;height: 50px;background-color:white;border:2px solid black"><b style="font-size: 25px;color:black"><i>Get free Add Ons</i></b></div></center>


<center><br><div style="width: 300px;height: 300px;background-color:pink"><b><i>You Have Earned Cashback --</i></b><p style="font-size: 50px;">Rs 200/-</p><i class="fa fa-cc-visa" style="font-size:50px;color: blue;float: left"></i><i class="fa fa-amazon" style="font-size:50px"></i><i class="fa fa-cc-paypal" style="font-size:36px;color: green;float: right;"></i><button type=button class="obutton">View Offers</button></div></center>
</div>
<div class="div4"><div style="padding: 20px;"><div style="width: 45%;height: 30px;float: left;padding: 10px;border:2px solid gray"><a style="text-decoration: none;color: darkgreen;font-size: 20px;"href="pay.php"><b>Make a Quick transfer</b></a></div><div style="width: 45%;height: 30px;float: right;padding: 10px;border:2px solid gray"><a style="text-decoration: none;color: darkgreen;font-size: 20px;"href="receipt.php"><b>Pay An Existing Receipt</b></a></div></div>
<br><br><br><br>

<div style="width: 550px;height: 300px;background-color:lightgray;margin-left: 30px;"><p style="font-size: 45px;">Rs.10000</p>
<div style="width: 90%;height: 30px;padding: 20px;border-top: 2px solid gray"><a style="font-size: 20px;"href="#">View Statement</a></div>
<div style="width: 90%;height: 30px;padding: 20px;border-top: 2px solid gray"><a style="font-size: 20px;"href="#">Make Deposit</a></div>
</div>
</div>
</body>
</html>