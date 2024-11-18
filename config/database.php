<?php
// /config/database.php

$host = 'localhost';
$dbname = 'gerenciamento_tarefas';
$user = 'root';
$pass = '';

// Criar conexão com o banco de dados
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}
