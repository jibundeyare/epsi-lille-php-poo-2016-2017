<?php

require __DIR__ . '/doctrine-dbal-connect.php';

try {
    $conn->insert('task', array(
        'description' => 'lorem ipsum',
    ));

    echo 'id of the last inserted item: ' . $conn->lastInsertId();
} catch (Exception $e) {
    echo $e->getMessage();
    exit();
}

