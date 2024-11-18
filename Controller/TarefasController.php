<?php
// /Controller/TarefasController.php
require_once 'C:\aluno2\xampp\htdocs\planilha\Model\TarefasModel.php';

class TarefasController {
    private $model;

    public function __construct($pdo) {
        $this->model = new TarefasModel($pdo);
    }

    public function registrarTarefa($descricao_tarefa,$conteudo_estudado, $responsavel, $data_inicio, $data_conclusao, $status) {
        $this->model->registrarTarefa($descricao_tarefa, $conteudo_estudado,$responsavel, $data_inicio, $data_conclusao, $status);
    }

    public function listarTarefas() {
        return $this->model->listarTarefas();
    }

    public function exibirListaTarefas() {
        $tarefas = $this->model->listarTarefas();
        include 'C:\aluno2\xampp\htdocs\planilha\view\listar.php';
    }
    public function deletarTarefa ($id_tarefa){
        $this->model->deletarTarefa($id_tarefa);}
   
}

