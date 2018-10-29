<?php 
$query = $db->query("SELECT * FROM nav");
   	 $result = $query->fetchAll(PDO::FETCH_ASSOC);
	 
	 $menu = '';

	 $counter=0;
	 foreach($result as $nav) {
		 
		 if(!isset($first_item)) $first_item = $nav;
		 
		 $item = $nav['item'];	
		 $url = $nav['url'];

		 $menu .=
		 '<li><a href="'.$url.'">'.$item.'</a></li>';
				
		$counter++;
		if($counter<=7){	
			$photoinfooter .= "$title<br />"
;		}
	
	 }
     
?>