<?php
// SQL SAFE 2: the id is cast to an integer, so only digits reach the query
$db = new mysqli("localhost", "lab", "lab", "lab");
$id = (int) $_GET["id"];
$result = mysqli_query($db, "SELECT id, name FROM users WHERE id = $id");
while ($row = mysqli_fetch_assoc($result)) {
    echo $row["name"] . "\n";
}
