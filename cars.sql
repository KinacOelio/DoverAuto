

USE `kiattome_cars`;

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
VALUES ("Fire", "car3.jpg", "car", 2020, 23, 20, 28, 20000, 100, 6);

INSERT INTO cars (`modelName`, `filePath`, `type`, `modelYear`, `MPG-mean`, `MPG-city`, `MPG-highway`, `BasePrice`, `horsepower`, `seating`) 
VALUES ("Foolio", "car1.jpg", "car", 2019, 19, 18, 20, 18000, 200, 8);

INSERT INTO cars (`modelName`, `filePath`, `type`, `modelYear`, `MPG-mean`, `MPG-city`, `MPG-highway`, `BasePrice`, `horsepower`, `seating`) 
VALUES ("Runabout", "car2.jpg", "car", 2018, 44, 48, 34, 10000, 300, 10);

INSERT INTO cars (`modelName`, `filePath`, `type`, `modelYear`, `MPG-mean`, `MPG-city`, `MPG-highway`, `BasePrice`, `horsepower`, `seating`) 
VALUES ("Salma", "car4.jpg", "car", 2020, 15, 18, 12, 10000, 100, 4);

#suvs
INSERT INTO cars (`modelName`, `filePath`, `type`, `modelYear`, `MPG-mean`, `MPG-city`, `MPG-highway`, `BasePrice`, `horsepower`, `seating`) 
VALUES ("suv1", "suv1.jpg", "SUV", 2019, 12, 12, 12, 10000, 100, 10);

INSERT INTO cars (`modelName`, `filePath`, `type`, `modelYear`, `MPG-mean`, `MPG-city`, `MPG-highway`, `BasePrice`, `horsepower`, `seating`) 
VALUES ("suv2", "suv2.jpg", "SUV", 2018, 12, 12, 12, 10000, 100, 10);

INSERT INTO cars (`modelName`, `filePath`, `type`, `modelYear`, `MPG-mean`, `MPG-city`, `MPG-highway`, `BasePrice`, `horsepower`, `seating`) 
VALUES ("suv3", "suv3.jpg", "SUV", 2020, 12, 12, 12, 10000, 100, 10);

#trucks
INSERT INTO cars (`modelName`, `filePath`, `type`, `modelYear`, `MPG-mean`, `MPG-city`, `MPG-highway`, `BasePrice`, `horsepower`, `seating`) 
VALUES ("truck1", "truck1.jpg", "truck", 2019, 12, 12, 12, 10000, 100, 10);

INSERT INTO cars (`modelName`, `filePath`, `type`, `modelYear`, `MPG-mean`, `MPG-city`, `MPG-highway`, `BasePrice`, `horsepower`, `seating`) 
VALUES ("truck2", "truck2.jpg", "truck", 2020, 12, 12, 12, 10000, 100, 10);

INSERT INTO cars (`modelName`, `filePath`, `type`, `modelYear`, `MPG-mean`, `MPG-city`, `MPG-highway`, `BasePrice`, `horsepower`, `seating`) 
VALUES ("truck3", "truck3.jpg", "truck", 2020, 12, 12, 12, 10000, 100, 10);


DROP TABLE IF EXISTS `locations`;
CREATE TABLE `locations` (
  `locID`     INTEGER NOT NULL AUTO_INCREMENT, 
  `adress`      VARCHAR(255), 
  `hours`   	VARCHAR(255), 
  INDEX (`locID`), 
  PRIMARY KEY (`locID`)
)  ENGINE=innodb DEFAULT CHARSET=utf8;
SET autocommit=1;

INSERT INTO locations (adress, hours) VALUES ("123 West st.", "Mon-Sun 9-5");
INSERT INTO locations (adress, hours) VALUES ("1234 east st.", "Mon-Sun 9-5");
INSERT INTO locations (adress, hours) VALUES ("12346 east st.", "Mon-Sun 9-5");
INSERT INTO locations (adress, hours) VALUES ("678 east st.", "Mon-Sun 9-5");
INSERT INTO locations (adress, hours) VALUES ("912 east st.", "Mon-Sun 9-5");
INSERT INTO locations (adress, hours) VALUES ("321 east st.", "Mon-Sun 9-5");


