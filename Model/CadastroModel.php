<?php
// /Model/TarefasModel.php
require_once 'C:\aluno2\xampp\htdocs\planilha\config\database.php';

class CadastroModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function FazerCadastro($email,$senha) {
        $sql = "SELECT * FROM cadastro WHERE email = ? AND senha = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$email,$senha]);
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

        
       
    }

}

