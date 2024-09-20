users (
id INT AUTO_INCREMENT PRIMARY KEY,
first_name VARCHAR(255),
last_name VARCHAR(255),
username VARCHAR(255) UNIQUE,
email VARCHAR(255) UNIQUE,
birth_date DATE,
password VARCHAR(255),
role ENUM('Admin', 'Customer') DEFAULT 'Customer',
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
);

persons (
id INT AUTO_INCREMENT PRIMARY KEY,
first_name VARCHAR(255),
last_name VARCHAR(255),
birth_date DATE,
country VARCHAR(255),
biography TEXT,
role ENUM('Actor', 'Director') NOT NULL
);

genres (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(255) UNIQUE
);

tags (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(255) UNIQUE
);

movies (
id INT AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(255),
year_published INT,
rating DECIMAL(2, 1),
director_id INT,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
FOREIGN KEY (director_id) REFERENCES people(id)
);

reviews (
id INT AUTO_INCREMENT PRIMARY KEY,
user_id INT,
movie_id INT,
rating DECIMAL(2, 1),
comment TEXT,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
FOREIGN KEY (user_id) REFERENCES users(id),
FOREIGN KEY (movie_id) REFERENCES movies(id)
);

movie_genre (
id INT AUTO_INCREMENT PRIMARY KEY,
movie_id INT,
genre_id INT,
FOREIGN KEY (movie_id) REFERENCES movies(id),
FOREIGN KEY (genre_id) REFERENCES genres(id)
);

movie_tag (
id INT AUTO_INCREMENT PRIMARY KEY,
movie_id INT,
tag_id INT,
FOREIGN KEY (movie_id) REFERENCES movies(id),
FOREIGN KEY (tag_id) REFERENCES tags(id)
);

movie_actor (
id INT AUTO_INCREMENT PRIMARY KEY,
movie_id INT,
actor_id INT,
FOREIGN KEY (movie_id) REFERENCES movies(id),
FOREIGN KEY (actor_id) REFERENCES people(id)
);
