<?php
// SQL EXPLOITABLE 2: request value concatenated into a LIKE search
$db = new mysqli("localhost", "lab", "lab", "lab");
$term = $_GET["term"];
$result = $db->query("SELECT id, title FROM products WHERE title LIKE '%$term%'");
while ($row = $result->fetch_assoc()) {
    echo $row["title"] . "\n";
}
