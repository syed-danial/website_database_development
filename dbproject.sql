CREATE DATABASE dbproject;
USE dbproject;
CREATE TABLE admin(`email` varchar(100), `passcode` int, PRIMARY KEY(`email`));

INSERT INTO `admin`(`email`, `passcode`) VALUES
('i190536@nu.edu.pk','1234'), 
('i190414@nu.edu.pk','1234'),
('i192155@nu.edu.pk','1234');

CREATE TABLE student(`studentID` int NOT NULL AUTO_INCREMENT , `studentName` varchar(100), `dateofBirth` date, `studentGender` varchar(10), `studentClass` varchar(10), `fatherName` varchar(100), `fatherCNIC` bigint, `fatherContact` bigint, `fatherEmail` varchar(100), `motherName` varchar(100), `motherCNIC` bigint, `motherContact` bigint, `motherEmail` varchar(100), `address` varchar(50), `GuardianName` varchar(100), `GuardianCNIC` bigint, `guardianGender` varchar(10), `guardianContact` bigint, `relation` varchar(50), `dateAdded` date, PRIMARY KEY(`studentID`));

INSERT INTO `student` (`studentName`, `dateofBirth`, `studentGender`, `studentClass`, `fatherName`, `fatherCNIC`, `fatherContact`, `fatherEmail`, `motherName`, `motherCNIC`, `motherContact`, `motherEmail`, `address`, `GuardianName`, `GuardianCNIC`, `guardianGender`, `guardianContact`, `relation`, `dateAdded`) VALUES
('Bilal Ali', '2017-11-23', 'Male', '2', 'Muhammad Ashraf', '37405111', '03325187443', 'ashraf@gmail.com', 'Nabila Kousar', '37405222', '03325187442', 'nabila@yahoo.com', 'Kamalabad', 'Aslam Khan', '37405333', 'Male', '03325187441', 'Uncle', '2021-11-23'),
('Ayesha', '2017-01-01', 'Female','2', 'Muhammad Ahmad', '37405444', '03045187443', 'ahmad@gmail.com', 'Rafia Butt', '3740555', '03025187442', 'rafia@gmail.com', 'Askari 13', 'Rashid Latif', '37405666', 'Male', '03125187441', 'Uncle', '2021-01-01'),
('Amna Kamran', '2017-09-22', 'Female','2', 'Muhammad Kamran', '37405777', '03115187443', 'kamran@gmail.com', 'Raneen Kamran', '37405888', '03425187242', 'raneen@yahoo.com', '6th Road', 'Aima Khan', '37405999', 'Female', '03655097441', 'Aunt','2021-09-22'),
('Rizwan Siddeeq', '2016-07-13', 'Male','3','Muhammad Javaid', '37406111', '03125182203', 'javaid@gmail.com', 'Rubina Javaid', '37406222', '03425998442', 'rubina@gmail.com', 'Askari 14', 'Atif Munir', '37406333', 'Male', '03321237441', 'Family Friend', '2021-07-13'),
('Zainab Mughal', '2017-09-06', 'Female','2', 'Kashif Mughal', '37407111', '03325112243', 'mughal@gmail.com', 'Narmeen Khan', '37407222', '03321238442', 'narmeen@yahoo.com', 'Lalkurti', 'Raheen Khan', '37407333', 'Male', '03325187441', 'Uncle', '2021-09-06'),
('Hamza Rehan', '2017-03-15', 'Male','2', 'Muhammad Rehan', '37408111', '03128768763', 'rehan@gmail.com', 'Urwa Sheraz', '37408222', '03110987442', 'urwa@gmail.com', 'DHA 1', 'Raja Ismail', '37408333', 'Male', '03224390813', 'Uncle', '2021-03-15'),
('Rashid Ali', '2017-11-16', 'Male','2', 'Muhammad Ali', '37409111', '03479998881', 'ali@gmail.com', 'Vara Ali', '37409222', '03179808903', 'vara@yahoo.com', 'Bahria Enclave', 'Bilal Khalid', '37409333', 'Male', '0322567438','Uncle', '2021-11-16'),
('Sohaib Azhar', '2016-10-11', 'Male','3', 'Muhammad Azhar', '37410111', '03219982391', 'azhar@gmail.com', 'Najma Azhar', '37410222', '03169471442', 'najma@yahoo.com', 'Kamalabad', 'Hoorain Khan', '37505333', 'Female', '03115129668', 'Aunt', '2021-10-11'),
('Imran Rana', '2017-02-20', 'Male','2', 'Ahmed Rana', '37405', '03421928', 'ahmed@gmail.com', 'Sofia Ehsan', '37400', '03325187', 'sofia@yahoo.com', 'Faizabad', 'Arif Rameel', '37401', 'Male', '03126187', 'Uncle', '2021-02-20'),
('Babar Azam', '2018-11-11', 'Male', '1', 'Azam Virk', '38533', '03314518', 'sham@gmail.com', 'Rukhsana Haris', '30555', '03027442', 'rukhsana@gmail.com', 'Shamsabad', 'Shamshad Malik', '37666', 'Male', '03125181', 'Uncle','2021-11-11'),
('Hina Aslam', '2017-09-02', 'Female','2', 'Aslam Kamran', '37487', '03117443', 'aslam@gmail.com', 'Resham Imran', '35888', '03427242', 'resham@yahoo.com', 'Layalpur', 'Bisma Khan', '37499', 'Female', '03655441', 'Aunt','2021-09-02'),
('Khurram Shahzaman', '2016-07-13', 'Male','3', 'Shahzaman Afridi', '37416', '03122203', 'shahzaman@gmail.com', 'Simra Shahzaman', '37492', '03425992', 'simra@gmail.com', 'Rawat', 'Kashmala Tariq', '36330', 'Female', '03237441', 'Aunt','2021-07-13'),
('Altaf Rana', '2018-02-20', 'Male','1', 'Ahmed Rana', '37405', '03421928', 'ahmed@gmail.com', 'Sofia Ehsan', '37400', '03325187', 'sofia@yahoo.com', 'Faizabad', 'Arif Rameel', '37401', 'Male', '03126187', 'Uncle','2021-02-20'),
('Shahood Mughal', '2016-09-06', 'Male','3', 'Kashif Mughal', '37407111', '03325112243', 'mughal@gmail.com', 'Narmeen Khan', '37407222', '03321238442', 'narmeen@yahoo.com', 'Lalkurti', 'Raheen Khan', '37407333', 'Male', '03325187441', 'Uncle', '2021-09-06'),
('Muhammad Rizwan', '2018-11-11', 'Male', '1', 'Azam Virk', '38533', '03314518', 'sham@gmail.com', 'Rukhsana Haris', '30555', '03027442', 'rukhsana@gmail.com', 'Shamsabad', 'Shamshad Malik', '37666', 'Male', '03125181', 'Uncle', '2021-11-11'),
('Rizwan Shah', '2015-11-20', 'Male', '4', 'Salman Khan', '37321111', '03323217443', 'salman@gmail.com', 'Rukhsana Babar', '3333222', '03329877442', 'rukhsana@yahoo.com', 'Khayaban', 'Khurram Nawaz', '37400003', 'Male', '03325180001', 'Uncle', '2021-10-29'),
('Kashaf Noor', '2016-10-21', 'Female', '3', 'Farooq Khan', '37000111', '03323125443', 'farooq@gmail.com', 'Nur Zaman', '3330012', '03313377442', 'nur@yahoo.com', 'Tarnol', 'Jahanzeb Virk', '37409803', 'Male', '03305109801', 'Uncle', '2021-12-19'),
('Rameez Raja', '2014-11-20', 'Male', '5', 'Jameel Malik', '37456111', '03345617443', 'jameel@gmail.com', 'Shireen Anwar', '3388822', '03329879872', 'shireen@yahoo.com', 'Dhok', 'Shaheen Malik', '37787003', 'Male', '03325184321', 'Uncle', '2021-12-12'),
('Shaheen Afridi', '2011-11-23', 'Male', '8', 'Muhammad Afridi', '37405985', '03325156343', 'afridi@gmail.com', 'Zainab Kousar', '37495892', '03324097442', 'zainab@yahoo.com', 'DHA II', 'Rashid Latif', '37405498', 'Male', '03329987441', 'Uncle', '2021-12-26'),
('Shah Nawaz', '2012-11-23', 'Male', '7', 'Muhammad Nawaz', '37405629', '03325188903', 'nawaz@gmail.com', 'Saleha Fatima', '374097862', '0311334451', 'saleha@yahoo.com', 'Rehmanabad', 'Waheed Khan', '37309733', 'Male', '03324529041', 'Uncle', '2020-08-11'),
('Ramiz Ali', '2013-11-23', 'Male', '6', 'Muhammad Ali', '374092901', '03325428453', 'alijan@gmail.com', 'Wazeema Ali', '374068892', '03591122561', 'wazeema@yahoo.com', 'Sadiqabad', 'Samar Khan', '373065333', 'Female', '03125169441', 'Aunt', '2021-09-29');


CREATE TABLE `studentchallan`(`id` int NOT NULL AUTO_INCREMENT, `studentName` varchar(100), `fatherName` varchar(100), `guardianName` varchar(100), `amount` int, `ngoEmployee` varchar(10), `email` varchar(100), PRIMARY KEY(`id`));

INSERT INTO `studentchallan`(`studentName`, `fatherName`, `guardianName`, `amount`, `ngoEmployee`, `email`) VALUES
('Bilal Ali', 'Muhammad Ashraf', 'Aslam Khan', '1000', 'No', 'ashraf@gmail.com'),
('Ayesha', 'Muhammad Ahmad', 'Rashid Latif', '0', 'Yes', 'ahmad@gmail.com'),
('Amna Kamran', 'Muhammad Kamran','Aima Khan','1000', 'No', 'kamran@gmail.com'),
('Rizwan Siddeeq', 'Muhammad Javaid', 'Atif Munir', '0', 'Yes', 'javaid@gmail.com'),
('Zainab Mughal', 'Kashif Mughal', 'Raheen Khan', '1000', 'No', 'mughal@gmail.com'),
('Hamza Rehan', 'Muhammad Rehan', 'Raja Ismail', '1000', 'No', 'rehan@gmail.com'),
('Rashid Ali', 'Muhammad Ali', 'Bilal Khalid', '1000', 'No', 'ali@gmail.com'),
('Sohaib Azhar', 'Muhammad Azhar', 'Hoorain Khan', '0', 'Yes', 'azhar@gmail.com'),
('Imran Rana', 'Ahmed Rana', 'Arif Rameel', '0', 'Yes', 'ahmed@gmail.com'),
('Babar Azam', 'Azam Virk', 'Shamshad Malik', '1000', 'No', 'sham@gmail.com'),
('Hina Aslam', 'Aslam Kamran','Bisma Khan', '1000', 'No', 'aslam@gmail.com'),
('Khurram Shahzaman','Shahzaman Afridi','Kashmala Tariq', '1000', 'No', 'shahzaman@gmail.com'),
('Altaf Rana', 'Ahmed Rana', 'Arif Rameel', '1000', 'No', 'ahmed@gmail.com'),
('Shahood Mughal', 'Kashif Mughal' ,'Raheen Khan', '1000', 'No', 'mughal@gmail.com'),
('Muhammad Rizwan','Azam Virk', 'Shamshad Malik', '1000', 'No', 'sham@gmail.com'),
('Rizwan Shah', 'Salman Khan', 'Khurram Nawaz', '1000', 'No', 'salman@gmail.com'),
('Kashaf Noor', 'Farooq Khan', 'Jahanzeb Virk', '1000', 'No', 'farooq@gmail.com'),
('Rameez Raja', 'Jameel Malik','Shaheen Malik' ,'1000', 'No','jameel@gmail.com'),
('Shaheen Afridi','Muhammad Afridi','Rashid Latif', '1000', 'No','afridi@gmail.com'),
('Shah Nawaz', 'Muhammad Nawaz', 'Waheed Khan', '1000', 'No','nawaz@gmail.com'),
('Ramiz Ali', 'Muhammad Ali', 'Sadiqabad', '0', 'Yes','alijan@gmail.com');


CREATE TABLE `guardianaccompanying`(`studentID` int, `studentName` varchar(100), `guardianName` varchar(100), `guardianCNIC` bigint, `pregenancy` varchar(50), `reason` varchar(1000), PRIMARY KEY (`studentID`));

INSERT INTO `guardianaccompanying`(`studentID`, `studentName`, `guardianName`, `guardianCNIC`, `pregenancy`, `reason`) VALUES
('3','Amna Kamran','Aima Khan', '37405999', 'Yes', 'Parents are deceased'),
('8','Sohaib Azhar', 'Hoorain Khan', '37505333', 'No', 'Parents are out of city'),
('11','Hina Aslam', 'Bisma Khan', '37499', 'No', 'Parents are out of city'),
('12','Khurram Shahzaman', 'Kashmala Tariq', '36330', 'Yes', 'Parents are deceased'), 
('20','Ramiz Ali', 'Samar Khan', '373065333', 'Yes', 'Parents are out of city');

CREATE TABLE classrecord(`record` int AUTO_INCREMENT, `studentID` int, `studentName` varchar(50), `currentClass` int, `newClass` int, `dateAdded` date, PRIMARY KEY(`record`));

