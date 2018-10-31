 <?php
  require_once('funcoes.php');
  session_start();
  if (array_key_exists('id', $_REQUEST))
  {
    $idMateria = $_REQUEST['id'];
  }
  else {
    $idMateria = null;
  }
?>
<!DOCTYPE html>
<html xml:lang="pt" lang="pt">
	<head>
		<title>Cotton Candy</title>
		<link rel="shortcut icon" href="logo1.png" />
		<link rel="stylesheet" href="stylesNotas.css">
	</head>

	<body style="overflow:hidden">

		<div id="menu">
			<ul>
				<a href="Inicio.php">
				<div id="fotologo">
				<img src="menulogo.jpg" width=250px>
				</div>
				</a>
	    	<li></li>
				<li><a href="paginaPerfil.php">Perfil</a></li>
	      <br>
				<li><a href="paginaCalendario.php">Calendário</a></li>
	      <br>
				<li><a href="paginaNotas.php">Notas</a> </li>
				<br>
				<li><a href="Controlador/Sair.php">Sair</a></li>
				<li><img id="fotomenu" src="fotodomenu.png"> </li>
			</ul>
		</div>

		<br><div id="tbnotas">
			<div id="minhasnotas"><p> <h1> Minhas Notas</h1> </p></div>
      <form action="SalvarNotas.php" method="post">
  			<table id="tabela">
  				<tr class="avaliacoes">
  					<td>
              <?ph p $materias = PegaMateriasDoAluno($_SESSION['idAluno']) ?>
              <select id="selectbox" onchange="myFunction(this)">
                <?php foreach ($materias as $m) { ?>
                  <option value="<?php echo $m['id_Materia'] ?>"
                    <?php if ($m['id_Materia'] == $idMateria) { echo "selected"; } ?>>
                    <?php echo $m['Nome'] ?>
                  </option>
                <?php } ?>
              </select>
            </td>
  					<td> TESTE </td>
  				  <td> TRABALHO 1 </td>
  					<td> TRABALHO 2 </td>
  					<td> TRABALHO 3 </td>
  					<td> PROVA </td>
  					<td> APOIO/PFV </td>
  					<td> MÉDIA FINAL</td>
  				</tr>

  				<tr class="notas">
  					<td class="semestre"><input name="certificacao1" type="hidden" value="1"/> PRIMEIRA CERTIFICAÇÃO </td>
  					<td><input name="teste_1" type="text" placeholder="A"/></td>
  					<td><input name="trab1_1" type="text" placeholder="A"/></td>
  					<td><input name="trab2_1" type="text" placeholder="A"/></td>
  					<td><input name="trab3_1" type="text" placeholder="A"/></td>
  					<td><input name="prova_1" type="text" placeholder="A"/></td>
  					<td><input name="apoio_1" type="text" placeholder="A"/></td>
  					<td><input name="medfinal_1" type="text" placeholder="A"/></td>
  				</tr>

  				<tr class="notas">
  					<td class="semestre"><input name="certificacao2" type="hidden" value="2"/> SEGUNDA CERTIFICAÇÃO </td>
  					<td><input name="teste_2" type="text" placeholder="A"/></td>
  					<td><input name="trab1_2" type="text" placeholder="A"/></td>
  					<td><input name="trab2_2" type="text" placeholder="A"/></td>
  					<td><input name="trab3_2" type="text" placeholder="A"/></td>
  					<td><input name="prova_2" type="text" placeholder="A"/></td>
  					<td><input name="apoio_2" type="text" placeholder="A"/></td>
  					<td><input name="medfinal_2" type="text" placeholder="A"/></td>
  				</tr>

  				<tr class="notas">
  					<td class="semestre"><input name="certificacao3" type="hidden" value="3"/> TERCEIRA CERTIFICAÇÃO </td>
  					<td><input name="teste_3" type="text" placeholder="A"/></td>
  					<td><input name="trab1_3" type="text" placeholder="A"/></td>
  					<td><input name="trab2_3" type="text" placeholder="A"/></td>
  					<td><input name="trab3_3" type="text" placeholder="A"/></td>
  					<td><input name="prova_3" type="text" placeholder="A"/></td>
  					<td><input name="apoio_3" type="text" placeholder="A"/></td>
  					<td><input name="medfinal_3" type="text" placeholder="A"/></td>
  				</tr>

  			</table>
        <button id="botaoSalvar" type="submit"> Salvar </button>
      </form>
	   </div>
     <script>
       function myFunction(select) {
           var x = document.getElementById("selectbox").value;
           window.location.href = `paginaNotas.php?id=${x}`;}
     </script>
	<body>
</html>
