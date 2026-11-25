<?php
// SQL SAFE 1: ORDER BY column is checked against a fixed allowlist first
$db = new mysqli("localhost", "lab", "lab", "lab");
$column = $_POST["column"];
if (!in_array($column, array("id", "name", "created_at"), true)) {
    http_response_code(400);
    exit("unsupported column");
}
$result = mysqli_query($db, "SELECT id, name FROM users ORDER BY $column");
while ($row = mysqli_fetch_assoc($result)) {
    echo $row["name"] . "\n";
}
