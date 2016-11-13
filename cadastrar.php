<?php
require ("config.php");
?>
<html>
<head>
    <meta charset="utf-8">
	<title>Cadastro de Clientes</title>
    <link rel="stylesheet" text="text/css" href="css/estilo.css">
</head>
<body>
	<div id="cadastro">
    	<form name="signup" method="post" action="cadastro.php">
    		<table id="tab_cadastro">
            	<tr>
                	<td>Nome:</td>
                    <td><input type="text" name="nome" required placeholder="Nome do cliente" id="nome" class="txt" /></td>
                </tr>
                <tr>    
                    <td>E-mail:</td>
                    <td><input type="text" name="email" required placeholder="E-mail do Cliente" id="email" class="txt" /></td>
                </tr>
                <tr>
                    <td>Telefone:</td>
                    <td><input type="text" name="telefone" required placeholder="Telefone do Cliente" id="telefone" class="txt" /></td>
                </tr>
                <tr>
                    <td>Senha:</td>
                    <td><input type="password" name="senha" required placeholder="Senha do Cliente" id="senha" class="txt" /></td>
                </tr>
                <tr>
                    <td>Data de Nascimento:</td>
                    <td><input type="text" name="nascimento" required placeholder="Data de Nascimento do Cliente" id="nascimento" class="txt" /></td>
                </tr>
                <tr>    
                    <td colspan="2"><input type="submit" value="Cadastrar" name="go" id="botao_cad"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>