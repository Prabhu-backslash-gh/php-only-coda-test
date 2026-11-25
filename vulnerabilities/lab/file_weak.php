<?php
// FILE EXPLOITABLE 4: a "../" filter that "....//" bypasses
$base = "/var/app/docs";
$name = str_replace("../", "", $_GET["name"]);
$path = $base . "/" . $name;
echo file_get_contents($path);
