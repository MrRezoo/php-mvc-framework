create table posts
(
    id          int auto_increment
        primary key,
    title       varchar(255)                         not null,
    subject     varchar(255)                         not null,
    slug        varchar(255)                         not null,
    image       varchar(255)                         not null,
    description longtext                             not null,
    status      tinyint(1) default 0                 not null,
    user_id     int                                  null,
    created_at  timestamp  default CURRENT_TIMESTAMP null,
    constraint title
        unique (title),
    constraint posts_ibfk_1
        foreign key (user_id) references users (id)
);

create index user_id
    on posts (user_id);

INSERT INTO mvc_framework.posts (id, title, subject, slug, image, description, status, user_id, created_at) VALUES (1, 'learning Django', 'Programming', 'learning-Django', '4f80c52fb432ee2e116a8eb0b57ca86f_1620812252353.icns', 'learning Django learning Django learning Django learning Django learning Django ', 0, null, '2021-07-14 03:18:36');
INSERT INTO mvc_framework.posts (id, title, subject, slug, image, description, status, user_id, created_at) VALUES (2, 'learning Django2', 'Programming2', 'learning-Django2', '4f80c52fb432ee2e116a8eb0b57ca86f_1620812252353.icns', 'learning Django learning Django learning Django learning Django learning Django ', 0, 2, '2021-07-14 03:19:48');
INSERT INTO mvc_framework.posts (id, title, subject, slug, image, description, status, user_id, created_at) VALUES (3, 'machine learning', 'Technology ', 'machine-learning', '9b0af55043bbf6ad71e4fdce0c70a221_Firefox (1).icns', 'this course for teach machine learning this course for teach machine learning this course for teach machine learning this course for teach machine learning this course for teach machine learning this course for teach machine learning this course for teach machine learning this course for teach machine learning', 0, 10, '2021-07-14 10:52:47');