create table projet2.user_results
(
    id  int auto_increment
        primary key,
    `timestamp` datetime not null,
    q1  varchar(10) not null,
    q2  varchar(10) not null,
    q3  varchar(10) not null,
    q4  varchar(10) not null,
    q5  varchar(10) not null,
    q6  varchar(10) not null,
    q7  varchar(10) not null,
    q8  varchar(10) not null,
    q9  varchar(10) not null,
    q10 varchar(11) not null,
    q11 varchar(11) not null,
    q12 varchar(11) not null,
    q13 varchar(11) not null,
    q14 varchar(11) not null,
    q15 varchar(11) not null,
    q16 varchar(11) not null
);

INSERT INTO projet2.user_results (id, TIMESTAMP, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, q11, q12, q13, q14, q15, q16)
values  (1, '2022-04-30 13:56:22', 'q1_choice2', 'q2_choice1', 'q3_choice2', 'q4_choice3', 'q5_choice3', 'q6_choice2', 'q7_choice1', 'q8_choice2', 'q9_choice2', 'q10_choice2', 'q11_choice1', 'q12_choice2', 'q13_choice2', 'q14_choice1', 'q15_choice2', 'q16_choice2'),
        (2, '2022-04-30 13:58:09', 'q1_choice1', 'q2_choice4', 'q3_choice2', 'q4_choice3', 'q5_choice3', 'q6_choice3', 'q7_choice1', 'q8_choice2', 'q9_choice4', 'q10_choice2', 'q11_choice2', 'q12_choice2', 'q13_choice4', 'q14_choice2', 'q15_choice3', 'q16_choice1'),
        (3, '2022-04-30 14:02:09', 'q1_choice2', 'q2_choice2', 'q3_choice3', 'q4_choice3', 'q5_choice3', 'q6_choice2', 'q7_choice2', 'q8_choice2', 'q9_choice1', 'q10_choice4', 'q11_choice2', 'q12_choice2', 'q13_choice2', 'q14_choice3', 'q15_choice3', 'q16_choice1'),
        (4, '2022-04-30 13:56:22', 'q1_choice2', 'q2_choice1', 'q3_choice2', 'q4_choice3', 'q5_choice3', 'q6_choice2', 'q7_choice1', 'q8_choice2', 'q9_choice2', 'q10_choice2', 'q11_choice1', 'q12_choice2', 'q13_choice2', 'q14_choice1', 'q15_choice2', 'q16_choice2'),
        (5, '2022-04-30 13:58:09', 'q1_choice1', 'q2_choice4', 'q3_choice2', 'q4_choice3', 'q5_choice3', 'q6_choice3', 'q7_choice1', 'q8_choice2', 'q9_choice4', 'q10_choice2', 'q11_choice2', 'q12_choice2', 'q13_choice4', 'q14_choice2', 'q15_choice3', 'q16_choice1'),
        (6, '2022-04-30 14:02:09', 'q1_choice2', 'q2_choice2', 'q3_choice3', 'q4_choice3', 'q5_choice3', 'q6_choice2', 'q7_choice2', 'q8_choice2', 'q9_choice1', 'q10_choice4', 'q11_choice2', 'q12_choice2', 'q13_choice2', 'q14_choice3', 'q15_choice3', 'q16_choice1'),
        (7, '2022-04-30 14:03:53', 'q1_choice2', 'q2_choice2', 'q3_choice2', 'q4_choice2', 'q5_choice2', 'q6_choice2', 'q7_choice1', 'q8_choice4', 'q9_choice2', 'q10_choice2', 'q11_choice3', 'q12_choice2', 'q13_choice2', 'q14_choice2', 'q15_choice2', 'q16_choice2'),
        (8, '2022-04-30 14:12:54', 'q1_choice3', 'q2_choice3', 'q3_choice3', 'q4_choice3', 'q5_choice3', 'q6_choice3', 'q7_choice2', 'q8_choice3', 'q9_choice3', 'q10_choice3', 'q11_choice3', 'q12_choice3', 'q13_choice3', 'q14_choice3', 'q15_choice3', 'q16_choice3'),
        (9, '2022-04-30 14:20:47', 'q1_choice3', 'q2_choice3', 'q3_choice3', 'q4_choice3', 'q5_choice3', 'q6_choice3', 'q7_choice2', 'q8_choice3', 'q9_choice3', 'q10_choice3', 'q11_choice3', 'q12_choice3', 'q13_choice3', 'q14_choice3', 'q15_choice3', 'q16_choice3'),
        (10, '2022-05-02 07:51:22', 'q1_choice3', 'q2_choice3', 'q3_choice3', 'q4_choice3', 'q5_choice3', 'q6_choice3', 'q7_choice2', 'q8_choice3', 'q9_choice3', 'q10_choice3', 'q11_choice3', 'q12_choice3', 'q13_choice3', 'q14_choice3', 'q15_choice3', 'q16_choice3'),
        (11, '2022-05-03 14:25:01', 'q1_choice3', 'q2_choice2', 'q3_choice3', 'q4_choice3', 'q5_choice3', 'q6_choice3', 'q7_choice2', 'q8_choice3', 'q9_choice3', 'q10_choice3', 'q11_choice3', 'q12_choice3', 'q13_choice3', 'q14_choice3', 'q15_choice3', 'q16_choice2');
