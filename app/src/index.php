<?php
$mysqli = new mysqli("database", "root", "root", "eats");

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

if ($result = $mysqli->query("SELECT * FROM dishes")) {
    printf("Select returned %d rows.\n", $result->num_rows);
    $result->close();
}

$mysqli->close();
