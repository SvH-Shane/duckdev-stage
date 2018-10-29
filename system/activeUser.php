<?php 
session_start();
//variablen
$active_userID = $_SESSION["activeID"];
//user data zoeken...
$query_userData = $db->query("SELECT * FROM users WHERE id='$active_userID'");
$result_query_userData = $query_userData->fetchAll(PDO::FETCH_ASSOC);
//ALS USER IS GEVONDEN
foreach($result_query_userData as $dataFound_query_userData) {
	$user_id				 = $dataFound_query_userData['id'];
	$user_status			 = $dataFound_query_userData['status'];
	$user_rememberLogin		 = $dataFound_query_userData['rememberLogin'];
	$user_username			 = $dataFound_query_userData['username'];
	$user_active			 = $dataFound_query_userData['active'];
	$user_activationCode	 = $dataFound_query_userData['activationcode'];
	$user_email				 = $dataFound_query_userData['email'];
	$user_firstName		     = $dataFound_query_userData['firstname'];
	$user_middleName	     = $dataFound_query_userData['middlename'];
	$user_lastName   	     = $dataFound_query_userData['lastname'];
	$user_gender   	         = $dataFound_query_userData['gender'];
	$user_birthday   	     = $dataFound_query_userData['birthday'];
	$user_country   	     = $dataFound_query_userData['country'];
	$user_language   	     = $dataFound_query_userData['language'];
	$user_homebase   	     = $dataFound_query_userData['homebase'];
	$user_membertime   	     = $dataFound_query_userData['membertime'];
	$user_membertimeOff      = $dataFound_query_userData['membertimeOff'];
	$user_memberoff    	     = $dataFound_query_userData['memberOff'];
	$user_publications       = $dataFound_query_userData['publications'];
	$user_camera	         = $dataFound_query_userData['camera'];
	$user_about  	         = $dataFound_query_userData['about'];
	$user_qoute  	         = $dataFound_query_userData['qoute'];
	$user_newsAbout  	     = $dataFound_query_userData['newsAbout'];
	$user_bannerImg  	     = $dataFound_query_userData['bannerImg'];
	$user_profileImg  	     = $dataFound_query_userData['profileImg'];
	$userbtn_crew			 = $dataFound_query_userData['function'];
	$user_termsandconditions = $dataFound_query_userData['termsandconditions'];
	$user_landingpage		 = $dataFound_query_userData['directUpload'];
	$user_active			 = $dataFound_query_userData['active'];
	$user_createUser		 = $dataFound_query_userData['createUser'];
	$user_userControl		 = $dataFound_query_userData['userControl'];
	$user_reportOverview	 = $dataFound_query_userData['reportOverview'];
	$user_inboxControl		 = $dataFound_query_userData['inboxControl'];
	$user_searchUser		 = $dataFound_query_userData['searchUser'];
	$user_screening 		 = $dataFound_query_userData['screening'];
	$user_activities 		 = $dataFound_query_userData['activities'];
	$user_photoSearch 		 = $dataFound_query_userData['photoSearch'];
	$user_giveRights 		 = $dataFound_query_userData['giveRights'];
	$user_writeArticle 		 = $dataFound_query_userData['writeArticle'];
	$user_writeEvent 		 = $dataFound_query_userData['writeEvent'];
	$user_articleSearch		 = $dataFound_query_userData['articleSearch'];
	$user_addFaq   			 = $dataFound_query_userData['addFaq'];
	$user_addCase   		 = $dataFound_query_userData['addCase'];
	$user_addHelp   		 = $dataFound_query_userData['addHelp'];
	$user_pageSearch   		 = $dataFound_query_userData['pageSearch'];
	$user_pageSearch   		 = $dataFound_query_userData['pageSearch'];
	$user_webcare   		 = $dataFound_query_userData['webcare'];
	$user_activeSlots   	 = $dataFound_query_userData['activeSlots'];
	$user_slots   		     = $dataFound_query_userData['slots'];
	$user_directUpload   	 = $dataFound_query_userData['directUpload'];
	$user_restoreCode   	 = $dataFound_query_userData['restoreCode'];
	$user_resetPassword  	 = $dataFound_query_userData['restoreCode'];
	$user_latestLogin   	 = $dataFound_query_userData['latestLogin'];
	// EMAIL SETTINGS
	$user_newsletter		       = $dataFound_query_userData['newsletter'];
	$user_email_screening	       = $dataFound_query_userData['emailScreening'];
	$user_email_BreakingNews       = $dataFound_query_userData['emailBreakingNews'];
	$user_email_NewFollower        = $dataFound_query_userData['emailNewFollower'];
	$user_email_WebUpdates         = $dataFound_query_userData['emailWebUpdates'];
	$user_email_PhotoRequest       = $dataFound_query_userData['emailPhotoRequest'];
	$user_email_InboxNotification  = $dataFound_query_userData['emailInboxNotification'];
	// ACCOUNT SETTINGS
	$user_account_landingpage      = $dataFound_query_userData['landingpage'];
	$user_account_DisplayExif      = $dataFound_query_userData['accountDisplayExif'];
    // USER STATISTICS 
    $user_bonus_points             = $dataFound_query_userData['bonus_points'];
	// ACCOUNT UPGRADES 
	$user_premiumFinder            = $dataFound_query_userData['premiumFinder'];
	$user_verified   	 	       = $dataFound_query_userData['verified'];
    // CREW RIGHTS 
    $function_admin                = $dataFound_query_userData['function_admin'];
    $function_moderator            = $dataFound_query_userData['function_moderator'];
    $function_screening            = $dataFound_query_userData['function_screening'];
    $function_reporters            = $dataFound_query_userData['function_reporters'];
    $function_markerteer           = $dataFound_query_userData['function_markerteer'];
    $function_webcare              = $dataFound_query_userData['function_webcare'];
    // CREW SETTINGS
    $screener_alias                = $dataFound_query_userData['screener_alias'];


}

/////////////////////////////////////////////////////////
//////////////////// PROFIEL GEBIED ////////////////////
///////////////////////////////////////////////////////

$profilePageID = $_GET["id"];
$url = $_SERVER[REQUEST_URI];
$url = explode("/", $url);
$id = $url[count($url) - 1];
$userProfileId = str_replace("spotter?id=","",$id);

//QUERYS 
//validatie
//ACTIEVATIE-ID
//if(is_numeric($userProfileId)) {
	$query_profilePage = $db->query("SELECT * FROM users WHERE id='$userProfileId'");
	$result_query_profilePage = $query_profilePage->fetchAll(PDO::FETCH_ASSOC);
	$count_query_profilePage  =  $query_profilePage->rowCount();

	foreach($result_query_profilePage as $dataFound_query_profilePage) {
				$spotter_userid			                           = $dataFound_query_profilePage['id'];
				$spotter_username				                   = $dataFound_query_profilePage['username'];
				$spotter_usernameProfile				           = $dataFound_query_profilePage['username'];
				$spotter_homebase						           = $dataFound_query_profilePage['homebase'];
				$spotter_bannerImg				           		   = $dataFound_query_profilePage['bannerImg'];
				$spotter_profileImg				           	       = $dataFound_query_profilePage['profileImg'];
				$spotter_qoute									   = $dataFound_query_profilePage['qoute'];
				$spotter_about									   = $dataFound_query_profilePage['about'];
				$spotter_birthday   	     					   = $dataFound_query_profilePage['birthday'];
				$spotter_country   	     					       = $dataFound_query_profilePage['country'];
				$spotter_publications   	     				   = $dataFound_query_profilePage['publications'];
				$spotter_camera		   	     				       = $dataFound_query_profilePage['camera'];
				$spotter_verified   	 	 					   = $dataFound_query_profilePage['verified'];
				$spotter_premiumFinder   	 	 				   = $dataFound_query_profilePage['premiumFinder'];

		
			}
//} else {$count_query_profilePage = 0;}

if(preg_match('/^[0-9]{0,6}$/', $profileID)) {
	$query_profilePage = $db->query("SELECT * FROM users WHERE id='$profilePageID'");
	$result_query_profilePage = $query_profilePage->fetchAll(PDO::FETCH_ASSOC);
	$count_query_profilePage  =  $query_profilePage->rowCount();

	foreach($result_query_profilePage as $dataFound_query_profilePage) {
				$db_query_profilePage_username                 = $dataFound_query_profilePage['username'];
				$db_query_profilePage_activationCode           = $dataFound_query_profilePage['activationCode'];
				$db_query_profilePage_active           		   = $dataFound_query_profilePage['active'];
				$db_query_profilePageuser_status			   = $dataFound_query_profilePage['status'];
				$db_query_profilePageuser_email				   = $dataFound_query_profilePage['email'];
		
			}
} else {$count_query_profilePage = 0;}

//null set loc
$welcomeLocation = $db_query_welcome_active;

//GET URL INFO
if(isset($_GET["id"])){
	$query_profilePage = $_GET["id"];
}

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
////////// SCREENING SLOTS ////////////

$slots = $db->query("select count(*) from aircraftdb WHERE status = '1' and userId = '".$_SESSION["activeID"]."'" )->fetchColumn();

		
		
		if($slots<$user_slots){	
		 $slotsBoxFree .=
		 '<a href="page/photo-upload"><i class="fa fa-unlock-alt" aria-hidden="true"></i> &nbsp; '.$slots.' / '.$user_slots.' - Upload another photo! </a>
          ';}

		if($slots==$user_slots){	
		 $slotsBoxFull .=
		 '<i class="fa fa-lock" aria-hidden="true"></i> &nbsp; '.$slots.' / '.$user_slots.' - No uploads left.
          ';}
;

////////// EIND SCREENING SLOTS ////////////

/////////////////////////////////////////////////////////
//////////////////// CAMERA GEBIED ////////////////////
///////////////////////////////////////////////////////

$camera_id = $_GET["id"];
$url = $_SERVER[REQUEST_URI];
$url = explode("/", $url);
$id = $url[count($url) - 1];
$this_camera_id = str_replace("edit-camera?id=","",$id);

//QUERYS 
//validatie
//ACTIEVATIE-ID
//if(is_numeric($userProfileId)) {
	$query_cameraPage = $db->query("SELECT * FROM database_camera WHERE id='$this_camera_id'");
	$result_query_cameraPage = $query_cameraPage->fetchAll(PDO::FETCH_ASSOC);
	$count_query_cameraPage  =  $query_cameraPage->rowCount();

	foreach($result_query_cameraPage as $dataFound_query_cameraPage) {
				$my_camera_id			                       = $dataFound_query_cameraPage['id'];
				$my_camera_camera_type				           = $dataFound_query_cameraPage['camera_type'];
				$my_camera_gear				                   = $dataFound_query_cameraPage['gear'];
				

		
			}

/////////////////////////////////////////////////////////
//////////////////// USER CONTROL ////////////////////
///////////////////////////////////////////////////////

$crew_spotter_id = $_GET["id"];
$url = $_SERVER[REQUEST_URI];
$url = explode("/", $url);
$id = $url[count($url) - 1];
$crew_control_spotter_id = str_replace("crew-control-spotter?id=","",$id);

//QUERYS 
//validatie
//ACTIEVATIE-ID
//if(is_numeric($userProfileId)) {
	$query_spotterPage = $db->query("SELECT * FROM users WHERE id='$crew_control_spotter_id'");
	$result_query_spotter_control_page = $query_spotterPage->fetchAll(PDO::FETCH_ASSOC);
	$count_query_spotterPage  =  $query_spotterPage->rowCount();

	foreach($result_query_spotter_control_page as $dataFound_query_spotter_control_page) {
				$my_crew_spotter_id			                       = $dataFound_query_spotter_control_page['id'];
				$my_crew_spotter_username				           = $dataFound_query_spotter_control_page['username'];
				$my_crew_spotter_email				               = $dataFound_query_spotter_control_page['email'];
				$my_crew_spotter_membertime				           = $dataFound_query_spotter_control_page['membertime'];
				$my_crew_spotter_birthday				           = $dataFound_query_spotter_control_page['birthday'];
				$my_crew_spotter_termsandconditions				           = $dataFound_query_spotter_control_page['termsandconditions'];
				$my_crew_spotter_country				           = $dataFound_query_spotter_control_page['country'];
				$my_crew_spotter_language				           = $dataFound_query_spotter_control_page['language'];
				$my_crew_spotter_homebase				           = $dataFound_query_spotter_control_page['homebase'];
				$my_crew_spotter_camera				               = $dataFound_query_spotter_control_page['camera'];
				$my_crew_spotter_about				               = $dataFound_query_spotter_control_page['about'];
				$my_crew_spotter_qoute				               = $dataFound_query_spotter_control_page['qoute'];
				$my_crew_spotter_profileImg				           = $dataFound_query_spotter_control_page['profileImg'];
				$my_crew_spotter_bannerImg				           = $dataFound_query_spotter_control_page['bannerImg'];
				$my_crew_spotter_function				           = $dataFound_query_spotter_control_page['function'];
				$my_crew_spotter_newsletter			               = $dataFound_query_spotter_control_page['newsletter'];
				$my_crew_spotter_activeSlots				               = $dataFound_query_spotter_control_page['activeSlots'];
				$my_crew_spotter_slots				               = $dataFound_query_spotter_control_page['slots'];
				$my_crew_spotter_directUpload				               = $dataFound_query_spotter_control_page['directUpload'];
				$my_crew_spotter_premiumFinder				               = $dataFound_query_spotter_control_page['premiumFinder'];
				$my_crew_spotter_verified				               = $dataFound_query_spotter_control_page['verified'];
				$my_crew_spotter_function_admin				               = $dataFound_query_spotter_control_page['function_admin'];
				$my_crew_spotter_function_moderator				               = $dataFound_query_spotter_control_page['function_moderator'];
				$my_crew_spotter_function_screening				               = $dataFound_query_spotter_control_page['function_screening'];
				$my_crew_spotter_function_reporters				               = $dataFound_query_spotter_control_page['function_reporters'];
				$my_crew_spotter_function_markerteer				               = $dataFound_query_spotter_control_page['function_markerteer'];
				$my_crew_spotter_function_webcare				               = $dataFound_query_spotter_control_page['function_webcare'];
			}

//////////////////////////////////////////////////////////////
//////////////////// SCREENING GEBIED CREW //////////////////
////////////////////////////////////////////////////////////
$screeningPageID = $_GET["id"];
$url = $_SERVER[REQUEST_URI];
$url = explode("/", $url);
$id = $url[count($url) - 1];
$screenerPhotoId = str_replace("crew-screen-photo?id=","",$id);


//QUERYS 
//validatie
//ACTIEVATIE-ID
//if(is_numeric($userProfileId)) {
	$query_screenerPhoto = $db->query("SELECT * FROM aircraftdb WHERE id='$screenerPhotoId'");
	$result_query_screenerPhoto = $query_screenerPhoto->fetchAll(PDO::FETCH_ASSOC);
	$count_query_screenerPhoto  =  $query_screenerPhoto->rowCount();

	foreach($result_query_screenerPhoto as $dataFound_query_screenerPhoto) {
				$screenerPhoto_username				                   = $dataFound_query_screenerPhoto['username'];
				$screenerPhoto_email				                   = $dataFound_query_screenerPhoto['email'];
				$screenerPhoto_emailsend				               = $dataFound_query_screenerPhoto['screeningemail'];
				$screenerPhoto_urgent						           = $dataFound_query_screenerPhoto['urgent'];
				$screenerPhoto_picture				           	       = $dataFound_query_screenerPhoto['img'];
				$screenerPhoto_profileImg				           	   = $dataFound_query_screenerPhoto['profileImg'];
				$screenerPhoto_title								   = $dataFound_query_screenerPhoto['title'];
				$screenerPhoto_qoute								   = $dataFound_query_screenerPhoto['qoute'];
				$screenerPhoto_remark								   = $dataFound_query_screenerPhoto['remark'];
				$screenerPhoto_date   	     						   = $dataFound_query_screenerPhoto['photoTaken'];
				$screenerPhoto_aceptdate   	     				   = $dataFound_query_screenerPhoto['date'];
				$screenerPhoto_category   	     					   = $dataFound_query_screenerPhoto['category'];
				$screenerPhoto_photoLicense   	     				   = $dataFound_query_screenerPhoto['photoLicense'];
				$screenerPhoto_airliner   	     				   	   = $dataFound_query_screenerPhoto['airliner'];
				$screenerPhoto_airlineCode  	     				   = $dataFound_query_screenerPhoto['airlineCode'];
				$screenerPhoto_aircraft   	     				   	   = $dataFound_query_screenerPhoto['aircraft'];
				$screenerPhoto_registration   	     				   = $dataFound_query_screenerPhoto['registration'];
				$screenerPhoto_country   	     				   	   = $dataFound_query_screenerPhoto['country'];
				$screenerPhoto_airport   	     				   	   = $dataFound_query_screenerPhoto['airport'];
				$screenerPhoto_icao   	     				   	  	   = $dataFound_query_screenerPhoto['icao'];
				$screenerPhoto_exif   	     				   	  	   = $dataFound_query_screenerPhoto['exif'];
				$screenerPhoto_camera   	     				   	   = $dataFound_query_screenerPhoto['camera'];
				$screenerPhoto_visible   	     				   	   = $dataFound_query_screenerPhoto['visible'];
				$screenerPhoto_views   	     				   	  	   = $dataFound_query_screenerPhoto['views'];
				$screenerPhoto_likes   	     				   	       = $dataFound_query_screenerPhoto['likes'];
				$screenerPhoto_normal   	     				   	   = $dataFound_query_screenerPhoto['normal'];
				$screenerPhoto_eyeCatcher   	     				   = $dataFound_query_screenerPhoto['eyeCatcher'];
				$screenerPhoto_highlight   	     				   	   = $dataFound_query_screenerPhoto['highlight'];
				$screenerPhoto_accepted   	     				   	   = $dataFound_query_screenerPhoto['accepted'];
				$screenerPhoto_rejected   	     				   	   = $dataFound_query_screenerPhoto['rejected'];
				$screenerPhoto_userId  	     				   	   = $dataFound_query_screenerPhoto['userId'];
				$screenerPhoto_note   	     				   	   	   = $dataFound_query_screenerPhoto['note'];
				$screenerStatusId   	     				   	   	   = $dataFound_query_screenerPhoto['status'];
				$screenerOnline   	     				   	   	   		= $dataFound_query_screenerPhoto['online'];
				$screening_bonus_points   	     				   	   	 = $dataFound_query_screenerPhoto['bonus_points'];
				$screening_second_opinion   	     				   	   	 = $dataFound_query_screenerPhoto['request_secondopinion'];

			}

?>