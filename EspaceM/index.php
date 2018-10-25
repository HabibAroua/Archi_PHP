<?php
    $bdd =new PDO('mysql:host=127.0.0.1; dbname=espace_membre','root','');
    if(isset($_POST['forminscription']))
    {
        $psudo=htmlspecialchars($_POST['pseudo']);
        $mail=htmlspecialchars($_POST['mail']);
        $confMail=htmlspecialchars($_POST['confMail']);
        $motDePasse=sha1($_POST['motDePasse']);
        $confMotDePasse=sha1($_POST['confMotDePasse']);
        $psudoLength=strlen($psudo);
        if((!empty($_POST['pseudo'])) AND (!empty($_POST['mail'])) AND (!empty($_POST['confMail'])) AND (!empty($_POST['motDePasse'])) AND (!empty($_POST['confMotDePasse']))) 
        {
            if($psudoLength<=255)
            {
                if($mail==$confMail)
                {
                    if(filter_var($mail,FILTER_VALIDATE_EMAIL))
                    {
                        $reqmail=$bdd->prepare("select * from membre where mail=?");
                        $reqmail->execute(array($mail));
                        $mailexist=$reqmail->rowCount();
                        echo 'le nombre est '.$mailexist;
                        if($mailexist == 0)
                        {
                            if($motDePasse==$confMotDePasse)
                            {
                                $insertMbr=$bdd->prepare("insert into membre (pseudo,mail,motdepasse) values(?,?,?)");
                                $insertMbr->execute(array($psudo,$mail,$motDePasse));
                                $erreur="Vos compte a bien été crée";
                            }
                            else
                            {
                                $erreur='Vos mot de passe ne sont pas correct';
                            }
                        }
                        else
                        {
                            $erreur="Adresse mail dèjà utilisée";
                        }
                    }
                }
                else
                {
                    $erreur = 'Vos adresses mail ne correspondant pas '.$mail.' '.$confMail;
                }
            }
            else
            {
                $erreur='Votre psudo ne doit pas dépasser 255 caractére';
            }
        }
        else
        {
            $erreur= 'Touutes les champs doit être compléte !!';
        }
    }
?>
<!doctype html>
<html>
    <head>
        <title>Tuto Php</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <div align="center">
            <h3>Inscription</h3>
            <br><br><br>
            <form method="POST" action="">
                <table>
                    <tr>
                        <td><label for="pseudo">Pseudo :</label></td>
                        <td><input type="text" placeholder="Votre pseudo" name="pseudo" id="pseudo" value="<?php if(isset($psudo)){ echo $psudo ; } ?>"/></td>
                    </tr>
                    <tr>
                        <td><label for="mail">Mail :</label></td>
                        <td><input type="email" placeholder="Votre Mail" name="mail" id="mail" <?php if(isset($mail)){ echo $mail ; } ?>"/></td>
                    </tr>
                    <tr>
                        <td><label for="confMail">Confirmation du Mail :</label></td>
                        <td><input type="email" placeholder="Confirmer votre mail" name="confMail" id="confMail" <?php if(isset($confMail)){ echo $confMail ; } ?>"/></td>
                    </tr>
                    <tr>
                        <td><label for="motDePasse">Mot de passe :</label></td>
                        <td><input type="password" placeholder="Confirmer votre mot de passe" name="motDePasse" id="motDePasse" <?php if(isset($motDePasse)){ echo $motDePasse ; } ?>"/></td>
                    </tr>
                    <tr>
                        <td><label for="confMotDePasse">Confirmation du mot de passe :</label></td>
                        <td><input type="password" placeholder="Confirmer votre mot de passe" name="confMotDePasse" id="confMotDePasse" <?php if(isset($confMotDePasse)){ echo $confMotDePasse ; } ?>"/></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td align="center"><input type="submit" name="forminscription" value="Je m'inscris" /></td>
                    </tr>
                </table>
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