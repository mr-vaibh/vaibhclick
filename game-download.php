<!DOCTYPE html>
<html lang="en">
<head>
  <title>Game Download | VaiBHClick</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body background="images\site_home_background.jpg">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"  style="font-size:30px">VaiBHClick</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.html">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Lessons<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="programming.html">Programming</a></li>
          <li><a href="#">Windows Tricks</a></li>
		  <li><a href="#">Ethical/White Hat Hacking</a></li>
          <li><a href="#">YouTube Channel</a></li>
        </ul>
      </li>
	  
	  <li class="dropdown active"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Download<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li class="active"><a href="game-download.php">Games</a></li>
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
             <input type="text" class="form-control" style="font-size: 15px ; font-family:arial ; border-radius: 5px 0px 0px 5px;" placeholder="Search">
         <div class="input-group-btn">
             <button class="btn btn-default" style="border: 1px solid #0076A3;" type="submit">
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
  <!--CODE TO GIVE BOX AND BUTTON GRAPHICS-->
   
   <style type="text/css">
	 
	 .main{
		 max-width: 500px;
		 margin: auto;
		 margin-top: 15px;
	 }
	 
	 input[type="text"]{
	     width: 90%;
		 padding: 6px;
		 font-family: Alaska, Times, serif;
		 font-size: 17px;
		 border: 1px solid #0076A3;
		 border-right: 0px;
		 border-radius: 10px 0px 0px 10px;
		 font-style: italics;
	 }
	 
	 input[type="submit"]{
	     position: absolute;
		 padding: 6px;
		 width: 8%;
		 font-family: Alaska, Times, serif;
		 font-size: 17px;
		 text-shadow: 0px 0px 8px #000;
		 cursor: pointer;
		 text-align: center;
		 color: #FFF;
		 border-radius: 0px 10px 10px 0px;
		 border-right: 0px;
		 background: linear gradient(#00ADEE,#0078A5);
		 border: 1px solid #0076A3;
	 }
	 
	 input[type="submit"]:hover{
		 background: linear gradient(#0095CC,#00678E);
		 transition: all 0.40s;
		 border: linear gradient(#0095CC,#00678E);
	 }
	 
	 input[type="text"]:focus, input[type="submit"]:focus{
	     outline: none;
	 }
	 
   </style>
   
   <!--END CODE TOR GIVE BOX AND BUTTON GRAPHICS-->
   
   <div class="main">
     <form action="#" >
	     <label style="color:white;">Search for any GAME -></label><input type="text" name="find" placeholder="Search..">
		 <input type="submit" name="submit" value="Search" >
	 </form>
   </div>
   <br><br>
    <p style="margin-left:350px ; color:yellow ; font-size:30px">Nothing has been searched so far !</p><br>
	<img src="images\nothing-found-search.png" style="margin-left:450px" width="350" height="350">
</div>
    
</body>
</html>
