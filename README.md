# Insert data in the database with SQL Command

### Start a database

```
use m_16_e_com_db_design;
```

### Insert users data

```
/* =============
Insert users data
================ */

INSERT INTO users (name, email, email_verified_at, password, remember_token, created_at, updated_at) VALUES
('Jane Smith', 'jane.smith@example.com', NOW(), 'password456', 'token456', NOW(), NOW()),
('Alice Brown', 'alice.brown@example.com', NOW(), 'password789', 'token789', NOW(), NOW()),
('Bob Johnson', 'bob.johnson@example.com', NOW(), 'password101', 'token101', NOW(), NOW()),
('Charlie Williams', 'charlie.williams@example.com', NOW(), 'password112', 'token112', NOW(), NOW()),
('David Lee', 'david.lee@example.com', NOW(), 'password113', 'token113', NOW(), NOW()),
('Eve White', 'eve.white@example.com', NOW(), 'password114', 'token114', NOW(), NOW()),
('Frank Harris', 'frank.harris@example.com', NOW(), 'password115', 'token115', NOW(), NOW()),
('Grace Kim', 'grace.kim@example.com', NOW(), 'password116', 'token116', NOW(), NOW()),
('Henry Clark', 'henry.clark@example.com', NOW(), 'password117', 'token117', NOW(), NOW()),
('Ivy Turner', 'ivy.turner@example.com', NOW(), 'password118', 'token118', NOW(), NOW()),
('Jack Scott', 'jack.scott@example.com', NOW(), 'password119', 'token119', NOW(), NOW()),
('Karen Adams', 'karen.adams@example.com', NOW(), 'password120', 'token120', NOW(), NOW()),
('Louis Walker', 'louis.walker@example.com', NOW(), 'password121', 'token121', NOW(), NOW()),
('Megan Hall', 'megan.hall@example.com', NOW(), 'password122', 'token122', NOW(), NOW());
```
