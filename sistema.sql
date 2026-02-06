CREATE DATABASE sistema_moveis;
USE sistema_moveis;

CREATE TABLE tipo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL
);

CREATE TABLE material (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL
);

CREATE TABLE movel (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150) NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    tipo_id INT NOT NULL,
    material_id INT NOT NULL,
    FOREIGN KEY (tipo_id) REFERENCES tipo(id),
    FOREIGN KEY (material_id) REFERENCES material(id)
);

INSERT INTO tipo (nome) VALUES
('Mesa'), ('Cadeira'), ('Armário'), ('Sofá');

INSERT INTO material (nome) VALUES
('Madeira'), ('Metal'), ('Plástico'), ('Vidro');

