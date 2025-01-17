-- Criação da tabela de Usuários
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    data_usuario TIMESTAMP DEFAULT CURRENT_TIMESTAMP);
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP