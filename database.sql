CREATE TABLE collections (
    id SERIAL PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

CREATE TABLE products (
    id SERIAL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    collection_id INT,
    FOREIGN KEY (collection_id) REFERENCES collections(id)
);

INSERT INTO collections (name) VALUES
    ('Collection 1'),
    ('Collection 2'),
    ('Collection 3');

INSERT INTO products (name, price, collection_id) VALUES
    ('Stool 1', 15.50, 1),
    ('Stool 2', 10.00, 1),
    ('Stool 3', 15.00, 1),
    ('Stool 4', 10.50, 2),
    ('Stool 5', 15.00, 2),
    ('Stool 6', 12.50, 2),
    ('Stool 7', 12.00, 3),
    ('Stool 8', 10.00, 3);
