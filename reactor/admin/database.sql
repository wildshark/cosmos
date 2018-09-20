CREATE TABLE `user_account` (
`userID`  int(11) NULL AUTO_INCREMENT ,
`fullname`  varchar(100) NULL ,
`mobile`  varchar(35) NULL ,
`username`  varchar(35) NULL ,
`password`  varchar(35) NULL ,
`token`  varchar(100) NULL ,
`statusID`  int(5) NULL ,
PRIMARY KEY (`userID`)
);

CREATE
VIEW `get_user_account`AS
SELECT
user_account.userID,
user_account.fullname,
user_account.mobile,
user_account.username,
user_account.`password`,
user_account.token,
user_account.statusID
FROM
user_account;


