#Hiking Website:



##Mandatory:

-Priority 0 :  Comments (guest and user) - Rate
-Priority 1: Instagram pictures (API)
-Priority 2: Weather
-Priority 3: ratings
-Priority 4: Get Dribbble design that you want page to look like(can use two if needed) Adopt structure, and be as 					close to it as possible.






##Business Rules:
- DB
- how to have images in DB?
	- create db called file, file record has path to file, the code knows where images is located. fileID and fileName
	-user file, every record will be user id and what file they have
	- if user only has one file, have a foreign key that goes to the file table.
	- great example of left join: SELECT * FROM Trailhead LEFT JOIN File Table
-specific mountains and hiking trails already placed in to DB.
-option for individuals to sign up 
	- profile:
		-CRUD
		- validation
		-image, user name, email, password.
- views:
	-include weather
	- hiking trail info.
	- comments
	– ratinngs
 
