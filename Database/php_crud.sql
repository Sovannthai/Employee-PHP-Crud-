

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- CRUD
CREATE TABLE `employee` (
  `e_id` int(11) NOT NULL,
  `e_name` varchar(50) NOT NULL,
  `e_email` varchar(50) NOT NULL,
  `e_salary` int(11) NOT NULL,
  `e_gender` varchar(50) NOT NULL,
  `e_dept` varchar(50) NOT NULL,
  `e_password`varchar(50) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;


INSERT INTO `employee` (`e_id`, `e_name`, `e_email`, `e_salary`,`e_gender`,`e_dept`,`e_password`) VALUES
(1, 'Robin','robin1995will@gmail.com','5000','Male','Operations','Robin95will'),
(2, 'Chris ', 'chrisrock4@gmail.com','5000','Female','Operations', 'chris@rock'),
(3, 'Charlie', 'madcharlie@gmail.com','5000','Female','Operations', 'charlie1234');


--
-- Indexes for table `users`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`e_id`);

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `employee`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

ALTER TABLE employee ADD UNIQUE (e_email);

