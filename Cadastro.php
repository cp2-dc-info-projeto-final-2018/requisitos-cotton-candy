<?php
  include 'ConexaoBd.php';
  function InsereUsuario($dadosNovoContato)
  {
    $bd = CriaConexãoBD();

    $sql = $bd->prepare("INSERT INTO Usuario (nome, sobrenome, usuario, email, senha, instituicao) VALUES (:valnome, :valsobrenome, :valusuario, :valemail, :valsenha, :valinstituicao)");
      $senha = $dadosNovoContato['senha'];
      $hash = password_hash($senha, PASSWORD_DEFAULT);
      $sql->bindValue(':valnome', $dadosNovoContato['nome']);
      $sql->bindValue(':valsobrenome', $dadosNovoContato['sobrenome']);
      $sql->bindValue(':valusuario', $dadosNovoContato['usuario']);
      $sql->bindValue(':valemail', $dadosNovoContato['email']);
      $sql->bindValue(':valsenha', $hash);
      $sql->bindValue(':valinstituicao', $dadosNovoContato['instituicao']);

      $sql->execute();
  }

  $erros=[];

      $request = array_map('trim', $_REQUEST);

      $request = filter_var_array(
        $request,
        [
          'nome' => FILTER_DEFAULT,
          'sobrenome' => FILTER_DEFAULT,
          'usuario' => FILTER_DEFAULT,
          'email' => FILTER_VALIDATE_EMAIL,
          'senha' => FILTER_DEFAULT,
          'confsenha' => FILTER_DEFAULT,
          'instituicao' => FILTER_DEFAULT
        ]
      );

    $nome= $request['nome'];
    if ($nome == false)
    {$erros[] = "O campo Nome precisa ser preenchido.";}
    else if (strlen($nome) > 20)
    {$erros[] = "O nome informado não pode ultrapassar 20 caracteres.";}
    $dadosNovoContato['nome'] = $nome;

    $sobrenome= $request['sobrenome'];
    if ($sobrenome == false)
    {$erros[] = "O campo Sobrenome precisa ser preenchido.";}
    else if (strlen($sobrenome) > 20)
    {$erros[] = "O sobrenome informado não pode ultrapassar 20 caracteres.";}
    $dadosNovoContato['sobrenome'] = $sobrenome;

    $usuario= $request['usuario'];
    if ($usuario == false)
    {$erros[] = "O campo Usuário precisa ser preenchido.";}
    else if (strlen($usuario) < 3 || strlen($usuario) > 20)
    {$erros[] = "O nome de usuário informado não pode ultrapassar 20 caracteres.";}
    $dadosNovoContato['usuario'] = $usuario;

    $email= $request['email'];
    if ($email == false)
    {$erros[] = "O campo Email precisa ser preenchido.";}
    $dadosNovoContato['email'] = $email;

    $senha = $request['senha'];
    if ($senha == false)
    {$erros[] = "O campo Senha precisa ser preenchido.";}
    else if (strlen($senha) < 6 || strlen($senha) > 12)
    {$erros[] = "A senha informada não é válida.";}
    $dadosNovoContato['senha'] = $senha;

    $confirmaSenha= $request['confsenha'];
    if ($confirmaSenha == false)
    {$erros[] = "O campo Confirme Sua Senha precisa ser preenchido.";}
    else if ($confirmaSenha!=$senha)
    {$erros[] = "A senha informada não é válida.";}

    $instituicao= $request['instituicao'];
    if ($instituicao == false)
    {$erros[] = "O campo Instituição precisa ser preenchido.";}
    else if (strlen($instituicao) > 20)
    {$erros[] = "A instituição informada não pode ultrapassar 20 caracteres.";}
    $dadosNovoContato['instituicao'] = $instituicao;



  if (empty($erros) == true) {
    InsereUsuario($request);
    header('Location: Pagina1.php');
  }
  else{
    foreach ($erros as $x) {
      echo  $x;
    }
  }

?>
