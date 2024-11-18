<?php
// /View/controle/index.php
require_once 'C:\aluno2\xampp\htdocs\planilha\config\database.php';
require_once 'C:\aluno2\xampp\htdocs\planilha\Controller\TarefasController.php';

$controller = new TarefasController($pdo);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $descricao_tarefa = $_POST['descricao_tarefa'];
    $conteudo_estudado = $_POST['conteudo_estudado'];
    $responsavel = $_POST['responsavel'];
    $data_inicio = $_POST['data_inicio'];
    $data_conclusao = $_POST['data_conclusao'];
    $status = $_POST['status'];

    $controller->registrarTarefa($descricao_tarefa, $conteudo_estudado,$responsavel, $data_inicio, $data_conclusao, $status);
    echo "<p>Tarefa registrada com sucesso!</p>";
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Gerenciamento de Tarefas</title>
</head>
<body>
    <div class="container">
        <h1>Registrar Tarefa</h1>
        <form method="POST" class="form-tarefa">
            <label for="descricao_tarefa">Descrição da Tarefa:</label>
            <input type="text" name="descricao_tarefa" id="descricao_tarefa" required><br>

            <label for="conteudo_estudado">O que foi estudado:</label>
            <input type="text" name="conteudo_estudado" id="conteudo_estudado" required><br>

            <label for="responsavel">Responsável:</label>
            <input type="text" name="responsavel" id="responsavel" required><br>

            <label for="data_inicio">Data que foi passado:</label>
            <input type="date" name="data_inicio" id="data_inicio" required><br>

            <label for="data_conclusao">Data que foi finalizado:</label>
            <input type="date" name="data_conclusao" id="data_conclusao" required><br>

            <label for="status">Concluído:</label>
            <select name="status" id="status" required>
                <option value="SIM">Sim</option>
                <option value="NAO">Não</option>
            </select><br>

            <input type="submit" value="Registrar Tarefa">
        </form>

        <h2>Lista de Tarefas</h2>
        <table class="tarefas-table">
            <tr>
                <th>ID</th>
                <th>Descrição</th>
                <th>Conteúdo Estudado</th>
                <th>Responsável</th>
                <th>Data de Início</th>
                <th>Data de Conclusão</th>
                <th>Concluído</th>
                <th>Deletar</th>
            </tr>
            <?php $controller->exibirListaTarefas(); ?>
        </table>
    </div>
</body>
</html>
