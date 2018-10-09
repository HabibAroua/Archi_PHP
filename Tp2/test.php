<?php
    if(isset($_POST['aff']))
    {
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $age=$_POST['age'];
        if(($nom=="") || ($prenom=="") || ($age==""))
        {
            echo 'Vous devez saisir toutes les données';
        }
        else
        {
            echo "<ul><li> Nom : $nom </li>".
            "<li>Prenom : $prenom</li>".
            "<li>Age : $age </li>".
            "</ul>";
        }
    }
    else
    {
        echo "Vous n'avez pas demandé que les informations soient affichées";
    }
?>