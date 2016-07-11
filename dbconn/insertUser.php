<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "tareas";

	$hacker = "humberto";
	$nomtar = "email@eqw";
	$cattar = "12333313x";
	$comentar = "bien";

	$con=mysql_connect($host,$user,$pass)or die("problemas al conectar al servidor");
  
 	 mysql_select_db($db,$con)or die("problemas al conectar la bd");




	if(!$con){
		die("Fallo".mysql_error());
	}
	



	$sql = "INSERT INTO usuarios (hacker, nomtar, cattar, comentarios)
			VALUES ('".$hacker."','".$nomtar."','".$cattar."','".$comentar."')";
	$result = mysql_query($sql);

	if(!$result){
		die("LOL".mysql_error());
	}else{
		echo "cool";
	}

	
?>