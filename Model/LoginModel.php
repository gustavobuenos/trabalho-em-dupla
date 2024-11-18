<?php
// /Model/TarefasModel.php
require_once 'C:\aluno2\xampp\htdocs\planilha\config\database.php';

class LoginModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function FazerLogin($email,$senha) {
        $sql = "SELECT * FROM login WHERE email = ? AND senha = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$email,$senha]);
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

        
       
    }

}

