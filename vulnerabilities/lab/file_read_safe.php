<?php
// FILE SAFE 1: the resolved path must stay under the base directory
$base = "/var/app/docs";
$resolved = realpath($base . "/" . $_GET["name"]);
if ($resolved === false || strpos($resolved, $base . "/") !== 0) {
    http_response_code(400);
    exit("outside base directory");
}
echo file_get_contents($resolved);
