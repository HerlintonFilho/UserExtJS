<?php

$servidor = "127.0.0.1";

$user = "root";

$senha = "valenteG12";

$db = "test";

$conexao = mysqli_connect($servidor, $user, $senha, $db);

if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}
?>