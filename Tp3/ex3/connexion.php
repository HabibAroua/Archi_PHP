<?php

    $host='localhost';
	$dbname='test';
	$username='root';	
	$password	='';	
	try
	{	
        $con=new PDO("mysql:host=$host;	dbname=$dbname",$username,$password);		
	}	
    catch(PDOException	$pe)	
	{							
		echo "connexion	a	la	base	a	echouee";
	}
	
	//$lastId=mysqli_insert_id($conn);
?>