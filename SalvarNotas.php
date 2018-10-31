<?php
  include 'ConexaoBd.php';

  function SalvarNotas($certificacao,$teste,$trab1,$trab2,$trab3,$prova,$apoio,$medFinal)
  {
    $bd = CriaConexãoBD();
    $sql = $bd->prepare("INSERT INTO Avaliacao (certificacao, teste, trab1, trab2, trab3, prova, apoio, medFinal)
    VALUES (:valcertificacao, :valteste, :valtrab1, :valtrab2, :valtrab3, :valprova, :valapoio, :valmedFinal)");

      $sql->bindValue(':valcertificacao', $certificacao);
      $sql->bindValue(':valteste', $teste);
      $sql->bindValue(':valtrab1', $trab1);
      $sql->bindValue(':valtrab2', $trab2);
      $sql->bindValue(':valtrab3', $trab3);
      $sql->bindValue(':valprova', $prova);
      $sql->bindValue(':valapoio', $apoio);
      $sql->bindValue(':valmedFinal', $medFinal);

      $sql->execute();
  }

  $erros=[];

      $request = array_map('trim', $_REQUEST);

      $request = filter_var_array(
        $request,
        [
          'certificacao1' => FILTER_DEFAULT,
          'teste_1' => FILTER_DEFAULT,
          'trab1_1' => FILTER_DEFAULT,
          'trab2_1' => FILTER_DEFAULT,
          'trab3_1' => FILTER_DEFAULT,
          'prova_1' => FILTER_DEFAULT,
          'apoio_1' => FILTER_DEFAULT,
          'medfinal_1' => FILTER_DEFAULT,
          'certificacao2' => FILTER_DEFAULT,
          'teste_2' => FILTER_DEFAULT,
          'trab1_2' => FILTER_DEFAULT,
          'trab2_2' => FILTER_DEFAULT,
          'trab3_2' => FILTER_DEFAULT,
          'prova_2' => FILTER_DEFAULT,
          'apoio_2' => FILTER_DEFAULT,
          'medfinal_2' => FILTER_DEFAULT,
          'certificacao3' => FILTER_DEFAULT,
          'teste_3' => FILTER_DEFAULT,
          'trab1_3' => FILTER_DEFAULT,
          'trab2_3' => FILTER_DEFAULT,
          'trab3_3' => FILTER_DEFAULT,
          'prova_3' => FILTER_DEFAULT,
          'apoio_3' => FILTER_DEFAULT,
          'medfinal_3' => FILTER_DEFAULT
        ]
      );

    $certificacao1 = $request['certificacao1'];
    if ($certificacao1 < 1 || $certificacao1 > 3)
    {$erros = "Cerificação Inválida.";}

    $teste_1 = $request['teste_1'];
    if ($teste_1 > 10)
    {$erros = "O teste não pode ser maior que 10";}

    $trab1_1 = $request['trab1_1'];
    if ($trab1_1 > 10)
    {$erros = "O trabalho não pode ser maior que 10";}

    $trab2_1 = $request['trab2_1'];
    if ($trab2_1 > 10)
    {$erros = "O trabalho não pode ser maior que 10";}

    $trab3_1 = $request['trab3_1'];
    if ($trab3_1 > 10)
    {$erros = "O trabalho não pode ser maior que 10";}

    $prova_1 = $request['prova_1'];
    if ($prova_1 > 10)
    {$erros = "A prova não pode ser maior que 10";}

    $apoio_1 = $request['apoio_1'];
    if ($apoio_1 > 10.0)
    {$erros = "O apoio não pode ser maior que 10";}

    $medFinal_1 = $request['medfinal_1'];
    if ($medFinal_1 > 10.0)
    {$erros = "A média não pode ser maior que 10";}

//----------------------------------------------------------------------


    $certificacao2 = $request['certificacao1'];
    if ($certificacao2 < 1 || $certificacao2 > 3)
    {$erros = "Cerificação Inválida.";}

    $teste_2 = $request['teste_2'];
    if ($teste_2 > 10)
    {$erros = "O teste não pode ser maior que 10";}

    $trab1_2 = $request['trab1_2'];
    if ($trab1_2 > 10)
    {$erros = "O trabalho não pode ser maior que 10";}

    $trab2_2 = $request['trab2_2'];
    if ($trab2_2 > 10)
    {$erros = "O trabalho não pode ser maior que 10";}

    $trab3_2 = $request['trab3_2'];
    if($trab3_2 > 10)
    {$erros = "O trabalho não pode ser maior que 10";}

    $prova_2 = $request['prova_2'];
    if ($prova_2 > 10)
    {$erros = "A prova não pode ser maior que 10";}

    $apoio_2 = $request['apoio_2'];
    if ($apoio_2 > 10.0)
    {$erros = "O apoio não pode ser maior que 10";}

    $medFinal_2 = $request['medfinal_2'];
    if ($medFinal_2 > 10.0)
    {$erros = "A média não pode ser maior que 10";}

//----------------------------------------------------------------------

    $certificacao3 = $request['certificacao3'];
    if ($certificacao3 < 1 || $certificacao3 > 3)
    {$erros = "Cerificação Inválida.";}

    $teste_3 = $request['teste_3'];
    if ($teste_3 > 10)
    {$erros = "O teste não pode ser maior que 10";}

    $trab1_3 = $request['trab1_3'];
    if ($trab1_3 > 10)
    {$erros = "O trabalho não pode ser maior que 10";}

    $trab2_3 = $request['trab2_3'];
    if ($trab2_3 > 10)
    {$erros = "O trabalho não pode ser maior que 10";}

    $trab3_3 = $request['trab3_3'];
    if($trab3_3 > 10)
    {$erros = "O trabalho não pode ser maior que 10";}

    $prova_3 = $request['prova_3'];
    if ($prova_1 > 10)
    {$erros = "A prova não pode ser maior que 10";}

    $apoio_3 = $request['apoio_3'];
    if ($apoio_3 > 10.0)
    {$erros = "O apoio não pode ser maior que 10";}

    $medFinal_3 = $request['medfinal_3'];
    if ($medFinal_3 > 10.0)
    {$erros = "A média não pode ser maior que 10";}

  session_start();
  if (empty($erros) == true) {
    SalvarNotas($request['certificacao1'], $request['teste_1'], $request['trab1_1'],
    $request['trab2_1'], $request['trab3_1'], $request['prova_1'], $request['apoio_1'],
    $request['medfinal_1']);
    SalvarNotas($request['certificacao2'], $request['teste_2'], $request['trab1_2'],
    $request['trab2_2'], $request['trab3_2'], $request['prova_2'], $request['apoio_2'],
    $request['medfinal_2']);
    SalvarNotas($request['certificacao3'], $request['teste_3'], $request['trab1_3'],
    $request['trab2_3'], $request['trab3_3'], $request['prova_3'], $request['apoio_3'],
    $request['medfinal_3']);
    header('Location: paginaNotas.php');
  }
  else{
      echo $erros;
  }

?>
