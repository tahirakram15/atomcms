<?php

//Setup File
#Database connection here

$dbc = mysqli_connect('localhost','tahir','ta266266','atomcms',3306) OR die('could not connect because '.mysqli_connect_error());

#constants here
define('D_template','template');


#functions here
include ('function/data.php');


$site_title = 'Atome CMS 2.0';
if(isset($_GET['page'])){
	$pageid =$_GET['page'];
}
else {
	$pageid=1;
}

#page setup
$page = data_page($dbc, $pageid);

?>