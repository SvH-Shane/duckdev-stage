<?php 
	//*PHOTOGALLYER RECENT UPLOADS*//
  	 $query = $db->query("SELECT * FROM aircraftdb WHERE status = 3 AND userId = '$active_userID' ORDER BY views DESC LIMIT 1");

   	 $result = $query->fetchAll(PDO::FETCH_ASSOC);


	 $counter=0;
	 foreach($result as $photoHighligted) {
		 
		 if(!isset($first_item)) $first_item = $photoHighligted;
		 
		 $img = $photoHighligted['tumbnail'];
		 $polaroidImg = $photoHighligted['img'];
		 $id = 'photo?id=' . $photoHighligted['id'];
		 $views = $photoHighligted['views'];
		 
		 
		 $counter++;
			 
				
		 $most_seen_own .='
			<a href="'.$id.'">
				<div class="dpf-statistics__holder">
					<div class="dpf-statistics__content">
						Most seen picture
					</div>
					<div class="dpf-statistics__content-number">
						'.$views.'
					</div>
				<img src="http://dutchplanefinders.nl'.$polaroidImg.'" class="dpf-statistics__img">
				</div>
			</a>';}
	 
?>    
   