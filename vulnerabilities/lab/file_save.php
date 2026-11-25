<?php
// FILE EXPLOITABLE 3: request value used as the path of a write
$base = "/var/app/docs";
$name = $_POST["name"];
$target = $base . "/" . $name;
file_put_contents($target, $_POST["content"]);
echo "saved";
