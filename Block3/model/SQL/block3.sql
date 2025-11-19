-- Create Database
CREATE DATABASE IF NOT EXISTS block3;
USE block3;

-- ==================================================
-- Table: electricimp
-- Stores temperature sensor readings + LED states
-- ==================================================
CREATE TABLE IF NOT EXISTS electricimp (
    id INT AUTO_INCREMENT PRIMARY KEY,
    dttm DATETIME NOT NULL,
    message JSON NOT NULL
);

-- Sample data for temperature readings
INSERT INTO electricimp (dttm, message) VALUES
('2021-11-13 10:00:00', '[{"pin":1,"value":22.4},{"pin":2,"value":21.1},{"pin":5,"value":0},{"pin":7,"value":1}]'),
('2021-11-13 11:00:00', '[{"pin":1,"value":22.7},{"pin":2,"value":20.9},{"pin":5,"value":1},{"pin":7,"value":1}]'),
('2021-11-13 12:00:00', '[{"pin":1,"value":23.1},{"pin":2,"value":21.5},{"pin":5,"value":0},{"pin":7,"value":0}]'),
('2021-11-13 13:00:00', '[{"pin":1,"value":23.6},{"pin":2,"value":21.9},{"pin":5,"value":1},{"pin":7,"value":1}]'),
('2021-11-13 14:00:00', '[{"pin":1,"value":24.2},{"pin":2,"value":22.2},{"pin":5,"value":0},{"pin":7,"value":1}]');

-- ==================================================
-- Table: electricimpLed
-- Stores LED change events
-- ==================================================
CREATE TABLE IF NOT EXISTS electricimpLed (
    id INT AUTO_INCREMENT PRIMARY KEY,
    message JSON NOT NULL
);

-- Sample data for LED actions
INSERT INTO electricimpLed (message) VALUES
('[{"pin":7,"value":1},{"pin":5,"value":0}]'),
('[{"pin":7,"value":0},{"pin":5,"value":1}]'),
('[{"pin":7,"value":1},{"pin":5,"value":1}]'),
('[{"pin":7,"value":0},{"pin":5,"value":0}]');
