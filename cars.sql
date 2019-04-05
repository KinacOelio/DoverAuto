DROP DATABASE IF EXISTS `cars`;
CREATE DATABASE IF NOT EXISTS `cars`;
USE `cars`;


DROP TABLE IF EXISTS `cars`;

CREATE TABLE `cars` (
  `carID`       INTEGER NOT NULL AUTO_INCREMENT, 
  `filePath`    VARCHAR(255), 
  `modelName`   VARCHAR(255) NOT NULL, 
  `modelYear`   year(4), 
  `MPG-mean` 	int(1),
  `MPG-city` 	int(1),
  `MPG-highway` int(1),
  `BasePrice` 	int(1),
  `horsepower` 	int(1),
  `seating` 	int(1),
  INDEX (`carID`), 
  PRIMARY KEY (`carID`)
)  ENGINE=innodb DEFAULT CHARSET=utf8;

SET autocommit=1;

INSERT INTO cars (`modelName`, `filePath`, `modelYear`, `MPG-mean`, `MPG-city`, `MPG-highway`, `BasePrice`, `horsepower`, `seating`) 
VALUES ("Fire", "car3.jpg", 2020, 12, 12, 12, 10000, 100, 10);

INSERT INTO cars (`modelName`, `filePath`, `modelYear`, `MPG-mean`, `MPG-city`, `MPG-highway`, `BasePrice`, `horsepower`, `seating`) 
VALUES ("Big", "car2.jpg", 2020, 12, 12, 12, 10000, 100, 10);

INSERT INTO cars (`modelName`, `filePath`, `modelYear`, `MPG-mean`, `MPG-city`, `MPG-highway`, `BasePrice`, `horsepower`, `seating`) 
VALUES ("Small", "car1.jpg", 2020, 12, 12, 12, 10000, 100, 10);

INSERT INTO cars (`modelName`, `filePath`, `modelYear`, `MPG-mean`, `MPG-city`, `MPG-highway`, `BasePrice`, `horsepower`, `seating`) 
VALUES ("Some Car", "car4.jpg", 2020, 12, 12, 12, 10000, 100, 10);

