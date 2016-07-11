<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "tareas";

	$con=mysql_connect($host,$user,$pass)or die("problemas al conectar al servidor");
  
 	 mysql_select_db($db,$con)or die("problemas al conectar la bd");




	if(!$con){
		die("Fallo".mysql_error());
	}
	


	$sql = "SELECT * FROM usuarios";
	$result = mysql_query($sql);


    


	
		while ($row = mysql_fetch_array($result)) {
			echo $row['id']."|".$row['hacker'].";";
		}
	
?>