<html>
<head>
    <meta charset="utf-8">
    <title>Cadastro de Clientes</title>
    <link rel="stylesheet" text="text/css" href="css/estilo.css">
</head>
<body>
<?php
include_once ("config.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];
$nascimento = $_POST['nascimento'];

$sql = "INSERT INTO clientes (nome_cliente, email_cliente, telefone_cliente, senha_cliente, data_nasc_cliente)
        VALUES ('$nome', '$email', '$telefone', '$senha', '$nascimento')
";

$resultado = mysqli_query($conexao,$sql);

echo "<script>
				  	alert('Cliente cadastrado com sucesso.');
	  </script>
echo <meta http-equiv='refresh' content='0, url=cadastrar.php'>";
?>

</body>
</html>