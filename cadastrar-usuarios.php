<?php


include_once 'includes/usuario.php';



if (isset($_POST['username']) && $_POST['username'] != "" 
        && isset($_POST['senha']) && $_POST['senha'] != ""
        && isset($_POST['email']) && $_POST['email'] != ""
        ) {
    $retorno = cadastrarUsuario();

    if ($retorno) {
        header('Location: cadastro-usuarios-ok.php');
    } else {
        echo "Erro ao salvar!";
    }
} else {
    echo "Preencha todos os campos!";
}
?>

<h1>Cadastro de Usuario</h1>

<form action="" method="POST">
    Username<input type="text" name="username"> 
    <?php if (isset($_POST['username']) && $_POST['username'] == "") {
        echo "<span style=\"color:red;\">Campo usuario eh obrigatorio!!</span>";
    }
    ?>

    <br>
    Senha<input type="password" name="senha">
    <?php if (isset($_POST['senha']) && $_POST['senha'] == "") {
        echo "<span style=\"color:red;\">Campo senha eh obrigatorio!!</span>";
    }
    ?>
    <br>
    Email<input type="email" name="email">  
    <?php if (isset($_POST['email']) && $_POST['email'] == "") {
        echo "<span style=\"color:red;\">Campo email eh obrigatorio!!</span>";
    }
    ?><br>
    <input type="submit" value="SALVAR"> 
</form>
<br>
<a href="listar-usuarios.php">Voltar para listagem de usuario</a>