<?php

$host = "localhost"; // nome do servidor MySQL
$user = "id21333450_crudfatec"; // usuário do MySQL
$pass = "*Fatec123"; // senha do MySQL
$dbname = "id21333450_crudfatec"; // nome do banco de dados

// Conexão com o banco de dados MySQL
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Verifica se houve erro na conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}
