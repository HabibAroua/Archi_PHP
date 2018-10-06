<?php
	class Connection
	{
		private $host; //server address
	    private $dbname; //db name
	    private $username;	//user name 
	    private $password;	//password
		
		public function __construct($host,$dbname,$username,$password)
		{
			$this->host=$host;
			$this->dbname=$dbname ;
			$this->username=$username ;
			$this->password= $password;
		}
		
		public function connect()
		{
		    try
		    {
				$con=new PDO("mysql:host=$this->host;	dbname=$this->dbname",$this->username,$this->password);
	            echo '<script> alert("Bienvenue cher client"); </script>';
				return true;
	        }	
            catch(PDOException	$pe)	
	        {
				return false;
				echo "connexion	a	la	base	a	echouee";
	        }	
		}
	    
	}
?>

