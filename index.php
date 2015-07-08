
<?php include 'config/setup.php';?>

<!DOCTYPE >
<html>
	<head>
		
		<title><?php echo $page['title'].' | '. $site_title?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<?php include 'config/css.php';?>
		<?php include 'config/js.php';?>	
			
		
	</head>
	
		
	
	<body>
	
	
	<div id="wrap">	
		<?php include(D_template.'/navigation.php'); ?>
				
		<div class="container">
			<h1><?php echo $page['header']; ?></h1>
			<p> <?php echo $page['body']; ?></p>
		</div>
	</div>
		

		<?php include D_template.'/footer.php';?>
	</body>
	
	
</html>

<!----2nd commit