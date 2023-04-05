create table upa(id serial not NULL primary key,
                nome varchar(100),
                localizacao varchar(100)
                );

create table medico(id serial not null primary key,
                    nome varchar(50),
                    datanascimento date,
                    crm varchar(14) unique,
                    especialidade varchar(100),
                    afiliacao int references upa(id)
                    );

create table enfermeira(id serial not null primary key,
                       nome varchar(50),
                       cpf varchar(11) unique,
                       datanascimento date,
                       posologia varchar(50),
                       afiliacao int references upa(id)
                       );

create table farmacia(id serial not null primary key,
                      nome varchar(50),
                      localizacao varchar(50),
                      afiliacao int references upa(id)
                      );

create table remedio(id serial not null primary key,
                     nome varchar(50),
                     descricao varchar(100)
                     );

create table farmRemedio(id serial not null primary key,
                         idFarm int,
                         idRemedio int,
                         preco numeric(10,2),
                         qnt int,
                         FOREIGN KEY(idFarm) REFERENCES farmacia(id),
                         FOREIGN KEY(idRemedio) REFERENCES remedio(id)
                         );

create table receita(id serial not null primary key, 
                     descricao varchar(300),
                     qnt int,
                     medicoId int,
                     enfermeiraId int,
                     remedioId int,
                     FOREIGN KEY(medicoId) REFERENCES medico(id),
                     FOREIGN KEY(enfermeiraId) REFERENCES enfermeira(id),
                     FOREIGN KEY(remedioId) REFERENCES remedio(id)
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
