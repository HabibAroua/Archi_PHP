<?php
    session_start();
    $bdd =new PDO('mysql:host=127.0.0.1; dbname=espace_membre','root','');
    
    if(isset($_POST['formconnexion']))
    {
        $mailconnect=htmlspecialchars($_POST['mailconnect']);
        $password= sha1($_POST['password']);
        
        if((!empty($mailconnect)) AND (!empty($password)) )
        {
            $req=$bdd->prepare("SELECT * from membre where mail=? and motdepasse=?");
            $req->execute(array($mailconnect,$password));
            $userexist=$req->rowCount();
            if($userexist == 1)
            {
                $userinfo=$req->fetch();
                $_SESSION['id']=$userinfo['id'];
                $_SESSION['pseudo']=$userinfo['pseudo'];
                $_SESSION['mail']=$userinfo['mail'];
                header("Location : profil.php?=".$_SESSION['id']);
            }
            else
            {
                $erreur="Movais mail ou mot de passe ";
            }
        }
        else
        {
            $erreur="Toutes les champs doit être complétes";
        }
    }
?>
<!doctype html>
<html>
    <head>
        <title>Connexion</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <div align="center">
            <h3>Connexion</h3>
            <br><br><br>
            <form method="POST" action="">
                <input type="text" name="mailconnect" placeholder="Mail" />
                <input type="password" name="password" placeholder="Mot de passe" />
                <input type="submit" name="formconnexion" value="Se connecter" />
            </form>
            <?php
                if(isset($erreur))
                {
                    echo '<font color="red">'.$erreur.'</font>';
                }
            ?>
        </div>
    </body>
</html>