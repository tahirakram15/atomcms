<nav class="navbar navbar-default" role= "navigation">
		
			<div class="container">
				<ul class="nav navbar-nav">
					<?php
					
						$q = "SELECT * FROM pages";
						$r = mysqli_query($dbc, $q);
						
						while($nav = mysqli_fetch_assoc($r)){
							
							//echo '<li><a href="?page='.$nav['id'].'">'.$nav['title'].'</a></li>';
						?>
						<li <?php if($pageid==$nav['id']){echo 'class="active"';}?>><a href = "?page=
							<?php echo $nav['id'];?>"><?php echo $nav['label'];?></a></li>
					<?php	}?>
					
					
					
					
					<li><a href = "#">Faq</a></li>
					<li><a href = "#">Contact US</a></li>
				</ul>
			</div>		
		
</nav>