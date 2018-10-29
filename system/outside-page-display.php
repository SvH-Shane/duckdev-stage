<?php 

/////////////////////////////////////////////////////////
//////////////////// PHOTO GEBIED //////////////////////
///////////////////////////////////////////////////////


$photoPageID = $_GET["id"];
$url = $_SERVER[REQUEST_URI];
$url = explode("/", $url);
$id = $url[count($url) - 1];
$photoId = str_replace("photo?id=","",$id);


//QUERYS 
//validatie
//ACTIEVATIE-ID
//if(is_numeric($userProfileId)) {
	$query_photoPage = $db->query("SELECT * FROM aircraftdb WHERE id='$photoId'");
	$result_query_photoPage = $query_photoPage->fetchAll(PDO::FETCH_ASSOC);
	$count_query_photoPage  =  $query_photoPage->rowCount();

	foreach($result_query_photoPage as $dataFound_query_photoPage) {
				$photo_username				                   = $dataFound_query_photoPage['username'];
				$photo_userid				                   = $dataFound_query_photoPage['userId'];
				$photo_email						           = $dataFound_query_photoPage['email'];
				$photo_urgent						           = $dataFound_query_photoPage['urgent'];
				$photo_bannerImg				           	   = $dataFound_query_photoPage['img'];
				$photo_profileImg				           	   = $dataFound_query_photoPage['profileImg'];
				$photo_title								   = $dataFound_query_photoPage['title'];
				$photo_qoute								   = $dataFound_query_photoPage['qoute'];
				$photo_remark								   = $dataFound_query_photoPage['remark'];
				$photo_date   	     						   = $dataFound_query_photoPage['photoTaken'];
				$photo_aceptdate   	     				   	   = $dataFound_query_photoPage['date'];
				$photo_category   	     					   = $dataFound_query_photoPage['category'];
				$photo_photoLicense   	     				   = $dataFound_query_photoPage['photoLicense'];
				$photo_airliner   	     				   	   = $dataFound_query_photoPage['airliner'];
				$photo_airlineCode  	     				   = $dataFound_query_photoPage['airlineCode'];
				$photo_aircraft   	     				   	   = $dataFound_query_photoPage['aircraft'];
				$photo_registration   	     				   = $dataFound_query_photoPage['registration'];
				$photo_country   	     				   	   = $dataFound_query_photoPage['country'];
				$photo_airport   	     				   	   = $dataFound_query_photoPage['airport'];
				$photo_icao   	     				   	  	   = $dataFound_query_photoPage['icao'];
				$photo_exif   	     				   	  	   = $dataFound_query_photoPage['exif'];
				$photo_camera   	     				   	   = $dataFound_query_photoPage['camera'];
				$photo_visible   	     				   	   = $dataFound_query_photoPage['visible'];
				$photo_views   	     				   	  	   = $dataFound_query_photoPage['views'];
				$photo_reactionCounter	     				   = $dataFound_query_photoPage['reactioncounter'];
				$photo_likes   	     				   	       = $dataFound_query_photoPage['likes'];
				$photo_normal   	     				   	   = $dataFound_query_photoPage['normal'];
				$photo_eyeCatcher   	     				   = $dataFound_query_photoPage['eyeCatcher'];
				$photo_highlight   	     				   	   = $dataFound_query_photoPage['highlight'];
				$photo_accepted   	     				   	   = $dataFound_query_photoPage['accepted'];
				$photo_rejected   	     				   	   = $dataFound_query_photoPage['rejected'];
				$photo_note   	     				   	   	   = $dataFound_query_photoPage['note'];
				$photo_id   	     				   	   	   = $dataFound_query_photoPage['id'];
				$statusId   	     				   	   	   = $dataFound_query_photoPage['status'];
				$online   	     				   	   	   		= $dataFound_query_photoPage['online'];

			}
//} else {$count_query_profilePage = 0;}
if(preg_match('/^[0-9]{0,6}$/', $photoId)) {
	$query_photoPage = $db->query("SELECT * FROM aircraftdb WHERE id='$photoId'");
	$result_query_photoPage = $query_photoPage->fetchAll(PDO::FETCH_ASSOC);
	$count_query_photoPage  =  $query_photoPage->rowCount();

	foreach($result_query_photoPage as $dataFound_query_photoPage) {
				$db_query_photoPage_username                = $dataFound_query_photoPage['username'];
				$db_query_photoPage_qoute                = $dataFound_query_photoPage['qoute'];
				$db_query_photoPage_urgent          	    = $dataFound_query_photoPage['urgent'];
				$db_query_photoPage_bannerImg               = $dataFound_query_photoPage['img'];
				$db_query_photoPage_title			        = $dataFound_query_photoPage['title'];
				$db_query_photoPage_remark				    = $dataFound_query_photoPage['remark'];
				$db_query_photoPage_aceptdate			    = $dataFound_query_photoPage['date'];
				$db_query_photoPage_date				   	= $dataFound_query_photoPage['photoTaken'];
				$db_query_photoPage_category				    = $dataFound_query_photoPage['category'];
				$db_query_photoPage_photoLicense				    = $dataFound_query_photoPage['photoLicense'];
				$db_query_photoPage_airliner				    = $dataFound_query_photoPage['airliner'];
				$db_query_photoPage_aircraft				    = $dataFound_query_photoPage['aircraft'];
				$db_query_photoPage_registration				    = $dataFound_query_photoPage['registration'];
				$db_query_photoPage_country				    = $dataFound_query_photoPage['country'];
				$db_query_photoPage_airport				    = $dataFound_query_photoPage['airport'];
				$db_query_photoPage_icao				    = $dataFound_query_photoPage['icao'];
				$db_query_photoPage_exif				    = $dataFound_query_photoPage['exif'];
				$db_query_photoPage_camera				    = $dataFound_query_photoPage['camera'];
				$db_query_photoPage_visible				    = $dataFound_query_photoPage['visible'];
				$db_query_photoPage_views				    = $dataFound_query_photoPage['views'];
				$db_query_photoPage_reactionCounter				    = $dataFound_query_photoPage['reactioncounter'];
				$db_query_photoPage_likes				    = $dataFound_query_photoPage['likes'];
				$db_query_photoPage_normal				    = $dataFound_query_photoPage['normal'];
				$db_query_photoPage_eyeCatcher				    = $dataFound_query_photoPage['eyeCatcher'];
				$db_query_photoPage_highlight				    = $dataFound_query_photoPage['highlight'];
				$db_query_photoPage_accepted				    = $dataFound_query_photoPage['accepted'];
				$db_query_photoPage_rejected				    = $dataFound_query_photoPage['rejected'];
				$db_query_photoPage_statusId				    = $dataFound_query_photoPage['status'];
				$db_query_photoPage_online			    = $dataFound_query_photoPage['online'];
		
			}

} else {$count_query_photoPage = 0;}

//null set loc
$welcomeLocation = $db_query_welcome_active;

//GET URL INFO
if(isset($_GET["id"])){
	$query_photoPage = $_GET["id"];
}
?>