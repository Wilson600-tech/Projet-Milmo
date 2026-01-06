<?php
require_once "../config/database.php";

$db = new Database();
$conn = $db->connect();

echo "Connection à la base réussie ";