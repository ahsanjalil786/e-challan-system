Create database project;
use project;
-- drop database project;
create table Onwer
(
Onwer_CNIC int(16),
first_name varchar(100),
last_name varchar(100),
address varchar(100),
address varchar(100),
primary key(Onwer_CNIC)
);

desc Onwer;

Insert into Onwer(Onwer_CNIC ,  first_name , last_name , address)
Values(44 , 'Muhammad' , 'Naeem' , 'Khanpur');

select * From Onwer;

set SQL_SAFE_UPDATES = 0;
Update Onwer
Set address = 'Lahore'
Where Onwer_CNIC = 0344;

DELETE FROM Onwer Where Onwer_CNIC = 158;

create table vehicle_registration
(
registration_number varchar(50),
vehicle_type varchar(50),
colour varchar (50),
Onwer_CNIC int(16),
primary key(registration_number),
FOREIGN KEY (onwer_CNIC) REFERENCES Onwer(Onwer_CNIC)

);
Insert Into vehicle_registration(registration_number , vehicle_type , colour , Onwer_CNIC )
Values(9881 , 'SUV' , 'BLACK' , 0344);

Select * From vehicle_registration;

set SQL_SAFE_UPDATES = 0;

Update vehicle_registration
Set colour = 'Red'
Where registration_number = 9881;

DELETE FROM vehicle_registration Where registration_number = 9889;

create table  E_challan_record
(
challan_number int,
location varchar(50),
amount int,
r_number varchar(50),
primary key(challan_number),
foreign key(r_number) references vehicle_registration(registration_number)
);

Insert Into E_challan_record(challan_number , location , amount , registration_number)
Values(39 , 'Lahore' , 300 , 9889);

Select * From E_challan_record;

Update E_challan_record
Set amount = 500 
Where challan_number = 39;

create table Traffic_warden_Record
(
warden_id int,
first_name varchar(100),
last_name varchar(100),
warden_CNIC int,
C_number int,
primary key(warden_id),
foreign key (C_number) references E_challan_record(challan_number)
);

Select * From Traffic_warden_Record;
Insert Into Traffic_warden_Record(warden_id , first_name , last_name , warden_CNIC , C_number)
Values(1234 , 'Ahmed' , 'Naeem' , 0889878 , 39);

create table complain
(
complain_id int,
C_description varchar(200),
amount int,
warden_id int(16),
registration_number varchar(50),
primary key(complain_id),
foreign key(registration_number) references vehicle_registration(registration_number),
foreign key(warden_id) references Traffic_warden_Record(warden_id)


);