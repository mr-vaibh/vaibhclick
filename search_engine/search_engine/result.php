<?php

    $search = $_GET['query'];
	
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("searchengine");
	
	$query = mysql_query("SELECT * FROM result WHERE title LIKE '%".$search."%'");
	
	if (mysql_num_rows($query) >= 1) {
		
		while ($a = mysql_fetch_array($query)) {
			echo "<a href='".$a['url']."'>".$a['title']."</a><p>".$a['description']."</p><hr/>";
		}
		
	}else {
		echo "No result found" ;
	}
?>