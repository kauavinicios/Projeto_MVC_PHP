CREATE TABLE upa (
  id SERIAL NOT NULL PRIMARY KEY,
  nome VARCHAR(100),
  localizacao VARCHAR(100)
);

CREATE TABLE medico (
  id SERIAL NOT NULL PRIMARY KEY,
  nome VARCHAR(50),
  datanascimento DATE,
  crm VARCHAR(14) UNIQUE,
  especialidade VARCHAR(100),
  afiliacao INT REFERENCES upa(id) ON DELETE CASCADE
);

CREATE TABLE enfermeira (
  id SERIAL NOT NULL PRIMARY KEY,
  nome VARCHAR(50),
  cpf VARCHAR(11) UNIQUE,
  datanascimento DATE,
  posologia VARCHAR(50),
  afiliacao INT REFERENCES upa(id) ON DELETE CASCADE
);

CREATE TABLE farmacia (
  id SERIAL NOT NULL PRIMARY KEY,
  nome VARCHAR(50),
  localizacao VARCHAR(50),
  afiliacao INT REFERENCES upa(id) ON DELETE CASCADE
);

CREATE TABLE remedio (
  id SERIAL NOT NULL PRIMARY KEY,
  nome VARCHAR(50),
  descricao VARCHAR(100)
);

CREATE TABLE farmRemedio (
  id SERIAL NOT NULL PRIMARY KEY,
  idFarm INT,
  idRemedio INT,
  preco NUMERIC(10,2),
  qnt INT,
  FOREIGN KEY(idFarm) REFERENCES farmacia(id) ON DELETE CASCADE,
  FOREIGN KEY(idRemedio) REFERENCES remedio(id) ON DELETE CASCADE
);

CREATE TABLE receita (
  id SERIAL NOT NULL PRIMARY KEY, 
  descricao VARCHAR(300),
  qnt INT,
  medicoId INT REFERENCES medico(id) ON DELETE CASCADE,
  enfermeiraId INT REFERENCES enfermeira(id) ON DELETE CASCADE,
  remedioId INT REFERENCES remedio(id) ON DELETE CASCADE
);


insert into upa(nome, localizacao)
    values('upa1', 'logo ali'),
    ('upa2', 'depois de logo ali'),
    ('upa3', 'logo la'),
    ('upa4', 'depois de logo la');

insert into medico(nome, datanascimento, crm, especialidade, afiliacao) 
    values('cristiano', '03-05-1969', '111.111.111–11', 'neurologista', 1),
    ('bruno', '05-05-1955', '222.222.222-22', 'ginecologista', 2),
    ('kaua', '03-03-2003', '333.333.333-33', 'otorino', 3),
    ('julia', '06-06-1989', '444.444.444-44', 'sexsologa', 4);

insert into enfermeira(nome, cpf, datanascimento, posologia, afiliacao) 
    values('cristiana', '99999999999', '04-04-2000', 'nao sei', 2),
    ('bruna', '88888888888', '07-10-1993', 'nao sei', 1),
    ('kauani', '77777777777', '09-01-1989', 'nao sei', 3),
    ('julio', '66666666666', '18-01-1987', 'nao sei', 4);

insert into farmacia(nome, localizacao, afiliacao)
    values('popular', 'logo ali', 1),
    ('mais barato', 'logo la', 2),
    ('iraci coelho', 'depois de logo la', 4),
    ('ultra farma', 'depois de logo ali', 4);

insert into remedio(nome, descricao)
    values('rivotril', 'bom pro estresse'),
    ('dorflex', 'bom para dores no corpo'),
    ('viagra', 'potencializa o soudado abatido'),
    ('dipirona', 'ajuda com a dor de cabeça');

insert into farmRemedio(idFarm, idRemedio, preco, qnt)
    values(1, 2, 30, 50),
    (3, 3, 79, 70),
    (2, 2, 9.90, 70),
    (4, 3, 50.30, 100),
    (4, 1, 7.99, 40),
    (1, 1, 67.78, 90);

insert into receita(descricao, qnt, medicoId, enfermeiraId, remedioId)
    values('ele ta mau', 1, 4, 2, 3),
    ('esse ta pessimo', 15, 2, 1, 4),
    ('vc vai melhorar', 2, 3, 3, 2),
    ('bora meu garoto', 2, 1, 4, 2);
