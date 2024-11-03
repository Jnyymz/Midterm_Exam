CREATE TABLE Authors(
    authorID INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR (50),
    lastname VARCHAR (50),
    nationality VARCHAR (50),
    contactInfo VARCHAR (50),
    dateAdded TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    userID INT
);

CREATE TABLE Books(
    bookID INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR (50),
    genre VARCHAR (50),
    price DECIMAL (5,2),
    authorID INT,
    dateAdded TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    userID INT
);

CREATE TABLE Users(
    userID INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR (50),
    password VARCHAR (50)
)
