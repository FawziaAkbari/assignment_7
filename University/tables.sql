create table student (
    student_id int not null primary key auto_increment,
    name varchar (50) not null,
    last_name varchar (50) not null,
    gender boolean not null,
    phone varchar (13) unique,
    address varchar (30),
    email varchar (30) unique,
    photo text);
create table teacher (
    teacher_id int not null primary key auto_increment,
    name varchar (50) not null,
    last_name varchar (50) not null,
    position varchar (50) not null,
    gender boolean not null,
    phone varchar (13) unique,
    address varchar (30),
    email varchar (30) unique,
    photo text
);

create table department (
    department_id int not null primary key auto_increment,
    department_name varchar (50) not null default 'CS',
    start_date date not null,
    end_date date not null,
    time varchar (25) not null,
    teacher int not null,
    student_id int not null
);
ALTER TABLE department add FOREIGN key (teacher) REFERENCES teacher(teacher_id) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE department add FOREIGN key (student_id) REFERENCES student(student_id) ON DELETE RESTRICT ON UPDATE RESTRICT;
create table salary (
    salary_id int not null primary key auto_increment,
    teacher_id int not null,
    amount float,
    remain float,
    paid float
);
ALTER TABLE salary add FOREIGN key (teacher_id) REFERENCES teacher(teacher_id) ON DELETE RESTRICT ON UPDATE RESTRICT;


