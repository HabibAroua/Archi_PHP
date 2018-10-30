<?php
    require('Personne.php');
    
    class Etudiant extends Personne
    {
        public $classe;
        
        public function __construct($a,$b,$c,$d)
        {
            parent::__construct($a,$b,$c);
            $this->classe=$d;
        }
    }


?>