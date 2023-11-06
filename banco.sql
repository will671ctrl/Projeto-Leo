create database atividade;

use atividade;

create table email (
cod_email int auto_increment primary key,
email_usu varchar(50) not null,
mensagem varchar(200) not null );
