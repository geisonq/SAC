<?php
include_once 'includes/cliente.php';

if (isset($_POST['nome']) && $_POST['nome'] != "" 
        && isset($_POST['endereco']) && $_POST['endereco'] != "" 
        && isset($_POST['cidade']) && $_POST['cidade'] != "" 
        && isset($_POST['idade']) && $_POST['idade'] != "" 
        && isset($_POST['nrcartao']) && $_POST['nrcartao'] != "" 
        && isset($_POST['preferencias']) && $_POST['preferencias'] != "") {
    $retorno = atualizarCliente();

    if ($retorno) {
        echo "Registro salvo com sucesso!";
    } else {
        echo "Erro ao salvar!";
    }
}
$usuario = selecionaCliente($_GET['id']);
?>

<h1>Atualizar  Cliente</h1>

<form action="" method="POST">
    Nome<input type="text" name="nome"  value="<?php echo $usuario['NOME']; ?>"> <br>
    Endereco<input type="text" name="endereco" value="<?php echo $usuario['ENDERECO']; ?>"> <br>
    Cidade<input type="text" name="cidade" value="<?php echo $usuario['CIDADE']; ?>"> <br>
    Idade<input type="text" name="idade" value="<?php echo $usuario['IDADE']; ?>"> <br>
    Cartao<input type="text" name="nrcartao" value="<?php echo $usuario['NRCARTAO']; ?>"> <br>
    Preferencia<input type="text" name="preferencias" value="<?php echo $usuario['PREFERENCIAS']; ?>"> <br>
    <input type="submit" value="ATUALIZAR"> 
</form>
<br>
<a href="listar-usuarios.php">Voltar para listagem de usuario</a>