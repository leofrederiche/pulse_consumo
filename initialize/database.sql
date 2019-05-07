CREATE TABLE pulseira(
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    rfid INTEGER NOT NULL,
    saldo INTEGER
);

CREATE TABLE movimentacao(
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_pulseira INTEGER,
    valor DOUBLE,
    descricao VARCHAR(255),
    data_movimentacao TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO pulseira(rfid, saldo) VALUES(1, 0);
INSERT INTO pulseira(rfid, saldo) VALUES(2, 50);
INSERT INTO movimentacao(id_pulseira, valor, descricao) VALUES(2, 50, 'Primeiro saldo');