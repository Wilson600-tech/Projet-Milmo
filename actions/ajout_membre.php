<?php
require_once '../config/database.php';
require_once'../core/membre.php';

$membre = new membre($pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $membre->ajouter($_POST).
    header('Location: ../public/membre.php')
}