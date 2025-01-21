CREATE DATABASE logins;

CREATE TABLE logindata(
    id INT PRIMARY KEY AUTO_INCREMENT,
    login VARCHAR(255),
    pass VARCHAR(255)
);


INSERT INTO logindata (login, pass) VALUES 
('admin', 'test'), 
('login', 'password'), 
('log', 'pass');