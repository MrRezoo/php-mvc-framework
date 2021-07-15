create table migrations
(
    id         int auto_increment
        primary key,
    migration  varchar(255)                        null,
    created_at timestamp default CURRENT_TIMESTAMP null
);

INSERT INTO mvc_framework.migrations (id, migration, created_at) VALUES (1, 'm0001_initial.php', '2021-07-09 15:26:57');
INSERT INTO mvc_framework.migrations (id, migration, created_at) VALUES (2, 'm0002_add_password_column.php', '2021-07-09 15:26:57');
INSERT INTO mvc_framework.migrations (id, migration, created_at) VALUES (6, 'm0003_create_post_table.php', '2021-07-14 03:16:50');