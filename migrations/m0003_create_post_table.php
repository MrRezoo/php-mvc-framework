<?php


class m0003_create_post_table{
    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = " CREATE TABLE posts (
            id INT AUTO_INCREMENT PRIMARY KEY ,
            title VARCHAR (255) UNIQUE NOT NULL ,
            subject VARCHAR (255) NOT NULL ,
            slug VARCHAR (255) NOT NULL ,
            image VARCHAR (255) NOT NULL ,
            description LONGTEXT NOT NULL  ,
            status BOOLEAN NOT NULL DEFAULT FALSE ,
            user_id INTEGER,
            FOREIGN KEY (user_id) REFERENCES users(id),
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
        ) ENGINE=INNODB;";
        $db->pdo->exec($SQL);

    }


    public function down()
    {
        $db = \app\core\Application::$app->db;
        $SQL = " DROP TABLE posts;";
        $db->pdo->exec($SQL);
    }
}