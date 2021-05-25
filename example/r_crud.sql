SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `a` int(100) NOT NULL,
  `b` varchar(100) NOT NULL,
  `c` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
