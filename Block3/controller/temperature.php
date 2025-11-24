<?php
    error_reporting (0);
    include ("../model/API.php") ;

    $message -> message = file_get_contents ('php://input') ;
    $message -> dttm = Date ('Y-m-d H:i:s');
    $park = json_encode ($message);
    $res = createMessage ($park) ;
    echo "Added Record - ".$res ;
?>
