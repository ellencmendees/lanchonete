<?php
// Configurações do banco de dados
$host = "localhost";     // Endereço do servidor do banco de dados
$dbname = "lanchonete";   // Nome do banco de dados
$user = "root";   // Usuário do banco de dados
$password = ""; // Senha do banco de dados
$base = 'http://localhost/lanchonete';

try {
    // Cria uma nova instância da classe PDO
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    
    // Define o modo de erro do PDO para exceção
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    // Em caso de erro, exibe a mensagem
    echo "Falha na conexão: " . $e->getMessage();
}
?>
