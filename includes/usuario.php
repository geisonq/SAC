<?php

include_once 'includes/conexao.php';

function cadastrarUsuario() {
    global $conexao;

    $sql = "INSERT INTO USUARIO (USERNAME, SENHA, EMAIL) "
            . "VALUES (:username, :senha, :email)";

    if ($_POST['email'] == "") {
        $mail = '';
    } else {
        $mail = $_POST['email'];
    }

    $query = $conexao->prepare($sql);
    $query->bindValue(':username', $_POST['username']);
    $query->bindValue(':email', $mail);
    $query->bindValue(':senha', $_POST['senha']);
    return $query->execute();
}

function atualizarUsuario() {
    global $conexao;

    $sql = "UPDATE USUARIO SET USERNAME = :username,"
            . " SENHA = :senha,"
            . " EMAIL = :email "
            . " WHERE ID = :id";

    $query = $conexao->prepare($sql);
    $query->bindValue(':username', $_POST['username']);
    $query->bindValue(':email', $_POST['email']);
    $query->bindValue(':senha', $_POST['senha']);
    $query->bindValue(':id', $_GET['id']);
    return $query->execute();
}

function listarUsuario() {
    global $conexao;

    $query = $conexao->query("SELECT * FROM USUARIO ");
    $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
}

function deletarUsuario($id) {
    global $conexao;

    $query = $conexao->prepare('DELETE FROM USUARIO WHERE ID = :id');
    $query->bindValue(':id', $id);

    return $query->execute();
}

function selecionaUsuario($id) {
    global $conexao;

    $query = $conexao->prepare('SELECT * FROM USUARIO WHERE ID = :id');
    $query->bindValue(':id', $id);
    $query->execute();

    return $query->fetch(PDO::FETCH_ASSOC);
}

function login() {
    global $conexao;

    $query = $conexao->prepare("SELECT * FROM USUARIO"
            . " WHERE USERNAME= :username AND SENHA = :senha ");
    $query->bindValue(':username', $_POST['username']);
    $query->bindValue(':senha', $_POST['senha']);
    $query->execute();
    $resultado = $query->fetch(PDO::FETCH_ASSOC);
    return $resultado;
}
