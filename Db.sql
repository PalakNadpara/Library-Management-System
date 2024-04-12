create database Member;

use Member;

CREATE TABLE Member_Info(
   FName varchar(20) not null,
   DOB date not null,
   Collage varchar(50) not null,
   Department varchar(20) not null,
   Collage_Id varchar(10) primary key,
   Email varchar(25),
   Mobile_No varchar(10) not null,
   Address varchar(250)
);



 select * from Member_Info;
       select FName, DOB, Collage, Department, Collage_Id, Email, Mobile_No,Address from Member_Info;