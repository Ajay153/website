<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
	.p{
		font-size: 30px;
		color: white;
		margin-left: 50px;
	}
	.pointer {cursor: pointer;}
	a{
		font-size: 25px;
		color: darkgreen;
}
		body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=number], input[type=password],input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    padding: inherit;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
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
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 30%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
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
    .cancelbtn {
       width: 100%;
    }

</style>
</head>
<body>
<?php
include 'menulist.php';
 ?>
 <br><div style="background-color:darkgreen;clear: both;height: 100px;padding: 10px;"><b><i><p class="p">Apply for LOAN</p></i></b></div>
<a class="pointer" onclick="document.getElementById('id01').style.display='block'">Click here to Apply for LOAN</a><br><br><br>
<div style="width: 300px;height: 350px;"><center><b style="font-size: 25px;color: darkgreen"><i>Terms and Condition</i></b></center>
<article style="font-size: 20px;"><h4>The International Bank gives Loan at very less rate of interest</h4><br>
-->If your Amount is less than Rs 1000000/- then we offer it at Rate of Interest of 3% p.c.p.a<br>
-->If your Amount is more than Rs 1000000/- then we offer it at Rate of Interest of 5% p.c.p.a<br>
</article>
</div>
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="get" name="myform">

    <div class="container">
      <label for="uname"><b>Enter Username</b></label>
      <input type="text" placeholder="Enter username" name="uname" required>
      <label for="uname"><b>Insert the Amount of Loan</b></label>
      <input type="number" placeholder="Enter Amount" name="amount">

      <label for="psw"><b>Enter The Name of Years</b></label>
      <input type="number" placeholder="Enter no.of years" name="years">
      <button type="button" onclick="myfunction();return false">Check EMI</button>
      <p id="demo"></p>
      <button type="submit">Apply</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>