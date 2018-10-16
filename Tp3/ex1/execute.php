<?php
    include_once('connexion.inc.php');
    if((isset($_POST['nom'])) && (isset($_POST['prenom'])))
    {
        $nom1=$_POST['nom'];
        $prenom1=$_POST['prenom'];
        echo $prenom1;
        if(($nom1!="") || ($prenom1!=""))
        {
            echo 'Hello';
            $req="insert into etudiant(nom,prenom) values  ('Habib','Aroua')";
            $res=mysqli_query($conn,$req);
            if($res==true)
            {
                header('location:accueil.php');
            }
            else
            {
                echo 'verifier le nom et prenom';
            }
        }
    }
?>