<?php 	session_start() ;
	require 'includes/db.php'; ;

	if(isset($_POST['Login'])){
		$username = $_POST['username'] ;
		$password = $_POST['password'] ;

		$q="SELECT * FROM `user` where `username`=$username and `password`=$password.";
		$r = mysqli_query($con, $q) ;
		if(mysqli_num_rows($r) > 0){

			$_SESSION['username'] = $username;
			header("location:index.php") ;
		}else {
			echo 'Password or Username do not match' ;
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: times new roman;  background-color: grey;margin-left: 15em;}
* {box-sizing: border-box;}
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

.container {
  padding: 16px;
}

span.psw {
  float: right;
  width: 200px;
  padding-top: 16px;
}

/* The Moda.l (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 50%; /* Full width */
  height: 200%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid blue;
  width: 100%; /* Could be more or less, depending on screen size */
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
.do{
	 font-family: serif;
	 font-size: 15px;
	 font-style: oblique;
	 width: 400px;
     height: 24px;
 }/*input width*/


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
} /* login */

.kalolo{
	font-size: 27px;
	font-variant: inherit;
	font-style: oblique;
}

.button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: blue}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
</head>
<body>
	<div class="kalolo">
      <p><a href="index.html">Home</a></p>
</div>
	<h2>Stock Checking System</h2>
<p>If you are ready registered on our system please click Login button below to start login and start working on our system..<br> 
   Use the Email you registered with your password to Login as Admin to visit stock checking page.</p>
  <button onclick="document.getElementById('id01').style.display='block'" class="button" style="width:auto; font-family: serif; font-style: oblique;
 font-size: 15px;">Login as Admin</button>


<div id="id01" class="modal">
  
  <form class="modal-content animate" method="POST"  action="login.php">
    <div class="container">
      <label for="uname"><b>Username</b></label><br>
      <input type="text"  class="do" placeholder="Enter Username" name="uname" required><br><br>

      <label for="psw"><b>Password</b></label><br>
      <input type="password" class="do" placeholder="Enter Password" name="psw" required><br><br>
        
      <button type="submit" class="button" style="font-family: serif; font-style: oblique;
 font-size: 15px;">Login</button><br><br>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me</input>
      </label>
    </div>

    <div class="container" style="background-color:yellow">
      <button type="button"  class="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>


</div>
  <!--<p>If you are third party to your company or business please LOGIN button below dont forget customer ID given to your adminstrator at the first Login.</p>

  <button onclick="document.getElementById('id01').style.display='block'" class="button" style="width:auto; font-family: serif; font-style: oblique;
 font-size: 15px;">Login as User</button>


<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="container">
      <label for="uname"><b>Username</b></label><br>
      <input type="text"  class="do" placeholder="Enter Username" name="uname" required><br><br>

      <label for="psw"><b>Password</b></label><br>
      <input type="password" class="do" placeholder="Enter Password" name="psw" required><br><br>

       <label for="psw"><b>Customer ID</b></label><br>
      <input type="password" class="do" placeholder="Enter customer ID" name="psw" required><br><br>
        
      <button type="submit" class="button" style="font-family: serif; font-style: oblique;
 font-size: 15px;">Login</button><br><br>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me</input>
      </label>
    </div>

    <div class="container" style="background-color:brown">
      <button type="button"  class="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>-->
  </form>
</div>


</body>
</html>