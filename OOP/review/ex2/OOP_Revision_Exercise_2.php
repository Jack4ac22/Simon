<?php

	/*
	Based on this DB structure : 

	USERS (user_id, first_name, last_name, mail, password) 
	ARTISTS (artist_id, name, bio, gender, date_of_birth) 
	SONGS (song_id, title, release_date, #categ_id, #artist_id) 
	CATEGORIES (categ_id, title) 
	PLAYLISTS (playlist_id, title, creation_date, #user_id) PLAYLIST_CONTENT(#playlist_id, #song_id)


	Write the SQL queries to : 
		1. Retrieve all playlists with user's full name on each playlist.
		
							SELECT PL.title AS PlayList FROM PLAYLISTS AS PL 
							INNER JOIN USers as US 
							ON PL.user_id = US.user_id
							WHERE US.first_name = 'username'
							AND US.last_name = 'userLastName'

		2. Get all the songs for the artist id=2

								SELECT * FROM SONGS AS S
								INNER JOIN ARTISTS AS ART
								ON ART.artist_id = S.artist_id
								WHERE ART.artist_id = 2

		3. Get number of songs per categories.


								SELECT CAT.title, COUNT(S.song_id) FROM SONGS AS S
								INNER JOIN CATEGORIES AS CAT
								ON S.categ_id = CAT.categ_id  
								GROUP BY S.categ_id


	*/
