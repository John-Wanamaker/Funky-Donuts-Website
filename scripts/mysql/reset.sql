#reset.sql

#createProductTable.sql
DROP TABLE IF EXISTS my_Products;
CREATE TABLE my_Products (
    product_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(40) NOT NULL,
    catCode VARCHAR(3) NOT NULL,
    price DECIMAL(6,2) NOT NULL,
    quantity INT NOT NULL,
    image_file VARCHAR(30) NOT NULL
);

#loadProducts.sql
DELETE FROM my_Product;
LOAD DATA LOCAL INFILE 'Products.csv'
    INTO TABLE  my_Product
    FIELDS TERMINATED BY ',';

#createOrderTable.sql
DROP TABLE IF EXISTS my_Order;
CREATE TABLE my_Order (
    order_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    customer_id INT NOT NULL,
    order_status VARCHAR(2) NOT NULL,
    date_time DATETIME NOT NULL
);

#createOrderItemTable.sql
DROP TABLE IF EXISTS my_OrderItem;
CREATE TABLE my_OrderItem (
    order_item_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    order_item_name VARCHAR(40) NOT NULL,
    order_item_status VARCHAR(2) NOT NULL,
    order_id INT NOT NULL,
    product_id INT NOT NULL,
    quantity INT NOT NULL,
    price DECIMAL(6,2) NOT NULL
);




