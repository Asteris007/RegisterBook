

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE IF NOT EXISTS `users` (
  `id` int(5) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;



INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`) VALUES
(4, 'Ester', 'ester@yahoo.com', '123', 'girl.jfif'),
(6, 'Stefan', 'stef.goranov@gmail.com', '12345', 'boy2.jfif'),
(3, 'Krasimir', 'krasimir2020@gmail.com', '1345', 'boy.jfif'),
(5, 'Elena', 'elena.ivanova@gmail.com', '1234', 'girl2.jfif');


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
