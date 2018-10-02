<?php
    $membres=array('BrYs','Mathieu','Yogui');
    
    foreach($membres as $membre)
    {
        echo $membre.' ';
    }
    
    //parcours avec clefs
    echo '<br>';
    foreach($membres as $i=>$membre)
    {
        //affiche tour à tour 0 BrYs puis 1 mathieu puis 2 Yogui
        echo $i.' '.$membre;
    }
    
    //alternative
    echo '<br>';
    foreach($membres as $i=>$membre)
    {
        //affiche tour à tour 0 BrYs puis 1 mathieu puis 2 Yogui
        echo $i.' '.$membres[$i];
    }
    echo '<br>';
    
    for($j=0 ; $j<3 ; $j++)
    {
        echo $membres[$j];
    }
?>