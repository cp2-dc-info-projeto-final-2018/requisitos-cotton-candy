<?php

  $erros=[];
  if(empty($_REQUEST) == false)
  {
      $request = array_map('trim', $_REQUEST);

      $request = filter_var_array(
        $request,
        [
          'nome' => FILTER_DEFAULT,
          'sobrenome' => FILTER_DEFAULT,
          'usuario' => FILTER_DEFAULT,
          'email' => FILTER_VALIDATE_EMAIL,
          'senha' => FILTER_DEFAULT,
          'confsenha' => FILTER_DEFAULT
        ]
      );

    $nome= $request['nome'];
    if ($nome == false)
    {$erros[] = "O campo Nome precisa ser preenchido.";}
    else if (strlen($nome) > 20)
    {$erros[] = "O nome informado não pode ultrapassar 20 caracteres.";}

    $sobrenome= $request['sobrenome'];
    if ($sobrenome == false)
    {$erros[] = "O campo Sobrenome precisa ser preenchido.";}
    else if (strlen($sobrenome) > 20)
    {$erros[] = "O sobrenome informado não pode ultrapassar 20 caracteres.";}

    $usuario= $request['usuario'];
    if ($usuario == false)
    {$erros[] = "O campo Usuário precisa ser preenchido.";}
    else if (strlen($usuario) < 3 || strlen($usuario) > 20)
    {$erros[] = "O nome de usuário informado não pode ultrapassar 20 caracteres.";}

    $email= $request['email'];
    if ($email == false)
    {$erros[] = "O campo Email precisa ser preenchido.";}

    $senha = $request['senha'];
    if ($senha == false)
    {$erros[] = "O campo Senha precisa ser preenchido.";}
    else if (strlen($senha) < 6 || strlen($senha) > 12)
    {$erros[] = "A senha informada não é válida.";}
    else
    {$erros[] = "Senha confirmada com sucesso.";}

    $confirmaSenha= $request['confirmaSenha'];
    if ($confirmaSenha == false)
    {$erros[] = "O campo Confirme Sua Senha precisa ser preenchido.";}
    else if ($confirmaSenha!=$senha)
    {$erros[] = "A senha informada não é válida.";}
    else
    {$erros[] = "Senha confirmada com sucesso.";}

  }

  foreach ($erros as $x) {
    echo  $x;
  }

?>
