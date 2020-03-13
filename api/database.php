<?php

$servidor = "localhost";
$banco = "dataclick";
$usuario = "root";
$senha = '';

$conexao_db = mysqli_connect($servidor, $usuario, $senha,$banco);


if(!$conexao_db)
{
    echo "erro ao conectar ao banco de dados!";

    exit();
}{
	echo "conexao sucesso";
}

?>