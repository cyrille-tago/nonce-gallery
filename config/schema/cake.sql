CREATE TABLE users (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	email VARCHAR(255) NOT NULL,
	password VARCHAR(255) NOT NULL,
	created DATETIME,
	modified DATETIME
);

CREATE TABLE pictures (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	user_id INTEGER NOT NULL,
	title VARCHAR(50),
	description TEXT,
	url TEXT,
	created DATETIME,
	modified DATETIME,
	FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE tags (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	title VARCHAR(255),
	created DATETIME,
	modified DATETIME,
	CONSTRAINT unique_title UNIQUE (title)
);

CREATE TABLE pictures_tags (
	picture_id INTEGER NOT NULL,
	tag_id INTEGER NOT NULL,
	PRIMARY KEY (picture_id, tag_id),
	FOREIGN KEY (tag_id) REFERENCES tags(id),
	FOREIGN KEY (picture_id) REFERENCES pictures(id)
);

CREATE TABLE articles (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	title VARCHAR(50),
	body TEXT,
	created DATETIME DEFAULT NULL,
	modified DATETIME DEFAULT NULL
);

/*
INSERT INTO articles (title,body,created)
    VALUES ('The title', 'This is the article body.', NOW());
INSERT INTO articles (title,body,created)
    VALUES ('A title once again', 'And the article body follows.', NOW());
INSERT INTO articles (title,body,created)
    VALUES ('Title strikes back', 'This is really exciting! Not.', NOW());
*/
