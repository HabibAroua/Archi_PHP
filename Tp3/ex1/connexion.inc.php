<?php
    $conn=mysqli_connect("localhost","root","","Test");
    
    if(mysqli_connect_errno())
    {
        printf("Echec de la connexion : %s \n",mysqli_connect_error());
    }
    else
    {
        echo 'bien';
    }
?>