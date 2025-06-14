create database ecoPlan360;
use ecoPlan360;

CREATE TABLE projetos (
    id_projeto INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    data_inicio DATE NOT NULL,
    duracao INT NOT NULL,
    responsavel VARCHAR(100),
    descricao VARCHAR(250)
);

CREATE TABLE recursos_projeto (
    id_recurso INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    projeto_id INT NOT NULL,
    recurso VARCHAR(100) NOT NULL,
    quantidade INT NOT NULL,
    valor_unitario DECIMAL(10,2) NOT NULL,
    custo_total DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (projeto_id) REFERENCES projetos(id_projeto) ON DELETE CASCADE
);

select * from recursos_projeto;
