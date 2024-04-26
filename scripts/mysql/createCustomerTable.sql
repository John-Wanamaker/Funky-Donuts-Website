-- #createCustomerTable.sql
-- #TABLE structure for table 'my_Customers'

DROP TABLE IF EXISTS my_Customers;


CREATE TABLE my_Customers (
    customer_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    salutation VARCHAR(4) NOT NULL,
    first_name VARCHAR(15) NOT NULL,
    middle_initial CHAR(2) DEFAULT NULL,
    last_name VARCHAR(15) NOT NULL,
    gender VARCHAR(6) NOT NULL,
    email VARCHAR(30) NOT NULL UNIQUE,
    phone_number VARCHAR(15) DEFAULT NULL,
    street_address VARCHAR(30) NOT NULL,
    city VARCHAR(15) NOT NULL,
    region VARCHAR(2) NOT NULL,
    postal_code VARCHAR(7) NOT NULL,
    date_time DATETIME NOT NULL,  -- Registration date and time
    login_name VARCHAR(15) NOT NULL,
    login_password VARCHAR(32) NOT NULL -- Storing encrypted password is recommended
);