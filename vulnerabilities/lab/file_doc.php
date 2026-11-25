<?php
// FILE SAFE 2: only names from a fixed allowlist are opened
$base = "/var/app/docs";
$name = $_GET["name"];
if (!in_array($name, array("readme.txt", "terms.txt", "faq.txt"), true)) {
    http_response_code(400);
    exit("unknown document");
}
$path = $base . "/" . $name;
echo file_get_contents($path);
