CREATE DATABASE db_upload default character set utf8 default collate utf8_general_ci;

CREATE TABLE arquivos(
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    files VARCHAR(255) NOT NULL
)default character set utf8 default collate utf8_general_ci;