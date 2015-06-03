<?php
include_once 'includes/usuario.php';

if (isset($_POST['nome']) && $_POST['nome'] != "" 
        && isset($_POST['endereco']) && $_POST['endereco'] != "" 
        && isset($_POST['cidade']) && $_POST['cidade'] != "" 
        && isset($_POST['idade']) && $_POST['idade'] != "" 
        && isset($_POST['nrcartao']) && $_POST['nrcartao'] != "" 
        && isset($_POST['preferencias']) && $_POST['preferencias'] != "") {

    $retorno = cadastrarCliente();

    if ($retorno) {
        header('Location: cadastro-clientes-ok.php');
    } else {
        echo "Erro ao salvar!";
    }
} else {
    echo "Preencha todos os campos!";
}
?>

<h1>Cadastro de Usuario</h1>

<form action="" method="POST">
    Nome<input type="text" name="nome"> <br>
    Endereco<input type="text" name="endereco"> <br>
    Cidade<input type="text" name="cidade"> <br>
    Idade<input type="text" name="idade"> <br>
    Cartao<input type="text" name="nrcartao"> <br>
    Preferencia<input type="text" name="preferencias"> <br>
    <input type="submit" value="ATUALIZAR"> 
</form>
<br>
<a href="listar-usuarios.php">Voltar para listagem de usuario</a>