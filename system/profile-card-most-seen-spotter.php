<?php 
	//*PHOTOGALLYER RECENT UPLOADS*//
  	 $query_most_seen_spotter = $db->query("SELECT * FROM aircraftdb WHERE status = 3 AND userId = '$userProfileId' ORDER BY views DESC LIMIT 1");

   	 $most_seen_picture_spotter = $query_most_seen_spotter->fetchAll(PDO::FETCH_ASSOC);


	 $counter=0;
	 foreach($most_seen_picture_spotter as $most_seen_picture_spotter_show) {
		 
		 if(!isset($first_item1)) $first_item1 = $most_seen_picture_spotter_show;
		 
		 $img = $most_seen_picture_spotter_show['tumbnail'];
		 $img_most_seen = $most_seen_picture_spotter_show['img'];
		 $id = 'photo?id=' . $most_seen_picture_spotter_show['id'];
		 $views = $most_seen_picture_spotter_show['views'];
		 
		 
		 $counter++;
			 
				
		 $most_seen_spotter .='
			<a href="'.$id.'">
				<div class="dpf-statistics__holder">
					<div class="dpf-statistics__content">
						Most seen picture
					</div>
					<div class="dpf-statistics__content-number">
						'.$views.'
					</div>
				<img src="http://dutchplanefinders.nl'.$img_most_seen.'" class="dpf-statistics__img">
				</div>
			</a>';}
	 
?>    
   