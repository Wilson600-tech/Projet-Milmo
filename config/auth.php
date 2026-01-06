<?php
session_start();

function requireRole($role) {
    if (!isset($_SESSION['user']) ||
$_SESSION['user']['role'] !== $role) {
    header('location: login.php');
    exit;
}
}