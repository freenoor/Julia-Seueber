<?php
include("includes/headers/demo1.php"); 
?>

	<main id="primary" class="site-main single-page">

	<div class="intro">
	<!-- <img src="<?php the_post_thumbnail_url();?>" alt=""> -->
	<div class="img" style="background-image: url(<?php the_post_thumbnail_url();?>"></div>
	</div>
	
	<div class="container">
		<div class="content">
	<h3><?php the_title(); ?></h3>
	<?php the_content(); ?>
		</div>
	</div>

	</main><!-- #main -->



<?php include("includes/footers/demo2.php");  ?>