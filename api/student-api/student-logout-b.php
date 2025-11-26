<?php
require_once __DIR__ . "/../../db/config.php";

session_destroy();
header("Location: /eduqueue-main/index.php");
exit;
?>