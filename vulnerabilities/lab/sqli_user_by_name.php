<?php
// SQL EXPLOITABLE 1: request value placed inside quotes in a WHERE clause
$db = new mysqli("localhost", "lab", "lab", "lab");
$name = $_GET["name"];
$result = mysqli_query($db, "SELECT id, name FROM users WHERE name = '$name'");
while ($row = mysqli_fetch_assoc($result)) {
    echo $row["name"] . "\n";
}
