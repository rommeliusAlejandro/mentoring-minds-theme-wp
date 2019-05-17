<?php
/* 	
*/
get_header(); ?>
<div id="main">
	<div id="container" >
		<div id="content" role="main">
			<div class="container">
				<h1><?php the_title(); ?></h1>
			</div>
			<div class="container">
				<?php 
					while ( have_posts() ) : the_post(); 
						the_content();
					endwhile;
				?>
			</div>					
		</div>								
	</div>
</div>
<?php get_footer(); ?>