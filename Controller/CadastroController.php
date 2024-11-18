<?php
// /Controller/TarefasController.php
require_once 'C:\aluno2\xampp\htdocs\planilha\Model\CadastroModel.php';

class CadastroController {
    private $model;

    public function __construct($pdo) {
        $this->model = new CadastroModel($pdo);
    }

    public function FazerCadastro($email,$senha) {
        $resultado = $this->model->FazerCadastro($email,$senha);
        return $resultado;

    }

}

