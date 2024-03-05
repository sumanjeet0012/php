--  insert data into users table
INSERT INTO users (username, pwd, email) VALUES ('suman', 'suman123', 'suman@gmail.com');

-- update data into users table
UPDATE users SET email = 'suraj0012@gmail.com',username = 'suraj0012',pwd = 'suraj123' WHERE username = 'suman' AND pwd = 'suman123';

-- delete data from users table
DELETE FROM users WHERE id = 1;

-- after deleting data with id = 1, if we create a new data with then it will have id = 3.
-- and we should not manually change the ids in the table as it will be break the links between different tables.
