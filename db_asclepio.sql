-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.



CREATE TABLE Boletim (
arquivo varchar(200),
ID_boletim int PRIMARY KEY,
BI_coordenador char(14)
);

CREATE TABLE Encarregado (
BI_Encarregado char(14) PRIMARY KEY,
Nome_completo varchar(70),
Morada varchar(35),
Email varchar(30),
Senha char(128),
Telefone char(13),
Sexo enum('Masculino','Feminino'),
BI_coordenador char(14)
);

CREATE TABLE Comunicado (
arquivo varchar(200),
ID_comunic int PRIMARY KEY,
BI_coordenador char(14)
);

CREATE TABLE Coordenador (
BI_coordenador char(14) PRIMARY KEY,
Nome_completo varchar(70),
Morada varchar(35),
Sexo enum('Masculino','Feminino'),
Data_nascimento date,
Telefone char(13),
Email varchar(30),
Senha char(128)
);

CREATE TABLE Aluno (
Turma varchar(35),
Senha char(128),
Encarregado char(14),
BI Char(14) PRIMARY KEY,
Sexo enum('Masculino','Feminino'),
Curso enum('Enfermagem','Estomatologia','Farmacia','Analises Clinicas'),
Nome_completo varchar(70),
Email varchar(30),
Data_nascimento date,
Telefone char(13),
Morada varchar(35),
BI_coordenador char(14),
BI_Encarregado char(14),
FOREIGN KEY(BI_coordenador) REFERENCES Coordenador (BI_coordenador),
FOREIGN KEY(BI_Encarregado) REFERENCES Encarregado (BI_Encarregado)
);

ALTER TABLE Boletim ADD FOREIGN KEY(BI_coordenador) REFERENCES Coordenador (BI_coordenador);
ALTER TABLE Encarregado ADD FOREIGN KEY(BI_coordenador) REFERENCES Coordenador (BI_coordenador);
ALTER TABLE Comunicado ADD FOREIGN KEY(BI_coordenador) REFERENCES Coordenador (BI_coordenador);
