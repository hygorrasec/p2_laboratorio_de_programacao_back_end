CREATE DATABASE IF NOT EXISTS php_amigos; USE php_amigos; CREATE TABLE IF NOT EXISTS amigos ( id INT AUTO_INCREMENT PRIMARY KEY, nome VARCHAR(100) NOT NULL, endereco VARCHAR(255) NOT NULL, bairro VARCHAR(100) NOT NULL, cidade VARCHAR(100) NOT NULL, estado VARCHAR(2) NOT NULL, cep VARCHAR(9) NOT NULL );