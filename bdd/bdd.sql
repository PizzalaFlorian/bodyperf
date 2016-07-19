CREATE TABLE users (
                login varchar(60) NOT NULL,
                email varchar(60),
                type_user varchar(60),
                password varchar(60),
                PRIMARY KEY (login)
);

CREATE TABLE clients (
                id BIGINT AUTO_INCREMENT NOT NULL,
                login varchar(60) NOT NULL,
                nom varchar(60),
                prenom varchar(60),
                credit_sceance INT,
                credit_duo INT,
                fin_abonnement datetime,
                PRIMARY KEY (id)
);


CREATE TABLE reservations (
                reservation_id BIGINT AUTO_INCREMENT NOT NULL,
                client_id BIGINT NOT NULL,
                date datetime NOT NULL,
                PRIMARY KEY (reservation_id)
);

ALTER TABLE clients ADD CONSTRAINT users_client_fk
FOREIGN KEY (login)
REFERENCES users (login)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE reservations ADD CONSTRAINT client_reservation_fk
FOREIGN KEY (client_id)
REFERENCES clients (id)
ON DELETE NO ACTION
ON UPDATE NO ACTION;