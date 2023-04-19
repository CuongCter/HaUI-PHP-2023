CREATE TABLE `User_Class` (
  `classID` Char(20) NOT NULL,
  `userID` Varchar(10) NOT NULL,
  PRIMARY KEY (`classID`, `userID`)
);

CREATE TABLE `User` (
  `userID` Varchar(10) NOT NULL,
  `userName` Varchar(50),
  `password` Varchar(20),
  `useMsv` Varchar(10),
  `gender` Varchar(20),
  `birthday` Datetime,
  `hometown` Varchar(100),
  `classUni` Varchar(10),
  `course` Varchar(20),
  `email` Varchar(20),
  `phone` Char(12),
  `yearPass` int,
  `status` Varchar(20),
  `roleID` Varchar(10) NOT NULL,
  PRIMARY KEY (`userID`)
);

CREATE TABLE `Class` (
  `classID` Varchar(10) NOT NULL,
  `className` Varchar(50),
  `classDes` Varchar(500),
  `classTime` Datetime,
  `classAddress` Varchar(50),
  `classAmount` Integer,
  PRIMARY KEY (`classID`)
);

CREATE TABLE `Role` (
  `roleID` Varchar(10) NOT NULL,
  `roleName` Varchar(50),
  PRIMARY KEY (`roleID`)
);

CREATE TABLE `Finance` (
  `financeID` Varchar(10) NOT NULL,
  `financeName` Varchar(50),
  `payDate` Datetime,
  `userID` Varchar(10) NOT NULL,
  `eventID` Varchar(10),
  PRIMARY KEY (`financeID`)
);

CREATE TABLE `Blog` (
  `blogID` Varchar(10) NOT NULL,
  `blogContent` Text,
  `blogDay` Datetime,
  `userID` Varchar(10) NOT NULL,
  PRIMARY KEY (`blogID`)
);

CREATE TABLE `Event` (
  `eventID` Varchar(10) NOT NULL,
  `eventName` Text,
  `eventContent` Text,
  `picture` Varchar(500),
  `eventDay` Datetime,
  `userID` Varchar(10) NOT NULL,
  PRIMARY KEY (`eventID`)
);
