CREATE TABLE album (
artist_id SMALLINT(5) NOT NULL DEFAULT 0,
album_id SMALLINT(4) NOT NULL DEFAULT 0,
album_name CHAR(128) DEFAULT NULL,
PRIMARY KEY  (artist_id,album_id)
)ENGINE=InnoDB;


CREATE TABLE artist (
artist_id SMALLINT(5) NOT NULL DEFAULT 0,
artist_name CHAR(128) DEFAULT NULL,
PRIMARY KEY  (artist_id)
)ENGINE=InnoDB;


CREATE TABLE played (
artist_id SMALLINT(5) NOT NULL DEFAULT 0,
album_id SMALLINT(4) NOT NULL DEFAULT 0,
track_id SMALLINT(3) NOT NULL DEFAULT 0,
played TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
PRIMARY KEY  (artist_id,album_id,track_id,played)
)ENGINE=InnoDB;


CREATE TABLE track (
track_id SMALLINT(3) NOT NULL DEFAULT 0,
track_name CHAR(128) DEFAULT 0,
artist_id SMALLINT(5) NOT NULL DEFAULT 0,
album_id SMALLINT(4) NOT NULL DEFAULT 0,
time DECIMAL(5,2) DEFAULT 0,
PRIMARY KEY  (artist_id,album_id,track_id)
)ENGINE=InnoDB;

CREATE TABLE tb_user (
user_id SMALLINT(3) NOT NULL AUTO_INCREMENT,
user_name VARCHAR(25) NOT NULL,
user_password VARCHAR(25)NOT NULL,
user_email VARCHAR(50) NOT NULL,
user_address VARCHAR(100) NOT NULL,
PRIMARY KEY(user_id)
);

INSERT INTO tb_user VALUES ('', 'ajgwprtw' , 'ajeng123' , 'ajgwprtw@gmail.com' , 'jln Nusa Indah 1' );