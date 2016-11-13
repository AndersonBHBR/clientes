<html>
    <head>
        <meta charset="utf-8">        
        <title>Lista de Clientes</title>
        <link rel="stylesheet" text="text/css" href="css/estilo.css">
    </head>
    <body>

    <?php
        include "config.php";

    if ($sql = $conexao->prepare("SELECT * FROM clientes")) {
        $sql->execute();

        // Atribui o resultado encontrado a variáveis
        $sql->bind_result($id_cliente, $nome_cliente, $email_cliente, $telefone_cliente, $senha_cliente, $data_nasc_cliente);
    }
    ?>

    <table id="tab_lista">

            <td id='cor_cabecalho'>ID</td>
            <td id='cor_cabecalho'>Nome</td>
            <td id='cor_cabecalho'>E-mail</td>
            <td id='cor_cabecalho'>Telefone</td>
            <td id='cor_cabecalho'>Senha</td>
            <td id='cor_cabecalho'>Data de Nascimento</td>

        <?php
        $cont = 0;
            while ($sql->fetch()){
                echo "<tr>";
                echo "<td>". $id_cliente ."</td>";
                echo "<td>". $nome_cliente ."</td>";
                echo "<td>". $email_cliente ."</td>";
                echo "<td>". $telefone_cliente ."</td>";
                echo "<td>". $senha_cliente ."</td>";
                echo "<td>". $data_nasc_cliente ."</td>";
                echo "<td colspan='2'><a href='#'><input type='submit' value='Editar' name='go_editar' id='botao_cad'></a></td>";
                echo "<td colspan='2'><a href='#'><input type='submit' value='Excluir' name='go_excluir' id='botao_cad'></a></td>";
                echo "</tr>";
                $cont = $cont + 1;
             }
        // Fecha a consulta
        $sql->close();
        // Fecha a conexão com o banco de dados
        $conexao->close();
        ?>
    </table>
    </body>
</html>