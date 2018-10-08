<?php
    date_default_timezone_set('Europe/Paris');
    $date="2014-02-01";
    $new_date=date('Y-m-d',strtotime($date . " +3 months +2 days +6 years"));
    echo date('d/m/Y', strtotime($new_date));
    
?>