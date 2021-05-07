<!DOCTYPE html>
<html lang="en">
<style type="text/css">
#search{
	width: 1100px;
	padding: 5px;
	border: 1px solid #607d8b;
	border-right: none;
	margin: 50px;

	-webkit-border-top-left-radius: 10px;
	-webkit-border-bottom-left-radius: 10px;
	-moz-border-radius-topleft: 10px;
	-moz-border-radius-bottomleft: 10px;
	border-top-left-radius: 10px;
	border-bottom-left-radius: 10px;
}

#submit{

	padding: 5px;
	background: #607d8b;
	border: 1px solid #607d8b;
	color: white;
	cursor: pointer;
	border-left: none;
	margin: -54px;
	
	-webkit-border-top-right-radius: 10px;
	-webkit-border-bottom-right-radius: 10px;
	-moz-border-radius-topright: 10px;
	-moz-border-radius-bottomright: 10px;
	border-top-right-radius: 10px;
	border-bottom-right-radius: 10px;
}

#submit:hover{
	background: #333;
	transition: all 0.20s;
}
</style>
<head>
     <meta charset="UTF-8">
	 <title>QuickAsk</title>
	 <link rel="icon" type="image/jpg" href="title_icon.jpg"/>
</head>
<body>
   <h1 align="center" style="font-size:100px">QuickAsk</h1>
   <form action="result.php" method="get">
      <input type="text" name="query" id="search" align="center" style="font-size:50px" placeholder="Search..">
	  <input type="submit" name="submit" id="submit" align="center" style="font-size:50px" value="Search">
	  
   </form>
</body>
</html>