<?php
// SQL EXPLOITABLE 4: request value placed in a DELETE statement
$db = new mysqli("localhost", "lab", "lab", "lab");
$id = $_REQUEST["id"];
mysqli_query($db, "DELETE FROM notes WHERE id = $id");
echo "done";
