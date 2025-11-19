<?php
    $cid = isset ($_GET ['cid']) ? $_GET ['cid'] : null;
    $aid = isset ($_GET ['aid']) ? $_GET ['aid'] : null;
    $type = isset ($_GET ['type']) ? $_GET ['type'] : 'individual';

    if ($type == 'articles' && !isset ($_GET ['aid'])) 
    {
        die('Error: Missing article ID.');
    }
    if ($type == 'individual' && !isset ($_GET ['cid'])) 
    {
        die('Error: Missing character ID.');
    }

    switch ($type) 
    {
        case 'articles':
            $target = "../view/articles.php?aid=" . urlencode ($aid);
            break;
        case 'individual':
        default:
            $target = "../view/individual.php?cid=" . urlencode ($cid);
            break;
    }

    echo '<script type="text/javascript">window.open("' . $target . '", "_self");</script>';
    exit;
?>
