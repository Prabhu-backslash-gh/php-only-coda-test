<?php
// FILE SAFE 3: the value must be a plain name of letters and digits, no separator or dots
$base = "/var/app/docs";
$name = $_GET["name"];
if (!preg_match("/^[A-Za-z0-9_]+$/", $name)) {
    http_response_code(400);
    exit("invalid name");
}
$path = $base . "/" . $name . ".txt";
echo file_get_contents($path);
