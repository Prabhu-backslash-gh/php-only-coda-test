<?php
// FILE EXPLOITABLE 1: request value appended to the base directory with no check
$base = "/var/app/docs";
$name = $_GET["name"];
$path = $base . "/" . $name;
echo file_get_contents($path);
