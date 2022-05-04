<?php

require __DIR__ . '/vendor/autoload.php';
ini_set('display_errors', 1);

try {
    $c = \Frame\DB\Connection::getInstance();
    var_dump($c);



//    $q = $c->query('select * from user');
//    var_dump($q);
//    var_dump($q->execute());
//    var_dump($q->fetchAll());
} catch (Exception $e) {
    echo $e->getMessage();
}

