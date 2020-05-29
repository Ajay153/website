<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		.mcontainer1{
  width: 47%;
  height: 350px;
  background-color:url("https://firstfinancialtest.files.wordpress.com/2015/02/e-banking.jpg");
  float: left;
  margin: 15px;

}
.finput[type=text], .finput[type=password],.finput[type=email] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
.fbutton {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.fbutton:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.fcancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: red;

}

/* Center the image and position the close button */
.fimgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius:50%;
}

.fcontainer {
    padding: 10px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.fmodal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.fmodal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 40%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.fclose {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.fclose:hover,
.fclose:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .fcancelbtn {
       width: 100%;
    }
}
td{
    width:500px;
    height: 100px;
}
.buttonl{
    padding:10px;
    width: 200px;
    height: 50px;
    margin-left: 50px;
    border-radius: 10px;
    background-color: blue;
    font-size: 15px;
}
footer {
    background-color: #777;
    padding: 10px;
    text-align: center;
    color: white;
}
@media only screen and (min-width: 600px) {
    .col-s-1 {width: 8.33%;}
    .col-s-2 {width: 16.66%;}
    .col-s-3 {width: 25%;}
    .col-s-4 {width: 33.33%;}
    .col-s-5 {width: 41.66%;}
    .col-s-6 {width: 50%;}
    .col-s-7 {width: 58.33%;}
    .col-s-8 {width: 66.66%;}
    .col-s-9 {width: 75%;}
    .col-s-10 {width: 83.33%;}
    .col-s-11 {width: 91.66%;}
    .col-s-12 {width: 100%;}
}
	</style>
</head>
<body>
<?php 
include'top.php';
?>
<div class="mcontainer1"><div style="margin-top: 200px;font-size: 20px"><h1 style="text-shadow:2px 2px lightgray"><b><i>INTERNATIONAL BANK</i></b></h1><p style="text-shadow:2px 2px lightgray"><b><i>WE OFFER BEST ONLINE TRANSACTIONS TO YOUR ACCOUNT</i></b></p></div></div>
<div class="mcontainer1"><div style="text-align: center;font-size: 25px;"><h1>Not Registered Yet?</h1><p>Make most of your day by banking online with INTERNATIONAL Bank's online banking</p><button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">REGISTER</button>
	<div id="id02" class="fmodal">
  
  <form class="fmodal-content animate" action="register.php" method="get">
    <div class="fimgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="fclose" title="Close Modal">&times;</span>
      <img src="int.jpg" alt="Avatar" class="avatar">
    </div>
<div class="fcontainer">
      <label><b>Enter your full name</b></label>
      <select name="status" style="font-size: 20px">
    <option value="Mr.">Mr.</option>
    <option value="Mrs.">Mrs.</option>
    <option value="Ms.">Ms.</option>
  </select>
  <input class="finput" type="text" placeholder="Enter your full name" name="fname" required>
      <label><b>Username</b></label>
      <input class="finput" type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input class="finput" type="password" placeholder="Enter Password" name="psw" required>
        <label><b> Confirm Password</b></label>
      <input class="finput"type="password" placeholder="Enter Password" name="psw" required>
      <label><b>Enter your email</b></label> 
      <input class="finput"type="email" placeholder="Enter email" name="email" required>
      <label>Type of Account</label>&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" name="account" value="sb" checked> Savings
  <input class="finput" type="radio" name="account" value="cb"> Current<br><br>
      <button type="submit">Sign Up</button>
      
    </div>

    <div class="fcontainer" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="fcancelbtn">Cancel</button>
    </div>
  </form>
</div></div></div>
<table style="margin-left: 50px">
        <tr> 
            <td> <button class="buttonl" type="button"><i class="fa fa-expeditedssl" style="font-size:20px;color:white"></i><b><i>Safe</i></b> </button></td>
            <td> <button class="buttonl" type="button"><i class="fa fa-wifi" style="font-size:20px;color:white"></i><b><i>Anytime,Anywhere</i></b> </button></td>
            <td> <button class="buttonl" type="button"><i class="fa fa-laptop" style="font-size:20px;color:white"></i><b><i>No More Waiting</i></b> </button></td>
            </tr>
        </table>
 <div style="clear: both;"><footer>
  <b><i>  &#169;2023 by The Axis Group <i class="fa fa-facebook-official" style="padding: 10px;font-size: 25px"></i><i class="fa fa-google"style="padding: 10px;font-size: 25px"></i><i class="fa fa-instagram"style="padding: 10px;font-size: 25px"></i></i></b>
</footer></div>
</body>
</html>