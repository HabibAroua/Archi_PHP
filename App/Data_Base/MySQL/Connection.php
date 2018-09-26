<?php
    $host='localhost'; //server address
	$dbname='airline'; //db name
	$username='root';	//user name 
	$password	='';	//password
	try
	{	
        $con=new PDO("mysql:host=$host;	dbname=$dbname",$username,$password);
	    echo '<script> alert("Bienvenue cher client"); </script>';			
	}	
    catch(PDOException	$pe)	
	{							
		echo "connexion	a	la	base	a	echouee";
	}
?>

