drop table admin;
drop table feedback;
drop table reg cascade;
drop table product;
drop table order1;
/*drop table customer;*/
drop table courier;
drop table bill;



create table bill(b_no serial primary key,b_date date,b_amt integer);
\d bill

create table courier(c_id serial primary key,c_name varchar(20),c_city varchar(20));
\d courier

/*create table customer(c_no serial primary key ,c_name varchar(20),c_addr varchar(200),c_email varchar(30),c_pwd varchar(30),Gender varchar(10),c_mno int,sno int);
\d customer
*/

create table order1(o_no serial primary key,o_date date,q_quantity int);
\d order1

/*create table order1(o_no serial primary key,o_date date,q_quantity int,c_no int references customer(c_no) on delete cascade on update set null);
\d order1*/

create table product(p_id serial primary key,p_name varchar(20),p_size varchar(20),p_rate varchar(20),p_category varchar(20),image varchar(100),avai_quantity varchar(20));
\d product

/*create table product(p_id serial primary key,p_name varchar(20),p_size int,p_rate int,p_category varchar(20),image varchar(100),avai_quantity int,c_no int references customer(c_no) on delete cascade on update set null,o_no int references order1(o_no) on delete cascade on update set null);
\d product*/

insert into product values(1,'Apple',1,200,'Fruits','Apple2.jpg',20);
insert into product values(2,'Papaya',2,200,'Fruits','Papaya.jpg',20);
insert into product values(3,'Watermelon',2,200,'Fruits','Watermelon.jpg',20);
insert into product values(4,'Banana',2,200,'Fruits','Banana.jpg',20);


insert into product values(5,'Cauliflower',1,200,'Vegetables','Cauliflower.jpg',20);
insert into product values(6,'Cabbage',0.5,200,'Vegetables','Cabbage.jpg',20);
insert into product values(7,'Mushroom',0.5,200,'Vegetables','Mushroom.jpg',20);
insert into product values(8,'Cucumber',1,60,'Vegetables','Cucumber.jpg',20);


insert into product values(9,'Almonds',1,300,'Seeds','Almonds.jpg',20);
insert into product values(10,'Cashew',1,500,'Seeds','Cashew.jpg',20);
insert into product values(11,'Peanuts',1,200,'Seeds','Peanuts.jpg',20);
insert into product values(12,'Pistachio',1,200,'Seeds','Pistachio.jpg',20);


create table reg(reg_no serial primary key,first_name varchar(20),last_name varchar(20),gen varchar(20),dob date ,addr varchar(20),email varchar(30),mno varchar(10),password varchar(20));
\d reg

create table feedback(email varchar(40) primary key,mobile varchar(40),message varchar(200));
\d feedback

create table admin(email varchar(30),password varchar(30));
\d admin
