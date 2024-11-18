<?php
// /View/controle/index.php
require_once 'C:/aluno2/xampp/htdocs/planilha/config/database.php';
require_once 'C:/aluno2/xampp/htdocs/planilha/Controller/LoginController.php';

$controller = new LoginController($pdo);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    

    $login = $controller->FazerLogin($email,$senha);

    if($login){
        header('Location: index.php');
    } else {
        header('Location: index.html');
    }
    
}