<?php
    if(isset($_POST['description']))
    {
        echo htmlentities($_POST['description']);
    }
    
    if((isset($_POST['couleur'])) && (is_array($_POST['couleur']) ))
    {
        foreach ($_POST['couleur']  as  $v)
        {
            echo $v ."<br>";
        }
    }
    
    if((isset($_POST['ch'])) && (is_array($_POST['ch']) ))
    {
        foreach ($_POST['ch']  as  $v)
        {
            echo $v ." ";
        }
    }
    
    if(isset($_POST['choix']))
    {
        echo 'le choix est '.$_POST['choix'];
    }
    
    
?>