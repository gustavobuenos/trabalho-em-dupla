<?php
// /Model/TarefasModel.php
require_once 'C:\aluno2\xampp\htdocs\planilha\config\database.php';

class TarefasModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function registrarTarefa($descricao_tarefa, $conteudo_estudado, $responsavel, $data_inicio, $data_conclusao, $status) {
        $stmt = $this->pdo->prepare("INSERT INTO gerenciamento_tarefas (descricao_tarefa,conteudo_estudado, responsavel, data_inicio, data_conclusao, status) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$descricao_tarefa, $conteudo_estudado, $responsavel, $data_inicio, $data_conclusao, $status]);
    }

    public function listarTarefas(){
        $sql = "SELECT * FROM gerenciamento_tarefas";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function teste() {
        echo 'oi';
    }
    public function deletarTarefa($id_tarefa){
        $sql = "DELETE FROM gerenciamento_tarefas WHERE id_tarefa = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id_tarefa]);
    }
}

