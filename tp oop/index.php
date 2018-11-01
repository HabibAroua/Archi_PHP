<?php
    include('Universite.php');
    
    $u=new Universite('Sesame');
    //$e=new Etudiant('Anas','Najjar',25,'ING');
    $c=new Config();
    //$u->ajoutEtudant($e,$c->connexion());
    $tab=$u->afficheEtudiant($c->connexion());
    var_dump($tab);
  /*
    for($i=0 ; $i<count($tab) ; $i++)
    {
        echo "nom : $tab[$i]['nom'] , prenom : $tab[$i]['prenom'] , age $tab[$i]['age'] , classe : $tab[$i]['classe']";
    }
*/
  
?>