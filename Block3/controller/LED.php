<?php
    error_reporting (0);
    include ("../model/API.php") ;

    $message -> message = file_get_contents ('php://input') ;
    $park = json_encode ($message);
    $res = createMessageLed ($park) ;
    echo "Added Record - ".$res ;
?>
