<?php
// SQL SAFE 3: the term is stripped to letters and digits before it is used
$db = new mysqli("localhost", "lab", "lab", "lab");
$term = preg_replace("/[^A-Za-z0-9]/", "", $_GET["term"]);
$result = $db->query("SELECT id, title FROM products WHERE title LIKE '%$term%'");
while ($row = $result->fetch_assoc()) {
    echo $row["title"] . "\n";
}
