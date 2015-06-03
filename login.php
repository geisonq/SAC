<?php
session_start();
include_once 'includes/usuario.php';

if (isset($_POST['username']) && isset($_POST['senha'])) {
    
   $usuario = login();
   
   if($usuario){
       $_SESSION['LOGIN'] = true;
       $_SESSION['USUARIO_LOGADO'] = $usuario;
       header('Location: listar-usuarios.php');
   } else {
       $_SESSION['LOGIN'] = false;
       $_SESSION['USUARIO_LOGADO'] = false;
       echo "Nao existe usuario";
   }
}
?>
<center><form action="" method="post">
    Username <br><input type="text" name="username"> <br>
    Senha <br><input type="text" name="senha"> <br>
    <input type="submit">
</form></center>