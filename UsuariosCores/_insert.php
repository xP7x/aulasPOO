<?php
// Incluindo o arquivo de conexão
include 'connection.php';

// Obtendo os dados a serem inseridos
$nome = $_POST['nome'];
$email = $_POST['email'];

// Criando a consulta SQL
$sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";

// Conectando ao banco de dados
$conexao = conectaBD();

// Executando a consulta
if (mysqli_query($conexao, $sql)) {
    echo "Novo registro inserido com sucesso!";
} else {
    echo "Erro ao inserir registro: " . mysqli_error($conexao);
}

// Fechando a conexão
desconectaBD($conexao);
?>