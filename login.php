<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login | VaiBHClick</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	body{background:"C:\xampp\htdocs\VaiBHTech_HR\images\landscape-wallpaper-hd-17.jpg"}
<!--LOGIN START-->
	<!--NOW GLASS EFFECT-->
    body{
	background-size: cover;
	}
	.aa{
	   width:300px;
	   height:280px;
	   background-color: rgba(0,0,0,0.2);
	   margin:0 auto;
	   margin-top:40px;
	   padding-top: 10px;
	   padding-left:50px;
	   border-radius: 15px;
	   -webkit-border-radius:15px;
	   -o-border-radius:15px;
	   -moz-border-radius:15px;
	   color:white;
	   font-weight:bolder;
	   box-shadow: inset -4px -4px rgba(0,0,0,0.5);
	   font-size: 20px;
	}
	
	<!--NOW LOG-IN HERE-->

.aa input[type="email"]{
    width: 200px;
	height: 30px;
	border: 0;
	border-radius: 5px;
	-webkit-border-radius:5px;
	-o-border-radius:5px;
	-moz-border-radius:5px;
	padding-left: 5px;
}
	
.aa input[type="password"]{
    width: 204px;
	height: 33px;
	border: 0;
	border-radius: 3px;
	-webkit-border-radius:5px;
	-o-border-radius:5px;
	-moz-border-radius:5px;
	padding-left: 11px;
}

.aa input[type="submit"]{
    width: 100px;
	height: 35px;
	border: 0;
	border-radius: 5px;
	-webkit-border-radius:5px;
	-o-border-radius:5px;
	-moz-border-radius:5px;
	background-color: skyblue;
	font-weight: bolder;
}
</style>
<body background="images\site_home_background.jpg">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" style="font-size:30px" href="#">VaiBHClick</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.html">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Lessons<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="programming.html">Programming</a></li>
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
      <li><a href="#">Contact</a></li>
	  <li><a href="#">About Me</a></li>
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
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
<br><br><br>
  <form class="form-horizontal" action="/action_page.php">
  <div class="aa">
  <br>
    <div class="form-group">
      <label>Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label>Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" style="margin-left:15px ; font-weight:bolder ; background-color: skyblue" class="btn btn-default">LOGIN</button>
      </div>
    </div>
	</div>
  </form>
</div>

</body>
</html>
