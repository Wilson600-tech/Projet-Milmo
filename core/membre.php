<?php
class Membre {
    public function__construct($pdo) {
        $this->pdo = $pdo;
    }

    public function ajouter($data) {
        $sql = "INSERT INTO membres
        (nom, prenom, sexe,date_naissance, date_arrivee, adresse, statut_matrimonial, date_bapteme,lieu_bapteme, photo, cree_le)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            $data['nom'],
            $data['prenom'],
            $data['sexe'],
            $data['date_naissance'],
            $data['date_arrivee'],
            $data['adresse'],
            $data['statut_matrimonial'],
            $data['date_bapteme'],
            $data['lieu_bapteme'],
            $data['photo'],
            $data['cree_le'],
        ]);

    }

    public function getAnnivaissaire() {
        $sql = "SELECT * FROM membres
                WHERE MONTH(date_naissance)
= MONTH(CURDATE())
                ORDER BY
DAY(date_naissance)";
        return
$this->pdo->query($sql)->fetchAll();
    }
}