
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `reviews` (
  `name` text NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `reviews` (`name`, `rating`, `comment`, `id`) VALUES
('David', 5, 'I love this place', 7),
('Sam', 0, 'I hate this place', 8),
('Angry Joe', 1, 'I hate this place, it sucks.', 9),
('Happy Jim', 4, 'This Place was amazing!', 10),
('Sarah', 5, 'This was an amazing place to stay for my honeymoon!', 11),
('Anonymouse', 0, 'I hate this place, 0 stars', 12),
('Sam', 5, 'Best place to go to get away from the world!', 13),
('Some Guy', 3, 'Eh, its okay.', 14),
('SOMEGUYAGAIN', 5, 'I LOVE THIS PLACE OMG!', 15);


ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;