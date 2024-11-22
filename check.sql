// users 

CREATE TABLE users (
	id INT PRIMARY KEY AUTO_INCREMENT,
    name varchar(100) not null,
    email VARCHAR(100) NOT NULL,
    password varchar(255) not null,
    role enum('instructor', 'student', 'admin') not null,
    created_at timestamp default current_timestamp,
    updated_at timestamp default current_timestamp on update current_timestamp
);

-- users alter

    alter table users change 'updated_at' , 'updated_at' timestamp on update current_timestamp null default null;
    alter table users add column first_name varchar (255) not null after name;
    alter table users add column middle_name varchar(255) default null after first_name;
    alter table users add column last_name varchar(255) not null after middle_name;
    alter table users add column remember_me varchar(100) null after password;
    
    alter table users modify remember_me varchar(255) null;
    alter table users add column roleId enum('data' , 'non-data') default 'data' after password;
    alter table drop column roleId;

-- update users

    update users set first_name = 'first';

-- instructor





