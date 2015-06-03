<?php

global $conexao;

$host = 'localhost';
$dbname = 'lpw';
$usuario = 'root';
$senha = '';

$conexao = new PDO("mysql:host={$host};dbname={$dbname}", $usuario, $senha);

$conexao->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
