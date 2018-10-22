<?php
    require_once 'connexion.php';
?>
<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>ex4</title>
    </head>
    <body>
        <a herf="#">Revenir à la page d'accueil</a>
        <h1>Inscription</h1>
        <img src="#" style="width:50px; height:50px;"/>
        <form method="POST" action="index.php"> 
            <table border=1px bgcolor="	#C0C0C0">
                <tr>
                    <td colspan=2>
                        <b>
                            <h2 style="color:red">
                                <center>Formulaire d'inscription</center>
                            </h2>
                        </b>
                    </td>
                </tr>
                <tr>
                    <td>Nom</td>
                    <td><input type="text" name="nom"/></td>
                </tr>
                <tr>
                    <td><u>Prénom</u></td>
                    <td><input type="text" name="prenom"/></td>
                </tr>
                <tr>
                    <td><u>Date de naissance</u></td>
                    <td>
                        jour<input type="text" style="width:60px;" name="jour"/>
                        mois<input type="text" style="width:60px;" name="mois" />
                        année<br>
                        <input type="text" style="width:90px;" name="annee"/>
                    </td>
                </tr>
                <tr>
                    <td>Situation familie</td>
                    <td>
                        <input type="radio" name="sf"/>Célibatire
                        <input type="radio" name="sf" /> Marié
                        <input type="radio" name="sf"/> Divorcé
                </tr>
                <tr>
                    <td>E-mail : (chaque e-mail sur une ligne)</td>
                    <td><textarea style="width:270px; height: 400px;" name="email"></textarea></td>
                </tr>
                <tr>
                    <td>Site web</td>
                    <td><input type="text" name="siteWeb"/></td>
                </tr>
                <tr>
                    <td>Login</td>
                    <td><input type="text" name="login" /></td>
                </tr>
                <tr>
                    <td>Mot de passe</td>
                    <td><input type="password" name="password" /></td>
                </tr>
                <tr>
                    <td>Langages utilisés</td>
                    <td>
                        <input type="checkbox" name="c" />Langage c <input type="checkbox" name="c++" />C++
                        <input type="checkbox" name="java" />Java <input type="checkbox" name="php" /> PHP
                        <input type="checkbox" name="autres"/><br> Autres
                    </td>
                </tr>
                <tr>
                    <td>Catégories de news<br>préférés</td>
                    <td>
                        <select style="height: 140px;" name="c[]" multiple="multiple">
                            <?php
                                global $con;
                                $sql="select * from categorie order by idCategorie";
                                $res=$con->query($sql);
		 	                    $i=0;
		 	                    $n=0;
                                while($tab=$res->fetch(PDO::FETCH_NUM))
                                {
                                    echo "<option values='$tab[0]'>$tab[1]</option>";
                                }
                            ?> 
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan=2>
                        <center>
                            <input name="bt1" type="submit" value="Rechercher" />
                            <input type="reset" value="Déclencher" />
                        </center>
                    </td>
                </tr>
            </table>
            <?php
            
                function input($sql)
                {
                    global $con;
                    $res=$con->exec($sql);
                    if($res>0)
                    {
                        return true;
                    }
                    else
                    {
                        return false;
                    }
                }
                
                if(isset($_POST['bt1']))
                {
                    if($_POST['bt1'])
                    {
                        if((isset($_POST['nom'])) || (isset($_POST['prenom'])) || (isset($_POST['jour'])) || (isset($_POST['mois'])) || (isset($_POST['annee'])) || (isset($_POST['login'])) || (isset($_POST['password'])) || (isset($_POST['siteWeb'])))
                        {
                            $nom=$_POST['nom'];
                            $prenom=$_POST['prenom'];
                            $jour=$_POST['jour'];
                            $mois=$_POST['mois'];
                            $annee=$_POST['annee'];
                            $login=$_POST['login'];
                            $password=$_POST['password'];
                            $siteWeb=$_POST['siteWeb'];
                            $test=input("insert into utilisateur values (null,'$nom','$prenom','$annee-$mois-$jour','$siteWeb','$login','$password')");
                            if($test===true)
                            {
                                echo"<script> alert('Ajout affectué'); </script>";
                            }
                        }
						
                    }
                }
            ?>
        </form>
        
    </body>
</html>