<?php
    require_once('ConexaoBd.php');
    $bd = CriaConexãoBD();

    $sql = 'CREATE TABLE Usuario(
    	id_Aluno INT PRIMARY KEY NOT NULL,
    	Nome VARCHAR(100) NOT NULL,
      Sobrenome VARCHAR(100) NOT NULL,
    	Email VARCHAR(50) NOT NULL,
    	Usuario VARCHAR(30) NOT NULL,
    	Senha VARCHAR(20) NOT NULL,
    	Instituicao VARCHAR(50))';

    $bd->exec($sql);

    $sql = 'CREATE TABLE Materia(
    	id_Materia INT PRIMARY KEY NOT NULL,
    	Nome VARCHAR(100) NOT NULL,
    	Cor VARCHAR(7) NOT NULL,
    	FOREIGN KEY (id_Aluno) REFERENCES Aluno(id_Aluno))';

    $bd->exec($sql);

    $sql = 'CREATE TABLE Avaliacao(
    	id_Avaliacao INT PRIMARY KEY NOT NULL,
    	Tipo VARCHAR(100) NOT NULL,
      Valor FLOAT,
      FOREIGN KEY (id_Aluno) REFERENCES Aluno(id_Aluno),
      FOREIGN KEY (id_Materia) REFERENCES Materia(id_Materia))';

    $sql = 'CREATE TABLE Tarefa(
    	id_Tarefa INT PRIMARY KEY NOT NULL,
    	Nome VARCHAR(100) NOT NULL,
    	Cor VARCHAR(7) NOT NULL,
    	Descricao VARCHAR(100),
    	Data_Termino DATE,
    	Hora_Termino DATE,
    	FOREIGN KEY (id_Aluno) REFERENCES Aluno(id_Aluno))';

    $bd->exec($sql);

    $sql = 'CREATE TABLE Evento(
    	id_Evento INT PRIMARY KEY NOT NULL,
    	Nome VARCHAR(100) NOT NULL,
    	Lugar VARCHAR(100),
    	Data_Termino DATE,
    	Hora_Inicio DATE,
    	Hora_Termino DATE,
    	FOREIGN KEY (id_Aluno) REFERENCES Aluno(id_Aluno))';

    $bd->exec($sql);
?>
