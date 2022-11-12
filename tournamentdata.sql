CREATE DATABASE IF NOT EXISTS SSLPROJECT ;

USE `SSLPROJECT`;

CREATE TABLE IF NOT EXISTS results
    (
        id INT(6) AUTO_INCREMENT PRIMARY KEY,
        annouce VARCHAR(255)
    );

CREATE TABLE IF NOT EXISTS ongoing_day
    (
        day_going VARCHAR(30) DEFAULT 'Day 1'
    );

CREATE TABLE IF NOT EXISTS admin_data
    (
        username VARCHAR(30) NOT NULL PRIMARY KEY,
        passkey VARCHAR(30) NOT NULL 
    );
	
INSERT INTO admin_data(username , passkey) VALUES('admin_main','123');

CREATE TABLE IF NOT EXISTS fixtures
    (
    	clg1 VARCHAR(50) NOT NULL,
        clg2 VARCHAR(50) NOT NULL,
        sport VARCHAR(20) NOT NULL,
        venue VARCHAR(50) NOT NULL ,
        time_ VARCHAR(30) NOT NULL ,
        day_ VARCHAR(30) NOT NULL,
        gc1 INT DEFAULT 0,
        gc2 INT DEFAULT 0,
        final_result VARCHAR(50)
    );

CREATE TABLE IF NOT EXISTS fixtures_cricket
    (
    	clg1 VARCHAR(50) NOT NULL,
        clg2 VARCHAR(50) NOT NULL,
        sport VARCHAR(20) NOT NULL,
        venue VARCHAR(50) NOT NULL ,
        time_ VARCHAR(30) NOT NULL ,
        day_ VARCHAR(30) NOT NULL,
        r1 INT DEFAULT 0,
        r2 INT DEFAULT 0,
        w1 INT DEFAULT 0,
        w2 INT DEFAULT 0,
        final_result VARCHAR(50)
    );

INSERT INTO  fixtures_cricket(clg1,clg2,sport,venue,time_,day_)VALUES('IIT-Bombay','IIT-Dharwad','cricket','Cricket Ground 1','8:00AM','Day 1');
INSERT INTO  fixtures_cricket(clg1,clg2,sport,venue,time_,day_)VALUES('IIT-Guhuwati','IIT-Gandhinagar','cricket','Cricket Ground 1','10:00AM','Day 1');
INSERT INTO  fixtures_cricket(clg1,clg2,sport,venue,time_,day_)VALUES('IIT-Ropar','IIT-Goa','cricket','Cricket Ground 1','12:00AM','Day 1');
INSERT INTO  fixtures_cricket(clg1,clg2,sport,venue,time_,day_)VALUES('IIT-Delhi','IIT-Roorkee','cricket','Cricket Ground 2','8:00AM','Day 1');
INSERT INTO  fixtures_cricket(clg1,clg2,sport,venue,time_,day_)VALUES('IIT-Kanpur','IIT-Hyderabad','cricket','Cricket Ground 2','10:00AM','Day 1');
INSERT INTO  fixtures_cricket(clg1,clg2,sport,venue,time_,day_)VALUES('IIT-Varanasi','IIT-Jodhpur','cricket','Cricket Ground 2','12:00AM','Day 1');
INSERT INTO  fixtures_cricket(clg1,clg2,sport,venue,time_,day_)VALUES('IIT-Indore','IIT-Jammu','cricket','Cricket Ground 1','8:00AM','Day 2');
INSERT INTO  fixtures_cricket(clg1,clg2,sport,venue,time_,day_)VALUES('IIT-Madras','IIT-Kharagpur','cricket','Cricket Ground 1','10:00AM','Day 2');
INSERT INTO  fixtures_cricket(clg1,clg2,sport,venue,time_,day_)VALUES('IIT-Mandi','IIT-Dhanbad','cricket','Cricket Ground 1','12:00AM','Day 2');
INSERT INTO  fixtures_cricket(clg1,clg2,sport,venue,time_,day_)VALUES('IIT-Patna','IIT-Tirupati','cricket','Cricket Ground 2','8:00AM','Day 2');
INSERT INTO  fixtures_cricket(clg1,clg2,sport,venue,time_,day_)VALUES('IIT-Pallakkad','IIT-Bhubneshwar','cricket','Cricket Ground 2','10:00AM','Day 2');

CREATE TABLE IF NOT EXISTS points
    (
            college VARCHAR(30) NOT NULL ,
            football_points INT(6) DEFAULT 0 ,
            cricket_points INT(6) DEFAULT 0,
            total_points INT(6) DEFAULT 0
    );


INSERT INTO  points(college)VALUES('IIT-Kharagpur');
INSERT INTO  points(college)VALUES('IIT-Bombay');
INSERT INTO  points(college)VALUES('IIT-Madras');
INSERT INTO  points(college)VALUES('IIT-Kanpur');
INSERT INTO  points(college)VALUES('IIT-Delhi');
INSERT INTO  points(college)VALUES('IIT-Guhuwati');
INSERT INTO  points(college)VALUES('IIT-Roorkee');
INSERT INTO  points(college)VALUES('IIT-Ropar');
INSERT INTO  points(college)VALUES('IIT-Bhubneshwar');
INSERT INTO  points(college)VALUES('IIT-Gandhinagar');
INSERT INTO  points(college)VALUES('IIT-Hyderabad');
INSERT INTO  points(college)VALUES('IIT-Jodhpur');
INSERT INTO  points(college)VALUES('IIT-Patna');
INSERT INTO  points(college)VALUES('IIT-Indore');
INSERT INTO  points(college)VALUES('IIT-Mandi');
INSERT INTO  points(college)VALUES('IIT-Varanasi');
INSERT INTO  points(college)VALUES('IIT-Pallakkad');
INSERT INTO  points(college)VALUES('IIT-Tirupati');
INSERT INTO  points(college)VALUES('IIT-Dhanbad');
INSERT INTO  points(college)VALUES('IIT-Bhilai');
INSERT INTO  points(college)VALUES('IIT-Dharwad');
INSERT INTO  points(college)VALUES('IIT-Jammu');
INSERT INTO  points(college)VALUES('IIT-Goa');

INSERT INTO  fixtures(clg1,clg2,sport,venue,time_,day_)VALUES('IIT-Bombay','IIT-Dharwad','football','Football Ground 1','8:00AM','Day 1');
INSERT INTO  fixtures(clg1,clg2,sport,venue,time_,day_)VALUES('IIT-Guhuwati','IIT-Gandhinagar','football','Football Ground 1','10:00AM','Day 1');
INSERT INTO  fixtures(clg1,clg2,sport,venue,time_,day_)VALUES('IIT-Ropar','IIT-Goa','football','Football Ground 1','12:00AM','Day 1');
INSERT INTO  fixtures(clg1,clg2,sport,venue,time_,day_)VALUES('IIT-Delhi','IIT-Roorkee','football','Football Ground 2','8:00AM','Day 1');
INSERT INTO  fixtures(clg1,clg2,sport,venue,time_,day_)VALUES('IIT-Kanpur','IIT-Hyderabad','football','Football Ground 2','10:00AM','Day 1');
INSERT INTO  fixtures(clg1,clg2,sport,venue,time_,day_)VALUES('IIT-Varanasi','IIT-Jodhpur','football','Football Ground 2','12:00AM','Day 1');
INSERT INTO  fixtures(clg1,clg2,sport,venue,time_,day_)VALUES('IIT-Indore','IIT-Jammu','football','Football Ground 1','8:00AM','Day 2');
INSERT INTO  fixtures(clg1,clg2,sport,venue,time_,day_)VALUES('IIT-Madras','IIT-Kharagpur','football','Football Ground 1','10:00AM','Day 2');
INSERT INTO  fixtures(clg1,clg2,sport,venue,time_,day_)VALUES('IIT-Mandi','IIT-Dhanbad','football','Football Ground 1','12:00AM','Day 2');
INSERT INTO  fixtures(clg1,clg2,sport,venue,time_,day_)VALUES('IIT-Patna','IIT-Tirupati','football','Football Ground 2','8:00AM','Day 2');
INSERT INTO  fixtures(clg1,clg2,sport,venue,time_,day_)VALUES('IIT-Pallakkad','IIT-Bhubneshwar','football','Football Ground 2','10:00AM','Day 2');


