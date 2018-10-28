<?php
    class Clinet
    {
        private $login;
        private $password;
        
        public function __construct($login,$password)
        {
            $this->login=$login;
            $this->password=$password;
        }
        
        public function getLogin()
        {
            return $this->login=$login;
        }
        
        public function getPassword()
        {
            return $this->password;
        }
        
        public function setLogin($login)
        {
            $this->login=$login;
        }
        
        public function setPassword($password)
        {
            $this->password=$password;
        }
        
        public function afficher()
        {
            return "login :".$this->login." password ".$this->password;
        }
    }
    
    $c1=new Clinet('Manel','azerty');
    $c2=new Clinet('Imen','azerty');
    
    echo 'Les caractéristique du client 1 '.$c1->afficher().'<br> ';
    echo 'Les caractéristique du client 2 '.$c2->afficher();
    


?>