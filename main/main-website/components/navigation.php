<?php 
	$slots = $db->query("select count(*) from aircraftdb WHERE status = '1' and userId = '".$_SESSION["activeID"]."'" )->fetchColumn();
?>
<div class="dpf-navigation">
		<div class="dpf-center">
			<a href="beta.dutchplanefinders.nl">
			<div class="dpf-logo">
				<img src="../img_files/dpf_img/logo/dpf_logo_icon_17.png" width="100%" alt="dpf-logo">
			</div>
			</a>
			<input required="required" placeholder="Search..." name="dpf-search" value="" class="dpf-main-navigation__search" type="search" autocapitalize="none">
			<div class="dpf-main-navigation__search-btn"><i class="fas fa-search"></i></div>			
			<div class="dpf-toolbar">
				<a href="#"><i class="far fa-envelope"></i> Inbox &nbsp;&nbsp; </a>
				<a href="#"><i class="far fa-paper-plane"></i> Upload&nbsp;&nbsp; &nbsp;&nbsp;</a>
				<a href="#"><i class="far fa-bell"></i></a>
					<div class="dpf-dropdown" >
					  <button class="dpf-dropdown-btn" style="background-image: url(<?php echo $user_profileImg;?>);"></button>
					  <div class="dpf-dropdown-content">
						<?php include("../main/main-website/elements/menu-items-dropdown.php"); ?>
					  </div>
					</div>
				</a>
			</div>
		</div>
	</div>
	<div class="dpf-navigation__sub">
		<div class="dpf-center">
			<?php include("../main/main-website/elements/menu-items-sub-header.php"); ?>
		</div>
	</div>
	<div class="dpf-m-header" <?php if ($pagina == 'add-camera') { echo 'style="display:none;"';} elseif($pagina =='edit-camera') { echo 'style="display:none;"';} ?>>
		<i class="far fa-plus-square" id="i-left"></i>
			<div class="dpf-m-header__title">Overview</div>
		<i class="far fa-bell" id="i-right"></i>
	</div>
	<div id="dpf-m-sidenav" class="dpf-m-sidenav">
		<div class="dpf-m-profile-tag">
				<div class="dpf-m-profile" style="background-image: url(<?php echo $user_profileImg;?>);"></div>
			<div class="dpf-m-profile__name-tag">
				<?php echo $user_username; ?> <?php if ($user_premiumFinder == 1) { echo '<mark>Premium Finder</mark>';} elseif ($user_verified == 1) { echo '<mark>Verified user <i class="fas fa-check-circle"></mark></i>';} ?>  <br>
				<span><?php echo $slots;?> pictures in screening</span><br><br>
				<span><i class="fas fa-sign-out-alt"></i><a href="page/profile/landingpage/logout"> Log out</a></span>
				<br>
			</div>
		</div>
		<?php include("../main/main-website/elements/menu-items-sub-header.php"); ?>
		<?php include("../main/main-website/elements/menu-items-dropdown.php"); ?>
	</div>