use mydb;

insert into usuario
(nome, data_nascimento, cpf, email, senha, cargo, perfil_cod_perfil)
values
('JoaoCoordenador', '1990-01-01', '04813856900', 'joaoCoord@gmail.com', '123456', 'coordenador', (select cod_perfil from perfil where descricao_perfil = 'Coordenador'));

insert into usuario
(nome, data_nascimento, cpf, email, senha, cargo, perfil_cod_perfil)
values
('JoaoAluno', '1990-01-01', '04813856900', 'joaoAluno@gmail.com', '123456', 'coordenador', (select cod_perfil from perfil where descricao_perfil = 'Aluno'));
update usuario set cargo = 'estudante' where perfil_cod_perfil =4;

insert into usuario
(nome, data_nascimento, cpf, email, senha, cargo, perfil_cod_perfil)
values
('JoaoSecretaria', '1990-01-01', '04813856900', 'joaoSecretaria@gmail.com', '123456', 'secretário', (select cod_perfil from perfil where descricao_perfil = 'Secretaria'));



