CREATE TABLE `log` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(50) NOT NULL,
 `password` varchar(255) NOT NULL,
 `Firstname` varchar(50) DEFAULT NULL,
 `Lastname` varchar(50) DEFAULT NULL,
 `Email` varchar(50) DEFAULT NULL,
 `Address` varchar(50) DEFAULT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1