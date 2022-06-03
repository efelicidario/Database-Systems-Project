DROP VIEW IF EXISTS pending_spots;
DROP VIEW IF EXISTS user_spots;

CREATE VIEW pending_spots AS
SELECT
	newspot.spot_id,
	newspot.user_id,
	coalesce(user.username, "[deleted]") AS username,
	newspot.address,
	newspot.scity,
	newspot.sstate,
	newspot.submit_date,
	newspot.difficulty_rating,
	newspot.description,
	newspot.approves
FROM newspot INNER JOIN user
WHERE newspot.approved = 0
ORDER BY newpost.submit_date DESC;

CREATE VIEW user_spots AS
SELECT
	


