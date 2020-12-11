create table admin
(
    name     varchar(50) null,
    username varchar(50) null,
    password varchar(50) null
);

create table departments
(
    name varchar(50) null,
    id   int auto_increment
        primary key
);

create table students
(
    name    varchar(50) null,
    id      int auto_increment
        primary key,
    dob     varchar(50) null,
    credit  varchar(50) null,
    cgpa    varchar(50) null,
    dept_id int         null,
    constraint students_departments_id_fk
        foreign key (dept_id) references departments (id)
            on delete cascade
);


