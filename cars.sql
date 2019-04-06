DROP DATABASE IF EXISTS `cars`;
CREATE DATABASE IF NOT EXISTS `cars`;
USE `cars`;


DROP TABLE IF EXISTS `cars`;

CREATE TABLE `cars` (
  `modelID`     INTEGER NOT NULL AUTO_INCREMENT, 
  `filePath`    VARCHAR(255), 
  `type`   	    VARCHAR(255), 
  `modelName`   VARCHAR(255) NOT NULL, 
  `modelYear`   year(4), 
  `MPG-mean` 	int(1),
  `MPG-city` 	int(1),
  `MPG-highway` int(1),
  `BasePrice` 	int(1),
  `horsepower` 	int(1),
  `seating` 	int(1),
  INDEX (`modelID`), 
  PRIMARY KEY (`modelID`)
)  ENGINE=innodb DEFAULT CHARSET=utf8;

SET autocommit=1;
#cars
INSERT INTO cars (`modelName`, `filePath`, `type`, `modelYear`, `MPG-mean`, `MPG-city`, `MPG-highway`, `BasePrice`, `horsepower`, `seating`) 
VALUES ("Fire", "car3.jpg", "car", 2020, 12, 12, 12, 10000, 100, 10);

INSERT INTO cars (`modelName`, `filePath`, `type`, `modelYear`, `MPG-mean`, `MPG-city`, `MPG-highway`, `BasePrice`, `horsepower`, `seating`) 
VALUES ("Fire", "car1.jpg", "car", 2020, 12, 12, 12, 10000, 100, 10);

INSERT INTO cars (`modelName`, `filePath`, `type`, `modelYear`, `MPG-mean`, `MPG-city`, `MPG-highway`, `BasePrice`, `horsepower`, `seating`) 
VALUES ("Fire", "car2.jpg", "car", 2020, 12, 12, 12, 10000, 100, 10);

INSERT INTO cars (`modelName`, `filePath`, `type`, `modelYear`, `MPG-mean`, `MPG-city`, `MPG-highway`, `BasePrice`, `horsepower`, `seating`) 
VALUES ("Fire", "car4.jpg", "car", 2020, 12, 12, 12, 10000, 100, 10);

#suvs
INSERT INTO cars (`modelName`, `filePath`, `type`, `modelYear`, `MPG-mean`, `MPG-city`, `MPG-highway`, `BasePrice`, `horsepower`, `seating`) 
VALUES ("suv1", "suv1.jpg", "SUV", 2020, 12, 12, 12, 10000, 100, 10);

INSERT INTO cars (`modelName`, `filePath`, `type`, `modelYear`, `MPG-mean`, `MPG-city`, `MPG-highway`, `BasePrice`, `horsepower`, `seating`) 
VALUES ("suv2", "suv2.jpg", "SUV", 2020, 12, 12, 12, 10000, 100, 10);

INSERT INTO cars (`modelName`, `filePath`, `type`, `modelYear`, `MPG-mean`, `MPG-city`, `MPG-highway`, `BasePrice`, `horsepower`, `seating`) 
VALUES ("suv3", "suv3.jpg", "SUV", 2020, 12, 12, 12, 10000, 100, 10);

#trucks
INSERT INTO cars (`modelName`, `filePath`, `type`, `modelYear`, `MPG-mean`, `MPG-city`, `MPG-highway`, `BasePrice`, `horsepower`, `seating`) 
VALUES ("Fire", "truck1.jpg", "truck", 2020, 12, 12, 12, 10000, 100, 10);

INSERT INTO cars (`modelName`, `filePath`, `type`, `modelYear`, `MPG-mean`, `MPG-city`, `MPG-highway`, `BasePrice`, `horsepower`, `seating`) 
VALUES ("Fire", "truck2.jpg", "truck", 2020, 12, 12, 12, 10000, 100, 10);

INSERT INTO cars (`modelName`, `filePath`, `type`, `modelYear`, `MPG-mean`, `MPG-city`, `MPG-highway`, `BasePrice`, `horsepower`, `seating`) 
VALUES ("Fire", "truck3.jpg", "truck", 2020, 12, 12, 12, 10000, 100, 10);

