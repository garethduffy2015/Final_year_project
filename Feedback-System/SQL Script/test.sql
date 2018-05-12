CREATE TABLE `forum_question` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`topic` varchar(255) NOT NULL,
`detail` varchar(255) NOT NULL,
`name` varchar(65) NOT NULL,
`email` varchar(65) NOT NULL,
`datetime` varchar(25) NOT NULL,
`view` int(4) NOT NULL,
`reply` int(4) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE `forum_answer` (
`question_id` int(4) NOT NULL,
`a_id` int(4) NOT NULL,
`a_name` varchar(65) NOT NULL,
`a_email` varchar(65) NOT NULL,
`a_answer` longtext NOT NULL,
`a_datetime` varchar(25) NOT NULL,
 UNIQUE KEY `a_id` (`a_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;