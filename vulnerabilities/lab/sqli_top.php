<?php
// SQL SAFE 4: the limit is an integer clamped to a range
$db = new mysqli("localhost", "lab", "lab", "lab");
$limit = max(1, min(100, intval($_GET["count"])));
$result = mysqli_query($db, "SELECT id, name FROM users LIMIT $limit");
while ($row = mysqli_fetch_assoc($result)) {
    echo $row["name"] . "\n";
}
