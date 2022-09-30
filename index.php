<?php 

require_once("config.php");

//A66 Carrega um usuario

//A65 $root = new Usuario();
//A65 $root->loadbyId(3);
//A65 echo $root;

//A64$sql = new Sql();
//A64$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//A64echo json_encode($usuarios);

//A66Carrega lista de usuários
//A66$lista = Usuario::getList();
//echo json_encode($lista);

//$search = Usuario::search("jo");

//echo json_encode($search);

//Carrega usuário usando login e senha

//$usuario = new Usuario();

//$usuario->login("root","!@#$%");

//echo $usuario;

//Criando um novo usuário;

//$aluno = new Usuario("aluno", "@lun0");
//$aluno->insert();
//echo $aluno;
 
//Alterar ususario

//$usuario = new Usuario();

//$usuario->loadById(8);

//$usuario->update("professor", "111222333");

//echo $usuario;

$usuario = new Usuario();

$usuario->loadById(7);

$usuario->delete();

echo $usuario;


 ?>