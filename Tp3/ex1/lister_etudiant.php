<!doctype html>
<html>
    <head>
        
    </head>
    <body>
        <?php
            include_once("connexion.inc.php");
            $req="select id , nom , prenom from etudiant";
            $res=mysqli_query($conn,$req);
            echo "<h1> Liste des etudiant </h1><br>";
            echo "<table width=100% border=1px>";
            echo "<tr>";
            echo "<td>ID</td>";
            echo "<td>Nom</td>";
            echo "<td>Prenom</td>";
            echo "</tr>";
            while(($row = mysqli_fetch_array($res,MYSQL_NUM))!=null)
            {
                echo"<tr>";
                echo "<td>$row[0]</td>";
                echo "<td>$row[1]</td>";
                echo "<td>$row[2]</td>";
                echo"</tr>";
            }
            echo "</table>";
        ?>
    </body>
</html>