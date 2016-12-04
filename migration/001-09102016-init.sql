
DROP TABLE IF EXISTS `book`;

CREATE TABLE `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isbn` varchar(45) NOT NULL,
  `title` varchar(45) NOT NULL,
  `author` varchar(45) NOT NULL,
  `publisher` varchar(45) NOT NULL,
  `year` year(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `book_member`;

CREATE TABLE `book_member` (
  `book_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `due_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `member`;

CREATE TABLE `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL DEFAULT '',
  `address` varchar(80) NOT NULL DEFAULT '',
  `contact` varchar(45) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(48) NOT NULL,
  `password` varchar(64) NOT NULL,
  `fullname` VARCHAR(64) NOT NULL,
  `email` VARCHAR(64) NOT NULL
) AUTO_INCREMENT=1;


# User Seeds
INSERT INTO `user` (`username`, `password`, `fullname`, `email`)
VALUES ('admin', 'admin', 'Administrator', 'admin@verpush.com');

INSERT INTO `user` (`username`, `password`, `fullname`, `email`)
VALUES ('citra', 'citra', 'Ariyana Arcitra', 'arcitra@verpush.com');


# Book Seeds
INSERT INTO `book` (`isbn`, `title`, `author`, `publisher`, `year`)
VALUES ('9789791227780', 'Perahu Kertas', 'Dee Lestari', 'Bentang Pustaka & Truedee', '2004');

INSERT INTO `book` (`isbn`, `title`, `author`, `publisher`, `year`)
VALUES ('9793062797', 'Laskar Pelangi', 'Andrea Hirata', 'Bentang Pustaka', '2005');

INSERT INTO `book` (`isbn`, `title`, `author`, `publisher`, `year`)
VALUES ('9789792248616', 'Negeri 5 Menara', 'Ahmad Fuadi', 'Gramedia', '2009');

INSERT INTO `book` (`isbn`, `title`, `author`, `publisher`, `year`)
VALUES ('9789791102261', 'Bidadari Bidadari Surga', 'Tere Liye', 'Republika', '2008');