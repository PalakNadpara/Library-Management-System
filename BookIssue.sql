create database Book_Issue;
use Book_Issue;

create table Book_Issue(
RName varchar(100) not null,
BName varchar(50) not null,
AName varchar(50) not null,
BookType varchar(50)  not null,
IsDate date,
RtDate date,
Id varchar(10) primary key
);

Select RName, BName, Id, IsDate, RtDate, AName, BookType from Book_Issue ;

