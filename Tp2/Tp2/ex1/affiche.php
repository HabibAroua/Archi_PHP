<?php
    if((isset($_POST['nom'])) || (isset($_POST['prenom']))  || (isset($_POST['jour'])) || (isset($_POST['mois']))
       || (isset($_POST['annee'])))
    {
        if(($_POST['nom']=="") && ($_POST['prenom']==""))
        {
            echo "<b>les champs ''nom'' et ''prenom'' sont vides</b>";
        }
        else
        {
            $nom=strtoupper($_POST['nom']);
            $prenom=strtolower($_POST['prenom']);
            $p="";
            $prenom=iconv('UTF-8', 'ASCII//TRANSLIT', $prenom);
            for($i=0 ; $i<strlen($prenom) ;$i++)
            {
                if((ord($prenom[$i])>=97) && (ord($prenom[$i])<=122))
                {
                    $p=$p.$prenom[$i];
                }
            }
            $prenom=$p;
        }
        if ((preg_match("#^[0-9][0-3]$#", $_POST['jour'])) && (preg_match("#^[0-2][0-9]$#", $_POST['mois'])) && (preg_match("#^[1-2][0-9][0-9][0-9]$#", $_POST['annee'])) ) 
        {
            echo "le jour est ".$_POST['jour']." ".$_POST['mois']." ".$_POST['annee'];
        }
        else
        {
            echo '<br>';
            echo '<p style="background-color:red;">le champ '.$_POST['jour'].' '.$_POST['mois'].' et '.$_POST['annee'].' ne sont pas valides</p>';
        }
    }
?>