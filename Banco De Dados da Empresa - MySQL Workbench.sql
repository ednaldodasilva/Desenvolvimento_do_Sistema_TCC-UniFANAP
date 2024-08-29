CREATE DATABASE jantinha_db;                                              #Criação do Banco de Dados da empresa!

USE jantinha_db;                                                          #Selecionar o Banco de dados da empresa para adicionar os requisitos!

CREATE TABLE pedidos (                                                    #Criação da tabela!
	id INT AUTO_INCREMENT PRIMARY KEY,                                    #Id da variavel dos pedidos!
    data_pedido DATETIME NOT NULL,                                        #Variavel para a data dos pedidos!
    nome_cliente VARCHAR(250) NOT NULL,                                   #Variavel para o nome de cliente!
    status ENUM('pendente', 'concluido', 'cancelado') DEFAULT 'pendente', #Variavel para o status do pedido do cliente!
    total DECIMAL(10, 2) NOT NULL                                         #Variavel para o pedido total divido por dois!
);

CREATE TABLE itens_pedidos (											  #Criação da tabela dos itens pedidios!
	id INT AUTO_INCREMENT PRIMARY KEY,									  #Id da variavel itens_pedidos
    pedido_id INT NOT NULL,                                               #Varaivel de pedidos
    produto_id INT NOT NULL,                                              #Variavel dos produtos
    quantidade INT NOT NULL,                                              #Variavel das quantidades
    preco DECIMAL(10,2) NOT NULL,                                         #Variavel preco dividido por dois
    FOREIGN KEY (pedido_id) REFERENCES pedidos(id),                       #
    FOREIGN KEY (produto_id) REFERENCES produtos(id)                      #
);

CREATE TABLE produtos (                                                   
	id INT AUTO_INCREMENT PRIMARY KEY,                                    
    nome VARCHAR(255) NOT NULL,                                           
    descricao TEXT,                                                       
    preco DECIMAL(10,2) NOT NULL,                                         
    quantidade_estoque INT NOT NULL                                       
);

CREATE TABLE movimentacoes_financeiras (                                  
	id INT AUTO_INCREMENT PRIMARY KEY,                                    
    data_movimentacoes DATETIME NOT NULL,                                 
    tipo ENUM ('entrada', 'saída') NOT NULL,                              
    valor DECIMAL(10,2) NOT NULL,                                         
    descricao TEXT                                                        
);

CREATE TABLE funcionarios (
	id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR (100),
    cargo VARCHAR (50),
    salario DECIMAL (10,2),
    data_contratacao DATE,
    registro_ponto TEXT
);

CREATE TABLE comandas (
	id INT AUTO_INCREMENT PRIMARY KEY,
    numero_comanda INT,
    data_hora DATETIME,
    status ENUM ('em andamento', 'finalizada', 'cancelada'),
    valor_total DECIMAL(10,2)
);

CREATE TABLE itens_comandas (
	id INT AUTO_INCREMENT PRIMARY KEY,
    comanda_id INT,
    produto_id INT,
    quantidade INT,
    valor_unitario DECIMAL(10,2),
    FOREIGN KEY (comanda_id) REFERENCES comandas(id),
    FOREIGN KEY (produto_id) REFERENCES produtos(id)
);