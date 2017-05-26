<?php

require __DIR__ . '/doctrine-dbal-connect.php';

$id = 6;
$description = 'foo bar';

$sql = "SELECT * FROM task WHERE id = :id AND description = :description";
$stmt = $conn->prepare($sql);
$stmt->bindValue('id', $id);
$stmt->bindValue('description', $description);

try {
    $stmt->execute();
} catch (Exception $e) {
    echo $e->getMessage();
    exit();
}

while ($row = $stmt->fetch()) {
    echo $row['id'] . ' ' . $row['description'] . "<br />\n";
}

