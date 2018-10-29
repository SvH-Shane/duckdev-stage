<?php 
	//*PHOTOGALLYER RECENT UPLOADS*//
  	 $query = $db->query("SELECT * FROM aircraftdb WHERE status = 3 AND userId = '$active_userID' ORDER BY likes DESC LIMIT 1");

   	 $resultPicture = $query->fetchAll(PDO::FETCH_ASSOC);


	 $counter=0;
	 foreach($resultPicture as $mostLikedPicture) {
		 
		 if(!isset($first_item)) $first_item = $mostLikedPicture;
		 
		 $username = $mostLikedPicture['username'];
		 $title = $mostLikedPicture['title'];
		 $img = $mostLikedPicture['tumbnail'];
		 $imgSrcLiked = $mostLikedPicture['img'];
		 $id = 'photo?id=' . $mostLikedPicture['id'];
		 $idScrn = 'page/screening-photo?id=' . $mostLikedPicture['id'];
		 $idScrner = 'page/screener-photo?id=' . $mostLikedPicture['id'];
		 $likes = $mostLikedPicture['likes'];
		 $likes_correction = $likes - 1; 
		 $counter++;
			 
				
		 $most_liked_own .='
			<a href="'.$id.'">
				<div class="dpf-statistics__holder">
					<div class="dpf-statistics__content">
						Most liked picture
					</div>
					<div class="dpf-statistics__content-number">
						'.$likes_correction.'
					</div>
				<img src="http://dutchplanefinders.nl'.$imgSrcLiked.'" class="dpf-statistics__img">
				</div>
			</a>';}
	 
?>    
   