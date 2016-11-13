<html>
<head>
    <title>Alterar</title>
</head>
<body>

<?php
// Inclui arquivo de conexão
include("config.php");

// Se for uma requisição POST, faz a ação de salvar as informações
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $id = $_POST["id"];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    $nascimento = $_POST['nascimento'];

    $sqlinsert = "UPDATE clientes SET nome='{$nome}', email='{$email}', setor='{$telefone}', cargo='{$senha}', foto='{$nascimento}' WHERE id='{$id}' ";
    mysql_query($sqlinsert) or die(mysql_error());
    ?>

<br/>
    <a href="cadastrar.php"> Editar funcionários </a>

<?php
}
else // Se não for uma requisição POST, mostra o formulário
{
$id = $_GET['id'];
$sql = mysql_query("SELECT * FROM clientes WHERE id = {$id}");

// Verifica se recebeu ao menos um resultado (o que se espera)
if($exibe = mysql_fetch_array($sql))
{
// Se recebeu, faz a leitura dos dados
$id = $_POST["id"];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];
$nascimento = $_POST['nascimento'];

// Imprime formulário pré carregado
?>
    <form action="editar.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        Nome<input type="text" name="nome" value="<?php echo $nome; ?>">
        Email <input type="text" name="email" value="<?php echo $email; ?>">
        Setor <input type="text" name="setor" value="<?php echo $telefone; ?>">
        Cargo <input type="text" name="cargo" value="<?php echo $senha; ?>">
        Foto <input type="text" name="foto" value="<?php echo $nascimento; ?>">

        <input type="submit" value="Atualizar">
    </form>
<?php
}
else // ID inválido
{
// Imprime alerta em javascript e faz o redirecionamento para alguma página
?>
    <script>
        alert("ID Inválido!");
        window.location = 'cadastrar.php';
    </script>
<?php
}
}
?>
</body>
</html>