<?php
/* 
	Template Name: Homepage 
*/
get_header(); ?>
<div id="main">
		<div id="container" >
			<div id="content" role="main">
				<div class="container">
					<div id="showcase-area">
						<div class="col1-3 next">
						</div>				 	
						<div class="col2-5 next top-title-text-home">
								<h1><?php echo of_get_option("top_title_text_1","none"); ?></h1>
								<h2><?php echo of_get_option("top_title_text_2","none"); ?></h2>	
								<p><?php  echo of_get_option("top_title_text_3","none"); ?></p>						
						</div>	
						<div class="clear"></div>				
					</div>					
				</div>
				<div class="showcase-area-mobile">
						<div class="titles">
							<div class="container">
								<div class="col1-2 next top-title-text-home">
									<h1><?php echo of_get_option("top_title_text_1","none"); ?></h1>
								</div>
								<div class="col1-2 next top-title-text-home">
									<h2><?php echo of_get_option("top_title_text_2","none"); ?></h2>
								</div>
								<div class="clear"></div>
							</div>
						</div>
						<div class="showcase-mobile-text">
							<div class="container">
								<p><?php  echo of_get_option("top_title_text_3","none"); ?></p>	
							</div>
						</div>
				</div>
				<div class="menu-section">
					<div class="container">
						<?php 
							for($i=1; $i<=4; $i++ )
							{
								$last_class="";
								if($i%2 == 0)
								{
									$last_class = "clear-right"; 
								}
								?>
								<div class="col1-4 next <?php echo $last_class; ?>">
									<div class="menu-option">
										<div class="option-text-title">
											<div class="option-title">
												<h2><?php the_field("title_$i"); ?></h2>
												<span><?php the_field("subtitle_$i"); ?></span>
											</div>
											<div class="option-text">
													<p><?php the_field("text_$i"); ?></p>
											</div>
										</div>										
										<div class="option-button">
											<a class="purple-button" href='<?php the_field("link_button_$i"); ?>'><?php  the_field("label_button_$i"); ?></a>
										</div>
									</div>
								</div>
						<?php					
							}
						?>												
					</div>
				</div>					
			</div>								
		</div>
	</div>
<?php get_footer(); ?>
