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
        
        public function modifierEtudiant()
        {
            
        }
        
        public function supprimerEtudiant()
        {
            
        }
        
        public function afficheEtudiant($conn)
        {
            $req="select * from etudiant";
            $res=$conn->query($req);
            $tab=array();
            $i=0;
            while($ligne=$res->fetch())
            {
                $tab[$i]=new Etudiant($ligne['nom'],$ligne['prenom'],$ligne['age'],$ligne['classe']);
                $i++;
            }
            return $tab;
        }
    }
    
?>