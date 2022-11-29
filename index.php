<?php

require_once("config.php");

//carrega um usuário 
// $root = new Usuario();
// $root->loadById(3);

//Carrega uma lista de usuarios  
// $lista = Usuario::getList();
// echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
// $search = Usuario::search("jo");
// echo json_encode($search)

//carrega um usuario usando o login e a senha
$usuario = new Usuario();
$usuario->login("root","!@#$");

echo $usuario;
?>