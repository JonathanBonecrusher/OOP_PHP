CREATE TABLE `ShopProduct` (
  product_id INT NOT NULL,
  PRIMARY KEY(product_id),
  title varchar(50) NOT NULL,
  producerFirstName varchar(50) NOT NULL,
  producerMainName varchar(50) NOT NULL,
  price float NOT NULL
);

CREATE TABLE `BookProduct` (
  bookProduct_id INT NOT NULL,
  PRIMARY KEY(bookProduct_id),
  product_id INT,
  title varchar(50),
  producerFirstName varchar(50),
  producerMainName varchar(50),
  price float,

  FOREIGN KEY (product_id) REFERENCES ShopProduct (product_id),
  FOREIGN KEY (title) REFERENCES ShopProduct (title),
  FOREIGN KEY (producerFirstName) REFERENCES ShopProduct (producerFirstName),
  FOREIGN KEY (producerMainName) REFERENCES ShopProduct (producerMainName),
  FOREIGN KEY (price) REFERENCES ShopProduct (price),

  pages int(11) NOT NULL
);

CREATE TABLE `CDProduct` (
  cdProduct_id INT NOT NULL,
  PRIMARY KEY(cdProduct_id),
  product_id INT,
  title varchar(50),
  producerFirstName varchar(50),
  producerMainName varchar(50),
  price float,
  
  FOREIGN KEY (product_id) REFERENCES ShopProduct (product_id),
  FOREIGN KEY (title) REFERENCES ShopProduct (title),
  FOREIGN KEY (producerFirstName) REFERENCES ShopProduct (producerFirstName),
  FOREIGN KEY (producerMainName) REFERENCES ShopProduct (producerMainName),
  FOREIGN KEY (price) REFERENCES ShopProduct (price),

  playLenght float NOT NULL
);

CREATE TABLE `BookProduct`(  
bookProduct_id INT NOT NULL,  
PRIMARY KEY(bookProduct_id),  
product_id INT,  
title varchar(50),  
producerFirstName varchar(50),  
producerMainName varchar(50),  
price float,  
FOREIGN KEY (product_id, title, producerFirstName, producerMainName, price) REFERENCES ShopProduct (product_id, title, producerFirstName, producerMainName, price),  
pages int(11) NOT NULL
)
