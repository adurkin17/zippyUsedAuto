<?php
    $dsn = 'mysql:host=pxukqohrckdfo4ty.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=hnwmc5g21co1445v';
    $username = 'jrlvsjo47diaivlp';
    $password = 'hkkaaztkrtgmb375';
    /*$dsn = 'mysql:host=localhost;dbname=zippyusedautos';
    $username = 'root';
    $password = 'pa55word';*/


    try {
        $db = new PDO($dsn, $username);
    } catch (PDOException $e)
    {
        $error = "Database Error: ";
        $error .= $e -> getMessage();
        include ('view/error.php');
        exit();
    }
?>
