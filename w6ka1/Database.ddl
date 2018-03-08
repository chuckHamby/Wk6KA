create database HR_Interviews;

use HR_Interviews;

create table interview
(
	interviewerFName varchar(50) null,
	position varchar(50) null,
	date date null,
	candidateFname varchar(50) null,
	candidateLname varchar(50) null,
	abilities varchar(250) null,
	appearance varchar(50) null,
	skills varchar(250) null,
	comments varchar(250) null,
	interviewerLname varchar(50) null,
	Knowledge varchar(250) null
)
engine=InnoDB
;
