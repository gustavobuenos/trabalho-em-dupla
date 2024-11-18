<?php
require_once 'C:\aluno2\xampp\htdocs\planilha\config\database.php';
require_once 'C:\aluno2\xampp\htdocs\planilha\Controller\TarefasController.php';

$TarefasController = new TarefasController($pdo);

$TarefasController->deletarTarefa($_GET['id']);
header('location: index.php');

?>
