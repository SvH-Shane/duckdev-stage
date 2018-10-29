<?php 
     $queryPhotographer = $db->query("SELECT * FROM users WHERE username = '$senderName'");
   	 $resultPhotographer = $queryPhotographer->fetchAll(PDO::FETCH_ASSOC);

	 $userLinkId = $resultPhotographer[0]['id'];
	 $user_ProfileImg = $resultPhotographer[0]['profileImg'];
	 $userPremium = $resultPhotographer[0]['premiumFinder'];
	 $userVerified = $resultPhotographer[0]['verified'];


  	 $query = $db->query("SELECT * FROM community_screening_photo_message WHERE photoid = '$screenerPhotoId6' OR photoid = '$screenPhoto_pictureID' ORDER BY date ASC");
   	 $result = $query->fetchAll(PDO::FETCH_ASSOC);
	 $screening_respondPhoto = '';

	 $counter=0;
	 foreach($result as $photoRespond) {
		 
		 if(!isset($first_item)) $first_item = $photoRespond;
		 
		 
		 $message = $photoRespond['message'];
		 $photoRespondid = $photoRespond['photoid'];
		 $senderName = $photoRespond['sendername'];
		 $date = $photoRespond['date'];

		 
	 $querySender = $db->query("SELECT * FROM users WHERE username = '$senderName'");
   	 $resultSender = $querySender->fetchAll(PDO::FETCH_ASSOC);

	 $senderLinkId = $resultSender[0]['id'];
	 $sender_ProfileImg = $resultSender[0]['profileImg'];
	 $senderPremium = $resultSender[0]['premiumFinder'];
	 $senderVerified = $resultSender[0]['verified'];
	 
   if($counter<1){	     
	if ($senderPremium == 1){
		 $spotter_icon .='<i id="dpf-premium-badge__plane" class="fas fa-paper-plane"></i>';
	 }}
	 elseif ($senderVerified == 1) {
		 $spotter_icon .='<i id="dpf-badge__verified" class="fas fa-check-circle"></i>';
	 } else echo "";
	
	if ($senderPremium == 1) {
		$spotter_Premium .='<i id="dpf-premium-badge__plane" class="fas fa-paper-plane"></i>';
	}

		 if ($user_username == $senderName ){
		 $screening_respondPhoto .=
		 '
		 <div class="dpf-photo-reactions">
			<div class="dpf-photo__comment-pf__self" style="background-image: url('.$user_profileImg.')";>
			</div>
			<div class="dpf-photo__comment-box__self">
				<b>'.$senderName.'</b><br>
				'.$message.'<br>
				<span>'.$date.'</span>
			</div>
		</div>
		 ';
	 } elseif ($senderName == $photo_username) {
		$screening_respondPhoto .=
		 '
		 <div class="dpf-photo-reactions">
			<div class="dpf-photo__comment-pf__owner" style="background-image: url('.$sender_ProfileImg.')";>
			</div>
			<div class="dpf-photo__comment-box__owner">
				<i class="fas fa-camera"></i>&nbsp;<b>'.$senderName.'</b> <br>
				'.$message.'<br>
				<span>'.$date.'</span>
			</div>
		 </div>
		 ';
	 
	 } else {
		$screening_respondPhoto .=
		 '
		 <div class="dpf-photo-reactions">
			<div class="dpf-photo__comment-pf" style="background-image: url('.$sender_ProfileImg.')";>
			</div>
			<div class="dpf-photo__comment-box">
				<b>'.$senderName.'</b> <br>
				'.$message.'<br>
				<span>'.$date.'</span>
			</div>
		 </div>
		 '; 
		 }
}
				
	 
?>     
   