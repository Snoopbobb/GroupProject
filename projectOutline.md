#Hiking Website:



##Mandatory:

-Priority 0 :  Comments (guest and user) - Rate
-Priority 1: Instagram pictures (API)
-Priority 2: Weather
-Priority 3: ratings
-Priority 4: Get Dribbble design that you want page to look like(can use two if needed) Adopt structure, and be as 					close to it as possible.






##Business Rules:

What we need:
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
		- instagram API

##Use Cases:
	
Goes Right - walk through the website:

	1. Start at Home(landing page?)
	2. login -> enables comments
	2 1/2. non login -> no comments
	3. search trails
	4. access trail views 




Goes Wrong - error messages/ redirection:

	1. Sign up page
		- redirection to page
		- highlight invalid forms
	2. log in page
		- if user does not exist - say "no", and offer to take them to sign up page
	3. adding a comment 
		-hey you're not logged in, redirect to log in page with sign up link
	4. redirection if any uneccesarry action is taken.

 
