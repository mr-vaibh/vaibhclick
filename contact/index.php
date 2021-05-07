<!DOCTYPE html>
<html lang="en">
<head>
  <title>Feedback | VaiBHClick</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body background="..\images\site_home_background.jpg">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="font-size:30px">VaiBHClick</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.html">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Lessons<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="\website projects\vaibhclick.com\programming.html">Programming</a></li>
          <li><a href="#">Windows Tricks</a></li>
		  <li><a href="#">Ethical/White Hat Hacking</a></li>
          <li><a href="#">YouTube Channel</a></li>
        </ul>
      </li>
	  
	  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Download<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="game-download.php">Games</a></li>
          <li><a href="movie-download.php">Movies</a></li>
          <li><a href="dll-download.php">DLL-Files</a></li>
		  <li><a href="#">Operrating System (.iso)</a></li>
		  <li><a href="#">Projects</a></li>
        </ul>
      </li>
      <li><a href="contact/index.html">Contact</a></li>
	  <li><a href="about.html">About Me</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
	<form class="navbar-form navbar-left" action="/action_page.php">
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Search">
    <div class="input-group-btn">
      <button class="btn btn-default" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
  </div>
</form>
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
   <style type="text/css" media="screen">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: helvetica;
		}

		.main{
			width: 500px;
			margin: 20px auto;
			border-radius: 10px;
			border: 5px solid #dc143c;
			border-left: 40px solid #dc143c;
			box-shadow: 1px 2px 10px #555;
		}
		.info{
			width: 100%;
			background-color: #dc143c;
			padding: 7px;
			text-shadow: 1px 1px 1px #222;
			color: #fff;
			font-size: 20px;
		}
		.form-box{
			padding: 20px;
			background-color: #eee;
		}
		label{
			color: navy;
			font-size: 18px;
		}
		.inp,.msg-box{
			width: 100%;
			padding: 10px;
			margin-top: 4px;
			margin-bottom: 5px;
			border-radius: 5px;
			border: 2px solid #dc143c;
			font-weight: bold;
			color: #dc143c;
			border-right: 15px solid #dc143c;
			border-left: 15px solid #dc143c;
			resize: none;
		}
		.msg-box{
			height: 80px;
		}
		.inp:focus,.msg-box:focus{
			outline: none;
			border: 2px solid navy;
			border-right: 15px solid navy;
			border-left: 15px solid navy;
		}
		.sub-btn{
			width: 100%;
			padding: 10px;
			border-radius: 5px;
			margin-top: 5px;
			border: none;
			background: linear-gradient(#dc143c,#800000);
			cursor: pointer;
			color: #fff;
			font-size: 20px;
			text-shadow: 1px 1px 1px #444;
		}
		.sub-btn:hover{
			background: linear-gradient(#800000,#dc143c);
			opacity: 0.8;
			transition: all ease-out 0.2s;
		}
		.sub-btn:focus{
			outline: none;
		}
		@media(max-width: 720px){
			.main{
				width: 90%;
			}
		}
	</style>

	<div class="main">
		<div class="info">Give Your Feedback!</div>
		<form method="post" name="form" class="form-box">
			<label for="name">Name</label><br>
			<input type="text" name="name" class="inp" placeholder="Enter Your Name" required><br>
			<label for="email">Email ID</label><br>
			<input type="email" name="email" class="inp" placeholder="Enter Your Email" required><br>
			<label for="phone">Phone</label><br>
			<input type="tel" name="phone" class="inp" placeholder="Enter Your Phone" required><br>
			<label for="message">Message</label><br>
			<textarea name="msg" class="msg-box" placeholder="Enter Your Message Here..." required></textarea><br>
			<input type="submit" name="submit" value="Send" class="sub-btn">
		</form>
	</div>
</div>

</body>
</html>



<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$msg=$_POST['msg'];

		$to='vaibhtechscript@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Message Sent Successfully! Thank you"." ".$name.", We will contact you shortly! (with LOVE💓)</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>
