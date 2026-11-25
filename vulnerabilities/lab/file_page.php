<?php
// FILE SAFE 4: the value only picks a number, the file name is built from it
$base = "/var/app/docs";
$number = (int) $_GET["number"];
$path = $base . "/page" . $number . ".txt";
echo file_get_contents($path);
