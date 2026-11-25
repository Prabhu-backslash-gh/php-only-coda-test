<?php
// SQL EXPLOITABLE 3: request value used as the ORDER BY column with no allowlist
$db = new mysqli("localhost", "lab", "lab", "lab");
$column = $_POST["column"];
$result = mysqli_query($db, "SELECT id, name FROM users ORDER BY $column");
while ($row = mysqli_fetch_assoc($result)) {
    echo $row["name"] . "\n";
}
