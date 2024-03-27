<?php
$host = "localhost"; // Se o MySQL estiver sendo executado localmente
$usuario = "root";
$senha = "";
$banco_de_dados = "aula_php";

// Conexão com o banco de dados
$conexao = new mysqli($host, $usuario, $senha, $banco_de_dados);

// Verifica se houve erro na conexão
if ($conexao->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
}

// Restante do seu código aqui...
