DROP PROCEDURE IF EXISTS RegisterUser;

DELIMITER //

CREATE PROCEDURE `RegisterUser` (uname varchar(30), passhash text, uEmail varchar(30), FirstName varchar(30), LastName varchar(30), uCity varchar(30), uState varchar(30), Sport varchar(30))
BEGIN
	START TRANSACTION;

	SELECT COUNT(*) INTO @duplicateCount
	FROM user
	WHERE username = uname OR email = uEmail;

	IF @duplicateCount > 0 THEN
		SELECT NULL as user_id, 'Username/email already exists' AS 'Error';
	ELSE
		INSERT INTO user (username, password, email, fname, lname, ucity, ustate, sport) VALUES (uname, passhash, uEmail, FirstName, LastName, uCity, uState, Sport);
		SELECT last_insert_id() AS user_id, NULL AS 'Error';
	END IF;
	
	COMMIT;
END;
//
DELIMITER ;

DROP PROCEDURE IF EXISTS SubmitSpot;

DELIMITER //

CREATE PROCEDURE `SubmitSpot` (param_spot_id int(11), param_user int(11), param_address varchar(100), param_zip int(5), 
	param_scity varchar(30), param_sstate varchar(30), param_submit_date date, param_difficulty int(11), 
	param_description varchar(500))
BEGIN
	START TRANSACTION;

	SELECT COUNT(*) INTO @duplicateSpot
	FROM newspot
	WHERE address = param_address;

	IF @duplicateSpot > 0 THEN
		SELECT NULL as spot_id, 'Spot has already been submitted' AS 'Error';
	ELSE
		INSERT INTO newspot (spot_id, user_id, address, zip_code, scity, sstate, submit_date, difficulty_rating,
		description, approves) VALUES (param_spot_id, param_user, param_address, param_zip, param_scity,
		param_sstate, param_submit_date, param_difficulty, param_description);
		SELECT last_insert_id() AS spot_id, NULL as 'Error';
	END IF;

	COMMIT;
END;
//
DELIMITER ;
