<?php
// FILE EXPLOITABLE 2: request value used as the whole path
$path = $_GET["path"];
readfile($path);
