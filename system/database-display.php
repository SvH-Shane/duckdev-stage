<?php 
	//*PHOTO FILTER*//
  	 $query = $db->query("SELECT * FROM aircraftdb WHERE status = 3 ORDER BY date DESC LIMIT 9");
   	 $result = $query->fetchAll(PDO::FETCH_ASSOC);


	 $counter=0;
	 foreach($result as $photo) {
		 
		 if(!isset($first_item)) $first_item = $photo;
		 
		 $username = $photo['username'];
		 $title = $photo['title'];
		 $img = $photo['tumbnail'];
		 $polaroidImg = $photo['img'];
		 $large_img = $photo['img'];
		 $id = 'photo?id=' . $photo['id'];
		 $idScrn = 'page/screening-photo?id=' . $photo['id'];
		 $idScrner = 'page/screener-photo?id=' . $photo['id'];
		 $idNews = $photo['id'];
		 $date = $photo['date'];
		 $note = $photo['note'];
		 $status = $photo['status'];
		 $likes = $photo['likes'];
		 $views = $photo['views'];
		 $aircraft = $photo['aircraft'];
		 $photoType = $photo['photoType'];
		 $category = $photo['category'];
		 $reactionCounter = $photo['reactioncounter'];
//		 $date = date("d F, Y");
		 $likes_correction = $likes - 1; 
		 if ($likes_correction = '-1') { $likes_correction = $likes +1;}
		 $current_likes = 4;
		 $database_img_block_fav = '
		 	<a href="'.$id.'">
				<div class="dpf-photo__polaroid">
					<div class="dpf-news-block__content">
						<mark> Favorite </mark>
						<h1>'.$title.'</h1>
					</div>
					<div class="dpf-news__statistics">'.$date.' &nbsp;&nbsp;<i class="fas fa-heart"></i> '.$likes_correction.' &nbsp;&nbsp;<i class="fas fa-eye"></i> '.$views.'</div>
					<div class="dpf-overflow__black"></div>
					<img class="dpf-photo__polaroid-img" src="http://dutchplanefinders.nl/'.$large_img.'" alt="'.$title.' By: '.$username.'">
				</div>
			</a>';
		 $database_img_block = '
		 	<a href="'.$id.'">
				<div class="dpf-photo__polaroid">
					<div class="dpf-news-block__content">
						<h1>'.$title.'</h1>
					</div>
					<div class="dpf-news__statistics">'.$date.' &nbsp;&nbsp;<i class="fas fa-heart"></i> '.$likes_correction.' &nbsp;&nbsp;<i class="fas fa-eye"></i> '.$views.'</div>
					<div class="dpf-overflow__black"></div>
					<img class="dpf-photo__polaroid-img" src="http://dutchplanefinders.nl/'.$large_img.'" alt="'.$title.' By: '.$username.'">
				</div>
			</a>';
		 
//		 if ($likes_correction >= '3') { $marker_1 = '<mark>Loved</mark>';}
		 
		 
///////////// FILTER PHOTOS /////////////

// Part One - Main
$counter++;
if($counter<11){	
	if($status==3){ 
		if($likes_correction > $current_likes){
			$main_database_1 .= $database_img_block_fav;
		} else {
			$main_database_1 .= $database_img_block;
		}
	}
}
		 


// MILITARY
if($status==3){ 
	if($category==2){ 
		if($likes_correction > $current_likes){
		$military_database .= $database_img_block_fav;
		} else {
			$military_database .= $database_img_block;
		}
	}  
}
		 
// HIGHLIGHTED
if($status==3){ 
	if($photoType==3){ 
		if($likes_correction > $current_likes){
		$higlighted_database .= $database_img_block_fav;
		}else{
			$higlighted_database .= $database_img_block;	
		}
	}
}

// PLATFORM
if($status==3){ 
	if($category==4){ 
		if($likes_correction > $current_likes){
		$platform_database .= $database_img_block_fav;
	}else{
		$platform_database .= $database_img_block;
		}
}
		 
// CREATIVE
if($status==3){ 
	if($category==5){ 
		if($likes_correction > $current_likes){ 
		$creative_database .= $database_img_block_fav;
	}else { $creative_database .= $database_img_block;
		  }
	}
}

// GOLDENOLDIES
if($status==3){ 
	if($category==6){ 
	 	if($likes_correction > $current_likes){ 
		$golden_oldies_database .= $database_img_block_fav;
	}else { $golden_oldies_database .= $database_img_block;}
	}
}

// AVIATIONGLAMOUR
if($status==3){ 
	if($category==7){ 
		if($likes_correction > $current_likes){ 
		$aviation_glamour_database .= $database_img_block_fav; 
		;
	}else {$aviation_glamour_database .= $database_img_block; }}
}

	 }



//*PHOTO FILTER*//
  	 $query = $db->query("SELECT * FROM aircraftdb WHERE status = 3 ORDER BY updateDate DESC LIMIT 9,9");
   	 $result = $query->fetchAll(PDO::FETCH_ASSOC);


	 $counter=0;
	 foreach($result as $photo) {
		 
		 if(!isset($first_item)) $first_item = $photo;
		 
		 $username = $photo['username'];
		 $title = $photo['title'];
		 $img = $photo['tumbnail'];
		 $polaroidImg = $photo['img'];
		 $large_img = $photo['img'];
		 $id = 'photo?id=' . $photo['id'];
		 $idScrn = 'page/screening-photo?id=' . $photo['id'];
		 $idScrner = 'page/screener-photo?id=' . $photo['id'];
		 $idNews = $photo['id'];
		 $date = $photo['date'];
		 $date = date("d F, Y");
		 $note = $photo['note'];
		 $status = $photo['status'];
		 $likes = $photo['likes'];
		 $views = $photo['views'];
		 $aircraft = $photo['aircraft'];
		 $photoType = $photo['photoType'];
		 $category = $photo['category'];
		 $reactionCounter = $photo['reactioncounter'];
		 $likes_correction = $likes - 1; 
		 if ($likes_correction = '-1') { $likes_correction = $likes +1;}
		 
//		 if ($likes_correction >= '3') { $marker_1 = '<mark>Loved</mark>';}
		 
		 
///////////// FILTER PHOTOS /////////////

// Part One - Main
$counter++;
if($counter<11){	
	if($status==3){ 
			$main_database_2 .='
			<a href="'.$id.'">
				<div class="dpf-photo__polaroid">
					<div class="dpf-news-block__content">
						'.$marker_1.'
						'.$marker_2.'
						<h1>'.$title.'</h1>
					</div>
					<div class="dpf-news__statistics">'.$date.' &nbsp;&nbsp;<i class="fas fa-heart"></i> '.$likes_correction.' &nbsp;&nbsp;<i class="fas fa-eye"></i> '.$views.'</div>
					<div class="dpf-overflow__black"></div>
					<img class="dpf-photo__polaroid-img" src="http://dutchplanefinders.nl/'.$large_img.'" alt="'.$title.' By: '.$username.'">
				</div>
			</a>
			';
	}
}}

//*PHOTO FILTER*//
  	 $query = $db->query("SELECT * FROM aircraftdb WHERE status = 3 ORDER BY updateDate DESC LIMIT 18,9999");
   	 $result = $query->fetchAll(PDO::FETCH_ASSOC);


	 $counter=0;
	 foreach($result as $photo) {
		 
		 if(!isset($first_item)) $first_item = $photo;
		 
		 $username = $photo['username'];
		 $title = $photo['title'];
		 $img = $photo['tumbnail'];
		 $polaroidImg = $photo['img'];
		 $large_img = $photo['img'];
		 $id = 'photo?id=' . $photo['id'];
		 $idScrn = 'page/screening-photo?id=' . $photo['id'];
		 $idScrner = 'page/screener-photo?id=' . $photo['id'];
		 $idNews = $photo['id'];
		 $date = $photo['date'];
		 $date = date("d F, Y");
		 $note = $photo['note'];
		 $status = $photo['status'];
		 $likes = $photo['likes'];
		 $views = $photo['views'];
		 $aircraft = $photo['aircraft'];
		 $photoType = $photo['photoType'];
		 $category = $photo['category'];
		 $reactionCounter = $photo['reactioncounter'];
		 $likes_correction = $likes - 1; 
		 if ($likes_correction = '-1') { $likes_correction = $likes +1;}
		 
//		 if ($likes_correction >= '3') { $marker_1 = '<mark>Loved</mark>';}
		 
		 
///////////// FILTER PHOTOS /////////////

// Part One - Main
$counter++;
	if($status==3){ 
			$main_database_3 .='
			<a href="'.$id.'">
				<div class="dpf-photo__polaroid">
					<div class="dpf-news-block__content">
						'.$marker_1.'
						'.$marker_2.'
						<h1>'.$title.'</h1>
					</div>
					<div class="dpf-news__statistics">'.$date.' &nbsp;&nbsp;<i class="fas fa-heart"></i> '.$likes_correction.' &nbsp;&nbsp;<i class="fas fa-eye"></i> '.$views.'</div>
					<div class="dpf-overflow__black"></div>
					<img class="dpf-photo__polaroid-img" src="http://dutchplanefinders.nl/'.$large_img.'" alt="'.$title.' By: '.$username.'">
				</div>
			</a>
			';
	}
}

/// PageSelection - Filter

  	 $query = $db->query("SELECT * FROM aircraftdb WHERE status = 3 ORDER BY updateDate DESC");
   	 $result = $query->fetchAll(PDO::FETCH_ASSOC);


	 $counter=0;
	 foreach($result as $photo) {
		 
		 if(!isset($first_item)) $first_item = $photo;
		 
		 $username = $photo['username'];
		 $title = $photo['title'];
		 $img = $photo['tumbnail'];
		 $polaroidImg = $photo['img'];
		 $large_img = $photo['img'];
		 $id = 'photo?id=' . $photo['id'];
		 $idScrn = 'page/screening-photo?id=' . $photo['id'];
		 $idScrner = 'page/screener-photo?id=' . $photo['id'];
		 $idNews = $photo['id'];
		 $date = $photo['date'];
		 $note = $photo['note'];
		 $status = $photo['status'];
		 $likes = $photo['likes'];
		 $views = $photo['views'];
		 $aircraft = $photo['aircraft'];
		 $photoType = $photo['photoType'];
		 $category = $photo['category'];
		 $reactionCounter = $photo['reactioncounter'];
//		 $date = date("d F, Y");
		 $likes_correction = $likes - 1; 
		 if ($likes_correction = '-1') { $likes_correction = $likes +1;}
		 
//		 if ($likes_correction >= '3') { $marker_1 = '<mark>Loved</mark>';}
		 
		 
///////////// FILTER PHOTOS /////////////

if($status==3){ 
	if($category==1){ 
		$regular_database .='
		<a href="'.$id.'">
				<div class="dpf-photo__polaroid">
					<div class="dpf-news-block__content">
						'.$marker_1.'
						'.$marker_2.'
						<h1>'.$title.'</h1>
					</div>
					<div class="dpf-news__statistics">'.$date.' &nbsp;&nbsp;<i class="fas fa-heart"></i> '.$likes_correction.' &nbsp;&nbsp;<i class="fas fa-eye"></i> '.$views.'</div>
					<div class="dpf-overflow__black"></div>
					<img class="dpf-photo__polaroid-img" src="http://dutchplanefinders.nl/'.$large_img.'" alt="'.$title.' By: '.$username.'">
				</div>
			</a>
		';
	}
}
		 
// MILITARY
if($status==3){ 
	if($category==2){ 
		$military_database .='
		<a href="'.$id.'">
				<div class="dpf-photo__polaroid">
					<div class="dpf-news-block__content">
						'.$marker_1.'
						'.$marker_2.'
						<h1>'.$title.'</h1>
					</div>
					<div class="dpf-news__statistics">'.$date.' &nbsp;&nbsp;<i class="fas fa-heart"></i> '.$likes_correction.' &nbsp;&nbsp;<i class="fas fa-eye"></i> '.$views.'</div>
					<div class="dpf-overflow__black"></div>
					<img class="dpf-photo__polaroid-img" src="http://dutchplanefinders.nl/'.$large_img.'" alt="'.$title.' By: '.$username.'">
				</div>
			</a>
		';
	}
}
		 
// HIGHLIGHTED
if($status==3){ 
	if($photoType==3){ 
		$higlighted_database .='
		<a href="'.$id.'">
				<div class="dpf-photo__polaroid">
					<div class="dpf-news-block__content">
						'.$marker_1.'
						'.$marker_2.'
						<h1>'.$title.'</h1>
					</div>
					<div class="dpf-news__statistics">'.$date.' &nbsp;&nbsp;<i class="fas fa-heart"></i> '.$likes_correction.' &nbsp;&nbsp;<i class="fas fa-eye"></i> '.$views.'</div>
					<div class="dpf-overflow__black"></div>
					<img class="dpf-photo__polaroid-img" src="http://dutchplanefinders.nl/'.$large_img.'" alt="'.$title.' By: '.$username.'">
				</div>
			</a>
		';
	}
}

// PLATFORM
if($status==3){ 
	if($category==4){ 
		$platform_database .='
		<a href="'.$id.'">
				<div class="dpf-photo__polaroid">
					<div class="dpf-news-block__content">
						'.$marker_1.'
						'.$marker_2.'
						<h1>'.$title.'</h1>
					</div>
					<div class="dpf-news__statistics">'.$date.' &nbsp;&nbsp;<i class="fas fa-heart"></i> '.$likes_correction.' &nbsp;&nbsp;<i class="fas fa-eye"></i> '.$views.'</div>
					<div class="dpf-overflow__black"></div>
					<img class="dpf-photo__polaroid-img" src="http://dutchplanefinders.nl/'.$large_img.'" alt="'.$title.' By: '.$username.'">
				</div>
			</a>
		';
	}
}
		 
// CREATIVE
if($status==3){ 
	if($category==5){ 
		$creative_database .='
		<a href="'.$id.'">
				<div class="dpf-photo__polaroid">
					<div class="dpf-news-block__content">
						'.$marker_1.'
						'.$marker_2.'
						<h1>'.$title.'</h1>
					</div>
					<div class="dpf-news__statistics">'.$date.' &nbsp;&nbsp;<i class="fas fa-heart"></i> '.$likes_correction.' &nbsp;&nbsp;<i class="fas fa-eye"></i> '.$views.'</div>
					<div class="dpf-overflow__black"></div>
					<img class="dpf-photo__polaroid-img" src="http://dutchplanefinders.nl/'.$large_img.'" alt="'.$title.' By: '.$username.'">
				</div>
			</a>
		';
	}
}

// GOLDENOLDIES
if($status==3){ 
	if($category==6){ 
		$golden_oldies_database .='
		<a href="'.$id.'">
				<div class="dpf-photo__polaroid">
					<div class="dpf-news-block__content">
						'.$marker_1.'
						'.$marker_2.'
						<h1>'.$title.'</h1>
					</div>
					<div class="dpf-news__statistics">'.$date.' &nbsp;&nbsp;<i class="fas fa-heart"></i> '.$likes_correction.' &nbsp;&nbsp;<i class="fas fa-eye"></i> '.$views.'</div>
					<div class="dpf-overflow__black"></div>
					<img class="dpf-photo__polaroid-img" src="http://dutchplanefinders.nl/'.$large_img.'" alt="'.$title.' By: '.$username.'">
				</div>
			</a>
		';
	}
}

// AVIATIONGLAMOUR
if($status==3){ 
	if($category==7){ 
		$aviation_glamour_database .='
		<a href="'.$id.'">
				<div class="dpf-photo__polaroid">
					<div class="dpf-news-block__content">
						'.$marker_1.'
						'.$marker_2.'
						<h1>'.$title.'</h1>
					</div>
					<div class="dpf-news__statistics">'.$date.' &nbsp;&nbsp;<i class="fas fa-heart"></i> '.$likes_correction.' &nbsp;&nbsp;<i class="fas fa-eye"></i> '.$views.'</div>
					<div class="dpf-overflow__black"></div>
					<img class="dpf-photo__polaroid-img" src="http://dutchplanefinders.nl/'.$large_img.'" alt="'.$title.' By: '.$username.'">
				</div>
			</a>
		';
	}
}

	 }

	 }

//*PHOTO GALLERY OWN*//
  	 $query = $db->query("SELECT * FROM aircraftdb WHERE status = 3 AND userId = $active_userID ORDER BY date DESC LIMIT 9");
   	 $result = $query->fetchAll(PDO::FETCH_ASSOC);


	 $counter=0;
	 foreach($result as $photo) {
		 
		 if(!isset($first_item)) $first_item = $photo;
		 
		 $username = $photo['username'];
		 $title = $photo['title'];
		 $img = $photo['tumbnail'];
		 $polaroidImg = $photo['img'];
		 $large_img = $photo['img'];
		 $id = 'photo?id=' . $photo['id'];
		 $idScrn = 'page/screening-photo?id=' . $photo['id'];
		 $idScrner = 'page/screener-photo?id=' . $photo['id'];
		 $idNews = $photo['id'];
		 $date = $photo['date'];
		 $note = $photo['note'];
		 $status = $photo['status'];
		 $likes = $photo['likes'];
		 $views = $photo['views'];
		 $aircraft = $photo['aircraft'];
		 $photoType = $photo['photoType'];
		 $category = $photo['category'];
		 $reactionCounter = $photo['reactioncounter'];
//		 $date = date("d F, Y");
		 $likes_correction = $likes - 1; 
		 if ($likes_correction = '-1') { $likes_correction = $likes +1;}
		 $current_likes = 4;
		 $database_img_block_fav = '
		 	<a href="'.$id.'">
				<div class="dpf-photo__polaroid">
					<div class="dpf-news-block__content">
						<mark> Favorite </mark>
						<h1>'.$title.'</h1>
					</div>
					<div class="dpf-news__statistics">'.$date.' &nbsp;&nbsp;<i class="fas fa-heart"></i> '.$likes_correction.' &nbsp;&nbsp;<i class="fas fa-eye"></i> '.$views.'</div>
					<div class="dpf-overflow__black"></div>
					<img class="dpf-photo__polaroid-img" src="http://dutchplanefinders.nl/'.$large_img.'" alt="'.$title.' By: '.$username.'">
				</div>
			</a>';
		 $database_img_block = '
		 	<a href="'.$id.'">
				<div class="dpf-photo__polaroid">
					<div class="dpf-news-block__content">
						<h1>'.$title.'</h1>
					</div>
					<div class="dpf-news__statistics">'.$date.' &nbsp;&nbsp;<i class="fas fa-heart"></i> '.$likes_correction.' &nbsp;&nbsp;<i class="fas fa-eye"></i> '.$views.'</div>
					<div class="dpf-overflow__black"></div>
					<img class="dpf-photo__polaroid-img" src="http://dutchplanefinders.nl/'.$large_img.'" alt="'.$title.' By: '.$username.'">
				</div>
			</a>';
		 
//		 if ($likes_correction >= '3') { $marker_1 = '<mark>Loved</mark>';}
		 
		 
///////////// FILTER PHOTOS /////////////

// Part One - Main
$counter++;
if($counter<11){	
	if($status==3){ 
		if($likes_correction > $current_likes){
			$my_pictures .= $database_img_block_fav;
		} else {
			$my_pictures .= $database_img_block;
		}
	}
}
}
?>    
   