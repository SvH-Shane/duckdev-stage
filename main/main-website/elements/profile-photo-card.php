<?php 
	$counter_uploads_own = $db->query("select count(*) from aircraftdb WHERE status = '3' and userId = '$active_userID'" )->fetchColumn();

	$counter_uploads_spotter = $db->query("select count(*) from aircraftdb WHERE status = '3' and userId = '$photo_userid'" )->fetchColumn();

	$counter_following_own = $db->query("select count(*) from community_following WHERE userId = '$active_userID'" )->fetchColumn();

	$counter_following_spotter = $db->query("select count(*) from community_following WHERE userId = '$photo_userid'" )->fetchColumn();

	$counter_follower_own = $db->query("select count(*) from community_following WHERE followingId = '$active_userID'" )->fetchColumn();

	$counter_follower_spotter = $db->query("select count(*) from community_following WHERE followingId = '$photo_userid'" )->fetchColumn();

	

?>
<div class="dpf-profile-card">
	<div class="dpf-profile__banner" style="background-image: url(<?php echo $userBannerImg;?>);">
	</div>
	<a href="#">
		<div class="dpf-profile__pf-picture" style="background-image: url(<?php echo $userProfileImg;?>);">
		</div>
	</a>
	<div class="dpf-profile__username">
		<a href="spotter?id=<?php echo $userLinkId;?>">
			<?php echo $userPhotographer; if ($userPremium == 1) {
    echo '<i id="dpf-premium-badge__plane" class="fas fa-paper-plane"></i>'; } elseif ($userVerified == 1) { echo '<i id="dpf-badge__verified" class="fas fa-check-circle"></i>';} ?>
		</a>
	</div>
	<div class="dpf-profile__qoute">
		“<?php echo $userQoute; ?>”
	</div> 
		<div class="dpf-profile__user-statistics">
			<span class="dpf-profile__user-upload">
				<small>Uploads</small> <br>
				<span class="dpf-profile__counter">
					<?php echo $counter_uploads_spotter; ?>				
				</span>
			</span>
			<span class="dpf-profile__user-upload">
				<small>Followers</small><br>
				<span class="dpf-profile__counter"><?php echo $counter_follower_spotter; ?></span>
			</span>
			<span class="dpf-profile__user-upload">
				<small>Following</small> <br>
				<span class="dpf-profile__counter"><?php echo $counter_following_spotter; ?></span>
			</span>
		</div>
	<a href="#">
	<div class="dpf-profile__recent-activity">
		<b>Recent spotting trip</b><br>
		Sportive day at EHAM • 4 febuari 2018
	</div>
	</a>
	<a href="#">
		<div class="dpf-profile__watch-album">
				<span class="spanLeft" >Photo album</span> 
				<span class="spanRight" ><i class="fa fa-angle-right"></i></span>
		</div>
	</a>
</div>
<div class="dpf-statistics">
	More of <?php echo $userPhotographer; ?><br><br>
		<?php echo $most_liked_spotter; ?>
		<?php echo $most_seen_spotter; ?>
	<div class="dpf-statistics__holder">
		<div class="dpf-statistics__content">
			Most downloaded picture
		</div>
		<div class="dpf-statistics__content-number">
			000
		</div>
		<img src="https://images.pexels.com/photos/670061/pexels-photo-670061.jpeg?cs=srgb&dl=adventure-aerial-air-670061.jpg&fm=jpg" class="dpf-statistics__img">
	</div>
</div>