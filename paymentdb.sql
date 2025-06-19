CREATE database paymentdb;

 use database paymentdb;

CREATE TABLE `student_payments` (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255),
  email VARCHAR(255),
  phone VARCHAR(20),
  password VARCHAR(255),
  id_card VARCHAR(255),
  payment_id VARCHAR(100),
  amount INT,
  status VARCHAR(20)
);

CREATE TABLE `ceg_payments` (
     id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255),
  email VARCHAR(255),
  phone VARCHAR(20),
  password VARCHAR(255),
  id_card VARCHAR(255),
  payment_id VARCHAR(100),
  amount INT,
  status VARCHAR(20)
);


CREATE TABLE `low_income_payments` (
     id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255),
  email VARCHAR(255),
  phone VARCHAR(20),
  password VARCHAR(255),
  id_card VARCHAR(255),
  payment_id VARCHAR(100),
  amount INT,
  status VARCHAR(20)
);

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255),
  email VARCHAR(255),
  phone VARCHAR(20),
  password VARCHAR(255),
  file_path VARCHAR(255),
  payment_id VARCHAR(100),
  amount INT,
  status VARCHAR(50)
);

