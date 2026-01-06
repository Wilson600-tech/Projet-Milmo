<?php
require_once '../config/database';
require_once '../core/membre';

$membre = new membre($pdo);
$anniversaire = 
$membre->getAnniversaire();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Membres</title>
</head>
<body>

<h1>Liste des $anniversaires</h1>

<ul>
<?php foreach ($anniversaires as $m): ?>
    <li><?= $m['nom'] ?><?= $m['prenom'] ?><?= $m['photo'] ?></li>
<?php endforeach; ?>
</ul>

</body>
</html>


