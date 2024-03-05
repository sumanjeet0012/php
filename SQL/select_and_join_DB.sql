-- Retrieves the username and comment text from the users table where the users_id is 3.
SELECT username, comment_text FROM users WHERE users_id = 3;

-- Retrieves all columns from the users table where the users_id is 3.
SELECT * FROM users WHERE users_id = 3;

-- Retrieves all columns from the users table and comments table where the users.id matches comments.users_id.
SELECT * FROM users JOIN comments ON users.id = comments.users_id;