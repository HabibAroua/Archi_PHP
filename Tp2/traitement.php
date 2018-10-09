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
?>