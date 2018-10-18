<?php
    
	class Connection
	{
		private $host; //server address
	    private $dbname; //db name
	    private $username;	//user name 
	    private $password;	//password
		public $con;
		
		public function __construct($host,$dbname,$username,$password)
		{	
	        try
        	{
				$this->host=$host;
	            $this->dbname=$dbname;
	            $this->username=$username;	
	            $this->password	=$password;
				$this->con=new PDO("mysql:host=$this->host;	dbname=$this->dbname",$this->username,$this->password);
	            echo '<script> alert("Bienvenue cher client"); </script>';			
			}	
            catch(PDOException	$pe)	
	        {
				echo "connexion	a	la	base	a	echouee";
			}
		}
		
		public function getHost()
		{
			return $this->host;
		}
		
		public function setHost($host)
		{
			$this->host=$host;
		}
		
		public function getDbname()
		{
			return $this->dbname;
		}
		
		public function setDbname($dbname)
		{
			$this->dbname=$dbname;
		}
		
		public function getUsername()
		{
			return $this->username;
		}
		
		public function setUsername($username)
		{
			$this->username=$username;
		}
		
		public function getPassword()
		{
			return $this->password;
		}
		
		public function setPassword($password)
		{
			$this->password=$password;
		}
		
	}
	$connection=new Connection('localhost','Test','root','');
	
	$query="insert into etudiant values(null,'Hatem','Aziza')";
	$res=$connection->con->exec($query);
	if($res!=0)
	{
		echo 'Insertion effectué avec succes';
	}
	else
	{
		echo "Erreur au niveau de l'insertion";
	}
?>

