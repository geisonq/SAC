<?php
include_once 'includes/verifica-login.php';
include_once 'includes/usuario.php';

if (isset($_POST['username']) && $_POST['username'] != "" 
        && isset($_POST['senha']) && $_POST['senha'] != ""
        && isset($_POST['email']) && $_POST['email'] != ""
        ) {
    $retorno = atualizarUsuario();

    if ($retorno) {
        echo "Usuario salvo com sucesso!";
    } else {
        echo "Erro ao salvar!";
    }
}

    $usuario = selecionaUsuario($_GET['id']);

?>

<h1>Atualizar  Usuario</h1>

<form action="" method="POST">

    Username<input type="text" name="username"  value="<?php echo $usuario['USERNAME']; ?>"> 
    <?php if (isset($_POST['username']) && $_POST['username'] == "") {
        echo "<span style=\"color:red;\">Campo usuario eh obrigatorio!!</span>";
    }
    ?>

    <br>
    Senha<input type="password" name="senha" value="<?php echo $usuario['SENHA']; ?>">
    <?php if (isset($_POST['senha']) && $_POST['senha'] == "") {
        echo "<span style=\"color:red;\">Campo senha eh obrigatorio!!</span>";
    }
    ?>
    <br>
    Email<input type="email" name="email" value="<?php echo $usuario['EMAIL']; ?>">  
    <?php if (isset($_POST['email']) && $_POST['email'] == "") {
        echo "<span style=\"color:red;\">Campo email eh obrigatorio!!</span>";
    }
    ?><br>
    <input type="submit" value="ATUALIZAR"> 
</form>
<br>
<a href="listar-usuarios.php">Voltar para listagem de usuario</a>