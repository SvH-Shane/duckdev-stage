<?php 
$random_string = chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) . $active_userID . chr(rand(65,90)) . chr(rand(65,90)); // random(ish) 5 character string
?>
<div class="dpf-news-category-selection database">
	<div class="dpf-database__section">
		Hi <b><?php echo $user_username;?></b>,
	 can we help you?<span><a href="database">All &nbsp;&nbsp;</a><a href="database-regular"> Regular&nbsp;&nbsp;</a><a href="database-military"> Military</a>&nbsp;&nbsp; <a href="database-platform">Platform</a>&nbsp;&nbsp;<a href="database-creative"> Creative&nbsp;&nbsp;</a><a href="database-golden-oldies"> Golden Oldies</a>&nbsp;&nbsp;<a href="database-aviation-glamour"> Aviation Glamour</a></span>
	</div>
	<br>
	<form action="" method="post">
		<input type="hidden" name="send" value="1">
		<input required="required" name="searchBot" placeholder="Search..." value="" class="dpf-database__searchtool" type="search" autocapitalize="none">
		<button type="submit" name="submit"> <i class="fas fa-search"></i> </button>
	</form>
</div>
