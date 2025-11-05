TEMA:
Um site para cadastrar pessoas de todo o mundo para reservar viagens acadêmicas.
DESAFIOS:
Os principais desafios enfrentados foram a implementação da lógica do PHP para conectar e enviar os dados ao banco de dados desejado, como as condicionai, e as cláusulas SQL.
INSTRUÇÕES DE USO:
Para rodar o projeto é necessário executar o XAMPP para acessar o seguinte link: http://localhost/projeto1/, assim o usuário irá para o site institucional.
Caso o usuário deseje acessar a parte administrativa, deve-se acessar o seguinte link: http://localhost/projeto1/admin/admin.php
Quando rodar o projeto, para criar o banco de dados deve-se executar seguinte o código abaixo na parte administrativa do banco de dados:
CREATE DATABASE IF NOT EXISTS projeto1;

USE projeto1;

CREATE TABLE contatos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  data_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente VARCHAR(150) NOT NULL,
    cidade VARCHAR(100) NOT NULL,
    estado CHAR(2) NOT NULL
);
