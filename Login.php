<?php
  require_once("ConexaoBd.php");

  function verificaUsuario(string $usuario){
    	$bd = CriaConexãoBD();
    	$sql = $bd -> prepare (
    	"select usuario from Usuario
    	where usuario = :valusuario");
    	$sql -> bindValue(':valusuario', $usuario);
      $sql -> execute();
    	return $sql -> rowCount();
    }

    function buscaSenha(string $usuario){
      	$bd = CriaConexãoBD();
      	$sql = $bd -> prepare (
      	"select senha from Usuario
      	where usuario = :valusuario");
      	$sql -> bindValue(':valusuario', $usuario);
        $sql -> execute();
        $resultado = $sql->fetch(); //pega a senha do bd
      	return $resultado['Senha'];
      }
  $erro = null;
	$_request = array_map('trim', $_REQUEST);
	$_request = filter_var_array(
	               $_request,
	               [ 'usuario' => FILTER_DEFAULT,
	                 'senha' => FILTER_DEFAULT ]
	           );
	$usuario = $_request['usuario'];
	$senha = $_request['senha'];
	if ($usuario == false)
	{
		$erro = "Usuário não informado";
	}
		else if ($senha == false)
	{
		$erro = "Senha não informada";
	}
	else if (verificaUsuario($usuario)==0){
		$erro = "Nenhum usuário cadastrado";
	}
	else if (password_verify($senha, buscaSenha($usuario))==false)
	{
		$erro = "Senha inválida";
	}

	if($erro != null){
    session_start();
		$_SESSION['erroLogin'] = $erro;
		header('Location: Inicio.php');
	}
  else {
    header('Location: Pagina1.php');
  }
?>
