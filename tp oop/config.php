<?php
    class Config
    {
        public function connexion()
        {
            try
            {
                $conn =new PDO('mysql:host=127.0.0.1; dbname=Test','root','');
                return $conn;
            }
            catch(PDOException	$pe)	
	        {
				echo "connexion	a	la	base	a	echouee";
			}
        }
    }
?>