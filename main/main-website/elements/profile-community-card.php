<?php 
	$counter_uploads_own = $db->query("select count(*) from aircraftdb WHERE status = '3' and userId = '$active_userID'" )->fetchColumn();

	$counter_uploads_spotter = $db->query("select count(*) from aircraftdb WHERE status = '3' and userId = '$userProfileId'" )->fetchColumn();

	$counter_following_own = $db->query("select count(*) from community_following WHERE userId = '$active_userID'" )->fetchColumn();

	$counter_following_spotter = $db->query("select count(*) from community_following WHERE userId = '$userProfileId'" )->fetchColumn();

	$counter_follower_own = $db->query("select count(*) from community_following WHERE followingId = '$active_userID'" )->fetchColumn();

	$counter_follower_spotter = $db->query("select count(*) from community_following WHERE followingId = '$userProfileId'" )->fetchColumn();

?>
<?php if ($pagina == 'spotter') { ?>
<div class="dpf-profile-card">
	<div class="dpf-profile__banner" style="background-image: url(<?php echo $spotter_bannerImg;?>);">
	</div>
	<a href="#">
		<div class="dpf-profile__pf-picture" style="background-image: url(<?php echo $spotter_profileImg;?>);">
		</div>
	</a>
	<div class="dpf-profile__username">
		<a href="#">
			<?php echo $spotter_username; if ($spotter_premiumFinder == 1) {
    echo '<i id="dpf-premium-badge__plane" class="fas fa-paper-plane"></i>'; } elseif ($spotter_verified == 1) { echo '<i id="dpf-badge__verified" class="fas fa-check-circle"></i>';} ?>
		</a>
	</div>
	<div class="dpf-profile__qoute">
		“<?php echo $spotter_qoute; ?>”
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
<?php if($pagina = 'photo'){ ?> 
<div class="dpf-statistics">
	More of <?php echo $spotter_username; ?>
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
<?php } else { ?> 
<div class="dpf-statistics">
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
<div class="dpf-community-statistics">
	Statistics
</div>
<?php } ?>

<?php } else { ?>
<div class="dpf-profile-card">
	<div class="dpf-profile__banner" style="background-image: url(<?php echo $user_bannerImg;?>);">
	</div>
	<a href="#">
		<div class="dpf-profile__pf-picture" style="background-image: url(<?php echo $user_profileImg;?>);">
		</div>
	</a>
	<div class="dpf-profile__username">
		<a href="#">
			<?php echo $user_username; if ($user_premiumFinder == 1) {
    echo '<i id="dpf-premium-badge__plane" class="fas fa-paper-plane"></i>'; } elseif ($user_verified == 1) { echo '<i id="dpf-badge__verified" class="fas fa-check-circle"></i>';} ?>
		</a>
	</div>
	<div class="dpf-profile__qoute">
		“<?php echo $user_qoute; ?>”
	</div> 
		<div class="dpf-profile__user-statistics">
			<span class="dpf-profile__user-upload">
				<small>Uploads</small> <br>
				<span class="dpf-profile__counter">
					<?php echo $counter_uploads_own; ?>				
				</span>
			</span>
			<span class="dpf-profile__user-upload">
				<small>Followers</small><br>
				<span class="dpf-profile__counter"><?php echo $counter_follower_own; ?></span>
			</span>
			<span class="dpf-profile__user-upload">
				<small>Following</small> <br>
				<span class="dpf-profile__counter"><?php echo $counter_following_own; ?></span>
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
		<?php echo $most_liked_own; ?>
		<?php echo $most_seen_own; ?>
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
<div class="dpf-community-statistics">
	Statistics
</div>
<?php } ?>