CREATE DATABASE IF NOT EXISTS 'MyAccounts';

use 'MyAccounts';

CREATE TABLE IF NOT EXISTS 'accounts' (
    'account_id' int(11) NOT NULL AUTO_INCREMENT = 1000,
    'username' VARCHAR(255),
    'pass' VARCHAR(255),
    PRIMARY KEY ('account_id')
)

/*
//Potential code for 2nd table that will hold users information
CREATE TABLE accountInfo {
    accountInfo_id int NOT NULL AUTO_INCREMENT = 1000,
    firstName VARCHAR(255),
    lastName VARCHAR(255),
    address VARCHAR(255),
    zip VARCHAR(9),
    account_id
    
}
*/