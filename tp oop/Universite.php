<?php
    require('Etudiant.php');
    require_once('config.php');
    
    class Universite
    {
        public $conn;
        public $nom;
        
        public function __construct($a)
        {
            $c=new Config();
            $this->conn=$c->connexion();
            $this->nom=$a;
        }
        
        public function ajoutEtudant($etudiant,$conn)
        {
            $req="insert into etudiant values(null,'$etudiant->nom','$etudiant->prenom',$etudiant->age,'$etudiant->classe')";
            $conn->exec($req);
            $conn=null;
        }
        
        public function modifierEtudant()
        {
            
        }
        
        public function supprimerEtudiant()
        {
            
        }
    }
?>