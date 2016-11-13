<html>
<head>
    <meta charset="utf-8">
    <title>Atualizar dados de Clientes</title>
    <link rel="stylesheet" text="text/css" href="estilo.css">
</head>
<body>
<?php
require ("config.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];
$nascimento = $_POST['nascimento'];

$sql = "UPDATE clientes SET nome='{$nome}', email='{$email}', telefone='{$telefone}', senha='{$senha}', nascimento='{$nascimento}' WHERE id='{$id}' ";

echo "<script>
				  	alert('Cliente com dados atualizados com sucesso.');
	  </script>";
echo "<meta http-equiv='refresh' content='0, url=cadastrar.php'>";
?>
</body>
</html>