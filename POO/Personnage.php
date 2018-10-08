<?php
    class Personnage
    {
        public $vie=100;
        public $atk=20;
        public $nom;
        
        public function __construct($nom)
        {
            $this->nom=$nom;
        }
    }
?>