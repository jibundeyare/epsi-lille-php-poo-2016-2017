<?php

require __DIR__ . '/doctrine-dbal-connect.php';

try {
    $conn->update('task', array(
        'description' => 'foo bar baz',
    ), array(
        'id' => 6,
    ));
} catch (Exception $e) {
    echo $e->getMessage();
    exit();
}

