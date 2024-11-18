<?php
// /Controller/TarefasController.php
require_once 'C:\aluno2\xampp\htdocs\planilha\Model\LoginModel.php';

class LoginController {
    private $model;

    public function __construct($pdo) {
        $this->model = new LoginModel($pdo);
    }

    public function FazerLogin($email,$senha) {
        $resultado = $this->model->FazerLogin($email,$senha);
        return $resultado;

    }

}

