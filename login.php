<?php include 'conexao.php';
 include 'banco-usuario.php';

$usuario = buscaUsuario($conn, filter_input(INPUT_POST, 'login'), filter_input(INPUT_POST, 'senha'));
var_dump($usuario);


echo"<br>";
echo filter_input(INPUT_POST, 'login');
echo filter_input(INPUT_POST, 'senha');

