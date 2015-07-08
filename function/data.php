<?php
function data_page($dbc,$pageid){
	
		$query = "SELECT * FROM pages WHERE id=$pageid";
 		$result = mysqli_query($dbc, $query);
 
		 $data = mysqli_fetch_assoc($result);
	return $data;
	}

?>