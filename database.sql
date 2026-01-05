CREATE DATABASE IF NOT EXISTS gestion_clients;
USE gestion_clients;

CREATE TABLE IF NOT EXISTS clients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    sexe ENUM('Homme', 'Femme') NOT NULL,
    ville VARCHAR(50) NOT NULL,
    loisirs VARCHAR(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

