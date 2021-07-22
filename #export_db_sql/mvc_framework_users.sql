USE hidevs_test;

create table users
(
    id         int auto_increment
        primary key,
    email      varchar(255)                        not null,
    first_name varchar(255)                        not null,
    last_name  varchar(255)                        not null,
    status     tinyint                             not null,
    created_at timestamp default CURRENT_TIMESTAMP null,
    password   varchar(512)                        not null
);

INSERT INTO hidevs_test.users (id, email, first_name, last_name, status, created_at, password) VALUES (2, 'rezam578@gmail.com', 'reza', 'mobaraki', 0, '2021-07-09 15:29:19', '$2y$10$mvxd7R0jVtKIlaKmdq.9RehFcAsxCvzyBeDvU8lJW85H92fmxjuPa');
INSERT INTO hidevs_test.users (id, email, first_name, last_name, status, created_at, password) VALUES (3, 'reza@gmail.com', 'reza', 'reza', 0, '2021-07-09 19:30:50', '$2y$10$N.aRuO3ZRiHIGk5PJNyGdOO2i8PJsiDOQp90gRZYazUnM8AlaHUrG');
INSERT INTO hidevs_test.users (id, email, first_name, last_name, status, created_at, password) VALUES (4, 'rezam57888@gmail.com', 'reza', 'reza', 0, '2021-07-09 19:54:47', '$2y$10$Vx8rgoEV10ALdPsgGUNQmObsfUyfWtnfKBNQp/AAErsInw2bDB3Q2');
INSERT INTO hidevs_test.users (id, email, first_name, last_name, status, created_at, password) VALUES (5, 'rezam3@gmail.com', 'reza', 'reza', 0, '2021-07-09 19:58:56', '$2y$10$v8Mrwf8BBkaSXkBtNcy35u19UNgeHeL6r2eeOmvILNfhP1jOHtCYS');
INSERT INTO hidevs_test.users (id, email, first_name, last_name, status, created_at, password) VALUES (6, 'rezam57899@gmail.com', 'reza', 'mobaraki', 0, '2021-07-09 19:59:32', '$2y$10$Md75VY8edjVltTXoEVnKQu0znU9fAAaPIInNZciQbpr0B4S6.09FW');
INSERT INTO hidevs_test.users (id, email, first_name, last_name, status, created_at, password) VALUES (7, 'maryost24@gmail.com', 'mary', 'ost', 0, '2021-07-11 20:30:19', '$2y$10$z1o3U8xdxF6U15qCKcSfmeshMrIe3051HzsMIK6q8bOIfPuia/PnW');
INSERT INTO hidevs_test.users (id, email, first_name, last_name, status, created_at, password) VALUES (8, 'mary@gmail.com', 'reza', 'mobaraki', 0, '2021-07-12 21:29:26', '$2y$10$z9L/GOQGU1bvPBmBCJgfw.w0nS7iW2jWTm3tDrk6STRZchp3Yusi6');
INSERT INTO hidevs_test.users (id, email, first_name, last_name, status, created_at, password) VALUES (9, 'gholi@gholi.com', 'gholi', 'gholian', 0, '2021-07-12 21:29:55', '$2y$10$DhprQP3Lf.pK.XN5M9etzO4chrUNr0XF64Wcl0CxCAov09KZH/iCq');
INSERT INTO hidevs_test.users (id, email, first_name, last_name, status, created_at, password) VALUES (10, 'maryost2@gmail.com', 'mary', 'ostovar', 0, '2021-07-14 10:49:47', '$2y$10$4nV6I9Cwb57JLnh5uMbN8.skbdcWEpWnTr/ZB92Fj1V8HNgYBnkkW');
