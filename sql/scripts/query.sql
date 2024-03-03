-- 1. Zapisz zapytanie SQL tworzące schemat.
CREATE TABLE IF NOT EXISTS Authors (
                         id SERIAL PRIMARY KEY,
                         first_name VARCHAR(100),
                         last_name VARCHAR(100)
);
CREATE TABLE IF NOT EXISTS Books (
                       id SERIAL PRIMARY KEY,
                       title VARCHAR(255),
                       publication_year INT,
                       ISBN VARCHAR(13),
                       author_id INT,
                       FOREIGN KEY (author_id) REFERENCES Authors(id)
);

CREATE TABLE IF NOT EXISTS Reviews (
                         id SERIAL PRIMARY KEY,
                         rating INT CHECK (Rating >= 1 AND Rating <= 10),
                         content TEXT,
                         book_id INT,
                         FOREIGN KEY (book_id) REFERENCES Books(id)
);

-- 2. Zapisz zapytanie zwracające imiona i nazwiska autorów, wraz z liczbą napisanych przez nich książek.
SELECT Authors.first_name "First name", Authors.last_name "First name", COUNT(Books.id) "Number of books"
FROM Authors
         JOIN Books ON Authors.id = Books.author_id
GROUP BY Authors.id;

-- 3. Zapisz zapytanie tworzące perspektywę (widok) zawierający 5-ciu autorów, których średnia ocen wszystkich książek jest najwyższa.
DROP VIEW IF EXISTS Top5Authors;
CREATE VIEW Top5Authors AS
SELECT Authors.first_name, Authors.last_name, AVG(Reviews.rating) AS average_rating
FROM Authors
         JOIN Books ON Authors.id = Books.author_id
         JOIN Reviews ON Books.id = Reviews.book_id
GROUP BY Authors.id
ORDER BY average_rating DESC
    LIMIT 5;
-- 4. Podglad widoku
SELECT * FROM Top5Authors;

