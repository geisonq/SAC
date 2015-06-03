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
            <td>EMAIL</td>
            <td>USERNAME</td>
            <td>SENHA</td>
            <td>OPCOES</td>
        </tr>
        <?php
        include_once 'includes/usuario.php';
        $usuarios = listarUsuario();

        foreach ($usuarios as $banco => $linha) {
            echo '<td>' . $linha['ID'] . '</td>';
            echo '<td>' . $linha['EMAIL'] . '</td>';
            echo '<td>' . $linha['USERNAME'] . '</td>';
            echo '<td>' . $linha['SENHA'] . '</td>';
            echo '<td> <a href="deletar-usuarios.php?id=' . $linha['ID'] . '" >DELETAR </a> - '
                    . '<a href="editar-usuarios.php?id=' . $linha['ID'] . '" >EDITAR </a> </td>';
            echo ' <tr>';
        }
        ?>
    </table>
    <a href="cadastrar-usuarios.php">Cadastro de Usuario</a>
    <a href="listar-clientes.php">Listar de Cliente</a>
    <a href="logout.php">Logout</a>
    </body>
</html>