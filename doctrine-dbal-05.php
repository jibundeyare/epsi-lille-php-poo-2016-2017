<?php

require __DIR__ . '/doctrine-dbal-connect.php';

$id = 1;
$sql = "SELECT * FROM task WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindValue('id', $id);

try {
    $stmt->execute();
} catch (Exception $e) {
    echo $e->getMessage();
    exit();
}

while ($row = $stmt->fetch()) {
    echo $row['id'] . ' ' . $row['description'] . "<br />\n";
}

