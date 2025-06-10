CREATE DATABASE ecoPlan360;
USE ecoPlan360;

-- Tabela de Projetos
CREATE TABLE projeto (
    id_projeto INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    data_inicio DATE NOT NULL,
    duracao INT NOT NULL,
    responsavel VARCHAR(100),
    descricao VARCHAR(250)
);

-- Tabela de Recursos do Projeto
CREATE TABLE recursos_projeto (
    id_recurso INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    projeto_id INT NOT NULL,
    recurso VARCHAR(100) NOT NULL,
    quantidade INT NOT NULL,
    valor_unitario DECIMAL(10,2) NOT NULL,
    custo_total DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (projeto_id) REFERENCES projeto(id_projeto) ON DELETE CASCADE
);
	
-- Consultas para visualização
SELECT * FROM projeto;
SELECT * FROM recursos_projeto;
