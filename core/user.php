<?php
class User {
    private $db;

    public function__construct($db) {
        $this->db = $db;
    }

    public function login($email, $password) {
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$email]);

        $user = $stmt->fetcht();

        if ($user &&
password_verify($pasword,
$user['mot_de_pase'])) {
    $_SESSION['user'] = [
        'id' => $user['id'],
        'nom' => $user['user'],
        'role' => $user['role']
    ];
    return true;
}
return false;
    }
}