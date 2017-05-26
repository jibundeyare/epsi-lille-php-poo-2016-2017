<?php

require __DIR__ . '/doctrine-dbal-connect.php';

try {
    $conn->delete('task', array(
        'id' => 7,
    ));
} catch (Exception $e) {
    echo $e->getMessage();
    exit();
}

