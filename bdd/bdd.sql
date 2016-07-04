
CREATE TABLE client (
                client_id BIGINT AUTO_INCREMENT NOT NULL,
                email VARCHAR NOT NULL,
                password VARCHAR NOT NULL,
                nom VARCHAR NOT NULL,
                prenom VARCHAR NOT NULL,
                credit_sceance INT,
                credit_duo INT NOT NULL,
                fin_abonnement DATE,
                PRIMARY KEY (client_id)
);


CREATE TABLE reservation (
                reservation_id BIGINT AUTO_INCREMENT NOT NULL,
                client_id BIGINT NOT NULL,
                date DATE NOT NULL,
                PRIMARY KEY (reservation_id, client_id)
);


ALTER TABLE reservation ADD CONSTRAINT client_reservation_fk
FOREIGN KEY (client_id)
REFERENCES client (client_id)
ON DELETE NO ACTION
ON UPDATE NO ACTION;