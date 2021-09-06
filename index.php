<?php

require_once("config.php");
//carregar um usuario
//$root = new Usuario();
//$root->loadbyId(1);
//echo $root;

//Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("Jo");
//echo json_encode($search);

//carrega um usuario usando o login e senha
//$usuario = new Usuario();
//$usuario->login("Jonnatan Joestar", "234");
//echo $usuario;


//criando um novo usuario
//$aluno = new Usuario();
//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("@lun0");
//$aluno->insert();
//echo $aluno;


//alterar um usuario
//$usuario = new Usuario();
//$usuario->loadbyId(5);
//$usuario->update("professor", "!@#$%");
//echo $usuario;

$usuario = new Usuario();
$usuario->loadbyId(5);

$usuario->delete();

echo $usuario;
?>