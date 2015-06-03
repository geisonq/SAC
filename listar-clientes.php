<?php
include_once 'includes/verifica-login.php';


?>
<html>
    <title>Usuarios</title>
    <body>
    <h1>Usuario Lista</h1>
    <table border='1'>
        <tr>
            <td>ID</td>
            <td>NOME</td>
            <td>CIDADE</td>            
            <td>OPCOES</td>
        </tr>
        <?php
        include_once 'includes/cliente.php';
        $usuarios = listarCliente();

        foreach ($usuarios as $banco => $linha) {
            echo '<td>' . $linha['ID'] . '</td>';
            echo '<td>' . $linha['NOME'] . '</td>';
            echo '<td>' . $linha['CIDADE'] . '</td>';            
            echo '<td> <a href="deletar-clientes.php?id=' . $linha['ID'] . '" >DELETAR </a> - '
                    . '<a href="editar-clientes.php?id=' . $linha['ID'] . '" >EDITAR </a> </td>';
            echo ' <tr>';
        }
        ?>
    </table>
    <a href="cadastrar-clientes.php">Cadastro de Clientes</a>
      <a href="cadastrar-usuarios.php">Cadastro de Usuario</a>
    <a href="listar-clientes.php">Listar de Cliente</a>
    <a href="logout.php">Logout</a>
    </body>
</html>