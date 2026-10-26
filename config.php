<?php
$host = "localhost";
$banco = "sistema_login";
$usuario = "root";
$senha = "";

try {
    $pdo = new PDO (
        "mysql:host=$host;dbname=$banco;charset=utfmb4",
        $usuario,
        $senha,
        [
           PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
           PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
           PDO::ATTR_EMULATE_PREPARES => false 
        ]
    );
} catch (PDOException $e) {
    error_log($e->getMessage());
    exit("não foi possivel conectar ao banco de dados");
}
?>
