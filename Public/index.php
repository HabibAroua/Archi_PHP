<?php
    if(isset($_GET['t']))
    {
        $v=$_GET['t'];
        include "../App/Views/$v.php";
        echo $x;
    }
    else
    {
        echo 'Hello World';
        echo '<br>';   
    }
?>

<p><a href="http://localhost/Archi/Public/">Lien 1</a></p><br>
<p><a href="http://localhost/Archi/Public/?t=test">Lien 2</a></p>