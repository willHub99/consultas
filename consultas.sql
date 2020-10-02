/*criando banco de dados sistema consultas*/

CREATE DATABASE sistema_consultas;
/*cria a tabela para armazenar os dados do usuario*/
CREATE TABLE usuario (
    idUsuario integer NOT NULL AUTO_INCREMENT,
    nomeUsuario char(50) NOT NULL,
    contatoUsuario char(15) NOT NULL,
    idadeUsuario numeric(3) NOT NULL,
    sexoUsuario char(1) NOT NULL,
    cpfUsuario char(13) NOT NULL,
    rgUsuario char(11) NOT NULL,
    dataNascimento date NOT NULL,
    senhaUsuario  char(30) NOT NULL,
    repetirSenhaUsuario char(30) NOT NULL,
    emailUsuario char(20) NOT NULL,
    repetirEmailUsuario char(20) NOT NULL,
    enderecoUsuario char(40) NOT NULL,
    municipioUsuario char(20) NOT NULL,
    estadoUsuario char(2) NOT NULL,
    primary key (idUsuario)
);

CREATE TABLE medico (
    idUsuario integer,
    idMedico integer  AUTO_INCREMENT,
    nomeMedico char(50),
    constraint fk_idusuario foreign key (idUsuario) references usuario(idUsuario),
    primary key (idMedico)
);

CREATE TABLE consulta (
    idUsuario integer,
    idMedico integer,
    idConsulta integer AUTO_INCREMENT,
    nomePaciente char(50),
    nomeAcompanhante char(50),
    nomeMedico char(50),
    dataConsulta date,
    tipoConsulta char(30),
    sintomas text,
    constraint fk_usuarioid foreign key (idUsuario) references usuario(idUsuario),
    constraint fk_medicoid foreign key (idMedico) references medico(idMedico),
    primary key (idConsulta)
);


/*insere dados na tabela usuario para teste*/
INSERT INTO usuario(idUsuario, nomeUsuario, contatoUsuario, idadeUsuario, sexoUsuario, cpfUsuario, rgUsuario, dataNascimento, senhaUsuario, repetirSenhaUsuario, emailUsuario, repetirEmailUsuario, enderecoUsuario, municipioUsuario, estadoUsuario) 
VALUES (1,'willian', '(45) 9 99999999', 21, 'M', '99999999-99', '99999999-9', "1999/02/01", 'will1999hub', 'will1999hub', 'willian@gmail.com', 'willian@gmail.com', 'rua das camelias', 'Toledo', 'PR');

INSERT INTO medico(idUsuario, idMedico, nomeMedico) 
VALUES (1, 1, 'Matheus');

INSERT INTO consulta(idUsuario, idMedico, idConsulta, nomePaciente, nomeAcompanhante, nomeMedico, dataConsulta, tipoConsulta, sintomas) 
VALUES (1, 1, 1, 'willian', 'joão', 'Matheus', "2020/09/02", 'Cardiologia', 'dor de cabeça');
