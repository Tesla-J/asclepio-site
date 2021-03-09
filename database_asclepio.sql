CREATE DATABASE IF NOT EXISTS asclepio;
USE asclepio;

CREATE TABLE IF NOT EXISTS Coordenador(
    BI_Coordenador CHAR(14) NOT NULL,
    Nome_Completo varchar(70) not null unique,
    Morada varchar(35) not null,
    Sexo enum('M','F'),
    Data_Nascimento date not null,
    Telefone char(13) unique not null,
    Email varchar(30) unique not null,
    Senha char(128) not null,
    PRIMARY KEY(BI_Coordenador)
);

CREATE TABLE IF NOT EXISTS Encarregado(
    BI_Encarregado char(14) not null,
    Nome_Completo varchar(70) not null unique,
    Morada varchar(35) not null,
    Email varchar(30) not null unique,
    Senha char(128) not null,
    Telefone char(13) not null unique,
    Sexo enum('M','F'),
    BI_Coordenador char(14) not null,
    PRIMARY KEY(BI_Encarregado),
    FOREIGN KEY (BI_Coordenador) REFERENCES Coordenador(BI_Coordenador)
);

CREATE TABLE IF NOT EXISTS Aluno(
    Turma varchar(35) not null,
    Senha char(128) not null,
    BI char(14) not null,
    Sexo enum('M','F'),
    Curso enum('Enfermagem','Estomatologia','Farmacologia','Análises Clínicas'),
    Nome_Completo varchar(70) not null unique,
    Email varchar(30) not null unique,
    Data_Nascimento date not null,
    Telefone char(13) not null unique,
    Morada varchar(35) not null,
    BI_Coordenador char(14) not null,
    BI_Encarregado char(14) not null,
    PRIMARY KEY(BI),
    FOREIGN KEY(BI_Coordenador) REFERENCES Coordenador(BI_Coordenador),
    FOREIGN KEY(BI_Encarregado) REFERENCES Encarregado(BI_Encarregado)
);

CREATE TABLE IF NOT EXISTS Boletim(
    Arquivo varchar(200) not null unique,
    ID_Boletim int not null auto_increment,
    BI_Coordenador char(14) not null,
    PRIMARY KEY(ID_Boletim),
    FOREIGN KEY(BI_Coordenador) REFERENCES Coordenador(BI_Coordenador)
);

CREATE TABLE IF NOT EXISTS Comunicado(
    Arquivo varchar(200) not null unique,
    ID_Boletim int not null auto_increment,
    BI_Coordenador char(14) not null,
    PRIMARY KEY(ID_Boletim),
    FOREIGN KEY(BI_Coordenador) REFERENCES Coordenador(BI_Coordenador)
);
