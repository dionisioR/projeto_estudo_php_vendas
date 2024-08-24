create database projeto_estudo_php_vendas;
use projeto_estudo_php_vendas;
create table produto(
pro_id integer primary key auto_increment,
pro_nome varchar(40) not null,
pro_descricao varchar(255) not null,
pro_preco double not null
)engine=InnoDB;
