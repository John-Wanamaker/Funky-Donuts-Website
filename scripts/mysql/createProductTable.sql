DROP TABLE IF EXISTS my_Products;
CREATE TABLE my_Products (
    product_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(40) NOT NULL,
    catCode VARCHAR(3) NOT NULL,
    price DECIMAL(6,2) NOT NULL,
    quantity INT NOT NULL,
    image_file VARCHAR(30) NOT NULL
);