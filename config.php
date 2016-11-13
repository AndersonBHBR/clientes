<meta charset="utf-8">
<?php
$host = "localhost";
$user = "usuario";
$pass = "senha";
$banco = "empresa";
$conexao = new mysqli($host,$user,$pass,$banco);

if (!$conexao) {
    die('Não foi possível conectar-se ao banco de dados: ' . mysqli_connect_error());
    exit();
}
?>