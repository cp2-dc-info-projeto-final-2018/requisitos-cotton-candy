USE [Cotton Candy];

CREATE TABLE Aluno(
	id_Aluno INT PRIMARY KEY NOT NULL,
	Nome VARCHAR(100) NOT NULL,
	Email VARCHAR(50) NOT NULL,
	Usuário VARCHAR(30) NOT NULL,
	Senha VARCHAR(20) NOT NULL);

CREATE TABLE TarefaEvento(
	id_TarefaEvento INT PRIMARY KEY NOT NULL,
	Nome VARCHAR(100) NOT NULL,
	Cor VARCHAR(7) NOT NULL,
	id_Aluno INT CONSTRAINT fk_Aluno FOREIGN KEY REFERENCES Aluno(id_Aluno));

CREATE TABLE Avaliacao(
	id_Avaliacao INT PRIMARY KEY NOT NULL,
	Tipo VARCHAR(100) NOT NULL,
	id_Nota INT CONSTRAINT fk_Nota FOREIGN KEY REFERENCES Nota(id_Nota));

CREATE TABLE Materia(
	id_Materia INT PRIMARY KEY NOT NULL,
	Nome VARCHAR(100) NOT NULL,
	Cor VARCHAR(7) NOT NULL,
	id_Aluno INT CONSTRAINT fk_Aluno FOREIGN KEY REFERENCES Aluno(id_Aluno));

CREATE TABLE MateriaAvaliacao(
	id_MateriaAv INT PRIMARY KEY NOT NULL,
	id_Avaliacao INT CONSTRAINT fk_Avaliacao FOREIGN KEY REFERENCES Avaliacao(id_Avaliacao),
	id_Materia INT CONSTRAINT fk_Materia FOREIGN KEY REFERENCES Materia(id_Materia));

CREATE TABLE Nota(
	id_Nota INT PRIMARY KEY NOT NULL,
	Valor FLOAT,
	id_Avaliacao INT CONSTRAINT fk_Avaliacao FOREIGN KEY REFERENCES Avaliacao(id_Avaliacao));