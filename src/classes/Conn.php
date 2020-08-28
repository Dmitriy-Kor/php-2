<?php
try {
    $dbh = new \PDO('mysql:dbname=my_test_bd; charset=UTF8; host=127.0.0.1', 'root', '');    
}
catch (PDOException $e){
    echo "Erorr: Could not connect. ". $e->getMassage();
}

$dbh->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 