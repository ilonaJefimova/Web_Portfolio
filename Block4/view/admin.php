<?php
session_start ();
error_reporting (0);

if (!isset ($_SESSION ["username"]) || $_SESSION ["username"] !== "SuperSecretA") 
{
    echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Access Denied',
                text: 'Only admin can view this page.'
            }).then(() => window.location='../view/index.php');
        </script>";
    exit;
}
?>


<?php
    include ('../model/header.php');
    include ('../view/buttons.php');
    include ('../view/dashboard.php');
    include ("../model/model_update.php"); 
    include ("../model/model_create.php");
    include ('../model/footer.php'); 
?>