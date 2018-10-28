<?php
    session_start();
    $bdd =new PDO('mysql:host=127.0.0.1; dbname=espace_membre','root','');
    
    if(isset($_GET['id']) AND $_GET['id']>0 )
    {
        $getid=intval($_GET['id']);
        $req=$bdd->prepare("select * from membre where id=?");
        $req->execute(array($_GET['id']));
        $userinfo=$req->fetch();
        
?>
<!doctype html>
<html>
    <head>
        <title>Profil</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <div align="center">
            <h3>Profil</h3>
             <br><br>
             Psudo <?php echo $userinfo['pseudo'] ?>
             <br>
             Mail <?php echo $userinfo['mail'] ?>
             <br>
            <?php
                if(isset($_SESSION['id']) AND  $userinfo['id']==$_SESSION['id'])
                {
            ?>
            <a href="#">Editer votre profil</a>
            <br>
            <a href="deconnexion.php">Se déconncter</a>
            <?php
                }
            ?>
        </div>
    </body>
</html>
<?php

    }
?>
