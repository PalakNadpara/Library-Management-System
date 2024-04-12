create database Library;

use library;
create table Book_List(
	Book_Id INT primary key,
    Book_Name VARCHAR(50) NOT NULL,
    Author_Name VARCHAR(50) NOT NULL,
    Category VARCHAR(50) NOT NULL
);

INSERT INTO Book_List
(Book_Id,Book_Name,Author_Name,Category)
values
(101,"The Making of a Manager","Juile Zhuo","Study Of Managment"),
(102,"Permission to Screw Up","Kristen Hadeed","Study Of Managment"),
(103,"Corporate Chanakya","Radhakrishnan Pillai","Study Of Managment"),
(201,"ANSII-C","Balaguru Swami","Study Of Computer Engineerig"),
(202,"Introduction to Algorithms","Clifford Stein","Study Of Computer Engineerig"),
(203,"Programming with Java","E Balagurusamy","Study Of Computer Engineerig"),
(301,"Infinite Powers","Steven Strogatz","Study Of Science"),
(302,"The Dramt Land","Mark Arax","Study Of Science"),
(303,"Alcohol in Space ","Chris Carberry","Study Of Science"),
(401,"Core Clinical Medicine","Gordon W Stewart","Study Of Medical"),
(402,"Surgical Talk","Andrew Goldberg","Study Of Medical"),
(403,"Emerging Medical Technology","Gennady Ermark","Study Of Medical");

desc Book_List;
SELECT Book_Id,Book_Name,Author_Name,Category FROM Book_List;