CREATE TABLE users(id int AUTO_INCREMENT PRIMARY KEY, name varchar(255), email varchar(255) UNIQUE NOT NULL, password varchar(255) NOT NULL, profile varchar(255), create_at timestamp, updated_at timestamp);

CREATE TABLE students (id int AUTO_INCREMENT PRIMARY KEY, filiere varchar(255), entite varchar(255), user_id int, FOREIGN KEY (user_id) REFERENCES users (id), create_at timestamp, updated_at timestamp);

CREATE TABLE companies (id int AUTO_INCREMENT PRIMARY KEY, name varchar(255), sector varchar(255), about text, location varchar(255), create_at timestamp, updated_at timestamp);

CREATE TABLE employees (id int AUTO_INCREMENT PRIMARY KEY, role varchar(255), user_id int, company_id int, FOREIGN KEY (user_id) REFERENCES users (id), FOREIGN KEY (company_id) REFERENCES companies (id), create_at timestamp, updated_at timestamp);

CREATE TABLE offers (id int AUTO_INCREMENT PRIMARY KEY, position varchar(255), nb_interns int, description varchar(255), details text, company_id int, FOREIGN KEY (company_id) REFERENCES companies (id), create_at timestamp, updated_at timestamp);

CREATE TABLE applications (id int AUTO_INCREMENT PRIMARY KEY, student_id int, offer_id int, FOREIGN KEY (student_id) REFERENCES students (id), FOREIGN KEY (offer_id) REFERENCES offers (id), status varchar(255), create_at timestamp, updated_at timestamp);

CREATE TABLE internships (id int AUTO_INCREMENT PRIMARY KEY, student_id int, offer_id int, start timestamp, end timestamp, FOREIGN KEY (student_id) REFERENCES students (id), FOREIGN KEY (offer_id) REFERENCES offers (id), create_at timestamp, updated_at timestamp);