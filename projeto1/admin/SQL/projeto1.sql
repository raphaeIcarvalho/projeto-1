/* 1. Cria o banco de dados 'projeto1'
     (IF NOT EXISTS evita erros se ele já existir)
*/
CREATE DATABASE IF NOT EXISTS projeto1;

/* 2. Seleciona o banco 'projeto1' para que os comandos
     seguintes sejam executados dentro dele.
*/
USE projeto1;

/* 3. Cria a tabela 'contatos', que será para o envio de dados em "Fale Conosco", DENTRO de 'projeto1'
*/
CREATE TABLE contatos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  data_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

/* 4. Cria a tabela 'clientes', que será para o envio de dados no cadastro de clientes administrativo,  DENTRO de 'projeto1'
*/
CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente VARCHAR(150) NOT NULL,
    cidade VARCHAR(100) NOT NULL,
    estado CHAR(2) NOT NULL

);
