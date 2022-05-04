DROP DATABASE IF EXISTS projet2;
CREATE DATABASE projet2;
USE projet2;

-- Creating tables
drop table if exists answer;
create table answer
(
    id           int auto_increment
        primary key,
    answer_value float       not null,
    label        varchar(11) not null
);

drop table if exists user;
create table user
(
    id       int auto_increment
        primary key,
    mail     varchar(100) null,
    password varchar(100) null
);

drop table if exists user_results;
create table user_results
(
    id       int auto_increment
        primary key,
    date     datetime    not null,
    fp_total float       not null,
    fp_cat1  float       not null,
    fp_cat2  float       not null,
    fp_cat3  float       not null,
    fp_cat4  float       not null,
    q1       varchar(10) not null,
    q2       varchar(10) not null,
    q3       varchar(10) not null,
    q4       varchar(10) not null,
    q5       varchar(10) not null,
    q6       varchar(10) not null,
    q7       varchar(10) not null,
    q8       varchar(10) not null,
    q9       varchar(10) not null,
    q10      varchar(11) not null,
    q11      varchar(11) not null,
    q12      varchar(11) not null,
    q13      varchar(11) not null,
    q14      varchar(11) not null,
    q15      varchar(11) not null,
    q16      varchar(11) not null
);


-- Creating datasets
insert into projet2.user (mail, password)
values  ('test@test.com', '$argon2i$v=19$m=16,t=2,p=1$ZUthZkdSWFY0R2tRbktESQ$U21Avh4mjs07RXYutKG53g'),
        ('vin.diesel@wanadoo.fr', '$argon2i$v=19$m=16,t=2,p=1$VmFCUTdMaFVScHBNU3BwYw$lky9RdbxEIgHs6HtEGwcLQ');

insert into projet2.answer (answer_value, label)
values  (1404, 'q1_choice1'),
        (759.2, 'q1_choice2'),
        (371.28, 'q1_choice3'),
        (287.04, 'q1_choice4'),
        (16, 'q2_choice1'),
        (218, 'q2_choice2'),
        (140, 'q2_choice3'),
        (218, 'q2_choice4'),
        (60, 'q3_choice1'),
        (45, 'q3_choice2'),
        (29, 'q3_choice3'),
        (45, 'q3_choice4'),
        (134, 'q4_choice1'),
        (120.45, 'q4_choice2'),
        (0, 'q4_choice3'),
        (85, 'q4_choice4'),
        (305.76, 'q5_choice1'),
        (7.5, 'q5_choice2'),
        (0, 'q5_choice3'),
        (0, 'q5_choice4'),
        (6000, 'q6_choice1'),
        (2000, 'q6_choice2'),
        (400, 'q6_choice3'),
        (0, 'q6_choice4'),
        (502, 'q7_choice1'),
        (160, 'q7_choice2'),
        (16, 'q7_choice3'),
        (0, 'q7_choice4'),
        (9000, 'q8_choice1'),
        (420, 'q8_choice2'),
        (100, 'q8_choice3'),
        (0, 'q8_choice4'),
        (5850, 'q9_choice1'),
        (3405, 'q9_choice2'),
        (299.5, 'q9_choice3'),
        (300, 'q9_choice4'),
        (1700, 'q10_choice1'),
        (850, 'q10_choice2'),
        (340, 'q10_choice3'),
        (377.5, 'q10_choice4'),
        (850, 'q11_choice1'),
        (566.5, 'q11_choice2'),
        (330, 'q11_choice3'),
        (377.5, 'q11_choice4'),
        (139, 'q12_choice1'),
        (123, 'q12_choice2'),
        (68, 'q12_choice3'),
        (80, 'q12_choice4'),
        (156, 'q13_choice1'),
        (78, 'q13_choice2'),
        (39, 'q13_choice3'),
        (25, 'q13_choice4'),
        (33, 'q14_choice1'),
        (16.5, 'q14_choice2'),
        (8.25, 'q14_choice3'),
        (0, 'q14_choice4'),
        (371, 'q15_choice1'),
        (120, 'q15_choice2'),
        (50, 'q15_choice3'),
        (50, 'q15_choice4'),
        (36.5, 'q16_choice1'),
        (18.25, 'q16_choice2'),
        (7.3, 'q16_choice3'),
        (7.3, 'q16_choice4');
