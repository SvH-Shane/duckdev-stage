<?php 
	$counter_uploads_own = $db->query("select count(*) from aircraftdb WHERE status = '3' and userId = '$user_userid'" )->fetchColumn();

	

?>

<div class="dpf-profile-card">
	<div class="dpf-profile__banner" style="background-image: url(https://scontent-amt2-1.xx.fbcdn.net/v/t31.0-8/22861842_2068536150046370_1065802526288440852_o.jpg?_nc_cat=0&oh=e5eead974754915ea6534f63a49575b3&oe=5B5568F4);">
	</div>
	<a href="#">
		<div class="dpf-profile__pf-picture" style="background-image: url(../../img_files/dpf_img/default/default_profile_560_374_17.png);">
		</div>
	</a>
	<div class="dpf-profile__username">
		<a href="#">
			<?php echo $user_usernames; if ($user_premiumFinder == 1) {
    echo '<i id="dpf-premium-badge__plane" class="fas fa-paper-plane"></i>'; } elseif ($user_verified == 1) { echo '<i id="dpf-badge__verified" class="fas fa-check-circle"></i>';} ?>
			</a>
	</div>
	<div class="dpf-profile__qoute">
		“<?php echo $user_qoute; ?>”
	</div>
	<div class="dpf-profile__user-statistics">
		<span class="dpf-profile__user-upload">
			<small>Uploads</small> <br>
			<span class="dpf-profile__counter"><?php echo $counter_uploads_own; ?></span>
		</span>
		<span class="dpf-profile__user-upload">
			<small>Followers</small><br>
			<span class="dpf-profile__counter"><?php echo $active_userID; ?></span>
		</span>
		<span class="dpf-profile__user-upload">
			<small>Following</small> <br>
			<span class="dpf-profile__counter">000</span>
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
				<span class="spanLeft" >Bekijk album</span> 
				<span class="spanRight" ><i class="fa fa-angle-right"></i></span>
		</div>
	</a>
</div>
<div class="dpf-statistics">
	<div class="dpf-statistics__img" style="background-image: url(https://images.pexels.com/photos/670061/pexels-photo-670061.jpeg?cs=srgb&dl=adventure-aerial-air-670061.jpg&fm=jpg);">
		Most liked picture
		<span>444</span>
	</div>
	<div class="dpf-statistics__img" style="background-image: url(https://images.pexels.com/photos/73874/aircraft-propeller-plane-propeller-pilot-73874.jpeg?cs=srgb&dl=aeroplane-aircraft-airplane-73874.jpg&fm=jpg);">
		Most seen picture
		<span>444</span>
	</div>
	<div class="dpf-statistics__img" style="background-image: url(https://images.pexels.com/photos/59519/pexels-photo-59519.jpeg?cs=srgb&dl=aerial-aerial-view-aeroplane-59519.jpg&fm=jpg);">
		Most downloaded picture
		<span>444</span>
	</div>
</div>
<div class="dpf-community-statistics">
	Statistics
</div>