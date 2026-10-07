<?php

try{
    $pdo = new PDO(
        "mysql:host=db;dbname=loja;charset=utf8mb4",
        "root", "root"
    );
    echo "Conectado ao BANCO Chefe (AINNNNNNN KI DELEICIA)";
} catch (PDOExeption $e) {
    echo "Erro nessa bagaça CHEFE: " . $e->getMessage();
}
?>