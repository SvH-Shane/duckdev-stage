<?php 
	 $query = $db->query("SELECT * FROM community_following WHERE userId = '$active_userID' ORDER BY date DESC" );
   	 $result = $query->fetchAll(PDO::FETCH_ASSOC);
	 $communityStatusTimeline = '';

	 $counter=0;
	 foreach($result as $communityStatus) {
		 
		 if(!isset($first_item)) $first_item = $communityStatus;
		 
		 $followIt = $communityStatus['followingId'];
		 
  	 $query = $db->query("SELECT * FROM community_status WHERE forFollowersID = '%$followIt%,' ORDER BY date DESC" );
   	 $result = $query->fetchAll(PDO::FETCH_ASSOC);
	 $communityStatusTimeline = '';

	 $counter=0;
	 foreach($result as $communityStatus) {
		 
		 if(!isset($first_item)) $first_item = $communityStatus;
		 
		 $status_username = $communityStatus['followingId'];
		 $status_message = $communityStatus['message'];
		 $status_username = $communityStatus['username'];
		 $status_status = $communityStatus['status'];
		 $status_date = $communityStatus['date'];
		 $forFollowersID = $communityStatus['forFollowersID'];
		 
		 $ComstatusLink = 'page/community_status?id=' . $communityStatus['id'];

		 $counter++;
		 if ($status_status = 1) {
		  $communityStatusTimeline .=
		 '<div class="dpf-community-status">
				<div class="dpf-community-status__header" style="background-image: url(https://scontent-amt2-1.xx.fbcdn.net/v/t31.0-8/18739251_1994454744121178_9017603186074098387_o.jpg?_nc_cat=0&oh=8090d3a5ec1649c3ae24c7e0634ff813&oe=5B839663)">		<mark class="flag-mark">Check-in </mark>			
				</div>
				<div class="dpf-community__profile" style="background-image: url(../../img_files/dpf_img/default/default_profile_560_374_17.png);"></div>
				<div class="dpf-community-status__namebadge">
					<b>'.$status_username.'</b> <small>on: '.$status_date.'</small>
				</div><br>
				<div class="dpf-community-status__holder">
					'.$status_message.' '.$followIt.' '.$forFollowersID.'
				</div>
				<div class="dpf-community-status__cta">
					<i class="far fa-thumbs-up"></i> Like &nbsp;&nbsp; <i class="fas fa-comment-dots"></i> Comment  <span><i class="fas fa-flag"></i> Report </span>
				</div>
			</div>';
		} 
		 
		 
			 			
	 }}
?>    
 
